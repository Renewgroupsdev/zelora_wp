<?php
if (!defined('ABSPATH'))
    exit;
define('ZELORA_VERSION', '1.0.0');
require_once get_template_directory() . '/inc/service-page-fields.php';
function zelora_asset($p = '')
{
    return trailingslashit(get_template_directory_uri()) . 'assets/' . ltrim($p, '/');
}
function zelora_asset_version($p = '')
{
    $file = get_template_directory() . '/assets/' . ltrim($p, '/');
    return file_exists($file) ? (string) filemtime($file) : ZELORA_VERSION;
}
function zelora_defaults()
{
    return array(
        'site_tagline' => 'INFOTECH',
        'hero_eyebrow' => 'A NEXT-GEN COMPANY',
        'hero_title' => 'Technology that moves <em>— businesses forward.</em>',
        'hero_desc' => 'Zelora Infotech builds intelligent digital solutions that simplify operations, connect people and processes, and help businesses scale with confidence.',
        'hero_primary_text' => 'Build with Zelora',
        'hero_primary_url' => '#contact',
        'hero_secondary_text' => 'Explore our solutions',
        'hero_secondary_url' => '#services',
        'kpi1' => '10',
        'kpi1_label' => 'Industries',
        'kpi1_url' => '#industries',
        'kpi2' => '20',
        'kpi2_label' => 'businesses served',
        'kpi2_url' => '#contact',
        'kpi3' => '25',
        'kpi3_label' => 'years of experience',
        'kpi3_url' => '#contact',
        'about_eyebrow' => 'ABOUT ZELORA',
        'about_title' => 'We understand how businesses work — because we come from one. <em>Technology built for people who make things happen.</em>',
        'about_p1' => 'Zelora Infotech is the technology arm of the Renew Group, bringing decades of industry experience into modern digital transformation. We build practical technology around real business processes — helping organizations simplify operations, improve visibility, automate workflows, and create sustainable growth.',
        'about_p2' => 'Our approach combines business understanding, engineering expertise, and emerging technologies to deliver solutions that work beyond the screen.',
        'mission_title' => 'Our Mission',
        'mission_text' => 'To empower businesses with purposeful technology that improves efficiency, enables innovation, and creates measurable business value.',
        'vision_title' => 'Our Vision',
        'vision_text' => 'To become a trusted technology partner for businesses transforming the way they operate, connect, and grow.',
        'services_eyebrow' => 'WHAT WE DO',
        'services_title' => 'Five practices, deliberately<br>kept under <em>one roof.</em>',
        'services_intro' => 'Big or small, each solves for the same thing — real business impact. Because they share a home, they work better together.',
        'process_eyebrow' => 'HOW WE WORK',
        'process_title' => 'A sequence, <em>not a menu.</em>',
        'process_intro' => 'Great technology starts with understanding. We move from business needs to practical solutions through a structured process designed to create clarity at every step.',
        'industries_eyebrow' => 'INDUSTRIES WE SERVE',
        'industries_title' => 'Where this work <em>fits.</em>',
        'industries_intro' => 'Every industry operates differently. We combine technology expertise with an understanding of real-world business processes to build solutions that fit the way your organization works.',
        'industries_button' => 'View all industries →',
        'industries_button_url' => '#contact',
        'industries' => 'Manufacturing|Healthcare & Wellness|AgriTech|FoodTech|EduTech|Institutions|Fintech|Hospitality|Construction|Infrastructure|Manufacture|Distribution & Retail|Logistics & Supply Chain|Fireworks',
        'contact_eyebrow' => 'GET IN TOUCH',
        'contact_title' => 'Tell us where your business <em>needs to move next.</em>',
        'contact_intro' => "Whether you are modernizing an existing system, automating operations, or exploring what AI can do for your business, let's turn the challenge into a practical technology roadmap.",
        'email' => 'info@zelorainfotech.com',
        'phone' => '+91 99945 131592',
        'whatsapp_text' => 'Message us on WhatsApp',
        'whatsapp_url' => '#',
        'company' => 'Zelora Infotech Private Limited',
        'office_address' => "1/198-3-3, Kurinji Malar St,\nMeenakshi Amman Nagar,\nLandmark - backside of Don Bosco School,\nSurya Nagar,\nMadurai, Tamil Nadu 625017",
        'footnote' => 'Part of Renew Group of Companies. Enquiries are read by the delivery team, not a call centre.',
        'form_button' => 'Send message',
        'form_note' => 'We’ll get back to you shortly with a solution.',
        'interest1' => 'ERP Development',
        'interest2' => 'Mobile Apps',
        'interest3' => 'AI Integration',
        'interest4' => 'Business Growth Consulting',
        'interest5' => 'Industrial Automation',
        'footer_tagline' => 'DIGITAL SYSTEMS',
        'copyright' => '© 2026 Zelora Digital Systems · A Renew Group Company · ERP · Mobile Apps · AI Integration · Growth Consulting · Industry Automation · All rights reserved.',
        'slogan' => 'Ideas. Products. People. Growth.',
        'facebook_url' => 'https://facebook.com/',
        'instagram_url' => 'https://instagram.com/',
        'linkedin_url' => 'https://linkedin.com/',
        'home_url' => '#home',
        'about_url' => '#about',
        'services_url' => '#services',
        'process_url' => '#process',
        'industries_url' => '#industries',
        'contact_url' => '#contact',
        'header_logo' => 'images/zelora-logo.png',
        'footer_logo' => 'images/zelora-logo.png',
        'hero_image' => 'images/hero-dashboard.png',
        'about_image' => 'images/about.png',
        'favicon' => 'images/zelora-logo',
        'service1_title' => 'ERP Development',
        'service1_desc' => 'Build a stronger operational foundation.',
        'service1_url' => '#contact',
        'service1_image' => 'images/erp-development.png',
        'service2_title' => 'Mobile Apps',
        'service2_desc' => 'Put your business in motion.',
        'service2_url' => '#contact',
        'service2_image' => 'images/mobile-apps.png',
        'service3_title' => 'AI Integration',
        'service3_desc' => 'Make intelligence part of everyday work.',
        'service3_url' => '#contact',
        'service3_image' => 'images/ai-integration.png',
        'service4_title' => 'Business Consulting',
        'service4_desc' => 'Turn business challenges into clear technology strategies.',
        'service4_url' => '#contact',
        'service4_image' => 'images/business-growth.png',
        'service5_title' => 'Industry Automation',
        'service5_desc' => 'Transform operations through intelligent automation.',
        'service5_url' => '#contact',
        'service5_image' => 'images/industry-automation.png',
        'process1_title' => 'Envision',
        'process1_desc' => 'Understand your goals and challenges.',
        'process1_url' => '#contact',
        'process2_title' => 'Refine',
        'process2_desc' => 'Define the right approach.',
        'process2_url' => '#contact',
        'process3_title' => 'Innovate',
        'process3_desc' => 'Develop and integrate with care.',
        'process3_url' => '#contact',
        'process4_title' => 'Deploy',
        'process4_desc' => 'Roll out and enable your teams.',
        'process4_url' => '#contact',
        'process5_title' => 'Support',
        'process5_desc' => 'Stay close and help you grow.',
        'process5_url' => '#contact',
    );
}
function zelora_mod($k, $default = '')
{
    $d = zelora_defaults();
    return get_theme_mod('zelora_' . $k, array_key_exists($k, $d) ? $d[$k] : $default);
}
function zelora_url($k, $default = '#')
{
    $v = get_theme_mod('zelora_' . $k, '');
    return $v !== '' ? esc_url($v) : esc_url($default);
}
// function zelora_image($k, $default = '')
// {
//     $id = absint(get_theme_mod('zelora_' . $k, 0));
//     if ($id) {
//         $u = wp_get_attachment_image_url($id, 'full');
//         if ($u)
//             return esc_url($u);
//     }
//     return esc_url(zelora_asset($default));
// }
function zelora_image($k, $default = '')
{
    $value = get_theme_mod('zelora_' . $k, '');

    // Uploaded WordPress image attachment ID
    if (is_numeric($value) && (int) $value > 0) {

        $url = wp_get_attachment_image_url(
            (int) $value,
            'full'
        );

        if ($url) {
            return esc_url($url);
        }
    }

    // If a URL was saved
    if (!empty($value) && filter_var($value, FILTER_VALIDATE_URL)) {
        return esc_url($value);
    }

    // Default theme image
    if (!empty($default)) {
        return esc_url(zelora_asset($default));
    }

    return '';
}
function zelora_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array('primary' => __('Primary Menu', 'zelora'), 'footer' => __('Footer Menu', 'zelora')));
}
add_action('after_setup_theme', 'zelora_setup');
function zelora_assets()
{
    wp_enqueue_style('zelora-icons', zelora_asset('css/bootstrap-icons.min.css'), array(), '1.11.3');
    wp_enqueue_style('zelora-fonts', zelora_asset('css/fonts.css'), array(), '1.0');
    wp_enqueue_style('zelora-gradient', zelora_asset('css/style_gradiant.css'), array('zelora-fonts'), ZELORA_VERSION);
    wp_enqueue_style('zelora-theme', get_stylesheet_uri(), array('zelora-gradient'), ZELORA_VERSION);
    if (is_page_template('service_page.php')) {
        wp_enqueue_style('zelora-service-page', zelora_asset('css/service-page.css'), array('zelora-theme'), zelora_asset_version('css/service-page.css'));
    }
    wp_enqueue_script('zelora-jquery', zelora_asset('js/jquery-3.7.1.min.js'), array(), '3.7.1', true);
    wp_enqueue_script('zelora-script', zelora_asset('js/script.js'), array('zelora-jquery'), zelora_asset_version('js/script.js'), true);
    wp_localize_script('zelora-script', 'ZeloraTheme', array('ajaxUrl' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('zelora_contact_nonce'), 'assetUrl' => trailingslashit(zelora_asset(''))));
    if (is_page_template('service_page.php')) {
        wp_enqueue_script('zelora-service-page', zelora_asset('js/service-page.js'), array('zelora-jquery'), zelora_asset_version('js/service-page.js'), true);
    }
}
add_action('wp_enqueue_scripts', 'zelora_assets');
function zelora_primary_fallback()
{
    echo '<ul class="wp-primary-menu">';
    foreach (array('about' => 'About', 'services' => 'Services', 'process' => 'How we work', 'industries' => 'Industries', 'contact' => 'Contact us') as $k => $l)
        echo '<li><a href="' . esc_url(zelora_url($k . '_url', '#' . $k)) . '">' . esc_html($l) . '</a></li>';
    echo '</ul>';
}
function zelora_footer_fallback()
{
    echo '<ul class="footer-menu">';
    foreach (array('about' => 'About', 'services' => 'Services', 'process' => 'How we work', 'industries' => 'Industries', 'contact' => 'Contact') as $k => $l)
        echo '<li><a href="' . esc_url(zelora_url($k . '_url', '#' . $k)) . '">' . esc_html($l) . '</a></li>';
    echo '</ul>';
}
function zelora_menu_attrs($atts, $item, $args)
{
    if (isset($args->theme_location) && in_array($args->theme_location, array('primary', 'footer'), true))
        $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'zelora_menu_attrs', 10, 3);

