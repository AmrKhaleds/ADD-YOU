

$(document).ready(function() {
    $(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
    $('#toTopBtn').fadeIn();
    } else {
    $('#toTopBtn').fadeOut();
    }
    });
    
    $('#toTopBtn').click(function() {
    $("html, body").animate({
    scrollTop: 0}, 'fast');

    });
    });