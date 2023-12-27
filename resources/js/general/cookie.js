import Cookies from "js-cookie";
import swiperHomeTop from "../../../public/assets/frontend/js/main";
import { swiperAutoPlayStarter } from "./swiperActions";

//   STATES START
let activeCookieTab = 0;

var gtmContainerId = "GTM-TZ53DS5";
// var gaMeasurementId = "G-FH87DE17XF";
var yandexMetricaId = 92210931;
var facebookPixelId = "721299109355968";

var APP_UUID = "6f018acb-a187-48be-a07e-a301d318af36";
var BASE_COLOR = "#075695";
var CONTAINER_ELEMENT = "iframe";

var ourURl = "https://portnature.com.tr";

var connexeaseUrl = "https://livechat.connexease.com/l/embed-js/livechat.js";
var ourJsUrl = `${ourURl}/assets/frontend/libs/js/livechat.js`;
var ourCssUrl = `${ourURl}/assets/frontend/css/chatbox.css`;
var connexeaseJsUs = true;

var isGtmActive = true;
var isYandexMetricaActive = true;
var isFacebookPixelActive = true;
var isChatboxActive = true;
var isSwiperActive = true;

//   STATES END

$(".cookieBtn").click(function () {
    $(".cookieBtn").removeClass("active");
    $(this).addClass("active");
    activeCookieTab = $(this).index();
    $(".cookieRightT").addClass("hide");
    $(".cookieRightT").eq(activeCookieTab).removeClass("hide");

    activeCookieTab !== 0
        ? $(".cookieRightB").removeClass("hide")
        : $(".cookieRightB").addClass("hide");
});

// Event handler for switch toggle
$(".cookieSwitch").change(function () {
    let switchLabel = $(this).closest(".switchContainer").find("label");

    if ($(this).is(":checked")) {
        //    hide first label show second label on switchLabel
        switchLabel.eq(0).removeClass("hide");
        switchLabel.eq(1).addClass("hide");
    } else {
        //    hide second label show first label on switchLabel
        switchLabel.eq(0).addClass("hide");
        switchLabel.eq(1).removeClass("hide");
    }
});