function zelora_load_email_template($template, $data = array())
{
    $template_path = trailingslashit(get_template_directory()) .
        'emailtemplates/' . $template . '.html';

    // Check if file exists
    if (!file_exists($template_path)) {
        error_log('Zelora Email Template NOT FOUND: ' . $template_path);
        return false;
    }

    // Check if file is readable
    if (!is_readable($template_path)) {
        error_log('Zelora Email Template NOT READABLE: ' . $template_path);
        return false;
    }

    $html = file_get_contents($template_path);

    if ($html === false || trim($html) === '') {
        error_log('Zelora Email Template EMPTY: ' . $template_path);
        return false;
    }

    // Replace placeholders
    foreach ($data as $key => $value) {
        $html = str_replace(
            '{{' . $key . '}}',
            $value,
            $html
        );
    }

    return $html;
}
function zelora_contact_submit()
{
    error_log(
        'ZELORA CONTACT SUBMIT CALLED - ' . current_time('mysql')
    );
    check_ajax_referer('zelora_contact_nonce', 'nonce');

    $name = sanitize_text_field(
        wp_unslash($_POST['name'] ?? '')
    );

    $company = sanitize_text_field(
        wp_unslash($_POST['company'] ?? '')
    );

    $email = sanitize_email(
        wp_unslash($_POST['email'] ?? '')
    );

    $phone = sanitize_text_field(
        wp_unslash($_POST['phone'] ?? '')
    );

    $interest = sanitize_text_field(
        wp_unslash($_POST['interest'] ?? '')
    );

    $message = sanitize_textarea_field(
        wp_unslash($_POST['message'] ?? '')
    );


    /*
     * Validation
     */
    if (empty($name)) {
        wp_send_json_error([
            'message' => 'Please enter your name.'
        ]);
    }

    if (!is_email($email)) {
        wp_send_json_error([
            'message' => 'Please enter a valid email address.'
        ]);
    }

    if (empty($message)) {
        wp_send_json_error([
            'message' => 'Please enter your message.'
        ]);
    }


    /*
     * Logo
     */
    $logo_url = zelora_image(
        'header_logo',
        'images/zelora-logo.png'
    );


    /*
     * Logo HTML
     */
    $logo_html = '';

    if (!empty($logo_url)) {
        $logo_html = '
            <img
                src="' . esc_url($logo_url) . '"
                alt="Zelora Infotech"
                style="
                    max-width:180px;
                    max-height:60px;
                    display:inline-block;
                    margin-bottom:20px;
                "
            >
        ';
    }


    /*
     * Email template data
     */
    $template_data = array(

        'logo' => $logo_html,

        'name' => esc_html($name),

        'company' => esc_html(
            $company ?: '—'
        ),

        'email' => esc_html($email),

        'phone' => esc_html(
            $phone ?: '—'
        ),

        'interest' => esc_html(
            $interest ?: '—'
        ),

        'message' => nl2br(
            esc_html($message)
        ),
    );


    /*
     * Load HTML email template
     */
    $body = zelora_load_email_template(
        'contact-enquiry',
        $template_data
    );


    /*
     * Check template
     */
    if ($body === false) {

        wp_send_json_error([
            'message' => 'Email template could not be loaded.'
        ]);
    }


    /*
     * Recipient
     *
     * This uses the WordPress admin email.
     */
    $to = get_option('admin_email');


    /*
     * Email subject
     */
    $subject = 'New Website Enquiry for '. $interest .' - Zelora Infotech';


//     /*
//      * Email body
//      */
//     $body = "New enquiry received from the Zelora website.\n\n";

//     $body .= "----------------------------------------\n";
//     $body .= "CONTACT DETAILS\n";
//     $body .= "----------------------------------------\n\n";

//     $body .= "Name: " . $name . "\n";
//     $body .= "Company: " . ($company ?: 'Not provided') . "\n";
//     $body .= "Email: " . $email . "\n";
//     $body .= "Phone: " . ($phone ?: 'Not provided') . "\n";
//     $body .= "Interest: " . ($interest ?: 'Not selected') . "\n\n";

//     $body .= "----------------------------------------\n";
//     $body .= "MESSAGE\n";
//     $body .= "----------------------------------------\n\n";

//     $body .= ($message ?: 'No message provided') . "\n\n";

//     $body .= "----------------------------------------\n";
//     $body .= "Website: " . home_url('/') . "\n";
//     $body .= "Submitted: " . current_time('mysql') . "\n";
//     $body .= "----------------------------------------\n";


    /*
     * Email headers
     *
     * IMPORTANT:
     * Use your own website domain as From.
     * Do not use the visitor's email as From.
     */
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Zelora Website <info@zelorainfotech.com>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );


    /*
     * Send email
     */
    $sent = wp_mail(
        $to,
        $subject,
        $body,
        $headers
    );


    /*
     * Response
     */
    if (!$sent) {

        wp_send_json_error(array(
            'message' => 'Unable to send your message right now. Please try again later.'
        ));
    }


    wp_send_json_success(array(
        'message' => 'Thank you! Your enquiry has been sent successfully. Our team will get back to you shortly.'
    ));
}

