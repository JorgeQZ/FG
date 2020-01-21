$ = jQuery;
var current_bar_position = 0;

$(document).ready(function() {
    $('.slider-tabs .item').click(function() {
        var i = $(this).index();
        var w = $(this).width();
        var move = w * (i - 1);
        current_bar_position = move;
        $('.active-bar').animate({
            'left': move + 'px'
        }, 200)
    });

    $('.slider-tabs .item').mouseenter(function() {
        var i = $(this).index();
        var w = $(this).width();
        var move = w * (i - 1);

        $('.active-bar').animate({
            'left': move + 'px'
        }, 200)
    });


    $('.slider-tabs ').mouseleave(function() {
        $('.active-bar').animate({
            'left': current_bar_position + 'px'
        }, 200)
    });
});