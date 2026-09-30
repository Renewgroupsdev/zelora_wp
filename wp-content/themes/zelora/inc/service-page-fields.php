<?php
if (!defined('ABSPATH'))
    exit;

/**
 * Per-page editable content for the "Service Page" template (service_page.php).
 * Fields are stored as post meta (prefixed _svc_) so every page built from the
 * template can carry its own text/images while still falling back to the
 * same static defaults the template originally shipped with.
 */

function zelora_service_defaults()
{
    return array(
        'hero_eyebrow' => 'ERP DEVELOPMENT',
        'hero_title' => 'Build a stronger operational foundation.',
        'hero_desc' => "Your business runs on processes, people, and information. When those elements operate across disconnected systems, spreadsheets and manual workflows, growth becomes harder to manage. <mark>Zelora builds business-focused ERP solutions that bring your core operations together</mark>, giving teams a connected platform to manage information, streamline workflows, and make better decisions.",
        'hero_btn1_text' => 'Start a Conversation',
        'hero_btn1_url' => '#svc-cta',
        'hero_btn2_text' => 'Explore Our Approach',
        'hero_btn2_url' => '#svc-process',

        // Must match one of the site's Customizer enquiry interests
        // (Interest 1-5) exactly, so it can be pre-selected in the
        // contact popup's "interest" dropdown for this page.
        'default_interest' => 'ERP Development',

        'intro_title' => "Build technology around the way your business works.",
        'intro_p1' => "We don't believe an ERP should force your business to change the way it operates. We design and develop solutions around your actual processes, business rules, organizational structure, and growth objectives.",
        'intro_p2' => "From finance and HR to sales, inventory, operations, and customer management, we create connected systems that provide a clearer view of the business.",

        'deliver_eyebrow' => 'WHAT WE DELIVER',
        'deliver_title' => 'ERP solutions designed around the way your organization actually operates.',
        'deliver_cards' =>
            "diagram-3::Custom ERP Development::Purpose-built ERP applications designed around your unique business processes rather than generic workflows.\n" .
            "arrow-repeat::ERP Modernization::Modernize legacy applications and fragmented systems into scalable, secure, and easier-to-manage platforms.\n" .
            "gear::Business Process Digitization::Convert manual, paper-based, and spreadsheet-driven processes into structured digital workflows.\n" .
            "grid-3x3-gap::Module Development::Build individual business modules or extend existing ERP platforms to support new operational requirements.\n" .
            "link-45deg::System Integration::Connect ERP platforms with third-party applications, payment systems, APIs, customer platforms, and business systems.\n" .
            "bar-chart-line::Reporting & Business Intelligence::Transform operational data into meaningful dashboards, reports, and management insights.",

        'areas_title' => 'Business Areas We Can Digitize',
        'areas_items' =>
            "cash-stack::Finance & Accounts::Improve visibility into financial transactions, approvals, reporting, and business performance.\n" .
            "people::Human Resources::Manage employee information, attendance, leave, payroll-related workflows, and HR operations through connected systems.\n" .
            "cart::Sales & Customer Management::Centralize leads, customers, quotations, sales activities, and customer interactions.\n" .
            "box-seam::Inventory & Procurement::Improve control over inventory, purchasing, suppliers, stock movement, and operational planning.\n" .
            "gear::Operations::Digitize internal workflows, approvals, task management, and operational processes.\n" .
            "headset::Service Management::Connect service requests, customer information, scheduling, activities, and service delivery.",

        'why_eyebrow' => 'WHY ERP TRANSFORMATION MATTERS',
        'why_title' => 'A well-designed ERP is more than a collection of screens.',
        'why_intro' => 'It becomes the operational backbone of your organization.',
        'why_items' =>
            "arrow-repeat::Reduce repetitive manual work\n" .
            "check-circle::Improve information accuracy\n" .
            "diagram-3::Standardize business processes\n" .
            "file-earmark-spreadsheet::Reduce dependency on spreadsheets\n" .
            "people::Improve cross-functional collaboration\n" .
            "eye::Gain better operational visibility\n" .
            "shield-check::Strengthen approval and accountability\n" .
            "search::Make business information easier to access\n" .
            "cpu::Create a foundation for automation and AI",

        'process_title' => 'Our ERP Development Approach',
        'process_intro' => 'A structured process to deliver the right solution for your business.',
        'process_steps' =>
            "search::Understand::We study your existing processes, users, systems, pain points, and business objectives.\n" .
            "list-check::Define::We identify the required modules, workflows, roles, integrations, and reporting requirements.\n" .
            "pencil::Design::We create intuitive user experiences and a scalable technical architecture around your operational needs.\n" .
            "code-slash::Develop::Our engineering team builds the solution using structured, maintainable development practices.\n" .
            "link-45deg::Integrate::We connect the ERP with the systems and services your organization already depends on.\n" .
            "check2-circle::Validate::We test workflows, permissions, data, integrations, and business scenarios before deployment.\n" .
            "rocket-takeoff::Deploy & Evolve::We move the solution into production and continue improving it as your business requirements evolve.",

        'growth_title' => 'Built for Growth',
        'growth_desc' => 'Your ERP should not become a limitation as your organization grows. We design solutions with scalability, security, maintainability, integrations, and future expansion in mind — creating an operational platform that can evolve with your business.',
        'growth_pills' =>
            "arrows-angle-expand::Scalability\n" .
            "shield-lock::Security\n" .
            "tools::Maintainability\n" .
            "link-45deg::Integrations\n" .
            "lightning-charge::Future Ready",
        'growth_badge_text' => "Scalable for what's next",

        'who_eyebrow' => 'WHO WE WORK WITH',
        'who_title' => 'Our ERP capabilities can support:',
        'who_items' =>
            "graph-up-arrow::Growing businesses replacing spreadsheets\n" .
            "database::Organizations modernizing legacy applications\n" .
            "geo-alt::Multi-location businesses\n" .
            "building::Manufacturing and industrial organizations\n" .
            "people::Service-based businesses\n" .
            "cart::Distribution and retail organizations\n" .
            "heart-pulse::Healthcare and wellness businesses\n" .
            "tools::Businesses requiring custom operational platforms",

        'outcome_eyebrow' => 'THE OUTCOME',
        'outcome_title' => 'One connected business.',
        'outcome_tags' => "Clearer processes.\nBetter visibility.\nSmarter operations.",

        'cta_title' => "Let's build your operational foundation.",
        'cta_desc' => 'Tell us how your business works today, where the gaps are, and where you want to go next.',
        'cta_btn_text' => 'Start a Conversation',
        'cta_btn_url' => '#contact',
    );
}

