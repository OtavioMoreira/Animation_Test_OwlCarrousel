$(document).ready(function () {
    var height_window = $(window).height() - ( $('header').height() + $('#menu-monte').height() );
    $('body, html').css('height', height_window + 'px');

    /*
    $('#owl-page').owlCarousel({
        loop:true,
        nav:false,
        dots: false,
        items: 1,
        mouseDrag: false
    })
    */

    owl_sync($('#owl-page-sync1'), $('#owl-page-sync2'), false, false, false, false, 5, 5, 5);
});


$('[data-item]').click(function () {
   var obj = $(this).data('item');

    $('[item=' + obj + ']').trigger('click');
});


(function () {
    'use strict';

    $.easing.easeInOutQuint = function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
        return c/2*((t-=2)*t*t*t*t + 2) + b;
    };

    // smooth scroll
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
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

function owl_sync(sync1, sync2, nav_sync1, nav_sync2, dots_sync1, dots_sync2, items_mobile, items_tablet, items_desktop ) {
    var syncedSecondary = true;
    var slidesPerPage;
    var window_width = $(window).width();

    if( window_width < 769 ) {
        slidesPerPage = items_mobile;
    }else if( window_width > 768 && window_width < 1025) {
        slidesPerPage = items_tablet;
    }else {
        slidesPerPage = items_desktop;
    }

    sync1.owlCarousel({
        items : 1,
        slideSpeed : 2000,
        nav: nav_sync1,
        autoplay: false,
        dots: dots_sync1,
        loop: true,
        responsiveRefreshRate : 200,
        mouseDrag: false,
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items : slidesPerPage,
            dots: dots_sync2,
            nav: nav_sync2,
            smartSpeed: 200,
            slideSpeed : 500,
            mouseDrag: false,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate : 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count-1;
        var current = Math.round(el.item.index - (el.item.count/2) - .5);

        if(current < 0) {
            current = count;
        }
        if(current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if(syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
}