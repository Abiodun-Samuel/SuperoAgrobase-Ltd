!(function ($) {
  ("use strict");

  // Preloader
      $(window).on('load', function() {
        if ($('#centerdiv').length) {
          $('#centerdiv').delay(100).fadeOut('slow', function() {
            $(this).remove();
          });
        }
      });


  // about us gallery
  $(".main-instagram").owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1.5,
        nav: true,
      },
      600: {
        items: 2.5,
        nav: true,
      },
      1000: {
        items: 4,
        nav: true,
      },
    },
  });

  /* ..............................................
	   products Special Menu
	   ................................................. */

  //   var Container = $(".container");
  //   Container.imagesLoaded(function () {
  //     var portfolio = $(".special-menu");
  //     portfolio.on("click", "button", function () {
  //       $(this).addClass("active").siblings().removeClass("active");
  //       var filterValue = $(this).attr("data-filter");
  //       $grid.isotope({
  //         filter: filterValue,
  //       });
  //     });
  //     var $grid = $(".special-list").isotope({
  //       itemSelector: ".special-grid",
  //     });
  //   });

  // back to the top button
  $(document).ready(function () {
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 100) {
        $("#back-to-top").fadeIn();
      } else {
        $("#back-to-top").fadeOut();
      }
    });
    $("#back-to-top").click(function () {
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        600
      );
      return false;
    });
  });

  // Initial AOS
  function aos_init() {
    AOS.init({
      duration: 500,
      once: false,
      mirror: false,
      offset: 50,
    });
  }
  $(window).on("load", function () {
    aos_init();
  });

  gsap.registerPlugin(ScrollTrigger);
  gsap.to(".about-img", {
    scale: 1.5,
    duration: 2,
    scrollTrigger: {
      trigger: "#aboutus",
      scrub: true,
      start: "top center",
      end: "bottom top",
    },
  });

  // Match height
  $('.footer-box').matchHeight();

  $('.card').matchHeight();
})(jQuery);
