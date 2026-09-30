<?php
/**
 * Template Name: Service Page
 *
 * Every text/image block below is editable per-page via the
 * "Service Page Content" meta box (see inc/service-page-fields.php).
 * Fields fall back to sample content when left blank, so a freshly
 * created page already looks like the reference design.
 */
get_header();
if (have_posts()):
    while (have_posts()):
        the_post();
        $post_id = get_the_ID();
        ?>
<main class="svc-page">

  <section class="hero-x svc-hero section-dark" id="svc-hero">
    <div class="grid-noise"></div>
    <div class="hero-vignette"></div>
    <div class="hero-orbit hero-orbit-1"></div>
    <div class="hero-orbit hero-orbit-2"></div>
    <div class="container hero-x-grid">
      <div class="hero-x-copy reveal">
        <div class="eyebrow"><span></span> <?php echo esc_html(zelora_service_field($post_id, 'hero_eyebrow')); ?></div>
        <h1><?php echo esc_html(zelora_service_field($post_id, 'hero_title')); ?></h1>
        <p><?php echo esc_html(zelora_service_field($post_id, 'hero_desc')); ?></p>
        <div class="hero-buttons">
          <a href="#svc-contact-modal" class="btn btn-gold magnetic js-open-contact-modal"
            data-modal-target="svc-contact-modal"><?php echo esc_html(zelora_service_field($post_id, 'hero_btn1_text')); ?> <b>→</b></a>
          <a href="<?php echo esc_url(zelora_service_field($post_id, 'hero_btn2_url')); ?>"
            class="btn btn-outline"><?php echo esc_html(zelora_service_field($post_id, 'hero_btn2_text')); ?></a>
        </div>
      </div>
      <div class="hero-x-art reveal" data-parallax-wrap>
        <div class="art-orbit-path"></div>
        <div class="floating-cube cube-1"></div>
        <div class="floating-cube cube-2"></div>
        <div class="floating-cube cube-3"></div>
        <div class="hero-dashboard" data-depth="30" data-tilt-card>
          <img src="<?php echo esc_url(zelora_service_image($post_id, 'hero_image')); ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?> preview">
        </div>
        <div class="screen-glow"></div>
      </div>
    </div>
    <div class="wave svc-wave-bottom"><svg viewBox="0 0 1440 150" preserveAspectRatio="none">
        <path d="M0 85 C150 12 285 118 455 66 C630 13 755 5 920 60 C1080 115 1260 151 1440 46 L1440 150 L0 150Z" />
      </svg></div>
  </section>

  <section class="svc-intro light" id="svc-intro">
    <div class="container svc-intro-grid">
      <div class="svc-intro-media reveal">
        <img src="<?php echo esc_url(zelora_service_image($post_id, 'intro_image')); ?>" alt="<?php echo esc_attr(zelora_service_field($post_id, 'intro_title')); ?>">
      </div>
      <div class="svc-intro-copy reveal">
        <h2><?php echo esc_html(zelora_service_field($post_id, 'intro_title')); ?></h2>
        <p><?php echo esc_html(zelora_service_field($post_id, 'intro_p1')); ?></p>
        <p><?php echo esc_html(zelora_service_field($post_id, 'intro_p2')); ?></p>
      </div>
    </div>
  </section>

  <section class="svc-deliver light" id="svc-deliver">
    <div class="container">
      <div class="section-head-center reveal">
        <div class="eyebrow dark"><span></span> <?php echo esc_html(zelora_service_field($post_id, 'deliver_eyebrow')); ?></div>
        <h2><?php echo esc_html(zelora_service_field($post_id, 'deliver_title')); ?></h2>
      </div>
      <div class="svc-deliver-grid">
        <?php foreach (zelora_service_repeater($post_id, 'deliver_cards') as $card): ?>
          <div class="svc-deliver-card reveal">
            <div class="svc-deliver-icon"><i class="<?php echo esc_attr(zelora_service_icon_class($card[0] ?? '')); ?>"></i></div>
            <h3><?php echo esc_html($card[1] ?? ''); ?></h3>
            <p><?php echo esc_html($card[2] ?? ''); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php $svc_areas = zelora_service_repeater($post_id, 'areas_items'); ?>
  <section class="svc-areas light" id="svc-areas">
    <div class="container svc-areas-grid">
      <div class="svc-area-list">
        <div class="reveal" style="margin-bottom:8px">
          <h2 style="font-family:var(--serif);font-size:clamp(26px,2vw,36px);font-weight:600;margin:0 0 6px">
            <?php echo esc_html(zelora_service_field($post_id, 'areas_title')); ?></h2>
        </div>
        <?php foreach ($svc_areas as $area): ?>
          <div class="svc-area-item reveal">
            <div class="svc-area-icon"><i class="<?php echo esc_attr(zelora_service_icon_class($area[0] ?? '')); ?>"></i></div>
            <div><strong><?php echo esc_html($area[1] ?? ''); ?></strong>
              <p><?php echo esc_html($area[2] ?? ''); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="svc-areas-visual reveal">
        <img src="<?php echo esc_url(zelora_service_image($post_id, 'areas_image')); ?>" alt="<?php echo esc_attr(zelora_service_field($post_id, 'areas_title')); ?>">
        <?php foreach (array_slice($svc_areas, 0, 6) as $i => $area): ?>
          <span class="svc-tag svc-tag-<?php echo esc_attr($i + 1); ?>">
            <i class="<?php echo esc_attr(zelora_service_icon_class($area[0] ?? '')); ?>"></i> <?php echo esc_html($area[1] ?? ''); ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="svc-why" id="svc-why">
    <div class="wave svc-wave-top"><svg viewBox="0 0 1440 150" preserveAspectRatio="none">
        <path fill="#3c1721" d="M0 85 C150 12 285 118 455 66 C630 13 755 5 920 60 C1080 115 1260 151 1440 46 L1440 0 L0 0Z" />
      </svg></div>
    <div class="container">
      <div class="reveal">
        <div class="eyebrow"><span></span> <?php echo esc_html(zelora_service_field($post_id, 'why_eyebrow')); ?></div>
        <h2><?php echo esc_html(zelora_service_field($post_id, 'why_title')); ?></h2>
        <p class="svc-why-intro"><?php echo esc_html(zelora_service_field($post_id, 'why_intro')); ?></p>
      </div>
      <div class="svc-why-grid">
        <?php foreach (zelora_service_repeater($post_id, 'why_items') as $item): ?>
          <div class="svc-why-item reveal"><span class="svc-why-icon"><i
                class="<?php echo esc_attr(zelora_service_icon_class($item[0] ?? '')); ?>"></i></span><span><?php echo esc_html($item[1] ?? ''); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="svc-process light" id="svc-process">
    <div class="container">
      <div class="section-head-center reveal">
        <h2><?php echo esc_html(zelora_service_field($post_id, 'process_title')); ?></h2>
        <p><?php echo esc_html(zelora_service_field($post_id, 'process_intro')); ?></p>
      </div>
      <div class="svc-process-track">
        <?php foreach (zelora_service_repeater($post_id, 'process_steps') as $i => $step): ?>
          <div class="svc-step reveal<?php echo $i % 2 === 1 ? ' is-alt' : ''; ?>">
            <div class="svc-step-num"><?php echo esc_html(str_pad($i + 1, 2, '0', STR_PAD_LEFT)); ?></div>
            <strong><?php echo esc_html($step[1] ?? ''); ?></strong>
            <p><?php echo esc_html($step[2] ?? ''); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="svc-growth" id="svc-growth">
    <div class="container svc-growth-grid">
      <div class="svc-growth-copy reveal">
        <h2><?php echo esc_html(zelora_service_field($post_id, 'growth_title')); ?></h2>
        <p><?php echo esc_html(zelora_service_field($post_id, 'growth_desc')); ?></p>
        <div class="svc-growth-row">
          <?php foreach (zelora_service_repeater($post_id, 'growth_pills') as $pill): ?>
            <div class="svc-growth-pill"><i class="<?php echo esc_attr(zelora_service_icon_class($pill[0] ?? '')); ?>"></i><span><?php echo esc_html($pill[1] ?? ''); ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="svc-growth-visual reveal">
        <div class="svc-growth-badge"><i class="bi bi-graph-up-arrow"></i> <?php echo esc_html(zelora_service_field($post_id, 'growth_badge_text')); ?></div>
      </div>
    </div>
  </section>

  <section class="svc-who light" id="svc-who">
    <div class="container">
      <div class="section-head-center reveal">
        <div class="eyebrow dark"><span></span> <?php echo esc_html(zelora_service_field($post_id, 'who_eyebrow')); ?></div>
        <h2><?php echo esc_html(zelora_service_field($post_id, 'who_title')); ?></h2>
      </div>
      <div class="svc-who-grid">
        <?php foreach (zelora_service_repeater($post_id, 'who_items') as $item): ?>
          <div class="svc-who-card reveal"><i class="<?php echo esc_attr(zelora_service_icon_class($item[0] ?? '')); ?>"></i><span><?php echo esc_html($item[1] ?? ''); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="svc-outcome" id="svc-outcome">
    <div class="container reveal">
      <div class="eyebrow dark"><span></span> <?php echo esc_html(zelora_service_field($post_id, 'outcome_eyebrow')); ?></div>
      <h2><?php echo esc_html(zelora_service_field($post_id, 'outcome_title')); ?></h2>
      <div class="svc-outcome-tags">
        <?php foreach (zelora_service_repeater($post_id, 'outcome_tags') as $tag): ?>
          <span><?php echo esc_html($tag[0] ?? ''); ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="svc-cta section-dark" id="svc-cta">
    <div class="wave svc-wave-top"><svg viewBox="0 0 1440 150" preserveAspectRatio="none">
        <path fill="#3c1721" d="M0 85 C150 12 285 118 455 66 C630 13 755 5 920 60 C1080 115 1260 151 1440 46 L1440 0 L0 0Z" />
      </svg></div>
    <div class="container svc-cta-inner reveal">
      <div>
        <h2><?php echo esc_html(zelora_service_field($post_id, 'cta_title')); ?></h2>
        <p><?php echo esc_html(zelora_service_field($post_id, 'cta_desc')); ?></p>
      </div>
      <a href="#svc-contact-modal" class="btn btn-gold magnetic js-open-contact-modal"
        data-modal-target="svc-contact-modal"><?php echo esc_html(zelora_service_field($post_id, 'cta_btn_text')); ?>
        <b>→</b></a>
    </div>
  </section>

