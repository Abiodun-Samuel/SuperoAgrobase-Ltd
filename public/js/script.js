(() => {
    var e, o, n;
    (o = 0),
        (n = document.querySelector(".navbar")),
        window.addEventListener("scroll", function (t) {
            (e = window.scrollY),
                o < e && e > 80
                    ? (n.classList.remove("slideDown"),
                      n.classList.add("slideUp"))
                    : o > e &&
                      (n.classList.remove("slideUp"),
                      n.classList.add("slideDown")),
                (o = e);
        }),
        (window.onload = function () {
            setTimeout(function () {
                var e, o;
                (e = $(".contentBox")),
                    (o = e.find(".close")),
                    "true" !== Cookies.get("SuperoAgrobase Ltd") &&
                        (Cookies.set("SuperoAgrobase Ltd", "true", {
                            expires: 1,
                        }),
                        e.addClass("active")),
                    o.on("click", function () {
                        e.removeClass("active");
                    });
            }, 2e3);
        }),
        (document.getElementById("year").innerHTML = new Date().getFullYear()),
        (function (e) {
            "use strict";
            jQuery(function () {
                e("#back-to-top").on("click", function () {
                    return e("html, body").animate({ scrollTop: 0 }, 1e3), !1;
                });
            }),
                e(window).on("load", function () {
                    AOS.init({ duration: 300, once: !1 });
                });
        })(jQuery);
})();