function zelora_service_image_defaults()
{
    return array(
        'hero_image' => 'images/hero-dashboard.png',
        'intro_image' => 'images/about.png',
        'areas_image' => 'images/about_v2.png',
        'growth_image' => 'images/growth-building.png',
    );
}

function zelora_service_field($post_id, $key)
{
    $defaults = zelora_service_defaults();
    $value = get_post_meta($post_id, '_svc_' . $key, true);
    if ($value === '' || $value === false) {
        return isset($defaults[$key]) ? $defaults[$key] : '';
    }
    return $value;
}

function zelora_service_image($post_id, $key)
{
    $image_defaults = zelora_service_image_defaults();
    $attachment_id = absint(get_post_meta($post_id, '_svc_' . $key, true));
    if ($attachment_id) {
        $url = wp_get_attachment_image_url($attachment_id, 'full');
        if ($url) {
            return esc_url($url);
        }
    }
    return esc_url(zelora_asset(isset($image_defaults[$key]) ? $image_defaults[$key] : ''));
}

/**
 * Parses a repeater field into rows of `icon::title::description` (or a
 * subset of those columns), one item per line.
 */
function zelora_service_repeater($post_id, $key)
{
    $raw = zelora_service_field($post_id, $key);
    $rows = array();
    foreach (preg_split('/\r\n|\r|\n/', trim($raw)) as $line) {
        $line = trim($line);
        if ($line === '') {
            continue;
        }
        $rows[] = array_map('trim', explode('::', $line));
    }
    return $rows;
}

