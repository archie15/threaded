import $ from "jquery"
import "slick-carousel-latest"

$(".hero-banner").slick({
    dots: false,
    arrows: false,
    autoplay: false,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    variableWidth: true,
    centerMode: true
});