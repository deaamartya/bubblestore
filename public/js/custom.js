$(document).ready(function(){
  $(".navbar-toggler.mobile-nav").click(function(){
    $(".navbar-overlay").width('100%'); 
    $(".navbar-overlay-close").show();
    $(".navbar-overlay .container-fluid").show();
    $(".navbar-collapse").addClass("show");
  });

  $(".navbar-overlay-close").click(function(){
      $(".navbar-toggler.mobile-nav").toggle();
      $(".navbar-overlay-close").hide();
      $(".navbar-overlay .container-fluid").hide();
      $(".navbar-overlay").width('0%');
      $(".navbar-toggler.mobile-nav").show();
  });
});