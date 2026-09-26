<?php get_header(); ?>
<main>
  <section class="hero-x section-dark process-x" id="home"
    data-section-url="<?php echo esc_attr(zelora_url('home_url', '#home')); ?>">
    <div class="grid-noise"></div>
    <div class="hero-vignette"></div>
    <div class="hero-orbit hero-orbit-1"></div>
    <div class="hero-orbit hero-orbit-2"></div>
    <div class="container hero-x-grid">
      <div class="hero-x-copy reveal">
        <div class="eyebrow"><span></span> <?php echo wp_kses_post(zelora_mod('hero_eyebrow')); ?></div>
        <h1><?php echo wp_kses_post(zelora_mod('hero_title')); ?></h1>
        <p><?php echo wp_kses_post(zelora_mod('hero_desc')); ?></p>
        <div class="hero-buttons">
          <a href="<?php echo esc_url(zelora_url('hero_primary_url', '#contact')); ?>"
            class="btn btn-gold magnetic"><?php echo wp_kses_post(zelora_mod('hero_primary_text')); ?> <b>→</b></a>
          <a href="<?php echo esc_url(zelora_url('hero_secondary_url', '#services')); ?>"
            class="btn btn-play"><span>▶</span> <?php echo wp_kses_post(zelora_mod('hero_secondary_text')); ?></a>
        </div>
        <div class="hero-kpis">
          <div><a href="<?php echo esc_url(zelora_url('kpi1_url', '#industries')); ?>"><b><span
                  data-count="<?php echo esc_attr(zelora_mod('kpi1')); ?>">0</span>+</b><span><?php echo wp_kses_post(zelora_mod('kpi1_label')); ?></span></a>
          </div>
          <div><a href="<?php echo esc_url(zelora_url('kpi2_url', '#contact')); ?>"><b><span
                  data-count="<?php echo esc_attr(zelora_mod('kpi2')); ?>">0</span>+</b><span><?php echo wp_kses_post(zelora_mod('kpi2_label')); ?></span></a>
          </div>
          <div><a href="<?php echo esc_url(zelora_url('kpi3_url', '#contact')); ?>"><b><span
                  data-count="<?php echo esc_attr(zelora_mod('kpi3')); ?>">0</span>+</b><span><?php echo wp_kses_post(zelora_mod('kpi3_label')); ?></span></a>
          </div>
        </div>
      </div>

      <div class="hero-x-art reveal" data-parallax-wrap>
        <div class="art-orbit-path"></div>
        <div class="floating-cube cube-1"></div>
        <div class="floating-cube cube-2"></div>
        <div class="floating-cube cube-3"></div>
        <div class="hero-dashboard" data-depth="30" data-tilt-card>
          <img src="<?php echo esc_url(zelora_image('hero_image', 'images/hero-dashboard.png')); ?>"
            alt="Zelora analytics dashboard preview">
        </div>
        <div class="screen-glow"></div>
      </div>
    </div>

    <div class="hero-service-bar">
      <div class="reveal"><span class="svc-glyph"><i class="bi bi-diagram-3"></i></span><b>ERP
          Development</b><small>Solid foundations for complex operations.</small></div>
      <div class="reveal"><span class="svc-glyph"><i
            class="bi bi-phone"></i></span><b><?php echo wp_kses_post(zelora_mod('service2_title')); ?></b><small>Android
          and iOS apps for the people outside the office.</small></div>
      <div class="reveal"><span class="svc-glyph"><i class="bi bi-cpu"></i></span><b>AI
          Integration</b><small>Practical intelligence for everyday workflows.</small></div>
      <div class="reveal"><span class="svc-glyph"><i
            class="bi bi-graph-up-arrow"></i></span><b><?php echo wp_kses_post(zelora_mod('service4_title')); ?></b><small>Ideas,
          execution and measurable results.</small></div>
      <div class="reveal"><span class="svc-glyph"><i class="bi bi-gear"></i></span><b>Industrial
          Automation</b><small>Smarter operations for a stronger tomorrow.</small></div>
    </div>

    <div class="wave wave-hero"><svg viewBox="0 0 1440 150" preserveAspectRatio="none">
        <path d="M0 85 C150 12 285 118 455 66 C630 13 755 5 920 60 C1080 115 1260 151 1440 46 L1440 150 L0 150Z" />
      </svg></div>
  </section>

  <section class="about-x light" id="about"
    data-section-url="<?php echo esc_attr(zelora_url('about_url', '#about')); ?>">
    <div class="wave wave-about-top"><svg viewBox="0 0 1440 150" preserveAspectRatio="none">
        <path d="M0 88 C150 15 287 125 460 70 C620 21 755 13 920 66 C1080 117 1260 150 1440 47 L1440 0 L0 0Z" />
      </svg></div>
    <div class="about-dot-grid"></div>
    <span class="about-dot about-dot-a"></span>
    <span class="about-dot about-dot-b"></span>
    <span class="about-dot about-dot-c"></span>
    <div class="container about-x-grid">
      <div class="about-visual reveal">
        <div class="photo-disc"><img src="<?php echo esc_url(zelora_image('about_image', 'images/about.png')); ?>"
            alt="Modern Zelora workplace"></div>
        <div class="about-visual-glow"></div>
        <div class="photo-outline"><svg viewBox="0 0 300 300" aria-hidden="true">
            <path
              d="M150,25 C195,20 225,15 248,48 C272,80 278,108 260,138 C280,162 282,202 250,228 C222,250 232,278 188,275 C150,272 132,290 96,272 C56,252 62,220 40,192 C18,164 22,132 44,104 C62,80 58,50 92,36 C114,26 124,30 150,25 Z"
              fill="none" stroke="#5d56dc55" stroke-width="1.4" stroke-dasharray="7 6" />
          </svg></div>
        <!-- <div class="about-badge"><strong>7+</strong><span>Years of building<br>what matters</span><i>▮▮▮</i></div> -->
        <div class="scribble">People<br>Process<br>Technology <b>↘</b></div>
      </div>
      <div class="about-text reveal">
        <div class="eyebrow dark"><span></span> <?php echo wp_kses_post(zelora_mod('about_eyebrow')); ?></div>
        <h2><?php echo wp_kses_post(zelora_mod('about_title')); ?>
        </h2>
        <!-- <h2>30 years of industry legacy. Technology built <em>for businesses ready to grow.</em> -->
        </h2>
        <p><?php echo wp_kses_post(zelora_mod('about_p1')); ?>
        </p>
        <p><?php echo wp_kses_post(zelora_mod('about_p2')); ?>
        </p>
        <div class="about-list">
          <div class="about-point reveal"><span class="about-point-icon ico-1"><svg viewBox="0 0 24 24"
                aria-hidden="true">
                <path d="M12 2.5l7 3v6c0 5-3 8-7 9-4-1-7-4-7-9v-6l7-3Z" fill="none" stroke="#fff" stroke-width="1.8"
                  stroke-linejoin="round" />
                <path d="M8.4 12.2l2.4 2.4L16 9.3" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg></span>
            <div><strong><?php echo wp_kses_post(zelora_mod('mission_title')); ?></strong>
              <p><?php echo wp_kses_post(zelora_mod('mission_text')); ?></p>
            </div>
          </div>
          <div class="about-point reveal"><span class="about-point-icon ico-2"><svg viewBox="0 0 24 24"
                aria-hidden="true">
                <path d="M2 12s3.6-6.5 10-6.5S22 12 22 12s-3.6 6.5-10 6.5S2 12 2 12Z" fill="none" stroke="#fff"
                  stroke-width="1.8" stroke-linejoin="round" />
                <circle cx="12" cy="12" r="2.6" fill="#fff" />
              </svg></span>
            <div><strong><?php echo wp_kses_post(zelora_mod('vision_title')); ?></strong>
              <p><?php echo wp_kses_post(zelora_mod('vision_text')); ?></p>
            </div>
          </div>
        </div>
        <div class="about-note">Built<br>to make<br><em>a difference.</em></div>
      </div>
    </div>
    <div class="wave wave-about-bottom"><svg viewBox="0 0 1440 130" preserveAspectRatio="none">
        <path d="M0 48 C145 122 295 15 470 67 C640 119 775 142 940 72 C1115 8 1265 15 1440 77 L1440 130 L0 130Z" />
      </svg></div>
  </section>

  <section class="service-x light" id="services"
    data-section-url="<?php echo esc_attr(zelora_url('services_url', '#services')); ?>">
    <div class="container">
      <div class="section-head-center reveal">
        <div class="eyebrow dark"><span></span> <?php echo wp_kses_post(zelora_mod('services_eyebrow')); ?></div>
        <h2><?php echo wp_kses_post(zelora_mod('services_title')); ?></h2>
        <p><?php echo wp_kses_post(zelora_mod('services_intro')); ?></p>
      </div>
      <div class="service-scroller" data-touch-scroll>
        <div class="service-card reveal">
          <div class="card-media card-erp"><img
              src="<?php echo esc_url(zelora_image('service1_image', 'images/erp-development.png')); ?>"
              alt="<?php echo wp_kses_post(zelora_mod('service1_title')); ?> illustration"></div>
          <div class="service-icon icon-1"><i class="bi bi-diagram-3"></i></div>
          <h3>ERP Development</h3>
          <p><?php echo wp_kses_post(zelora_mod('service1_desc')); ?></p><a href="#contact">Learn more
            <span>→</span></a>
        </div>
        <div class="service-card reveal">
          <div class="card-media card-mobile"><img
              src="<?php echo esc_url(zelora_image('service2_image', 'images/mobile-apps.png')); ?>"
              alt="Mobile Apps illustration"></div>
          <div class="service-icon icon-2"><i class="bi bi-phone"></i></div>
          <h3>Mobile Apps</h3>
          <p><?php echo wp_kses_post(zelora_mod('service2_desc')); ?></p><a href="#contact">Learn more
            <span>→</span></a>
        </div>
        <div class="service-card reveal">
          <div class="card-media card-ai"><img
              src="<?php echo esc_url(zelora_image('service3_image', 'images/ai-integration.png')); ?>"
              alt="<?php echo wp_kses_post(zelora_mod('service3_title')); ?> illustration"></div>
          <div class="service-icon icon-3"><i class="bi bi-cpu"></i></div>
          <h3>AI Integration</h3>
          <p><?php echo wp_kses_post(zelora_mod('service3_desc')); ?></p><a href="#contact">Learn more
            <span>→</span></a>
        </div>
        <div class="service-card reveal">
          <div class="card-media card-growth"><img
              src="<?php echo esc_url(zelora_image('service4_image', 'images/business-growth.png')); ?>"
              alt="Business Consulting illustration"></div>
          <div class="service-icon icon-4"><i class="bi bi-graph-up-arrow"></i></div>
          <h3>Business Consulting</h3>
          <p><?php echo wp_kses_post(zelora_mod('service4_desc')); ?></p><a href="#contact">Learn more
            <span>→</span></a>
        </div>
        <div class="service-card reveal">
          <div class="card-media card-auto"><img
              src="<?php echo esc_url(zelora_image('service5_image', 'images/industry-automation.png')); ?>"
              alt="<?php echo wp_kses_post(zelora_mod('service5_title')); ?> illustration"></div>
          <div class="service-icon icon-5"><i class="bi bi-gear"></i></div>
          <h3>Industry Automation</h3>
          <p><?php echo wp_kses_post(zelora_mod('service5_desc')); ?></p><a href="#contact">Learn more
            <span>→</span></a>
        </div>
      </div>
      <div class="touch-hint">← drag on touch →</div>
    </div>
    <div class="wave wave-service-bottom"><svg viewBox="0 0 1440 130" preserveAspectRatio="none">
        <path d="M0 60 C150 122 315 10 480 64 C650 118 765 145 940 74 C1110 5 1272 20 1440 88 L1440 130 L0 130Z"
          fill="#0f1257" />
      </svg></div>
  </section>

  <section class="process-x section-dark" id="process"
    data-section-url="<?php echo esc_attr(zelora_url('process_url', '#process')); ?>">
    <div class="process-bg"></div>
    <div class="container">
      <div class="process-head reveal">
        <div>
          <div class="eyebrow"><span></span> <?php echo wp_kses_post(zelora_mod('process_eyebrow')); ?></div>
          <h2><?php echo wp_kses_post(zelora_mod('process_title')); ?></h2>
        </div>
        <p><?php echo wp_kses_post(zelora_mod('process_intro')); ?></p>
      </div>
      <div class="process-track reveal">
        <div class="journey-line"><b></b></div>
        <div class="journey-graph">
          <svg viewBox="0 0 1000 90" preserveAspectRatio="none" aria-hidden="true">
            <defs>
              <linearGradient id="journeyGrad" x1="0" y1="0" x2="1" y2="0">
                <stop offset="0" stop-color="#7770ec33" />
                <stop offset="0.5" stop-color="#f4f2ff" />
                <stop offset="1" stop-color="#7770ec33" />
              </linearGradient>
            </defs>
            <path
              d="M0,80 C41.67,80 83.33,57 125,57 C166.67,57 208.33,62 250,62 C291.67,62 333.33,39 375,39 C416.67,39 458.33,44 500,44 C541.67,44 583.33,21 625,21 C666.67,21 708.33,26 750,26 C791.67,26 833.33,3 875,3 C916.67,3 958.33,8 1000,8"
              fill="none" stroke="url(#journeyGrad)" stroke-width="2" stroke-linecap="round" />
          </svg>
          <span class="journey-star" style="left:8%;top:70px;--d:0s"></span>
          <span class="journey-star" style="left:20%;top:60px;--d:.4s"></span>
          <span class="journey-star" style="left:33%;top:50px;--d:.8s"></span>
          <span class="journey-star" style="left:45%;top:42px;--d:1.2s"></span>
          <span class="journey-star" style="left:58%;top:33px;--d:1.6s"></span>
          <span class="journey-star" style="left:70%;top:24px;--d:2s"></span>
          <span class="journey-star" style="left:82%;top:14px;--d:2.4s"></span>
          <span class="journey-star" style="left:92%;top:6px;--d:2.8s"></span>
          <span class="journey-star" style="left:15%;top:70px;--d:3.2s"></span>
          <span class="journey-dot"></span>
        </div>
        <article>
          <div class="proc-circle"><svg viewBox="0 0 24 24" aria-hidden="true">
              <circle cx="10" cy="10" r="6" fill="none" stroke="#fff" stroke-width="2" />
              <line x1="14.5" y1="14.5" x2="20" y2="20" stroke="#fff" stroke-width="2" stroke-linecap="round" />
            </svg></div><small>01</small><strong><?php echo wp_kses_post(zelora_mod('process1_title')); ?></strong>
          <p><?php echo wp_kses_post(zelora_mod('process1_desc')); ?></p>
        </article>
        <article>
          <div class="proc-circle"><svg viewBox="0 0 24 24" aria-hidden="true">
              <rect x="5" y="3" width="14" height="18" rx="2" fill="none" stroke="#fff" stroke-width="2" />
              <rect x="9" y="1.4" width="6" height="3" rx="1" fill="#fff" />
              <line x1="8" y1="10.5" x2="16" y2="10.5" stroke="#fff" stroke-width="1.6" stroke-linecap="round" />
              <line x1="8" y1="14.5" x2="16" y2="14.5" stroke="#fff" stroke-width="1.6" stroke-linecap="round" />
              <line x1="8" y1="18.5" x2="13" y2="18.5" stroke="#fff" stroke-width="1.6" stroke-linecap="round" />
            </svg></div><small>02</small><strong><?php echo wp_kses_post(zelora_mod('process2_title')); ?></strong>
          <p><?php echo wp_kses_post(zelora_mod('process2_desc')); ?></p>
        </article>
        <article>
          <div class="proc-circle"><svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M9 6 L3 12 L9 18" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15 6 L21 12 L15 18" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg></div><small>03</small><strong><?php echo wp_kses_post(zelora_mod('process3_title')); ?></strong>
          <p><?php echo wp_kses_post(zelora_mod('process3_desc')); ?></p>
        </article>
        <article>
          <div class="proc-circle"><svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M12 2c3 2 5 6 5 10 0 2-1 4-2 5l-1 3-2-2-2 2-1-3c-1-1-2-3-2-5 0-4 2-8 5-10z" fill="none"
                stroke="#fff" stroke-width="1.6" stroke-linejoin="round" />
              <circle cx="12" cy="10" r="1.8" fill="#fff" />
            </svg></div><small>04</small><strong><?php echo wp_kses_post(zelora_mod('process4_title')); ?></strong>
          <p><?php echo wp_kses_post(zelora_mod('process4_desc')); ?></p>
        </article>
        <article>
          <div class="proc-circle"><svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M4 13v-1a8 8 0 0 1 16 0v1" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" />
              <rect x="2.5" y="13" width="4" height="6" rx="2" fill="#fff" />
              <rect x="17.5" y="13" width="4" height="6" rx="2" fill="#fff" />
            </svg></div><small>05</small><strong><?php echo wp_kses_post(zelora_mod('process5_title')); ?></strong>
          <p><?php echo wp_kses_post(zelora_mod('process5_desc')); ?></p>
        </article>
      </div>
      <div class="process-note">Progress.<br>Partnership.<br><em>Possibilities.</em></div>
    </div>
    <div class="wave wave-process-bottom">
      <!-- <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0 70 C150 5 310 110 480 58 C660 0 765 9 935 65 C1100 120 1260 130 1440 43 L1440 120 L0 120Z"
            fill="#fff" />
        </svg> -->
      <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path d="M0 70 C150 5 310 110 480 58 C660 0 765 9 935 65 C1100 120 1260 130 1440 43 L1440 120 L0 120Z" />
      </svg>
    </div>
  </section>

  <section class="industries-x light" id="industries"
    data-section-url="<?php echo esc_attr(zelora_url('industries_url', '#industries')); ?>">
    <div class="container industries-grid">
      <div class="reveal">
        <div class="eyebrow dark"><span></span> <?php echo wp_kses_post(zelora_mod('industries_eyebrow')); ?></div>
        <h2><?php echo wp_kses_post(zelora_mod('industries_title')); ?></h2>
        <p><?php echo wp_kses_post(zelora_mod('industries_intro')); ?></p><a
          href="<?php echo esc_url(zelora_url('industries_button_url', '#contact')); ?>"><?php echo wp_kses_post(zelora_mod('industries_button')); ?></a>
      </div>
      <div class="industry-pills reveal">
        <?php foreach (array_filter(array_map('trim', explode('|', zelora_mod('industries')))) as $industry): ?>
          <span><?php echo esc_html($industry); ?></span>
        <?php endforeach; ?>
        <div class="industry-scribble">Real industries.<br><em>Real impact.</em> ↙</div>
      </div>
    </div>
  </section>

  <section class="contact-x section-dark" id="contact"
    data-section-url="<?php echo esc_attr(zelora_url('contact_url', '#contact')); ?>">
    <div class="contact-bg"></div>
    <div class="container contact-x-grid">
      <div class="contact-copy reveal">
        <div class="eyebrow"><span></span> <?php echo wp_kses_post(zelora_mod('contact_eyebrow')); ?></div>
        <h2>Tell us where your business <em>needs to move next.</em></h2>
        <p><?php echo wp_kses_post(zelora_mod('contact_intro')); ?></p>
        <div class="contact-lines">
          <div class="contact-line">
            <i class="bi bi-geo-alt contact-icon" aria-hidden="true"></i>
            <span class="contact-value">
                <?php echo nl2br(esc_html(zelora_mod('office_address'))); ?>
            </span>
          </div>
          <div class="contact-line">
            <i class="bi bi-envelope contact-icon" aria-hidden="true"></i>
            <a
              href="mailto:<?php echo esc_attr(zelora_mod('email')); ?>"><?php echo esc_attr(zelora_mod('email')); ?></a>
          </div>
          <div class="contact-line">
            <i class="bi bi-telephone contact-icon" aria-hidden="true"></i>
            <a
              href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', zelora_mod('phone'))); ?>"><?php echo wp_kses_post(zelora_mod('phone')); ?></a>
          </div>
          <div class="contact-line">
            <i class="bi bi-whatsapp contact-icon" aria-hidden="true"></i>
            <a href="#"><?php echo wp_kses_post(zelora_mod('whatsapp_text')); ?></a>
          </div>
          <!-- <div class="contact-line">
            <span class="contact-label">Company</span>
            <span class="contact-value"><?php echo wp_kses_post(zelora_mod('company')); ?></span>
          </div> -->
        </div>
        <p class="contact-footnote"><?php echo wp_kses_post(zelora_mod('footnote')); ?></p>
      </div>
      <form class="contact-card reveal" id="contactForm">

        <input
            type="hidden"
            name="nonce"
            value="<?php echo esc_attr(wp_create_nonce('zelora_contact_nonce')); ?>"
        >

        <div class="row">
            <label>
                Full name*
                <input
                    required
                    name="name"
                    placeholder="Your name"
                >
            </label>

            <label>
                Company name
                <input
                    name="company"
                    placeholder="Company"
                >
            </label>
        </div>

        <div class="row">
            <label>
                Work email*
                <input
                    required
                    type="email"
                    name="email"
                    placeholder="you@company.com"
                >
            </label>

            <label>
                Phone number
                <input
                    name="phone"
                    placeholder="+91"
                >
            </label>
        </div>

        <label>
            What are you interested in?

            <select name="interest">
                <option value="<?php echo esc_attr(zelora_mod('interest1')); ?>">
                    <?php echo esc_html(zelora_mod('interest1')); ?>
                </option>

                <option value="<?php echo esc_attr(zelora_mod('interest2')); ?>">
                    <?php echo esc_html(zelora_mod('interest2')); ?>
                </option>

                <option value="<?php echo esc_attr(zelora_mod('interest3')); ?>">
                    <?php echo esc_html(zelora_mod('interest3')); ?>
                </option>

                <option value="<?php echo esc_attr(zelora_mod('interest4')); ?>">
                    <?php echo esc_html(zelora_mod('interest4')); ?>
                </option>

                <option value="<?php echo esc_attr(zelora_mod('interest5')); ?>">
                    <?php echo esc_html(zelora_mod('interest5')); ?>
                </option>
            </select>
        </label>

        <label>
            Tell us a little more...

            <textarea
                name="message"
                rows="5"
                placeholder="Tell us about your requirement"
            ></textarea>
        </label>

        <button
            class="btn btn-gold magnetic"
            type="submit"
            id="contactSubmitBtn"
        >
            <span class="btn-text">Send message</span>
            <span class="btn-loading" style="display:none;">
                Sending...
            </span>
            <b>→</b>
        </button>

        <div
            id="contactMessage"
            class="contact-message"
            style="display:none;"
        ></div>

        <small>
            <?php echo wp_kses_post(zelora_mod('form_note')); ?>
        </small>

    </form>
      <!-- <form class="contact-card reveal" id="contactForm"><input type="hidden" name="nonce"
          value="<?php echo esc_attr(wp_create_nonce('zelora_contact_nonce')); ?>">
        <div class="row"><label>Full name*<input required name="name" placeholder="Your name"></label><label>Company
            name<input name="company" placeholder="Company"></label></div>
        <div class="row"><label>Work email*<input required type="email" name="email"
              placeholder="you@company.com"></label><label>Phone number<input name="phone" placeholder="+91"></label>
        </div>
        <label>What are you interested in?<select name="interest">
            <option><?php echo wp_kses_post(zelora_mod('interest1')); ?></option>
            <option><?php echo wp_kses_post(zelora_mod('interest2')); ?></option>
            <option><?php echo wp_kses_post(zelora_mod('interest3')); ?></option>
            <option><?php echo wp_kses_post(zelora_mod('interest4')); ?></option>
            <option><?php echo wp_kses_post(zelora_mod('interest5')); ?></option>
          </select></label>
        <label>Tell us a little more...<textarea name="message" rows="5"
            placeholder="Tell us about your requirement"></textarea></label>
        <button class="btn btn-gold magnetic" type="submit">Send message <b>→</b></button>
        <small><?php echo wp_kses_post(zelora_mod('form_note')); ?></small>
      </form> -->
    </div>
  </section>
</main>
<?php get_footer(); ?>