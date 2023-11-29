import Cookies from "js-cookie";
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
var htmlElement = document.documentElement;
// cookieDetailAccorHeader on click change next sibling height
$(document).ready(function () {
    // stop scrolling on html
    // document.body.style.overflow = "hidden";

    let isClientAcceptCookie = Cookies.get("cookieConsent");
    let isClientAcceptPerformanceCookie = Cookies.get("port_c_p");
    let isClientAcceptFunctionalCookie = Cookies.get("port_c_f");
    let isClientAcceptTargetingCookie = Cookies.get("port_c_t");



    if (isClientAcceptCookie == "true") {
        htmlElement.style.overflow = "auto";
    } else {
        htmlElement.style.overflow = "hidden";
    }

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
    function activateGTM(gtmContainerId) {
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

    var gtmContainerId = "GTM-TZ53DS5";
    var gaMeasurementId = "G-FH87DE17XF";
    var yandexMetricaId = 92210931;
    var facebookPixelId = "721299109355968";

    if (isClientAcceptPerformanceCookie == "true") {
        activateGA4(gaMeasurementId);
        activateYandexMetrica(yandexMetricaId);
    }

    if (isClientAcceptFunctionalCookie == "true") {
        activateGTM(gtmContainerId);
    }

    if (isClientAcceptTargetingCookie == "true") {
        activateFacebookPixel(facebookPixelId);
    }

    $(".cookieA").on("click", function () {
        htmlElement.style.overflow = "auto";

        $("#customizeCookie").modal("hide");
        $(".cookieConstentContainer").hide();
        $(".cookieBackdrop").hide();

        // get all the input values of .cookieModal
        let cookieModal = $(".cookieModal");
        let cookieModalInputsArray = [];

        Cookies.set("cookieConsent", "true", { expires: 365 });

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
        }

        cookieModalInputsArray.forEach(function (item, index) {
            switch (index) {
                case 0:
                    break;
                case 1:
                    // if cookieModalInputsArray[1] is true that mean user accepted performance cookies
                    // performence cookies are google analytics and yandex metrica
                    if (item == true) {
                        activateGA4(gaMeasurementId);
                        activateYandexMetrica(yandexMetricaId);
                        Cookies.set("port_c_p", "true", {
                            expires: 365,
                        });
                    } else {
                        Cookies.set("port_c_p", "false", {
                            expires: 365,
                        });
                    }

                    break;
                case 2:
                    // if cookieModalInputsArray[2] is true that mean user accepted functional cookies
                    // functional cookies are google tag manager
                    if (item == true) {
                        activateGTM(gtmContainerId);
                        Cookies.set("port_c_f", "true", {
                            expires: 365,
                        });
                    } else {
                        Cookies.set("port_c_f", "false", {
                            expires: 365,
                        });
                    }
                    break;
                case 3:
                    // if cookieModalInputsArray[3] is true that mean user accepted targeting cookies
                    // targeting cookies are facebook pixel
                    if (item == true) {
                        activateFacebookPixel(facebookPixelId);
                        Cookies.set("port_c_t", "true", {
                            expires: 365,
                        });
                    } else {
                        Cookies.set("port_c_t", "false", {
                            expires: 365,
                        });
                    }

                    break;
                default:
                    break;
            }
        });

        swiperAutoPlayStarter(swiperHomeTop);
    });
});
