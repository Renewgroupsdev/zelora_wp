<?php
if (!defined('ABSPATH'))
    exit;

/**
 * Stores every contact-form submission (front page + service page popup) as
 * a "zelora_enquiry" post so the team can review leads — and the exact
 * enquiry email that was sent — from wp-admin, in addition to the email
 * notification itself.
 */

function zelora_save_enquiry($data)
{
    $title = trim($data['name'] . ($data['company'] ? ' — ' . $data['company'] : ''));

    $post_id = wp_insert_post(array(
        'post_type' => 'zelora_enquiry',
        'post_title' => $title !== '' ? $title : 'Website Enquiry',
        'post_status' => 'publish',
    ), true);

    if (is_wp_error($post_id)) {
        return 0;
    }

    $meta_map = array(
        'name' => '_enquiry_name',
        'company' => '_enquiry_company',
        'email' => '_enquiry_email',
        'phone' => '_enquiry_phone',
        'interest' => '_enquiry_interest',
        'message' => '_enquiry_message',
        'email_subject' => '_enquiry_email_subject',
        'email_to' => '_enquiry_email_to',
        'email_body' => '_enquiry_email_body',
    );

    foreach ($meta_map as $key => $meta_key) {
        if (isset($data[$key])) {
            update_post_meta($post_id, $meta_key, $data[$key]);
        }
    }

    update_post_meta($post_id, '_enquiry_source_url', esc_url_raw(wp_get_referer() ?: ''));

    return $post_id;
}

add_action('init', function () {
    register_post_type('zelora_enquiry', array(
        'labels' => array(
            'name' => 'Enquiries',
            'singular_name' => 'Enquiry',
            'menu_name' => 'Enquiries',
            'all_items' => 'All Enquiries',
            'view_item' => 'View Enquiry',
            'edit_item' => 'Enquiry Details',
            'search_items' => 'Search Enquiries',
            'not_found' => 'No enquiries found.',
            'not_found_in_trash' => 'No enquiries found in trash.',
        ),
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => false,
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-email-alt2',
        'menu_position' => 26,
        'supports' => array('title'),
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'capabilities' => array(
            // Enquiries are only ever created by the contact form, never by hand.
            'create_posts' => 'do_not_allow',
        ),
    ));
});

/* ---------------------------------------------------------------------- */
/* Admin list table columns                                                */
/* ---------------------------------------------------------------------- */

add_filter('manage_zelora_enquiry_posts_columns', function ($columns) {
    $new = array();
    $new['cb'] = $columns['cb'];
    $new['sno'] = 'S.No';
    $new['name_company'] = 'Name & Company';
    $new['email'] = 'Email';
    $new['phone'] = 'Phone';
    $new['interest'] = 'Interested Enquiry';
    $new['email_template'] = 'Email Template';
    $new['date'] = $columns['date'];
    return $new;
});

add_action('manage_zelora_enquiry_posts_custom_column', function ($column, $post_id) {
    switch ($column) {
        case 'sno':
            static $sno = null;
            if ($sno === null) {
                $paged = max(1, (int) ($_GET['paged'] ?? 1));
                $per_page = (int) get_query_var('posts_per_page');
                $sno = ($paged - 1) * ($per_page ?: 20);
            }
            echo esc_html(++$sno);
            break;

        case 'name_company':
            $name = get_post_meta($post_id, '_enquiry_name', true);
            $company = get_post_meta($post_id, '_enquiry_company', true);
            echo '<strong>' . esc_html($name ?: '—') . '</strong>';
            if ($company !== '') {
                echo '<br><span style="color:#666">' . esc_html($company) . '</span>';
            }
            break;

        case 'email':
            $email = get_post_meta($post_id, '_enquiry_email', true);
            echo $email ? '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>' : '—';
            break;

        case 'phone':
            $phone = get_post_meta($post_id, '_enquiry_phone', true);
            echo $phone !== '' ? esc_html($phone) : '—';
            break;

        case 'interest':
            $interest = get_post_meta($post_id, '_enquiry_interest', true);
            echo $interest !== '' ? esc_html($interest) : '—';
            break;

        case 'email_template':
            $body = get_post_meta($post_id, '_enquiry_email_body', true);
            if ($body !== '') {
                echo '<button type="button" class="button zelora-view-email" data-enquiry="' . esc_attr($post_id) . '" title="View email" aria-label="View email"><span class="dashicons dashicons-visibility" style="vertical-align:middle"></span></button>';
            } else {
                echo '—';
            }
            break;
    }
}, 10, 2);

