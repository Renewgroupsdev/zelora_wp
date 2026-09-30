(function ($) {
    'use strict';

    function openModal() {
        $('#zelora-email-modal').addClass('is-open').attr('aria-hidden', 'false');
    }

    function closeModal() {
        $('#zelora-email-modal').removeClass('is-open').attr('aria-hidden', 'true');
    }

    $(document).on('click', '.zelora-view-email', function (e) {
        e.preventDefault();

        var postId = $(this).data('enquiry');
        var $modal = $('#zelora-email-modal');

        $modal.find('.zelora-email-modal-subject').text('Loading…');
        $modal.find('.zelora-email-modal-to').text('');
        $modal.find('.zelora-email-modal-body').empty();
        openModal();

        $.post(ZeloraEnquiries.ajaxUrl, {
            action: 'zelora_view_enquiry_email',
            nonce: ZeloraEnquiries.nonce,
            post_id: postId,
        }).done(function (res) {
            if (!res.success) {
                $modal.find('.zelora-email-modal-subject').text('Unable to load email');
                $modal.find('.zelora-email-modal-body').text((res.data && res.data.message) || 'Something went wrong.');
                return;
            }

            $modal.find('.zelora-email-modal-subject').text(res.data.subject || '(no subject)');
            $modal.find('.zelora-email-modal-to').text(res.data.to ? 'To: ' + res.data.to : '');

            var iframe = document.createElement('iframe');
            iframe.className = 'zelora-email-modal-iframe';
            iframe.setAttribute('sandbox', '');
            iframe.srcdoc = res.data.html || '<p>No email content stored for this enquiry.</p>';
            $modal.find('.zelora-email-modal-body').empty().append(iframe);
        }).fail(function () {
            $modal.find('.zelora-email-modal-subject').text('Unable to load email');
            $modal.find('.zelora-email-modal-body').text('Request failed. Please try again.');
        });
    });

    $(document).on('click', '.zelora-email-modal-close, .zelora-email-modal-backdrop', function () {
        closeModal();
    });

    $(document).on('keydown', function (e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
})(jQuery);
