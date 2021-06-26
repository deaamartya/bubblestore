$(document).ready(function(){
    // Innitiate owl carousel for homepage
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        rewind:true,
        responsiveClass:true,
        autoplay: true,
        autowidth:true,
        nav: false,
        responsive:{
            0:{
                items:2,
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });

    // Go to the next item
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPrevBtn').click(function() {
        owl.trigger('prev.owl.carousel');
    });
});
