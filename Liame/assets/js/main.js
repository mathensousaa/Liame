jQuery(document).ready(function($){

  // FIXED header
  window.onscroll = function() {
    if (window.pageYOffset > 140) {
      $('#header').addClass("active");
    } else {
      $("#header").removeClass("active");
    }
  }

  //OWL
  $(".owl-carousel").owlCarousel({
    loop: false,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 2000,
    dots: true,
    lazyLoad: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 2,
      },
      1000: {
        items:4,
      }, 
    },
  });
});
