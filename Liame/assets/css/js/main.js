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
    loop: true,
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

  document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
    // Your code to run since DOM is loaded and ready
    });

    $(function(){

      $("div").css("display", "none");
      $("div#div1").addClass("active");
  
      $("a").on("click", function( e ){         
        e.preventDefault();
          
        $("div").removeClass("active");
          var id = $(this).attr("href"); 
          $("#"+id+"").addClass("active");
          
      });
  });
  .active { display: block !important }
});



