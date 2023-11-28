// console.log if jquery is loaded or not

import swiperHomeTop from "../../../public/assets/frontend/js/main";
import { swiperAutoPlayStarter } from "./swiperActions";

let activeCookieTab = 0;

$(".cookieBtn").click(function () {
    $(".cookieBtn").removeClass("active");
    $(this).addClass("active");
    activeCookieTab = $(this).index();
    $(".cookieRightT").addClass("hide");
    $(".cookieRightT").eq(activeCookieTab).removeClass("hide");
});

// cookieDetailAccorHeader on click change next sibling height
$(document).ready(function () {
    // stop scrolling on html
    document.body.style.overflow = "hidden";

    $(".cookieDetailAccorHeader").on("click", function () {
        $(this).children("svg").toggleClass("rotate180");
        let cookieDetail = $(this).next();
        console.log(cookieDetail);
        const isHidden = cookieDetail.hasClass("cdhidden");

        if (isHidden) {
            // Calculate the actual height of the content
            let height = cookieDetail.prop("scrollHeight");
            console.log(height);
            // height += 50;

            // Set the height to the actual height
            cookieDetail.animate(
                {
                    height: height,
                    opacity: 1,
                },
                300
            );

            // Remove the 'cdhidden' class
            cookieDetail.removeClass("cdhidden");
        } else {
            // Set the height back to 0
            cookieDetail.animate(
                {
                    height: 0,
                    opacity: 0,
                },
                300
            );

            // Add the 'cdhidden' class
            cookieDetail.addClass("cdhidden");
        }
    });

    // actionBtns on click close modal
    $(".cookieA").on("click", function () {
        $("#customizeCookie").modal("hide");
        $(".cookieConstentContainer").hide();
        document.body.style.overflow = "auto";
        $(".cookieBackdrop").hide();

        swiperAutoPlayStarter(swiperHomeTop);

        // write cookie
        let cookieName = "cookieConsent";
        let cookieValue = "true";

        // add cookie
        let date = new Date();
        date.setTime(date.getTime() + 365 * 24 * 60 * 60 * 1000);
        document.cookie =
            cookieName +
            "=" +
            cookieValue +
            "; expires=" +
            date.toUTCString() +
            "; path=/";
    });
});