add_filter('manage_edit-zelora_enquiry_sortable_columns', function ($columns) {
    $columns['email'] = 'email';
    return $columns;
});

/* ---------------------------------------------------------------------- */
/* Single-enquiry detail meta box                                          */
/* ---------------------------------------------------------------------- */

add_action('add_meta_boxes', function () {
    add_meta_box('zelora_enquiry_details', 'Enquiry Details', 'zelora_enquiry_details_metabox', 'zelora_enquiry', 'normal', 'high');
});

function zelora_enquiry_details_metabox($post)
{
    $fields = array(
        'Name' => get_post_meta($post->ID, '_enquiry_name', true),
        'Company' => get_post_meta($post->ID, '_enquiry_company', true),
        'Email' => get_post_meta($post->ID, '_enquiry_email', true),
        'Phone' => get_post_meta($post->ID, '_enquiry_phone', true),
        'Interested Enquiry' => get_post_meta($post->ID, '_enquiry_interest', true),
        'Submitted from' => get_post_meta($post->ID, '_enquiry_source_url', true),
    );
    ?>
    <table class="widefat striped">
        <tbody>
            <?php foreach ($fields as $label => $value): ?>
                <tr>
                    <th style="width:200px;text-align:left"><?php echo esc_html($label); ?></th>
                    <td><?php echo $value !== '' ? esc_html($value) : '—'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h3><?php esc_html_e('Message', 'zelora'); ?></h3>
    <p><?php echo nl2br(esc_html(get_post_meta($post->ID, '_enquiry_message', true) ?: '—')); ?></p>
    <?php $body = get_post_meta($post->ID, '_enquiry_email_body', true); ?>
    <?php if ($body !== ''): ?>
        <h3><?php esc_html_e('Email sent', 'zelora'); ?></h3>
        <iframe style="width:100%;height:520px;border:1px solid #dcdcde;background:#fff" srcdoc="<?php echo esc_attr($body); ?>"></iframe>
    <?php endif; ?>
    <?php
}

/* ---------------------------------------------------------------------- */
/* Popup: fetch and preview the exact email that was sent                  */
/* ---------------------------------------------------------------------- */

add_action('wp_ajax_zelora_view_enquiry_email', function () {
    if (!current_user_can('edit_posts')) {
        wp_send_json_error(array('message' => 'You are not allowed to view this.'));
    }

    check_ajax_referer('zelora_enquiry_nonce', 'nonce');

    $post_id = absint($_POST['post_id'] ?? 0);
    $post = get_post($post_id);

    if (!$post || $post->post_type !== 'zelora_enquiry') {
        wp_send_json_error(array('message' => 'Enquiry not found.'));
    }

    wp_send_json_success(array(
        'subject' => get_post_meta($post_id, '_enquiry_email_subject', true),
        'to' => get_post_meta($post_id, '_enquiry_email_to', true),
        'html' => get_post_meta($post_id, '_enquiry_email_body', true),
    ));
});

add_action('admin_enqueue_scripts', function ($hook) {
    $screen = get_current_screen();
    if (!$screen || $screen->post_type !== 'zelora_enquiry') {
        return;
    }

    wp_enqueue_style('zelora-admin-enquiries', zelora_asset('css/admin-enquiries.css'), array(), zelora_asset_version('css/admin-enquiries.css'));

    if ($hook === 'edit.php') {
        wp_enqueue_script('zelora-admin-enquiries', zelora_asset('js/admin-enquiries.js'), array('jquery'), zelora_asset_version('js/admin-enquiries.js'), true);
        wp_localize_script('zelora-admin-enquiries', 'ZeloraEnquiries', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('zelora_enquiry_nonce'),
        ));

        add_action('admin_footer', function () { ?>
            <div id="zelora-email-modal" class="zelora-email-modal" aria-hidden="true">
                <div class="zelora-email-modal-backdrop"></div>
                <div class="zelora-email-modal-panel">
                    <button type="button" class="zelora-email-modal-close" aria-label="Close">&times;</button>
                    <h2 class="zelora-email-modal-subject"></h2>
                    <p class="zelora-email-modal-to"></p>
                    <div class="zelora-email-modal-body"></div>
                </div>
            </div>
        <?php });
    }
});
