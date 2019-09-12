$(document).ready(() => {
    
    $('.menu-toggle').click(function(){
        $(this).toggleClass('active');
        $(this).toggleClass('inactive');
        $('nav').toggleClass('active');
        $('nav').toggleClass('inactive');
        $('body').toggleClass('menu-open');
    });

    $('.testimonials').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
        fade: true,
        initialSlide: 1,
        mobileFirst: true,
    });

    $('.carousel').slick({
        arrows: true,
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        cssEase: "ease",
        autoplaySpeed: 3000,
        responsive: [
            {
              breakpoint: 700,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
});