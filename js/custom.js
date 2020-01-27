$ = jQuery;
var current_bar_position = 0;

$(document).ready(function() {
    // $('.slider-tabs .item').click(function() {
    //     var i = $(this).index();
    //     var w = $(this).width();
    //     var move = w * (i - 1);
    //     current_bar_position = move;
    //     $('.active-bar').animate({
    //         'left': move + 'px'
    //     }, 200)
    //     $('.slider-tabs-content .tab').removeClass('active');
    //     $('.slider-tabs-content .tab').eq((i - 1)).addClass('active');
    // });

    $('.menu-button').click(function() {
        $('.nav-container').toggleClass('act');
    });


});