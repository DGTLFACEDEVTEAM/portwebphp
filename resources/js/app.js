import "../../public/assets/frontend/js/common.js";
import "../../public/assets/frontend/js/main.js";
import "./general/cookie";

if ($("#contactForm2").length) {
    document
        .getElementById("contactForm2")
        .addEventListener("submit", function (event) {
            // Check if all required fields are filled out
            var name = document.forms["contactForm"]["name"].value;
            var email = document.forms["contactForm"]["email"].value;
            var message = document.forms["contactForm"]["message"].value;
            if (name == "" || email == "" || message == "") {
                // Display alert message if any required fields are empty
                event.preventDefault(); // Prevent form from submitting
                document.getElementById("alert").classList.remove("d-none");
            }
        });
}

window.addEventListener("DOMContentLoaded", (event) => {
    // check if chatbox is enabled

    //    wait 2 secons to load

    // (function() {
    //     var APP_UUID = '6f018acb-a187-48be-a07e-a301d318af36';
    //     var BASE_COLOR = '#075695';
    //     var CONTAINER_ELEMENT = 'iframe';

    //     var process = void 0;
    //     var _typeofThat = "function" == typeof Symbol && "symbol" == typeof Symbol
    //         .iterator ? function(
    //             o) {
    //             return typeof o
    //         } : function(o) {
    //             return o && "function" == typeof Symbol && o.constructor === Symbol && o !==
    //                 Symbol
    //                 .prototype ?
    //                 "symbol" : typeof o
    //         };

    //     function insertLivechatJS() {
    //         var e = document.createElement("script");
    //         e.type = "text/javascript", e.async = "true", e.src = (process && process.env &&
    //             process.env
    //             .DOMAIN ||
    //             "https://livechat.connexease.com") + "/l/embed-js/livechat.js";
    //         var t = document.createElement("link");
    //         t.rel = "stylesheet", t.href = (process && process.env && process.env.DOMAIN ||
    //             "https://portnature.com.tr") + "/assets/frontend/css/chatbox.css";
    //         var n = document.getElementsByTagName("script")[0];
    //         document.head.appendChild(t), n.parentNode.insertBefore(e, n)
    //     }
    //     window.attachEvent ? window.attachEvent("onload", insertLivechatJS) : window
    //         .addEventListener(
    //             "load",
    //             insertLivechatJS, !1), window.initLivechat = function() {
    //             "object" === _typeofThat(window.LiveChat) && window.LiveChat.boot({
    //                 uuid: APP_UUID,
    //                 baseColor: BASE_COLOR,
    //                 containerElement: CONTAINER_ELEMENT,
    //             })
    //         };
    // })();

    (function () {
        var APP_UUID = "6f018acb-a187-48be-a07e-a301d318af36";
        var BASE_COLOR = "#075695";
        var CONTAINER_ELEMENT = "iframe";

        var process = void 0;
        var _typeofThat =
            "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                ? function (o) {
                      return typeof o;
                  }
                : function (o) {
                      return o &&
                          "function" == typeof Symbol &&
                          o.constructor === Symbol &&
                          o !== Symbol.prototype
                          ? "symbol"
                          : typeof o;
                  };

        function insertLivechatJS() {
            var e = document.createElement("script");
            (e.type = "text/javascript"),
                (e.async = "true"),
                (e.src = "/assets/frontend/libs/js/livechat.js");
            var t = document.createElement("link");
            (t.rel = "stylesheet"),
                (t.href =
                    ((process && process.env && process.env.DOMAIN) ||
                        "https://portnature.com.tr") +
                    "/assets/frontend/css/chatbox.css");
            var n = document.getElementsByTagName("script")[0];
            document.head.appendChild(t), n.parentNode.insertBefore(e, n);
        }
        window.attachEvent
            ? window.attachEvent("onload", insertLivechatJS)
            : window.addEventListener("load", insertLivechatJS, !1),
            (window.initLivechat = function () {
                "object" === _typeofThat(window.LiveChat) &&
                    window.LiveChat.boot({
                        uuid: APP_UUID,
                        baseColor: BASE_COLOR,
                        containerElement: CONTAINER_ELEMENT,
                    });
            });
    })();
});

if (typeof pageHasContactForm !== "undefined" && pageHasContactForm) {
    let acceptTermsCheckbox = document.querySelectorAll(".acceptTermsCheckbox");
    let contactForms = document.querySelectorAll('form[name="contactForm"]');

    acceptTermsCheckbox.forEach(function (item) {
        // remove event listener if already added
        item.removeEventListener("change", function () {});
        item.addEventListener("change", function () {
            if (this.checked) {
                // find the submit button on same form and enable it
                this.closest("form").querySelector(
                    'input[type="submit"]'
                ).disabled = false;
            } else {
                // find the submit button on same form and disable it
                this.closest("form").querySelector(
                    'input[type="submit"]'
                ).disabled = true;
            }
        });
    });

    contactForms.forEach(function (item) {
        // remove event listener if already added
        item.removeEventListener("submit", function () {});
        item.addEventListener("submit", function (e) {
            e.preventDefault();
            let name = document.getElementById("name");
            let email = document.getElementById("email");
            let message = document.getElementById("message");
            let alert = document.getElementById("alert");

            if (name.value == "" || email.value == "" || message.value == "") {
                alert.classList.remove("d-none");
            } else {
                this.submit();
            }
        });
    });
}
