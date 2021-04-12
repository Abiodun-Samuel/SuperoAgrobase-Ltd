!(function ($) {
    ("use strict");

    // Popup Display
    function showPopup() {
        var popupContainer = $(".contentBox"),
            popupBtn = popupContainer.find(".close");

        if (Cookies.get("popupShown") !== "yes") {
            //set a cookie
            Cookies.set("popupShown", "yes", { expires: 1 });
            popupContainer.addClass("active");
        }

        popupBtn.on("click", function () {
            popupContainer.removeClass("active");
        });
    }
    window.onload = function () {
        setTimeout(function () {
            showPopup();
        }, 500);
    };

   
 

    var swiper = new Swiper(".swiper-container", {
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        preloadImages: false,
        lazy: true,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 1.5,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            shadow: true,
            slideShadows: true,
        },
    });

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

    // gsap.registerPlugin(ScrollTrigger);
    // gsap.to(".about-img", {
    //   scale: 1.5,
    //   duration: 2,
    //   scrollTrigger: {
    //     trigger: "#aboutus",
    //     scrub: true,
    //     start: "top center",
    //     end: "bottom top",
    //   },
    // });

    // Match height
    $(".footer-box").matchHeight();

    $(".card").matchHeight();
})(jQuery);

// showPopup();
