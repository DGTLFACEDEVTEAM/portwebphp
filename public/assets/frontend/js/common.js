const mobileCollapse = document.querySelectorAll(".mainLink"),
    arrow = document.querySelectorAll(".arrow");
var originalLink = "",
    originalControl = "",
    currentOpenedItem = "",
    previousOpenedItem = "";
function lockScroll() {
    var $html, $body;
    $html = $("html");
    var o = ($body = $("body")).outerWidth(),
        r = $body.outerHeight(),
        e = [
            self.pageXOffset ||
                document.documentElement.scrollLeft ||
                document.body.scrollLeft,
            self.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop,
        ];
    $html.data("scroll-position", e),
        $html.data("previous-overflow", $html.css("overflow")),
        $html.css("overflow", "hidden"),
        window.scrollTo(e[0], e[1]);
    var n = $body.outerWidth() - o,
        t = $body.outerHeight() - r;
    $body.css({ "margin-right": n, "margin-bottom": t });
}
function unlockScroll() {
    var $html = $("html"),
        $body = $("body");

    $html.css("overflow", $html.data("previous-overflow"));

    var o = $html.data("scroll-position");
    window.scrollTo(o[0], o[1]);

    $body.css({ "margin-right": 0, "margin-bottom": 0 });
}
$(document).ready(function () {
    $(".mainLink").on("click", function () {
        (originalLink = $(this).attr("data-link")),
            (originalControl = $(this).attr("aria-controls")),
            (currentOpenedItem = $(this)),
            console.log("current", currentOpenedItem),
            console.log("previous", previousOpenedItem),
            $(currentOpenedItem).attr("aria-controls") ==
            $(previousOpenedItem).attr("aria-controls")
                ? (window.location.href = originalLink)
                : ($(previousOpenedItem).attr("href", ""),
                  $(this).closest(".mobileDrop").addClass("mobileDropOpen")),
            (previousOpenedItem = currentOpenedItem);
    });
}),
    $(window).on("load resize scroll", function () {
        $(window).scrollTop() > 200
            ? ($(".navbar").css("background", "rgb(35 48 56 / 70%)"),
              $(".hamburgerMenu").css("background", "rgb(35 48 56 / 70%)"),
              $(".menuLeft span").css("padding", "20px 30px 20px 0px"),
              $(".hamburgerMenu").css("height", "70px"),
              $(".navbar").css("height", "70px"),
              $(".navbar-brand img").css("transform", "scale(.8)"),
              $(".mobile-header-logo").css("transform", "scale(.8)"))
            : ($(".homeAccommdation").length ||
                  $(".offers-contact-wrapper").length ||
                  ($(".navbar").css("background", "rgb(35 48 56 / 100%)"),
                  $(".hamburgerMenu").css(
                      "background",
                      "rgb(35 48 56 / 100%)"
                  )),
              $(".menuLeft span").css("padding", "30px 30px 30px 0px"),
              $(".hamburgerMenu").css("height", "90px"),
              $(".navbar").css("height", "90px"),
              $(".navbar-brand img").css("transform", "scale(1)"),
              $(".mobile-header-logo").css("transform", "scale(1)"));
    }),
    $(window).on("load resize", function () {
        var o = $(window).width();
        o < 1300 && o > 576 && $(".footerLocation").appendTo(".footerCenter"),
            o < 576 && $(".footerLocation").prependTo(".footerStart"),
            o > 1300 && $(".footerLocation").prependTo(".footerCol");
    }),
    $("#offcanvasCloseBtn").on("click", unlockScroll),
    $("#offcanvasOpenBtn").on("click", lockScroll);
