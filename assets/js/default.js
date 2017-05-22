var obj_animteIn = $('#animateIn').val();
var obj_animteOut = $('#animateOut').val();;

$(document).ready(function () {
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

    if ($(window).width() > 1024) {
        var height_window = $(window).height();
        $('body, html').css('height', height_window + 'px');
    }

    $('.effect-carrousel').owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        items: 1,
        margin: 30,
        dots: true,
        nav: true,
        stagePadding: 30,
        smartSpeed: 450
    });
});

$('#animateIn').change(function () {
    obj_animteIn = $(this).val();
});

$('#animateOut').change(function () {
    obj_animteOut = $(this).val();
});

//alert( obj_animteIn + ', ' + obj_animteOut);

function send_email() {
    //load
    $('#myModal .form-sucess, #myModal .form-sucess .loader').fadeIn('');
    $.ajax({
            url: 'email.php',
            type: 'post',
            dataType: 'json',
            data: $('#send-email').serialize()
        })
        .done(function (data) {
            $('#myModal .form-sucess .loader').fadeOut('fast');
            $('#myModal .form-sucess .sucess').fadeIn('');

            setTimeout(function(){
                $('#myModal .form-sucess .sucess, #myModal .form-sucess').fadeOut('');
            }, 3000);

            console.log(data.message);
        }).fail(function (data) {
        $('#myModal .form-sucess .loader').hide('');
        $('#myModal .form-sucess .error').fadeIn('');

        setTimeout(function(){
            $('#myModal .form-sucess .error, #myModal .form-sucess').fadeOut('');
        }, 3000);

        console.log(data.responseJSON.message);
    });
}

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