$(document).ready(function () {
    var height_window = $(window).height();
    $('body, html').css('height', height_window + 'px');

    $('#owl-page-sync1').owlCarousel({
        nav: false,
        dots: false,
        items: 1
    })

    $('[data-item=animation]').click(function () {
        $('[data-item]').removeClass('active');
        $(this).addClass('active');
        $('#owl-page-sync1').trigger('to.owl.carousel', 1)
    });

    $('[data-item=home]').click(function () {
        $('[data-item]').removeClass('active');
        $(this).addClass('active');
        $('#owl-page-sync1').trigger('to.owl.carousel', -1)
    });
});

(function () {
    'use strict';

    $.easing.easeInOutQuint = function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
    };

    // smooth scroll
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, 'easeInOutQuint');
                return false;
            }
        }
    });

    $('.email').attr('href', 'mailto:' + 'daniel' + '@' + 'dnl' + '.' + 'pw');

    $('.profile .align').on('mouseover mouseout', function (e) {
        $(this).toggleClass('animated tada', e.type === 'mouseover');
    });

    setTimeout(function () {
        $('.credit').addClass('activate');
    }, 1000);
})();