function zelora_service_icon_class($icon)
{
    $icon = trim($icon);
    return $icon !== '' ? 'bi bi-' . sanitize_html_class($icon) : '';
}

/**
 * Every toggleable section, keyed the same as its `_svc_hide_{key}` meta
 * and (for list-driven sections) its repeater field, so a cleared list
 * can auto-hide the section it belongs to.
 */
function zelora_service_sections()
{
    return array(
        'intro' => array('label' => 'Intro row ("Build technology around…")', 'repeater' => null),
        'deliver' => array('label' => 'What We Deliver', 'repeater' => 'deliver_cards'),
        'areas' => array('label' => 'Business Areas We Can Digitize', 'repeater' => 'areas_items'),
        'why' => array('label' => 'Why ERP Transformation Matters', 'repeater' => 'why_items'),
        'process' => array('label' => 'Our ERP Development Approach', 'repeater' => 'process_steps'),
        'growth' => array('label' => 'Built for Growth', 'repeater' => null),
        'who' => array('label' => 'Who We Work With', 'repeater' => 'who_items'),
        'outcome' => array('label' => 'Outcome', 'repeater' => null),
        'cta' => array('label' => 'Closing CTA', 'repeater' => null),
    );
}

/**
 * True only when the field has actually been saved (at least once) with
 * an empty value — i.e. the admin deliberately cleared it — as opposed to
 * a fresh page that has never been saved through this meta box, which
 * should still fall back to the sample content.
 */
function zelora_service_meta_is_explicitly_empty($post_id, $key)
{
    $meta_key = '_svc_' . $key;
    if (!metadata_exists('post', $post_id, $meta_key)) {
        return false;
    }
    return trim((string) get_post_meta($post_id, $meta_key, true)) === '';
}

function zelora_service_section_visible($post_id, $section_key)
{
    if (get_post_meta($post_id, '_svc_hide_' . $section_key, true) === '1') {
        return false;
    }

    $sections = zelora_service_sections();
    $repeater = isset($sections[$section_key]) ? $sections[$section_key]['repeater'] : null;
    if ($repeater && zelora_service_meta_is_explicitly_empty($post_id, $repeater)) {
        return false;
    }

    return true;
}

/* ---------------------------------------------------------------------- */
/* Admin: meta box, assets, and save handling                              */
/* ---------------------------------------------------------------------- */

add_action('add_meta_boxes', function () {
    add_meta_box(
        'zelora_service_fields',
        __('Service Page Content', 'zelora'),
        'zelora_service_meta_box_html',
        'page',
        'normal',
        'high'
    );
});

