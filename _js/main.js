$(document).ready(() => {
    
    $('.menu-toggle').click(function(){
        $(this).toggleClass('active');
        $(this).toggleClass('inactive');
        $('.nav').toggle(); 
        $('body').toggleClass('menu-open');
    });

    $('.testimonials').slick({
        autoplay: true,
        autoplaySpeed: 8000,
        arrows: false,
        dots: true,
        fade: true,
        initialSlide: 1,
        mobileFirst: true,
    });
});
