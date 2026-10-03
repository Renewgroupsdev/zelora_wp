(function ($) {
    'use strict';

    function openModal(id) {
        $('#' + id).addClass('is-open').attr('aria-hidden', 'false');
        $('body').addClass('modal-open');
    }

    function closeModal($modal) {
        $modal.removeClass('is-open').attr('aria-hidden', 'true');
        $('body').removeClass('modal-open');
    }

    $(document).on('click', '.js-open-contact-modal', function (e) {
        e.preventDefault();
        openModal($(this).data('modal-target') || 'svc-contact-modal');
    });

    $(document).on('click', '[data-modal-close]', function (e) {
        e.preventDefault();
        closeModal($(this).closest('.svc-modal'));
    });

    $(document).on('keydown', function (e) {
        if (e.key === 'Escape') {
            $('.svc-modal.is-open').each(function () { closeModal($(this)); });
        }
    });

    // Header dropdown (service pages): tap/click on a parent item toggles its dropdown
    $(document).on('click', '.main-nav .wp-primary-menu > .menu-item-has-children > a', function (e) {
        var $li = $(this).parent();
        if (window.innerWidth > 760 && !$li.hasClass('is-open')) {
            e.preventDefault();
            $li.addClass('is-open').siblings().removeClass('is-open');
        }
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('.main-nav .wp-primary-menu').length) {
            $('.main-nav .wp-primary-menu .is-open').removeClass('is-open');
        }
    });
})(jQuery);
