/*  ---------------------------------------------------
    Theme Name: Cake
    Description: Cake e-commerce tamplate
    Author: Colorib
    Author URI: https://www.colorib.com/
    Version: 1.0
    Created: Colorib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Search Switch
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });


    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*-----------------------
        Hero Slider
    ------------------------*/
    $(".hero__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'><i/>", "<i class='fa fa-angle-right'><i/>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false
    });

    /*--------------------------
        Categories Slider
    ----------------------------*/
    $(".categories__slider").owlCarousel({
        loop: false,
        margin: 22,
        items: 5,
        dots: false,
        nav: true,
        navText: [],//`["<span class='arrow_carrot-left'><span/>", "<span class='arrow_carrot-right'><span/>"],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false,
        responsive: {
            0: {
                items: 1,
                margin: 0
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    });

    $(".categories__slider .categories__item").each(function(){
        $(this).click(() => {
            $(".categories__slider .categories__item").removeClass('ạctived')
            $(".categories__slider .categories__item .categories__item__icon .icon").removeClass("ic_actived")
            $(".categories__slider .categories__item .categories__item__icon .ic_name").removeClass("ic_actived")
            $(this).addClass('ạctived')
            $(this).children('.categories__item__icon').children('.icon').addClass('ic_actived')
            $(this).children('.categories__item__icon').children('.ic_name').addClass('ic_actived')

            var btNumber = $(this).data('for')

            $('.product').each(function (){
                $(this).removeClass('tab_actived');
            })
            $(`.product[data-tab="${btNumber}"]`).addClass('tab_actived')

        })
    })

    /*-----------------------------
        Testimonial Slider
    -------------------------------*/
    $(".testimonial__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 2,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });

    /*---------------------------------
        Related Products Slider
    ----------------------------------*/
    $(".related__products__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 4,
        dots: false,
        nav: true,
        navText: ["<span class='arrow_carrot-left'><span/>", "<span class='arrow_carrot-right'><span/>"],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
        }
    });

    /*--------------------------
        Select
    ----------------------------*/
    $("select").niceSelect();

    /*------------------
		Magnific
	--------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /*------------------
        Barfiller
    --------------------*/
    $('#bar1').barfiller({
        barColor: '#111111',
        duration: 2000
    });
    $('#bar2').barfiller({
        barColor: '#111111',
        duration: 2000
    });
    $('#bar3').barfiller({
        barColor: '#111111',
        duration: 2000
    });


    /*------------------
		Single Product
	--------------------*/
    $('.product__details__thumb img').on('click', function () {
        $('.product__details__thumb .pt__item').removeClass('active');
        $(this).addClass('active');
        var imgurl = $(this).data('imgbigurl');
        var bigImg = $('.big_img').attr('src');
        if (imgurl != bigImg) {
            $('.big_img').attr({
                src: imgurl
            });
        }
    });





    $(".product__details__thumb").niceScroll({
        cursorborder: "",
        cursorcolor: "rgba(0, 0, 0, 0.5)",
        boxzoom: false
      });

})(jQuery);
