$(document).ready(function(){
    $(".whychooseus").owlCarousel({
        margin: 20,
        checkVisible: true,
        autoWidth:false,
        nav: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 3000,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:  true
            },
            600:{
                items:1,
                nav: true
            },
            1000:{
                items:2,
                nav:  true,
                loop:true
            }
        }
    });
    $(".business-list").owlCarousel({
        margin: 30,
        autoWidth:true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1,
                nav: false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:6,
                nav: false,
                loop:true
            }
        }
    });
    $(".banner").owlCarousel({
        loop:true,
        margin:10,
        nav: false,
        items: 1,
    });
    $('.featured-slider').owlCarousel({
        margin: 30,
        autoWidth:false,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:  true
            },
            600:{
                items:1,
                nav: true
            },
            1000:{
                items:2,
                nav:  true,
                loop:true
            }
        }
    })
    $('.owl-carousel').owlCarousel({
        stagePadding: 200,
        loop:true,
        margin:10,
        nav:false,
        items:1,
        lazyLoad: true,
        nav:true,
      responsive:{
            0:{
                items:1,
                stagePadding: 60
            },
            600:{
                items:1,
                stagePadding: 100
            },
            1000:{
                items:1,
                stagePadding: 200
            },
            1200:{
                items:1,
                stagePadding: 250
            },
            1400:{
                items:1,
                stagePadding: 300
            },
            1600:{
                items:1,
                stagePadding: 350
            },
            1800:{
                items:1,
                stagePadding: 400
            }
        }
    })
    
});