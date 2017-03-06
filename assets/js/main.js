var faker = require('faker');

$(function() {

    function stickyMargins() {
        $('.sticky').each(function() {
            var stickyHeight = $(this).outerHeight();
            $(this).next().css('margin-top', stickyHeight);
        });
    }

    stickyMargins();

    $(window).resize(function() {
        stickyMargins();
    });

    $(document).on('click', '[data-toggles]', function(event) {

        var dataTarget = $(this).data('toggles');
        var target = $('[data-target="'+dataTarget+'"]');

        var dataGroup = $(target).data('group');
        var group = $('[data-group="'+dataGroup+'"]');

        $(group).addClass('hide');
        $(target).removeClass('hide');

    });

});