function zelora_service_meta_box_html($post)
{
    wp_nonce_field('zelora_service_save', 'zelora_service_nonce');
    $current_template = get_page_template_slug($post->ID);
    ?>
    <p class="description" id="zelora-service-hint" style="margin-top:0">
        <?php esc_html_e('These fields are used by the "Service Page" template. Select it under Page Attributes → Template, then fill in the content below (leave a field blank to keep the default sample copy).', 'zelora'); ?>
    </p>
    <div id="zelora-service-fields" <?php echo $current_template === 'service_page.php' ? '' : 'style="display:none"'; ?>>

        <p class="description">
            <?php esc_html_e('Every section below shows on the page by default. Use the switch on a section\'s heading to hide it — a list-based section (like "What We Deliver") also hides itself automatically if you clear all of its items and update the page.', 'zelora'); ?>
        </p>

        <h3><?php esc_html_e('Hero', 'zelora'); ?></h3>
        <?php zelora_svc_text_row($post->ID, 'hero_eyebrow', 'Eyebrow'); ?>
        <?php zelora_svc_text_row($post->ID, 'hero_title', 'Title'); ?>
        <?php zelora_svc_textarea_row($post->ID, 'hero_desc', 'Description', 3, 'Wrap a sentence in <code>&lt;mark&gt;...&lt;/mark&gt;</code> to highlight it in rose.'); ?>
        <?php zelora_svc_image_row($post->ID, 'hero_image', 'Hero image'); ?>
        <div class="svc-field-cols">
            <?php zelora_svc_text_row($post->ID, 'hero_btn1_text', 'Primary button text'); ?>
            <?php zelora_svc_text_row($post->ID, 'hero_btn1_url', 'Primary button link'); ?>
        </div>
        <div class="svc-field-cols">
            <?php zelora_svc_text_row($post->ID, 'hero_btn2_text', 'Secondary button text'); ?>
            <?php zelora_svc_text_row($post->ID, 'hero_btn2_url', 'Secondary button link'); ?>
        </div>

        <?php zelora_svc_section_heading($post->ID, 'intro', 'Intro row'); ?>
        <?php zelora_svc_text_row($post->ID, 'intro_title', 'Title'); ?>
        <?php zelora_svc_textarea_row($post->ID, 'intro_p1', 'Paragraph 1', 3); ?>
        <?php zelora_svc_textarea_row($post->ID, 'intro_p2', 'Paragraph 2', 3); ?>
        <?php zelora_svc_image_row($post->ID, 'intro_image', 'Image'); ?>

        <?php zelora_svc_section_heading($post->ID, 'deliver', 'What We Deliver'); ?>
        <?php zelora_svc_text_row($post->ID, 'deliver_eyebrow', 'Eyebrow'); ?>
        <?php zelora_svc_text_row($post->ID, 'deliver_title', 'Heading'); ?>
        <?php zelora_svc_repeater_row($post->ID, 'deliver_cards', 'Cards', 'icon :: title :: description', 8); ?>

        <?php zelora_svc_section_heading($post->ID, 'areas', 'Business Areas We Can Digitize'); ?>
        <?php zelora_svc_text_row($post->ID, 'areas_title', 'Heading'); ?>
        <?php zelora_svc_repeater_row($post->ID, 'areas_items', 'List items', 'icon :: title :: description', 8); ?>
        <?php zelora_svc_image_row($post->ID, 'areas_image', 'Image'); ?>

        <?php zelora_svc_section_heading($post->ID, 'why', 'Why ERP Transformation Matters'); ?>
        <?php zelora_svc_text_row($post->ID, 'why_eyebrow', 'Eyebrow'); ?>
        <?php zelora_svc_text_row($post->ID, 'why_title', 'Heading'); ?>
        <?php zelora_svc_text_row($post->ID, 'why_intro', 'Subtext'); ?>
        <?php zelora_svc_repeater_row($post->ID, 'why_items', 'Items', 'icon :: label', 10); ?>

        <?php zelora_svc_section_heading($post->ID, 'process', 'Our ERP Development Approach'); ?>
        <?php zelora_svc_text_row($post->ID, 'process_title', 'Heading'); ?>
        <?php zelora_svc_text_row($post->ID, 'process_intro', 'Subtext'); ?>
        <?php zelora_svc_repeater_row($post->ID, 'process_steps', 'Steps', 'icon :: title :: description', 8); ?>

        <?php zelora_svc_section_heading($post->ID, 'growth', 'Built for Growth'); ?>
        <?php zelora_svc_text_row($post->ID, 'growth_title', 'Heading'); ?>
        <?php zelora_svc_textarea_row($post->ID, 'growth_desc', 'Description', 3); ?>
        <?php zelora_svc_repeater_row($post->ID, 'growth_pills', 'Pills', 'icon :: label', 6); ?>
        <?php zelora_svc_image_row($post->ID, 'growth_image', 'Visual image'); ?>
        <?php zelora_svc_text_row($post->ID, 'growth_badge_text', 'Visual badge text'); ?>

        <?php zelora_svc_section_heading($post->ID, 'who', 'Who We Work With'); ?>
        <?php zelora_svc_text_row($post->ID, 'who_eyebrow', 'Eyebrow'); ?>
        <?php zelora_svc_text_row($post->ID, 'who_title', 'Heading'); ?>
        <?php zelora_svc_repeater_row($post->ID, 'who_items', 'Items', 'icon :: label', 9); ?>

        <?php zelora_svc_section_heading($post->ID, 'outcome', 'Outcome'); ?>
        <?php zelora_svc_text_row($post->ID, 'outcome_eyebrow', 'Eyebrow'); ?>
        <?php zelora_svc_text_row($post->ID, 'outcome_title', 'Heading'); ?>
        <?php zelora_svc_repeater_row($post->ID, 'outcome_tags', 'Tag lines', 'one per line', 4); ?>

        <?php zelora_svc_section_heading($post->ID, 'cta', 'Closing CTA'); ?>
        <?php zelora_svc_text_row($post->ID, 'cta_title', 'Heading'); ?>
        <?php zelora_svc_textarea_row($post->ID, 'cta_desc', 'Description', 2); ?>
        <div class="svc-field-cols">
            <?php zelora_svc_text_row($post->ID, 'cta_btn_text', 'Button text'); ?>
            <?php zelora_svc_text_row($post->ID, 'cta_btn_url', 'Button link'); ?>
        </div>

        <h3><?php esc_html_e('Contact Popup', 'zelora'); ?></h3>
        <?php
        zelora_svc_select_row(
            $post->ID,
            'default_interest',
            'Pre-selected interest',
            array(
                zelora_mod('interest1'),
                zelora_mod('interest2'),
                zelora_mod('interest3'),
                zelora_mod('interest4'),
                zelora_mod('interest5'),
            ),
            'Which of the site\'s enquiry interests this page should have pre-selected in the popup form.'
        );
        ?>
    </div>
    <style>
        #zelora_service_fields .svc-row { margin: 0 0 14px }
        #zelora_service_fields .svc-row label { display: block; font-weight: 600; margin-bottom: 5px }
        #zelora_service_fields .svc-row input[type="text"],
        #zelora_service_fields .svc-row textarea { width: 100%; max-width: 720px }
        #zelora_service_fields .svc-row .description { font-weight: 400; font-style: italic; margin: 4px 0 0 }
        #zelora_service_fields .svc-field-cols { display: flex; gap: 24px; flex-wrap: wrap }
        #zelora_service_fields .svc-field-cols .svc-row { flex: 1; min-width: 220px }
        #zelora_service_fields .svc-image-row { display: flex; align-items: center; gap: 14px; margin-bottom: 18px }
        #zelora_service_fields .svc-image-preview { width: 90px; height: 60px; object-fit: cover; border: 1px solid #dcdcde; border-radius: 4px; background: #f0f0f1 }
        #zelora_service_fields h3 { margin: 28px 0 14px; padding-top: 18px; border-top: 1px solid #dcdcde }
        #zelora_service_fields h3:first-of-type { margin-top: 0; padding-top: 0; border-top: 0 }
        #zelora_service_fields h3.svc-section-heading { display: flex; align-items: center; justify-content: space-between; gap: 16px }
        #zelora_service_fields .svc-toggle-switch { display: flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 600; color: #646970; cursor: pointer; user-select: none }
        #zelora_service_fields .svc-toggle-switch input { position: absolute; opacity: 0; width: 1px; height: 1px }
        #zelora_service_fields .svc-toggle-track { position: relative; width: 36px; height: 20px; border-radius: 999px; background: #ccc; transition: background .15s }
        #zelora_service_fields .svc-toggle-track:before { content: ''; position: absolute; top: 2px; left: 2px; width: 16px; height: 16px; border-radius: 50%; background: #fff; transition: transform .15s; box-shadow: 0 1px 2px rgba(0,0,0,.3) }
        #zelora_service_fields .svc-toggle-switch input:checked + .svc-toggle-track { background: #a04050 }
        #zelora_service_fields .svc-toggle-switch input:checked + .svc-toggle-track:before { transform: translateX(16px) }
        #zelora_service_fields .svc-toggle-switch input:focus-visible + .svc-toggle-track { outline: 2px solid #2271b1; outline-offset: 2px }
        #zelora_service_fields h3.svc-section-heading.is-hidden { opacity: .55 }
    </style>
    <?php
}

