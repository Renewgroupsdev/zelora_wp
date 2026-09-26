<footer class="footer-x">
    <div class="container footer-top">
        <a class="brand" href="<?php echo esc_url(zelora_url('home_url', home_url('/'))); ?>"><img class="logo-box"
                src="<?php echo esc_url(zelora_image('footer_logo', 'images/zelora-logo.png')); ?>" alt="Zelora"></a>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer-menu', 'fallback_cb' => 'zelora_footer_fallback')); ?>
        </nav>
        <div class="socials"><a class="social" href="<?php echo esc_url(zelora_mod('facebook_url')); ?>" target="_blank"
                rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a><a class="social"
                href="<?php echo esc_url(zelora_mod('instagram_url')); ?>" target="_blank" rel="noopener"
                aria-label="Instagram"><i class="bi bi-instagram"></i></a><a class="social"
                href="<?php echo esc_url(zelora_mod('linkedin_url')); ?>" target="_blank" rel="noopener"
                aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a></div>
    </div>
    <div class="container footer-bottom">
        <span><?php echo wp_kses_post(zelora_mod('copyright')); ?></span><span><?php echo wp_kses_post(zelora_mod('slogan')); ?></span>
    </div>
</footer><button class="back-to-top" type="button" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>
<?php wp_footer(); ?>
</body>

</html>