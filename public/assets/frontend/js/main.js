/*
$(document).ready(function () {
    $(".homeConcertSlider")
        .find("video")
        .each(function () {
            $(this).addClass("videoElement");
        });
    var e = !0;
    $(".videoElement").hover(function () {
        $(this), e ? ($(this).prop("muted", !1), (e = !1)) : ($(this).prop("muted", !0), (e = !0));
    });
}),*/

/*
const concerts = document.querySelector(".homeConcertSlider");
if (concerts)
    var homeConcertSlider = new Swiper(".homeConcertSlider", {
        loop: !0,
        centeredSlides: !1,
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        pagination: {
            el: ".swiper-pagination",
            renderBullet: function (e, t) {
                return '<span class="' + t + ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>';
            },
        },
        breakpoints: {
            1: { centeredSlides: !0, slidesPerView: 1.2, loop: !0, navigation: !1 },
            576: { spaceBetween: 20, slidesPerView: 2, loop: !0, centeredSlides: !1, navigation: !1 },
            835: { spaceBetween: 20, slidesPerView: 3, loop: !0, centeredSlides: !1, navigation: !1 },
            1200: { spaceBetween: 20, slidesPerView: 6, loop: !0, centeredSlides: !0 },
        },
    });
    */
$(window).on("scroll load resize", function () {
    var e = $(window).width(),
        a = $(".hamburgerMenu").css("position"),
        t = $(window).height(),
        i = $(window).scrollTop();
    e <= 1200 &&
        ("absolute" === a &&
            (i >= t
                ? ($("#navbar2").css("background", "rgb(35 48 56 / 70%)"),
                  $("#navbar2").css("position", "fixed"))
                : $("#navbar2").css("background", "transparent")),
        "fixed" === a &&
            i < t &&
            ($("#navbar2").css("background", "transparent!important"),
            $("#navbar2").css("position", "absolute"))),
        e > 1200 &&
            i < t &&
            $(".navbar").css("background", "rgb(35 48 56 / 100%)");
});
var swiperHomeTop = new Swiper(".heroTopSwiper", {
    lazy: true,
    slidesPerView: 1,
    loop: !0,
    autoplay: { delay: 3e3 },
    navigation: { nextEl: ".heroSwiperNext", prevEl: ".heroSwiperPrev" },
    breakpoints: { 576: { autoplay: { delay: 2e4 } } },
});
const inclusiveSlider = document.querySelector(".inclusiveSlider");

// find client is near 100px to inclusiveSlider element
function isScrolledIntoView(el) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;
    // Only completely visible elements return true:
    var isVisible = elemTop < window.innerHeight && elemBottom >= 200;
    // Partially visible elements return true:
    // isVisible = elemTop < window.innerHeight && elemBottom >= 0;
    console.log(isVisible);
    return isVisible;
}

// if client is near 100px to inclusiveSlider element, then start autoplay
$(window).scroll(function () {
    if (isScrolledIntoView(inclusiveSlider)) {
        inclusiveSliderName.autoplay.start();
    } else {
        inclusiveSliderName.autoplay.stop();
    }
});

var inclusiveSliderName = new Swiper(inclusiveSlider, {
    lazy: true,
    loop: !0,
    pagination: {
        clickable: "true",
        el: ".swiper-pagination-horizontal",
        renderBullet: function (e, a) {
            return (
                '<span class="' +
                a +
                ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'
            );
        },
    },
    breakpoints: {
        1: { slidesPerView: 1, spaceBetween: 0 },
        835: { slidesPerView: 1.5, spaceBetween: 20 },
    },
    navigation: { nextEl: ".inclusive-next", prevEl: ".inclusive-prev" },
    lazyPreloadPrevNext: 0,
});

// inclusiveSliderName.params.autoplay.delay = 5000; // Change autoplay delay to 5 seconds
// inclusiveSliderName.params.autoplay.disableOnInteraction = true;

const childrenSwiper = document.querySelector(".childrenSlider");
var childrenSwiperName = new Swiper(childrenSwiper, {
    lazy: true,
    loopedSlides: 7,
    autoplay: { delay: 3e3 },
    initialSlide: 4,
    breakpoints: {
        1: { slidesPerView: 1, spaceBetween: 0, centeredSlides: !1 },
        576: { slidesPerView: 1.5, centeredSlides: !0, spaceBetween: 30 },
        1200: { slidesPerView: 1.75, centeredSlides: !0, spaceBetween: 30 },
    },
    loop: !0,
    pagination: {
        el: ".swiper-pagination",
        renderBullet: function (e, a) {
            return (
                '<span class="' +
                a +
                ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'
            );
        },
    },
    navigation: { nextEl: "#children-next", prevEl: "#children-prev" },
});
if (576 >= $(window).width())
    var containerWidth = $(".homeSpecialOffer").width(),
        homeOtherSliderCount = containerWidth / 345;