/**
 * A section's <h3> heading with a show/hide switch built in, so toggling
 * a section lives right next to the fields it controls.
 */
function zelora_svc_section_heading($post_id, $section_key, $label)
{
    $hidden = get_post_meta($post_id, '_svc_hide_' . $section_key, true) === '1';
    ?>
    <h3 class="svc-section-heading<?php echo $hidden ? ' is-hidden' : ''; ?>">
        <span><?php echo esc_html($label); ?></span>
        <label class="svc-toggle-switch">
            <input type="checkbox" name="svc_show_<?php echo esc_attr($section_key); ?>" value="1" <?php checked(!$hidden); ?>>
            <span class="svc-toggle-track" aria-hidden="true"></span>
            <span class="svc-toggle-label"><?php echo $hidden ? esc_html__('Hidden', 'zelora') : esc_html__('Visible', 'zelora'); ?></span>
        </label>
    </h3>
    <?php
}

function zelora_svc_text_row($post_id, $key, $label)
{
    $value = zelora_service_field($post_id, $key);
    ?>
    <div class="svc-row">
        <label for="svc_<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label>
        <input type="text" id="svc_<?php echo esc_attr($key); ?>" name="svc_<?php echo esc_attr($key); ?>"
            value="<?php echo esc_attr($value); ?>">
    </div>
    <?php
}

