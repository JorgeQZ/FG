$ = jQuery;
var current_bar_position = 0;

$(document).ready(function() {

    $('.home-carousel-tabs button').click(function() {
        var i = $(this).index();
        $('.slider-tabs-content .tab').removeClass('active');
        $('.slider-tabs-content .tab').fadeOut('slow');

        $('.slider-tabs-content .tab').eq(i).fadeIn('slow');
        $('.slider-tabs-content .tab').eq(i).addClass('active');

    });


    $('.home-carousel-tabs .owl-item').click(function() {
        var i = $(this).index();
        var w = $(this).outerWidth();
        var move = w * i;
        current_bar_position = move;
        $('.active-bar').animate({
            'left': move + 'px'
        }, 200)
        $('.slider-tabs-content .tab').removeClass('active');
        $('.slider-tabs-content .tab').eq(i).addClass('active');
    });

    $('.menu-button').click(function() {
        $('.nav-container').toggleClass('act');
    });


});