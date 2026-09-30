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
})(jQuery);