else
    var containerWidth = $(".homeSpecialOffer").width(),
        homeOtherSliderCount = containerWidth / 439;
const specialOfferSlider = document.querySelector(".specialOfferSlider");
var homeSpecialOffer = new Swiper(specialOfferSlider, {
    lazy: true,
    slidesPerView: homeOtherSliderCount,
    initialSlide: 1,
    loop: !0,
    pagination: {
        el: ".swiper-pagination",
        renderBullet: function (e, a) {
            return (
                '<span class="' +
                a +
                ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'
            );
        },
    },
    on: {
        sliderMove: function () {
            $(".radialBgImg").css("visibility", "hidden");
        },
        slideChange: function () {
            $(".radialBgImg").css("visibility", "visible");
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    on: {
        resize: function () {
            if (576 >= $(window).width())
                var e = $(".homeSpecialOffer").width(),
                    a = e / 345;
            else
                var e = $(".homeSpecialOffer").width(),
                    a = e / 439;
            (homeSpecialOffer.params.slidesPerView = a),
                homeSpecialOffer.update();
        },
    },
});
const gastronomySlider = document.querySelector(".gastronomySwiper");
gastronomySlider &&
    new Swiper(gastronomySlider, {
        lazy: true,
        slidesPerView: 1,
        loop: !0,
        autoplay: { delay: 3e3, disableOnInteraction: !0 },
        pagination: {
            el: ".swiper-pagination",
            renderBullet: function (e, a) {
                return (
                    '<span class="' +
                    a +
                    ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'
                );
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
const homeServiceSlider = document.querySelector(".homeServicesSlider");
homeServiceSlider &&
    new Swiper(homeServiceSlider, {
        lazy: true,
        slidesPerView: 1,
        loop: !0,
        navigation: {
            nextEl: ".swiper-button-nextSlide",
            prevEl: ".swiper-button-previous",
        },
    });
var ww = $(window).width(),
    roomContainerWidth = $(".Roomswiper").width();
if ($(window).width() > 576) var roomSlidesPerView = roomContainerWidth / 441;
else var roomSlidesPerView = roomContainerWidth / 356;

var roomSwiper = new Swiper(".Roomswiper", {
    lazy: true,
    loop: !0,
    slidesPerView: roomSlidesPerView,
    initialSlide: 0,
    autoplay: { delay: 4e3 },
    breakpoints: { 1: { autoplay: { delay: 4e3 } }, 1600: { autoplay: !1 } },
    pagination: {
        el: ".swiper-pagination",
        renderBullet: function (e, a) {
            return (
                '<span class="' +
                a +
                ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'
            );
        },
    },
    navigation: { nextEl: "#room-swiper-next" },
    on: {
        resize: function () {
            if (576 >= $(window).width())
                var e = $(".Roomswiper").width(),
                    a = e / 356;
            else
                var e = $(".Roomswiper").width(),
                    a = e / 441;
            (roomSwiper.params.slidesPerView = a), roomSwiper.update();
        },
    },
});
const homeBrands = document.querySelector(".homeBrandSlider");
homeBrands &&
    new Swiper(homeBrands, {
        lazy: true,
        loop: !0,
        pagination: {
            el: ".swiper-pagination",
            renderBullet: function (e, a) {
                return (
                    '<span class="' +
                    a +
                    ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'
                );
            },
        },
        autoplay: { delay: 8e3 },
        breakpoints: {
            1: {
                spaceBetween: 30,
                slidesPerView: 2,
                loop: !0,
                allowTouchMove: !0,
                navigation: !1,
            },
            576: {
                spaceBetween: 60,
                slidesPerView: 2,
                loop: !0,
                allowTouchMove: !0,
                navigation: !1,
            },
            990: {
                spaceBetween: 60,
                slidesPerView: 4,
                loop: !0,
                allowTouchMove: !0,
                autoplay: { delay: 2e4 },
            },
            1200: {
                spaceBetween: 60,
                slidesPerView: 5,
                loop: !0,
                allowTouchMove: !1,
                autoplay: { delay: 8e3 },
            },
        },
    }),
    ww > 1 && (e = (ww / 100) * 5.72),
    ww > 1920 && (e = 110);
const travelSlider = document.querySelector(".travelSlider");
travelSlider &&
    new Swiper(travelSlider, {
        lazy: true,
        loop: !0,
        pagination: {
            el: ".swiper-pagination",
            renderBullet: function (e, a) {
                return (
                    '<span class="' +
                    a +
                    ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#CFCFCF"/></svg></span>'
                );
            },
        },
        autoplay: { delay: 2e3 },
        breakpoints: {
            1: { slidesPerView: 1 },
            576: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 3 },
            1281: { slidesPerView: 4 },
        },
    });
var now = new Date(),
    todaysDate = now.toISOString().split("T")[0],
    tomorrowsDate = new Date();
tomorrowsDate.setDate(tomorrowsDate.getDate() + 1);
tomorrowsDate = tomorrowsDate.toISOString().split("T")[0];
var dateEnd = tomorrowsDate;
var dateStart = todaysDate,
    checkin = document.querySelector("#checkin"),
    checkout = document.querySelector("#checkout"),
    pageLanguage = window.location.href;
var t = null;
"ru" === (pageLanguage = pageLanguage.substr(pageLanguage.length - 2)) &&
    (t = {
        firstDayOfWeek: 1,
        weekdays: {
            shorthand: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
            longhand: [
                "Воскресенье",
                "Понедельник",
                "Вторник",
                "Среда",
                "Четверг",
                "Пятница",
                "Суббота",
            ],
        },
        months: {
            shorthand: [
                "Янв",
                "Фев",
                "Март",
                "Апр",
                "Май",
                "Июнь",
                "Июль",
                "Авг",
                "Сен",
                "Окт",
                "Ноя",
                "Дек",
            ],
            longhand: [
                "Январь",
                "Февраль",
                "Март",
                "Апрель",
                "Май",
                "Июнь",
                "Июль",
                "Август",
                "Сентябрь",
                "Октябрь",
                "Ноябрь",
                "Декабрь",
            ],
        },
    }),
    "tr" === pageLanguage &&
        (t = {
            firstDayOfWeek: 1,
            weekdays: {
                longhand: [
                    "Pazar",
                    "Pazartesi",
                    "Salı",
                    "\xc7arşamba",
                    "Perşembe",
                    "Cuma",
                    "Cumartesi",
                ],
                shorthand: ["Paz", "Pzt", "Sal", "\xc7ar", "Per", "Cum", "Cmt"],
            },
            months: {
                longhand: [
                    "Ocak",
                    "Şubat",
                    "Mart",
                    "Nisan",
                    "Mayıs",
                    "Haziran",
                    "Temmuz",
                    "Ağustos",
                    "Eyl\xfcl",
                    "Ekim",
                    "Kasım",
                    "Aralık",
                ],
                shorthand: [
                    "Oca",
                    "Şub",
                    "Mar",
                    "Nis",
                    "May",
                    "Haz",
                    "Tem",
                    "Ağu",
                    "Eyl",
                    "Eki",
                    "Kas",
                    "Ara",
                ],
            },
        }),
    "de" === pageLanguage &&
        (t = {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
                longhand: [
                    "Sonntag",
                    "Montag",
                    "Dienstag",
                    "Mittwoch",
                    "Donnerstag",
                    "Freitag",
                    "Samstag",
                ],
            },
            months: {
                shorthand: [
                    "Jan",
                    "Feb",
                    "M\xe4r",
                    "Apr",
                    "Mai",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Okt",
                    "Nov",
                    "Dez",
                ],
                longhand: [
                    "Januar",
                    "Februar",
                    "M\xe4rz",
                    "April",
                    "Mai",
                    "Juni",
                    "Juli",
                    "August",
                    "September",
                    "Oktober",
                    "November",
                    "Dezember",
                ],
            },
        }),
    "en" === pageLanguage ||
        ("m/" === pageLanguage &&
            (t = {
                weekdays: {
                    shorthand: [
                        "Sun",
                        "Mon",
                        "Tue",
                        "Wed",
                        "Thu",
                        "Fri",
                        "Sat",
                    ],
                    longhand: [
                        "Sunday",
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday",
                    ],
                },
                months: {
                    shorthand: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    longhand: [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                        "July",
                        "August",
                        "September",
                        "October",
                        "November",
                        "December",
                    ],
                },
            }));

var selectedDateText = "",
    startPicker = flatpickr("#checkin", {
        dateFormat: "Y-m-d",
        minDate: todaysDate,
        altInputClass: "selectedDateFirst",
        defaultDate: todaysDate,
        locale: t,
        onReady: function (e, a, t) {
            if (t.mobileInput) {
                t.mobileInput.setAttribute("tabindex", "0");
            }
            t._input.setAttribute("tabindex", "0");
            tomorrowsDate = new Date(tomorrowsDate);
            tomorrowsDate.setDate(tomorrowsDate.getDate() + 1);
            tomorrowsDate = t.formatDate(tomorrowsDate, "Y-m-d");

            $(".flatpickr-calendar").addClass("firstCalendar");
        },
        onChange: function (e, t, i) {
            var r = e[0];
            endPicker.set("minDate", i.formatDate(e[0], "Y-m-d")),
                endPicker.setDate(i.formatDate(r, "Y-m-d")),
                (dateStart = i.formatDate(e[0], "Y-m-d")),
                (a = i.formatDate(e[0], "Y-m-d")),
                $(".firstCalendar").addClass("active");
        },
        onClose: function (e, t, i) {
            (dateStart = i.formatDate(e[0], "Y-m-d")),
                (selectedDateText = $(".flatpickr-day.selected").html()),
                endPicker.open(),
                $(".firstCalendar").removeClass("active"),
                bookingLinkChange();
        },
    }),
    endPicker = flatpickr("#checkout", {
        dateFormat: "Y-m-d",
        defaultDate: tomorrowsDate,
        minDate: todaysDate,
        locale: t,
        onReady: function (e, dateEnd, t) {
            if (t.mobileInput) {
                t.mobileInput.setAttribute("tabindex", "0");
            }
            t._input.setAttribute("tabindex", "0");
            bookingLinkChange(),
                $(".flatpickr-calendar").addClass("secondCalendar");
        },
        onOpen: function (e, t, i) {
            $("#checkout").html(dateEnd),
                $(".secondCalendar").addClass("active");
        },
        onChange: function (e, t, i) {
            var r = e[0];
            dateEnd = i.formatDate(e[0], "Y-m-d");
            bookingLinkChange();
        },
        onClose: function (e, t, i) {
            (a = i.formatDate(e[0], "Y-m-d")),
                $(".flatpickr-day").each(function () {
                    $(this).html() === selectedDateText &&
                        $(this).addClass("firstSelectedDay");
                }),
                $("#checkout").html(a),
                bookingLinkChange();
            $(".secondCalendar").removeClass("active");
        },
    });

var childAge1 = "";
var childAge2 = "";
var childAge3 = "";
var childAge4 = "";
var childAge5 = "";
var childAge6 = "";
var selectedAdultNo = 3;

let guest = document.querySelector(".guests"),
    guestmenu = document.querySelector(".guestMenu"),
    booking = document.querySelector(".booking"),
    body = document.querySelector("body");
if (guest) {
    var e, a, t, i, selectedAdultNo;
    (document.querySelector("#adultCount").innerText = selectedAdultNo),
        $(".adult-item").on("click", function (e) {
            (selectedAdultNo = e.target.value),
                $("#adultCount").html(selectedAdultNo),
                bookingLinkChange();
        });
    var n = 0,
        o = "",
        l = "",
        s = "",
        d = "";
    (document.querySelector("#childCount").innerText = n),
        $(".child-item").on("click", function (e) {
            var a = e.target.value;
            (n = a), $(".childAgeItem").css("display", "none");
            for (var t = 1; t <= a; t++)
                $(".child-age-item-" + t).css("display", "flex"),
                    "" === window["childAge" + t] &&
                        (window["childAge" + t] = 0);
            $("#childCount").text(a), bookingLinkChange();
        }),
        $(".child-age-item").on("click", function (e) {
            var a = $(this).closest(".childAgeItem").index() + 1,
                t = e.target.value,
                i = "childAge" + a;
            (window[i] = t),
                $(`.child-age-item-${a} .child-age-count`).html(t),
                bookingLinkChange();
        });
}
var linkVariablePart = "";
function bookingLinkChange() {
    for (var e = [], t = 1; t <= n; t++) e.push(window["childAge" + t]);
    var i = n > 0 ? "&ChildAges=" + e.join("+") : "";
    $(".bookNow").attr(
        "href",
        "https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=" +
            dateStart +
            "&Checkout=" +
            dateEnd +
            "&Adult=" +
            selectedAdultNo +
            i
    );
}
function adjust() {
    $(" .subChildrenText, .serviceDetail p")
        .not(".swiper-title")
        .each(function () {
            for (
                var e = $(this)
                        .clone()
                        .css({ visibility: "hidden", width: "auto" })
                        .appendTo($(this).parent()),
                    a = Math.max($(this).width(), $(e).width()),
                    t = a,
                    i = $(e).height();
                $(e).height() == i && t > 0;

            )
                (a = t), t--, $(e).width(t);
            $(this).width(a), $(e).remove();
        });
}
$(window).resize(adjust),
    $(document).ready(function () {
        adjust();
    }),
    $(document).ready(function () {
        lc_lightbox(".lightbox-childrenSliderLink ");
    });
