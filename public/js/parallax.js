$(document).ready(function(){
	$('.parallax').parallax();
});

$(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.opaque-navbar').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
});

$('.carousel.carousel-slider').carousel({fullWidth: true});