function zelora_svc_select_row($post_id, $key, $label, $options, $description = '')
{
    $value = zelora_service_field($post_id, $key);
    ?>
    <div class="svc-row">
        <label for="svc_<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label>
        <select id="svc_<?php echo esc_attr($key); ?>" name="svc_<?php echo esc_attr($key); ?>">
            <option value="">— None —</option>
            <?php foreach (array_filter($options) as $option): ?>
                <option value="<?php echo esc_attr($option); ?>" <?php selected($value, $option); ?>>
                    <?php echo esc_html($option); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?php if ($description): ?>
            <p class="description"><?php echo esc_html($description); ?></p>
        <?php endif; ?>
    </div>
    <?php
}

function zelora_svc_textarea_row($post_id, $key, $label, $rows = 3, $description = '')
{
    $value = zelora_service_field($post_id, $key);
    ?>
    <div class="svc-row">
        <label for="svc_<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label>
        <textarea id="svc_<?php echo esc_attr($key); ?>" name="svc_<?php echo esc_attr($key); ?>"
            rows="<?php echo esc_attr($rows); ?>"><?php echo esc_textarea($value); ?></textarea>
        <?php if ($description): ?>
            <p class="description"><?php echo wp_kses_post($description); ?></p>
        <?php endif; ?>
    </div>
    <?php
}

function zelora_svc_repeater_row($post_id, $key, $label, $format_hint, $rows = 6)
{
    $value = zelora_service_field($post_id, $key);
    ?>
    <div class="svc-row">
        <label for="svc_<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label>
        <textarea id="svc_<?php echo esc_attr($key); ?>" name="svc_<?php echo esc_attr($key); ?>"
            rows="<?php echo esc_attr($rows); ?>"><?php echo esc_textarea($value); ?></textarea>
        <p class="description">One item per line — <?php echo esc_html($format_hint); ?>. Icon names come from
            <a href="https://icons.getbootstrap.com/" target="_blank" rel="noopener">Bootstrap Icons</a> (e.g.
            <code>diagram-3</code>, without the <code>bi-</code> prefix).</p>
    </div>
    <?php
}

