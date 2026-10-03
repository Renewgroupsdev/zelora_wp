<?php
if (!defined('ABSPATH'))
    exit;
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="theme-color" content="#280c17">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <svg width="0" height="0" style="position:absolute" aria-hidden="true">
        <defs>
            <clipPath id="blobOval" clipPathUnits="objectBoundingBox">
                <path
                    d="M0.5,0.0833 C0.65,0.0667 0.75,0.05 0.8267,0.16 C0.9067,0.2667 0.9267,0.36 0.8667,0.46 C0.9333,0.54 0.94,0.6733 0.8333,0.76 C0.74,0.8333 0.7733,0.9267 0.6267,0.9167 C0.5,0.9067 0.44,0.9667 0.32,0.9067 C0.1867,0.84 0.2067,0.7333 0.1333,0.64 C0.06,0.5467 0.0733,0.44 0.1467,0.3467 C0.2067,0.2667 0.1933,0.1667 0.3067,0.12 C0.38,0.0867 0.4133,0.1 0.5,0.0833 Z" />
            </clipPath>
        </defs>
    </svg>
    <div class="cursor-light"></div>
    <div class="read-progress"></div>
    <header class="topbar">
        <a class="brand" href="<?php echo esc_url(zelora_url('home_url', home_url('/'))); ?>">
            <img class="logo-box" src="<?php echo esc_url(zelora_image('header_logo', 'images/zelora-logo.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
        </a>
        <!-- <a class="brand" href="<?php echo esc_url(zelora_url('home_url', home_url('/'))); ?>">
            <img class="logo-box" src="<?php echo esc_url(zelora_image('header_logo', 'images/zelora-logo.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
            <span class="brand-copy"><b>ZELORA</b><small><?php echo esc_html(zelora_mod('site_tagline')); ?></small></span>
        </a> -->
        <nav class="main-nav" aria-label="Primary navigation">
            <?php
            // Service Page template uses its own menu (falls back to the primary one if none is assigned).
            $zelora_menu_location = (is_page_template('service_page.php') && has_nav_menu('service')) ? 'service' : 'primary';
            wp_nav_menu(array('theme_location' => $zelora_menu_location, 'container' => false, 'menu_class' => 'wp-primary-menu', 'depth' => 2, 'fallback_cb' => 'zelora_primary_fallback'));
            ?>
        </nav>
        <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false"><i></i><i></i></button>
    </header>
    <div class="nav-backdrop"></div>