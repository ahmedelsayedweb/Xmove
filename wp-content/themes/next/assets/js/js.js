/*global $, document, Typed*/
    if ($(window).width() <= 767) {
        $('.wow').removeClass('wow');
    }
$(document).ready(function () {
    'use strict';
    $('body').smoothScroll();
    $('body').niceScroll({
        cursorcolor:"white",
        cursorwidth:"10px"
    });
    $('#showmore').click(function () {
        $('#menupara').slideToggle('slow');
        $('#showmore').css("display", "none");
    });
    $('#image-menu').click(function () {
        if ($(window).width() <= 767) {
                $('#nav-menu').slideToggle('slow');
            }
    });
    document.body.onscroll = function () {
            if ($(window).width() <= 767) {
                $('#nav-menu').slideUp('slow');
        } else {
            $('#nav-menu').slideDown('slow');
        }
        if ($(window).scrollTop() >= 500) {
            $('.up').css('display', 'block');
            $('.up').click(function () {
                $(window).scrollTop(0);
            });
        } else {
            $('.up').css('display', 'none');
        }
        };   
    $('#btn-search1').click(function () {
        $('#type1').slideToggle('slow');
        $('#type2').slideUp('slow');
        $('#type3').slideUp('slow');
        
    });
    $('#btn-search2').click(function () {
        $('#type2').slideToggle('slow');
        $('#type1').slideUp('slow');
        $('#type3').slideUp('slow');
    });
    $('#btn-search3').click(function () {
        $('#type3').slideToggle('slow');
        $('#type1').slideUp('slow');
        $('#type2').slideUp('slow');
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
});