function zelora_svc_image_row($post_id, $key, $label)
{
    $attachment_id = absint(get_post_meta($post_id, '_svc_' . $key, true));
    $preview_url = $attachment_id ? wp_get_attachment_image_url($attachment_id, 'medium') : '';
    ?>
    <div class="svc-row svc-image-row" data-svc-image-field>
        <img class="svc-image-preview" src="<?php echo esc_url($preview_url); ?>"
            style="<?php echo $preview_url ? '' : 'display:none'; ?>">
        <input type="hidden" class="svc-image-id" name="svc_<?php echo esc_attr($key); ?>"
            value="<?php echo esc_attr($attachment_id); ?>">
        <div>
            <label><?php echo esc_html($label); ?></label>
            <p>
                <button type="button" class="button svc-image-select"><?php esc_html_e('Select image', 'zelora'); ?></button>
                <button type="button" class="button svc-image-remove"
                    style="<?php echo $attachment_id ? '' : 'display:none'; ?>"><?php esc_html_e('Remove', 'zelora'); ?></button>
            </p>
            <p class="description">Leave empty to use the template's sample image.</p>
        </div>
    </div>
    <?php
}

add_action('save_post_page', function ($post_id) {
    if (!isset($_POST['zelora_service_nonce']) || !wp_verify_nonce($_POST['zelora_service_nonce'], 'zelora_service_save')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    $text_fields = array(
        'hero_eyebrow', 'hero_title', 'hero_btn1_text', 'hero_btn1_url', 'hero_btn2_text', 'hero_btn2_url',
        'intro_title', 'deliver_eyebrow', 'deliver_title', 'areas_title', 'why_eyebrow', 'why_title',
        'process_title', 'growth_title', 'growth_badge_text', 'who_eyebrow', 'who_title', 'outcome_eyebrow',
        'outcome_title', 'cta_title', 'cta_btn_text', 'cta_btn_url', 'default_interest',
    );
    foreach ($text_fields as $field) {
        if (isset($_POST['svc_' . $field])) {
            update_post_meta($post_id, '_svc_' . $field, sanitize_text_field(wp_unslash($_POST['svc_' . $field])));
        }
    }

    $textarea_fields = array(
        'intro_p1', 'intro_p2', 'why_intro', 'process_intro', 'growth_desc', 'cta_desc',
        'deliver_cards', 'areas_items', 'why_items', 'process_steps', 'growth_pills', 'who_items', 'outcome_tags',
    );
    foreach ($textarea_fields as $field) {
        if (isset($_POST['svc_' . $field])) {
            update_post_meta($post_id, '_svc_' . $field, sanitize_textarea_field(wp_unslash($_POST['svc_' . $field])));
        }
    }

    // Allows a limited set of inline tags (e.g. <mark>) so a sentence in the
    // hero description can be highlighted.
    if (isset($_POST['svc_hero_desc'])) {
        update_post_meta($post_id, '_svc_hero_desc', wp_kses_post(wp_unslash($_POST['svc_hero_desc'])));
    }

    $image_fields = array('hero_image', 'intro_image', 'areas_image', 'growth_image');
    foreach ($image_fields as $field) {
        if (isset($_POST['svc_' . $field])) {
            update_post_meta($post_id, '_svc_' . $field, absint($_POST['svc_' . $field]));
        }
    }

    // Unchecked checkboxes aren't submitted at all, so their absence means "hidden".
    foreach (array_keys(zelora_service_sections()) as $section_key) {
        $hidden = !isset($_POST['svc_show_' . $section_key]);
        update_post_meta($post_id, '_svc_hide_' . $section_key, $hidden ? '1' : '0');
    }
});

add_action('admin_enqueue_scripts', function ($hook) {
    if (!in_array($hook, array('post.php', 'post-new.php'), true)) {
        return;
    }
    if (get_current_screen() && get_current_screen()->post_type !== 'page') {
        return;
    }
    wp_enqueue_media();
    // Loaded in the <head> (in_footer = false): Elementor's onboarding module
    // (app/modules/onboarding/module.php) registers a void closure on the
    // "wp_print_footer_scripts" hook, which WP core also treats as a filter
    // whose return value gates whether footer-queued admin scripts print at
    // all. That closure's null return short-circuits footer script printing
    // sitewide, so anything enqueued with $in_footer = true never renders.
    wp_enqueue_script(
        'zelora-service-admin',
        zelora_asset('js/service-page-admin.js'),
        array('jquery', 'wp-data', 'wp-dom-ready'),
        zelora_asset_version('js/service-page-admin.js'),
        false
    );
});
