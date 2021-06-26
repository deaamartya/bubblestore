$(document).ready(function(){
    // Innitiate owl carousel used for product's detail page
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
                items:2,
            },
            1000:{
                items:6,
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
    // Change color for variant color options
    $(".options-color").click(function(){
        $(".options-color").each(function(){
        $(this).removeClass("bg-dark text-light");
        $(this).addClass("bg-light text-dark");
        });
        $(this).removeClass("bg-light text-dark");
        $(this).addClass("bg-dark text-light");
    });
});
