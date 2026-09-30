$(function(){
  function loadLocalFonts() {

      if (document.getElementById('local-fonts')) {
          return;
      }

      const localFonts = document.createElement('link');

      localFonts.id = 'local-fonts';
      localFonts.rel = 'stylesheet';
      localFonts.href = (window.ZeloraTheme && ZeloraTheme.assetUrl ? ZeloraTheme.assetUrl + 'css/fonts.css' : 'assets/css/fonts.css');

      document.head.appendChild(localFonts);

      console.log('Google Fonts failed. Local fonts.css loaded.');

  }
  const $doc=$(document), $win=$(window), $body=$('body'), $header=$('.topbar');

  function updateScrollUI(){
    const top=$win.scrollTop(), max=$doc.height()-$win.height();
    $('.read-progress').css('width',(max?top/max*100:0)+'%');
    $header.toggleClass('scrolled',top>30);
    $('.back-to-top').toggleClass('show',top>400);
  }
  $win.on('scroll',updateScrollUI); updateScrollUI();

  $('.back-to-top').on('click',function(){
    $('html,body').animate({scrollTop:0},650);
  });

  $('.nav-toggle').on('click',function(){
    $('.main-nav').toggleClass('open');
    $('.nav-backdrop').toggleClass('show');
    $body.toggleClass('menu-open');
  });
  $('.main-nav a, .nav-backdrop').on('click',function(){
    $('.main-nav').removeClass('open');
    $('.nav-backdrop').removeClass('show');
    $body.removeClass('menu-open');
  });
  $doc.on('click',function(e){
    if(!$('.main-nav').hasClass('open')) return;
    if($(e.target).closest('.main-nav, .nav-toggle').length) return;
    $('.main-nav').removeClass('open');
    $('.nav-backdrop').removeClass('show');
    $body.removeClass('menu-open');
  });
  $doc.on('keydown',function(e){
    if(e.key==='Escape' && $('.main-nav').hasClass('open')){
      $('.main-nav').removeClass('open');
      $('.nav-backdrop').removeClass('show');
      $body.removeClass('menu-open');
    }
  });

  const io=new IntersectionObserver(function(entries){
    $.each(entries,function(_,entry){
      if(entry.isIntersecting){
        $(entry.target).addClass('in-view');
        io.unobserve(entry.target);
      }
    });
  },{threshold:.13,rootMargin:'0px 0px -55px'});
  $('.reveal').each(function(){io.observe(this);});

  $(document).on('pointermove',function(e){
    if(window.innerWidth>800){
      $('.cursor-light').css({left:e.clientX,top:e.clientY});
    }
  });

  // Mouse + touch hero parallax. The dashboard layers respond to finger movement too.
  const $hero=$('.hero-x'), $art=$('.hero-x-art');
  function moveHero(x,y){
    const r=$hero[0].getBoundingClientRect();
    const px=(x-r.left)/r.width-.5, py=(y-r.top)/r.height-.5;
    $art.css('transform','translate3d('+(px*10)+'px,'+(py*7)+'px,0)');
    $art.find('[data-depth]').each(function(){
      const depth=parseFloat($(this).data('depth'))||20;
      $(this).css('transform','translate3d('+(px*depth*.45)+'px,'+(py*depth*.32)+'px,0)');
    });
  }
  $hero.on('pointermove',function(e){ moveHero(e.clientX,e.clientY); });
  $hero.on('pointerleave',function(){
    $art.css('transform','');
    $art.find('[data-depth]').each(function(){ $(this).css('transform',''); });
  });
  $hero.on('touchmove',function(e){
    const t=e.originalEvent.touches[0];
    if(t){ moveHero(t.clientX,t.clientY); }
  });

  // Drag the service deck horizontally on phones/tablets.
  const $deck=$('[data-touch-scroll]');
  let dragging=false,startX=0,startScroll=0;
  $deck.on('pointerdown',function(e){
    if(window.innerWidth>760)return;
    dragging=true; startX=e.clientX; startScroll=this.scrollLeft;
    $(this).css('scroll-snap-type','none');
  });
  $deck.on('pointermove',function(e){
    if(!dragging)return;
    this.scrollLeft=startScroll-(e.clientX-startX)*1.2;
  });
  $deck.on('pointerup pointercancel pointerleave',function(){
    dragging=false; $(this).css('scroll-snap-type','x mandatory');
  });

  // Touch-friendly 3D tilt for the main dashboard.
  $('[data-tilt-card]').on('pointermove',function(e){
    if(window.innerWidth<700)return;
    const r=this.getBoundingClientRect();
    const x=(e.clientX-r.left)/r.width-.5, y=(e.clientY-r.top)/r.height-.5;
    $(this).css('transform','perspective(1000px) rotateX('+(-y*6)+'deg) rotateY('+(x*8-4)+'deg)');
  }).on('pointerleave',function(){ $(this).css('transform',''); });

  // Magnetic CTA buttons.
  $('.magnetic').on('pointermove',function(e){
    if(window.innerWidth<800)return;
    const r=this.getBoundingClientRect();
    const x=e.clientX-(r.left+r.width/2), y=e.clientY-(r.top+r.height/2);
    $(this).css('transform','translate('+(x*.10)+'px,'+(y*.10)+'px)');
  }).on('pointerleave',function(){ $(this).css('transform',''); });

  // Service hover / touch focus.
  $('.service-card').on('mouseenter pointerdown',function(){
    $('.service-card').removeClass('focus');
    $(this).addClass('focus');
  }).on('mouseleave',function(){ $(this).removeClass('focus'); });

  // jQuery smooth anchor movement.
  $('a[href^="#"]').on('click',function(e){
    const id=$(this).attr('href');
    if(id && id!=='#' && $(id).length){
      e.preventDefault();
      $('html,body').animate({scrollTop:$(id).offset().top-64},650);
    }
  });

  // Animated counters (hero-kpis numbers, driven by [data-count] spans)
  let countersDone = false;
  function animateCounters() {
    if (countersDone) return;
    countersDone = true;
    $('[data-count]').each(function () {
      const $this = $(this), end = parseInt($this.data('count'), 10), suffix = $this.data('suffix') || '';
      const isYear = $this.data('year');
      const format = (value) => isYear ? `${value}` : `${value.toLocaleString()}`;
      $({value: 0}).animate({value: end}, {
        duration: 1300, easing: 'swing',
        step: function () { $this.text(`${format(Math.floor(this.value))}${suffix}`); },
        complete: function () { $this.text(`${format(end)}${suffix}`); }
      });
    });
  }
  const heroKpis = document.querySelector('.hero-kpis');
  if (heroKpis) {
    const counterIO = new IntersectionObserver(function (entries) {
      if (entries.some(function (entry) { return entry.isIntersecting; })) {
        animateCounters();
        counterIO.disconnect();
      }
    }, { threshold: .3 });
    counterIO.observe(heroKpis);
  }

  // Subtle scroll parallax for large decorative sections.
  $win.on('scroll',function(){
    const y=$win.scrollTop();
    $('.hero-orbit-1').css('transform','rotate(-13deg) translate3d(0,'+(y*.06)+'px,0)');
    $('.hero-orbit-2').css('transform','rotate(18deg) translate3d(0,'+(y*.035)+'px,0)');
    $('.process-bg').css('transform','translate3d(0,'+(y*.025)+'px,0)');
  });

  $(document)
    .off('submit.zeloraContact', '#contactForm')
    .on('submit.zeloraContact', '#contactForm', function (e) {

        e.preventDefault();

        const $form = $(this);
        const $button = $('#contactSubmitBtn');
        const $btnText = $button.find('.btn-text');
        const $btnLoading = $button.find('.btn-loading');
        const $message = $('#contactMessage');

        /*
         * Clear previous message
         */
        $message
            .removeClass('success error')
            .html('');

        /*
         * Disable submit button
         */
        $button.prop('disabled', true);

        $btnText.hide();
        $btnLoading.show();

        /*
         * Get form data
         */
        const formData = new FormData($form[0]);

        /*
         * WordPress AJAX action
         */
        formData.append(
            'action',
            'zelora_contact_submit'
        );

        /*
         * Send AJAX request
         */
        $.ajax({
            url: ZeloraTheme.ajaxUrl,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function (response) {

                if (response.success) {

                    /*
                     * Success message
                     */
                    $message
                        .removeClass('error')
                        .addClass('success')
                        .html(
                            response.data.message ||
                            'Your message has been sent successfully.'
                        )
                        .fadeIn();

                    /*
                     * Reset form
                     */
                    $form[0].reset();

                    /*
                     * If this form lives inside a popup (e.g. the service
                     * page contact modal), close it a moment after success.
                     */
                    const $modal = $form.closest('.svc-modal');

                    if ($modal.length) {
                        setTimeout(function () {
                            $modal.removeClass('is-open').attr('aria-hidden', 'true');
                            $('body').removeClass('modal-open');
                        }, 2200);
                    }

                } else {

                    /*
                     * Server-side validation error
                     */
                    $message
                        .removeClass('success')
                        .addClass('error')
                        .html(
                            response.data?.message ||
                            'Unable to send your message.'
                        )
                        .fadeIn();
                }
            },

            error: function (xhr, status, error) {

                console.error(
                    'Zelora contact form error:',
                    error
                );

                $message
                    .removeClass('success')
                    .addClass('error')
                    .html(
                        'Something went wrong. Please try again later.'
                    )
                    .fadeIn();
            },

            complete: function () {

                /*
                 * Enable button
                 */
                $button.prop('disabled', false);

                $btnText.show();
                $btnLoading.hide();
            }
        });

    });
});