var htmlElement = document.documentElement;
// cookieDetailAccorHeader on click change next sibling height
$(document).ready(function () {
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

    function activateChatbox() {
        function insertLivechatJS() {
            var e = document.createElement("script");
            e.type = "text/javascript";
            e.async = true;
            e.src =
                (process && process.env && process.env.DOMAIN) || connexeaseJsUs
                    ? ourJsUrl
                    : connexeaseUrl;

            // Use the 'onload' event to ensure the script is fully loaded before initialization
            e.onload = function () {
                initializeChatbox();
            };

            var t = document.createElement("link");
            t.rel = "stylesheet";
            t.href =
                (process && process.env && process.env.DOMAIN) || ourCssUrl;

            var n = document.getElementsByTagName("script")[0];
            document.head.appendChild(t);
            n.parentNode.insertBefore(e, n);
        }

        insertLivechatJS();
    }

    function initializeChatbox() {
        if (typeof window.LiveChat === "object") {
            window.LiveChat.boot({
                uuid: APP_UUID,
                baseColor: BASE_COLOR,
                containerElement: CONTAINER_ELEMENT,
            });
        }
    }
    // stop scrolling on html
    // document.body.style.overflow = "hidden";
    var defaultActiveTab = $(".cookieBtn.active").text().trim();
    if (defaultActiveTab === "Cookies" || "Cookie" || "Çerezler") {
        $("#infoText").show();
    }

    $(".closeAllCookie").on("click", function () {
        $(".cookieConstentContainer").hide();
    });

    let isClientAcceptCookie = Cookies.get("CCP");

    let parseCCP = null;

    if (isClientAcceptCookie !== undefined) {
        let decodeCCP = atob(isClientAcceptCookie);
        parseCCP = JSON.parse(decodeCCP);
    }

    let isClientAcceptPerformanceCookie =
        parseCCP !== null ? parseCCP.performance : false;
    let isClientAcceptFunctionalCookie =
        parseCCP !== null ? parseCCP.functional : false;
    let isClientAcceptTargetingCookie =
        parseCCP !== null ? parseCCP.targeting : false;

    //   if (isClientAcceptCookie !== undefined && isClientAcceptCookie.length > 0) {
    //     htmlElement.style.overflow = "auto";
    //   } else {
    //     htmlElement.style.overflow = "hidden";
    //   }
    // cenk cookies
    function getDecodedCookieValues(cookieName) {
        let cookieValue = Cookies.get(cookieName);
        if (cookieValue) {
            // Decode from base64 and parse the JSON
            try {
                let decodedValue = atob(cookieValue);
                return JSON.parse(decodedValue);
            } catch (e) {
                console.error("Error decoding and parsing cookie value", e);
            }
        }
        return null;
    }

    // Use the function to get the cookie values
    let ccpValues = getDecodedCookieValues("CCP");

    $(".cookieDetailAccorHeader").on("click", function () {
        $(this).children("svg").toggleClass("rotate180");
        let cookieDetail = $(this).next();
        const isHidden = cookieDetail.hasClass("cdhidden");

        if (isHidden) {
            // Calculate the actual height of the content
            let height = cookieDetail.prop("scrollHeight");
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

    // Function to activate Google Tag Manager
    function activateGTM(gtmContainerId, cookieValues) {
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("consent", "default", {
            ad_storage: cookieValues.targeting ? "granted" : "denied",
            analytics_storage: cookieValues.performance ? "granted" : "denied",
            personalization_storage: cookieValues.targeting
                ? "granted"
                : "denied",
            functionality_storage: cookieValues.functional
                ? "granted"
                : "denied",
            security_storage: cookieValues.functional ? "granted" : "denied",
        });
        gtag("set", "ads_data_redaction", true);

        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js",
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", gtmContainerId);
    }

    // Function to activate Google Analytics 4
    function activateGA4(gaMeasurementId) {
        (function (i, s, o, g, r, a, m) {
            i["GoogleAnalyticsObject"] = r;
            i[r] =
                i[r] ||
                function () {
                    (i[r].q = i[r].q || []).push(arguments);
                };
            i[r].l = 1 * new Date();
            a = s.createElement(o);
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m);
        })(
            window,
            document,
            "script",
            "https://www.google-analytics.com/analytics.js",
            "ga"
        );

        ga("create", gaMeasurementId, "auto");
        ga("send", "pageview");
    }

    function activateYandexMetrica(yandexMetricaId) {
        (function (m, e, t, r, i, k, a) {
            m[i] =
                m[i] ||
                function () {
                    (m[i].a = m[i].a || []).push(arguments);
                };
            m[i].l = 1 * new Date();
            for (var j = 0; j < e.length; j++) {
                k = e[j];
                a = t.createElement(r);
                a.async = 1;
                a.src = k;
                document.head.appendChild(a);
            }
        })(window, ["//mc.yandex.ru/metrika/tag.js"], document, "script", "ym");

        ym(yandexMetricaId, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
        });
    }

    function activateFacebookPixel(facebookPixelId) {
        !(function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod
                    ? n.callMethod.apply(n, arguments)
                    : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = "2.0";
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        })(
            window,
            document,
            "script",
            "https://connect.facebook.net/en_US/fbevents.js"
        );
        fbq("init", facebookPixelId);
        fbq("track", "PageView");
    }

    // client already decided to cookie preferences so we can activate the scripts if they are active

    if (parseCCP !== null)
        isGtmActive ? activateGTM(gtmContainerId, parseCCP) : null;

    if (
        isClientAcceptPerformanceCookie == "true" ||
        isClientAcceptPerformanceCookie == true
    ) {
        isYandexMetricaActive ? activateYandexMetrica(yandexMetricaId) : null;
    }

    if (
        isClientAcceptFunctionalCookie == "true" ||
        isClientAcceptFunctionalCookie == true
    ) {
        isChatboxActive ? activateChatbox() : null;
    }

    if (
        isClientAcceptTargetingCookie == "true" ||
        isClientAcceptTargetingCookie == true
    ) {
        isFacebookPixelActive ? activateFacebookPixel(facebookPixelId) : null;
    }

    let cookieValues = {};

    // Example of retrieving and parsing the cookie
    let ccpCookie = Cookies.get("ccp");
    if (ccpCookie) {
        let ccpValues = JSON.parse(ccpCookie);
    }

    $(".cookieA").on("click", function () {
        // htmlElement.style.overflow = "auto";

        $("#customizeCookie").modal("hide");
        $(".cookieConstentContainer").hide();
        $(".cookieBackdrop").hide();

        // get all the input values of .cookieModal
        let cookieModal = $(".cookieModal");
        let cookieModalInputsArray = [];

        //Cookies.set("cookieConsent", "true", { expires: 365 });
        ccpValues = getDecodedCookieValues("CCP");

        // Use the updated ccpValues to control the overflow
        // if (ccpValues && ccpValues.cookieConsent === "true") {
        //   htmlElement.style.overflow = "auto";
        // } else {
        //   htmlElement.style.overflow = "auto";
        // }

        let classList = this.classList;
        if (classList.contains("caD")) {
            // cookieRight
            let cookieBodyDesktop = $(".cookieRight");
            let cookieBodyDesktopInputs = cookieBodyDesktop.find("input");

            cookieBodyDesktopInputs.each(function (index) {
                if (this.checked) {
                    cookieModalInputsArray.push(true);
                } else {
                    cookieModalInputsArray.push(false);
                }
            });
        } else if (classList.contains("caM")) {
            // cookieBodyMobile get all the input checked values
            let cookieBodyMobile = $(".cookieBodyMobile");
            let cookieBodyMobileInputs = cookieBodyMobile.find("input");

            cookieBodyMobileInputs.each(function (index) {
                if (this.checked) {
                    cookieModalInputsArray.push(true);
                } else {
                    cookieModalInputsArray.push(false);
                }
            });
        } else if (classList.contains("cda")) {
            // push  4 true values to cookieModalInputsArray
            cookieModalInputsArray = [true, true, true, true];
        } else if (classList.contains("cookieConsentDeny")) {
            cookieModalInputsArray = [true, false, false, false];
        }

        cookieModalInputsArray.forEach(function (item, index) {
            switch (index) {
                case 0:
                    break;
                case 1:
                    // if cookieModalInputsArray[1] is true that mean user accepted performance cookies
                    // performance cookies are google analytics and yandex metrica

                    // analytics cookies
                    if (item == true) {
                        isYandexMetricaActive
                            ? activateYandexMetrica(yandexMetricaId)
                            : null;
                        cookieValues.performance = true;
                    } else {
                        cookieValues.performance = false;
                    }

                    break;
                case 2:
                    // if cookieModalInputsArray[2] is true that mean user accepted functional cookies
                    // functional cookies are google tag manager

                    // preferences cookies
                    if (item == true) {
                        isChatboxActive ? activateChatbox() : null;
                        cookieValues.functional = true;
                    } else {
                        cookieValues.functional = false;
                    }
                    break;
                case 3:
                    // if cookieModalInputsArray[3] is true that mean user accepted targeting cookies
                    // targeting cookies are facebook pixel

                    // marketing cookies
                    if (item == true) {
                        isFacebookPixelActive
                            ? activateFacebookPixel(facebookPixelId)
                            : null;
                        cookieValues.targeting = true;
                    } else {
                        cookieValues.targeting = false;
                    }

                    break;
                default:
                    break;
            }

            let cookieString = JSON.stringify(cookieValues);
            let base64CookieString = btoa(cookieString);
            Cookies.set("CCP", base64CookieString, { expires: 365 });
        });
        isGtmActive ? activateGTM(gtmContainerId, cookieValues) : null;

        if (isSwiperActive) {
            swiperAutoPlayStarter(swiperHomeTop);
        }
    });
});

// ad_storage                   targetting
// whats ad_storage cookies are ?
// ad_storage cookies are used to show ads to users

// analytics_storage            performence
// whats analytics_storage cookies are ?
// analytics_storage cookies are used to track users on the website

// personalization_storage      targetting
// whats personalization_storage cookies are ?
// personalization_storage cookies are used to show personalized content to users

// functionality_storage        functionality
// whats functionality_storage cookies are ?
// functionality_storage cookies are used to remember user preferences

// security_storage             functionality
// whats security_storage cookies are ?
// security_storage cookies are used to protect the website from attacks
