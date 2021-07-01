(function () {
    // hide and show navbar on scroll
    var new_scroll_position = 0;
    var last_scroll_position;
    var header = document.querySelector(".navbar");

    window.addEventListener("scroll", function (e) {
        last_scroll_position = window.scrollY;

        // Scrolling down
        if (
            new_scroll_position < last_scroll_position &&
            last_scroll_position > 80
        ) {
            // header.removeClass('slideDown').addClass('slideUp');
            header.classList.remove("slideDown");
            header.classList.add("slideUp");

            // Scrolling up
        } else if (new_scroll_position > last_scroll_position) {
            // header.removeClass('slideUp').addClass('slideDown');
            header.classList.remove("slideUp");
            header.classList.add("slideDown");
        }

        new_scroll_position = last_scroll_position;
    });

    // Popup Display
    function showPopup() {
        var popupContainer = $(".contentBox"),
            popupBtn = popupContainer.find(".close");

        if (Cookies.get("SuperoAgrobase Ltd") !== "true") {
            //set a cookie
            Cookies.set("SuperoAgrobase Ltd", "true", { expires: 1 });
            popupContainer.addClass("active");
        }
        popupBtn.on("click", function () {
            popupContainer.removeClass("active");
        });
    }
    window.onload = function () {
        setTimeout(function () {
            showPopup();
        }, 2000);
    };

    // Footer Year
    document.getElementById("year").innerHTML = new Date().getFullYear();
})();

!(function ($) {
    ("use strict");

    // back to the top button
    jQuery(function () {
        $("#back-to-top").on("click", function () {
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            return false;
        });
    });

    function aos_init() {
        AOS.init({
            duration: 300,
            once: false,
        });
    }
    $(window).on("load", function () {
        aos_init();
    });
})(jQuery);
