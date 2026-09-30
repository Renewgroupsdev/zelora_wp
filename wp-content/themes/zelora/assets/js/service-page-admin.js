(function ($) {
    'use strict';

    // Media uploader for each image field in the "Service Page Content" meta box.
    $(document).on('click', '.svc-image-select', function (e) {
        e.preventDefault();
        var $row = $(this).closest('[data-svc-image-field]');
        var $input = $row.find('.svc-image-id');
        var $preview = $row.find('.svc-image-preview');
        var $remove = $row.find('.svc-image-remove');

        var frame = wp.media({
            title: 'Select image',
            multiple: false,
            library: { type: 'image' },
        });

        frame.on('select', function () {
            var attachment = frame.state().get('selection').first().toJSON();
            $input.val(attachment.id);
            var previewUrl = (attachment.sizes && attachment.sizes.medium) ? attachment.sizes.medium.url : attachment.url;
            $preview.attr('src', previewUrl).show();
            $remove.show();
        });

        frame.open();
    });

    $(document).on('click', '.svc-image-remove', function (e) {
        e.preventDefault();
        var $row = $(this).closest('[data-svc-image-field]');
        $row.find('.svc-image-id').val('');
        $row.find('.svc-image-preview').hide().attr('src', '');
        $(this).hide();
    });

    // Show/hide the meta box content based on the currently selected page template,
    // so editors only see these fields when "Service Page" is selected.
    function toggleFieldsForTemplate(template) {
        var $fields = $('#zelora-service-fields');
        var $hint = $('#zelora-service-hint');
        if (!$fields.length) {
            return;
        }
        if (template === 'service_page.php') {
            $fields.show();
            $hint.hide();
        } else {
            $fields.hide();
            $hint.show();
        }
    }

    wp.domReady(function () {
        if (!wp.data || !wp.data.select('core/editor')) {
            return;
        }
        var lastTemplate = null;
        wp.data.subscribe(function () {
            var template = wp.data.select('core/editor').getEditedPostAttribute('template');
            if (template !== lastTemplate) {
                lastTemplate = template;
                toggleFieldsForTemplate(template);
            }
        });
    });
})(jQuery);