</main>

<div class="svc-modal" id="svc-contact-modal" aria-hidden="true" role="dialog" aria-modal="true"
  aria-labelledby="svcContactModalTitle">
  <div class="svc-modal-backdrop" data-modal-close></div>
  <div class="svc-modal-panel contact-card">
    <button type="button" class="svc-modal-close" data-modal-close aria-label="Close">&times;</button>
    <div class="svc-modal-head">
      <div class="eyebrow"><span></span> GET IN TOUCH</div>
      <h3 id="svcContactModalTitle">Tell us about your project</h3>
      <p>Share a few details and our team will get back to you shortly.</p>
    </div>
    <form id="contactForm">
      <input type="hidden" name="nonce" value="<?php echo esc_attr(wp_create_nonce('zelora_contact_nonce')); ?>">
      <div class="row">
        <label>Full name*
          <input required name="name" placeholder="Your name">
        </label>
        <label>Company name
          <input name="company" placeholder="Company">
        </label>
      </div>
      <div class="row">
        <label>Email*
          <input required type="email" name="email" placeholder="you@company.com">
        </label>
        <label>Phone number
          <input name="phone" placeholder="+91">
        </label>
      </div>
      <?php $svc_default_interest = zelora_service_field($post_id, 'default_interest'); ?>
      <label>How can we help you?
        <select name="interest">
          <?php for ($svc_i = 1; $svc_i <= 5; $svc_i++): $svc_interest_option = zelora_mod('interest' . $svc_i); ?>
            <option value="<?php echo esc_attr($svc_interest_option); ?>" <?php selected($svc_default_interest, $svc_interest_option); ?>>
              <?php echo esc_html($svc_interest_option); ?></option>
          <?php endfor; ?>
        </select>
      </label>
      <label>Tell us a little more...
        <textarea name="message" rows="4" placeholder="Tell us about your requirement"></textarea>
      </label>
      <button class="btn btn-gold magnetic" type="submit" id="contactSubmitBtn">
        <span class="btn-text">Send message</span>
        <span class="btn-loading" style="display:none;">Sending...</span>
        <b>→</b>
      </button>
      <div id="contactMessage" class="contact-message" style="display:none;"></div>
      <!-- <small><?php // echo wp_kses_post(zelora_mod('form_note')); ?></small> -->
    </form>
  </div>
</div>
        <?php
    endwhile;
endif;
get_footer();