add_action(
    'wp_ajax_zelora_contact_submit',
    'zelora_contact_submit'
);

add_action(
    'wp_ajax_nopriv_zelora_contact_submit',
    'zelora_contact_submit'
);

function zelora_customizer($c)
{
    $d = zelora_defaults();

    /*
     * Main Customizer Panel
     */
    $c->add_panel('zelora_home', array(
        'title' => 'Zelora Homepage',
        'priority' => 10,
        'description' => 'Edit homepage content, images and URLs. Changes are saved in the WordPress database.',
    ));

    /*
     * Sections
     */
    $sections = array(
        'navigation' => 'Navigation / URLs',
        'hero' => 'Hero',
        'hero_services' => 'Hero Service Bar',
        'about' => 'About',
        'services' => 'Services',
        'process' => 'How We Work',
        'industries' => 'Industries',
        'contact' => 'Contact',
        'footer' => 'Footer',
        'images' => 'Images',
    );

    foreach ($sections as $id => $title) {
        $c->add_section('zelora_' . $id, array(
            'title' => $title,
            'panel' => 'zelora_home',
        ));
    }

    /*
     * Common setting/control helper
     */
    $add = function ($k, $label, $type = 'text', $section = 'hero') use ($c, $d) {

        /*
         * Sanitize value according to field type
         */
        if ($type === 'url') {
            $sanitize = 'esc_url_raw';
        } elseif ($type === 'textarea') {
            $sanitize = 'sanitize_textarea_field';
        } elseif ($type === 'image') {
            // Image controls save attachment ID
            $sanitize = 'absint';
        } else {
            $sanitize = 'sanitize_text_field';
        }

        /*
         * Register setting
         */
        $c->add_setting('zelora_' . $k, array(
            'default' => $d[$k] ?? '',
            'sanitize_callback' => $sanitize,
            'transport' => 'refresh',
        ));

        /*
         * Image control
         */
        if ($type === 'image') {

            $c->add_control(
                new WP_Customize_Media_Control(
                    $c,
                    'zelora_' . $k,
                    array(
                        'label' => $label,
                        'section' => 'zelora_' . $section,
                        'mime_type' => 'image',
                        'description' => 'Upload or select an image from the Media Library.',
                    )
                )
            );

        } else {

            /*
             * Normal text / URL / textarea control
             */
            $c->add_control('zelora_' . $k, array(
                'label' => $label,
                'section' => 'zelora_' . $section,
                'type' => $type,
            ));
        }
    };


    /*
     * ---------------------------------------------------------
     * NAVIGATION
     * ---------------------------------------------------------
     */
    $urls = array(
        'home_url' => 'Home URL',
        'about_url' => 'About URL',
        'services_url' => 'Services URL',
        'process_url' => 'How We Work URL',
        'industries_url' => 'Industries URL',
        'contact_url' => 'Contact URL',
    );

    foreach ($urls as $k => $l) {
        $add($k, $l, 'url', 'navigation');
    }


    /*
     * ---------------------------------------------------------
     * HERO
     * ---------------------------------------------------------
     */
    $hero_fields = array(
        'hero_eyebrow' => 'Eyebrow',
        'hero_title' => 'Title (HTML allowed)',
        'hero_desc' => 'Description',
        'hero_primary_text' => 'Primary button text',
        'hero_primary_url' => 'Primary button URL',
        'hero_secondary_text' => 'Secondary button text',
        'hero_secondary_url' => 'Secondary button URL',

        'kpi1' => 'KPI 1 value',
        'kpi1_label' => 'KPI 1 label',
        'kpi1_url' => 'KPI 1 URL',

        'kpi2' => 'KPI 2 value',
        'kpi2_label' => 'KPI 2 label',
        'kpi2_url' => 'KPI 2 URL',

        'kpi3' => 'KPI 3 value',
        'kpi3_label' => 'KPI 3 label',
        'kpi3_url' => 'KPI 3 URL',
    );

    foreach ($hero_fields as $k => $l) {

        if (str_ends_with($k, '_url')) {
            $type = 'url';
        } elseif ($k === 'hero_desc') {
            $type = 'textarea';
        } else {
            $type = 'text';
        }

        $add($k, $l, $type, 'hero');
    }


    /*
     * ---------------------------------------------------------
     * HERO SERVICE BAR
     * ---------------------------------------------------------
     */
    for ($i = 1; $i <= 5; $i++) {

        foreach (array('title', 'desc', 'url') as $x) {

            if ($x === 'url') {
                $type = 'url';
            } elseif ($x === 'desc') {
                $type = 'textarea';
            } else {
                $type = 'text';
            }

            $add(
                'svc' . $i . '_' . $x,
                'Service ' . $i . ' ' . ucfirst($x),
                $type,
                'hero_services'
            );
        }
    }


    /*
     * ---------------------------------------------------------
     * ABOUT
     * ---------------------------------------------------------
     */
    $about_fields = array(
        'about_eyebrow' => 'Eyebrow',
        'about_title' => 'Title (HTML allowed)',
        'about_p1' => 'Paragraph 1',
        'about_p2' => 'Paragraph 2',
        'mission_title' => 'Mission title',
        'mission_text' => 'Mission text',
        'vision_title' => 'Vision title',
        'vision_text' => 'Vision text',
    );

    foreach ($about_fields as $k => $l) {

        $type = in_array(
            $k,
            array(
                'about_p1',
                'about_p2',
                'mission_text',
                'vision_text'
            ),
            true
        ) ? 'textarea' : 'text';

        $add($k, $l, $type, 'about');
    }


    /*
     * ---------------------------------------------------------
     * SERVICES
     * ---------------------------------------------------------
     */
    $service_intro = array(
        'services_eyebrow' => 'Eyebrow',
        'services_title' => 'Title (HTML allowed)',
        'services_intro' => 'Intro',
    );

    foreach ($service_intro as $k => $l) {

        $type = ($k === 'services_intro') ? 'textarea' : 'text';

        $add($k, $l, $type, 'services');
    }


    for ($i = 1; $i <= 5; $i++) {

        foreach (array('title', 'desc', 'url') as $x) {

            if ($x === 'url') {
                $type = 'url';
            } elseif ($x === 'desc') {
                $type = 'textarea';
            } else {
                $type = 'text';
            }

            $add(
                'service' . $i . '_' . $x,
                'Service ' . $i . ' ' . ucfirst($x),
                $type,
                'services'
            );
        }
    }


    /*
     * ---------------------------------------------------------
     * HOW WE WORK / PROCESS
     * ---------------------------------------------------------
     */
    $process_intro = array(
        'process_eyebrow' => 'Eyebrow',
        'process_title' => 'Title (HTML allowed)',
        'process_intro' => 'Intro',
    );

    foreach ($process_intro as $k => $l) {

        $type = ($k === 'process_intro') ? 'textarea' : 'text';

        $add($k, $l, $type, 'process');
    }


    for ($i = 1; $i <= 5; $i++) {

        foreach (array('title', 'desc', 'url') as $x) {

            if ($x === 'url') {
                $type = 'url';
            } elseif ($x === 'desc') {
                $type = 'textarea';
            } else {
                $type = 'text';
            }

            $add(
                'process' . $i . '_' . $x,
                'Step ' . $i . ' ' . ucfirst($x),
                $type,
                'process'
            );
        }
    }


    /*
     * ---------------------------------------------------------
     * INDUSTRIES
     * ---------------------------------------------------------
     */
    $industry_fields = array(
        'industries_eyebrow' => 'Eyebrow',
        'industries_title' => 'Title (HTML allowed)',
        'industries_intro' => 'Intro',
        'industries_button' => 'Button text',
        'industries_button_url' => 'Button URL',
        'industries' => 'Industries separated by |',
    );

    foreach ($industry_fields as $k => $l) {

        if ($k === 'industries_button_url') {
            $type = 'url';
        } elseif ($k === 'industries') {
            $type = 'textarea';
        } else {
            $type = 'text';
        }

        $add($k, $l, $type, 'industries');
    }


    /*
     * ---------------------------------------------------------
     * CONTACT
     * ---------------------------------------------------------
     */
    $contact_fields = array(
        'contact_eyebrow' => 'Eyebrow',
        'contact_title' => 'Title (HTML allowed)',
        'contact_intro' => 'Intro',
        'email' => 'Email',
        'phone' => 'Phone',
        'whatsapp_text' => 'WhatsApp text',
        'whatsapp_url' => 'WhatsApp URL',
        'company' => 'Company',
        'office_address' => 'Address',
        'footnote' => 'Footnote',
        'form_button' => 'Form button',
        'form_note' => 'Form note',
        'interest1' => 'Interest 1',
        'interest2' => 'Interest 2',
        'interest3' => 'Interest 3',
        'interest4' => 'Interest 4',
        'interest5' => 'Interest 5',
    );

    foreach ($contact_fields as $k => $l) {

        if (
            in_array(
                $k,
                array(
                    'contact_intro',
                    'footnote',
                    'form_note',
                    'office_address'
                ),
                true
            )
        ) {

            $type = 'textarea';

        } elseif (str_ends_with($k, '_url')) {

            $type = 'url';

        } else {

            $type = 'text';
        }

        $add($k, $l, $type, 'contact');
    }


    /*
     * ---------------------------------------------------------
     * FOOTER
     * ---------------------------------------------------------
     */
    $footer_fields = array(
        'footer_tagline' => 'Footer tagline',
        'copyright' => 'Copyright',
        'slogan' => 'Footer slogan',
        'facebook_url' => 'Facebook URL',
        'instagram_url' => 'Instagram URL',
        'linkedin_url' => 'LinkedIn URL',
    );

    foreach ($footer_fields as $k => $l) {

        $type = str_ends_with($k, '_url') ? 'url' : 'text';

        $add($k, $l, $type, 'footer');
    }


    /*
     * ---------------------------------------------------------
     * IMAGES
     * ---------------------------------------------------------
     *
     * These settings store WordPress attachment IDs.
     */
    $image_fields = array(
        'header_logo' => 'Header logo',
        'footer_logo' => 'Footer logo',
        'hero_image' => 'Hero image',
        'about_image' => 'About image',
        'favicon' => 'Favicon',
    );

    foreach ($image_fields as $k => $l) {
        $add($k, $l, 'image', 'images');
    }


    /*
     * Service images
     */
    for ($i = 1; $i <= 5; $i++) {

        $add(
            'service' . $i . '_image',
            'Service ' . $i . ' image',
            'image',
            'images'
        );
    }
}

add_action('customize_register', 'zelora_customizer');

function zelora_favicon()
{
    $favicon_id = get_theme_mod('zelora_favicon', '');

    // If a favicon was uploaded from Customizer
    if ($favicon_id && is_numeric($favicon_id)) {

        $favicon_url = wp_get_attachment_image_url(
            (int) $favicon_id,
            'full'
        );

        if ($favicon_url) {
            // Cache-bust on file modified time so a replaced/re-uploaded favicon updates immediately
            $favicon_path = get_attached_file((int) $favicon_id);
            $version = $favicon_path && file_exists($favicon_path) ? filemtime($favicon_path) : $favicon_id;
            $favicon_url = add_query_arg('v', $version, $favicon_url);
            echo '<link rel="icon" href="' . esc_url($favicon_url) . '">' . "\n";
            echo '<link rel="apple-touch-icon" href="' . esc_url($favicon_url) . '">' . "\n";
            return;
        }
    }

    // Default favicon
    $default_favicon = zelora_asset('images/favicon.ico');

    echo '<link rel="icon" href="' . esc_url($default_favicon) . '">' . "\n";
}

add_action('wp_head', 'zelora_favicon', 1);