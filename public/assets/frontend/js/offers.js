//HEADER

$(window).on('scroll load resize', function () {
    var widthOfWindow = $(window).width();
    var currentPosition = $('.hamburgerMenu').css('position');
    var neededScroll = $(window).height()
    var currentScroll = $(window).scrollTop();
    if (widthOfWindow <= 1200) {

       
        if ((currentPosition === 'absolute')) {
            if (currentScroll >= neededScroll) {
                $('#navbar2').css('background', 'rgb(35 48 56 / 70%)');
                $('#navbar2').css('position', 'fixed')
            }
            else{
                $('#navbar2').css('background', 'rgb(35 48 56 / 100%)');

            }


        }
        if ((currentPosition === 'fixed') && (currentScroll < neededScroll)) {
            $('#navbar2').css('position', 'absolute')
        }

    }
    if ((widthOfWindow > 1200) &&  (currentScroll < neededScroll)){
        $('.navbar').css('background', 'rgb(35 48 56 / 100%)');

    }
})




//Opportunities swiper



var opportuintySwiper = new Swiper('.opportunity-swiper', {
    slidesPerView: 3,
    spaceBetween:30,
    
    breakpoints: {  
        1:{

            slidesPerView:1.2,
            spaceBetween:20
        },
        576:{
            slidesPerView:2.2,
            spaceBetween:20
        },
        835:{
            slidesPerView:3,
            spaceBetween:30
        }

    },
    loop: true,
});

// Brand Swiper



var brandSwiper = new Swiper('.brand-swiper', {
    slidesPerView: 3,
    centeredSlides:true,
    breakpoints: {
     1:{
        slidesPerView: 1.5
     },
     576:{
        slidesPerView: 2

     },
     1200:{
        slidesPerView: 2.5

     },
     1500:{
        slidesPerView: 3

     }
    },
    autoplay:{
        delay:1500,
        pauseOnMouseEnter: true,
    },
    loop: true,
});

//Offers rooms swiper



var roomsSwiper = new Swiper('.offers-rooms-swiper', {
    slidesPerView: 'auto',
    spaceBetween:30,
    autoplay:{
        delay:1500,
        pauseOnMouseEnter: true,

    },
    breakpoints:{
        1:{
            spaceBetween:0
        },
        480:{
            spaceBetween:30,
        },
        576:{
            spaceBetween:20
        },
        835:{
            spaceBetween:30
        }
    },
    loop: true,
    scrollbar:{
        el:'.swiper-scrollbar',
        draggable:true,
        dragSize:100
        
    },
    navigation:{
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
});


//Flight swiper



var flightSwiper = new Swiper('.flight-swiper', {
    slidesPerView: 5,
    spaceBetween:40,
    autoplay:{
        delay:2000,
        pauseOnMouseEnter: true,

        
    },
    breakpoints: {
        1:{
            slidesPerView:1,
            centeredSlides:true,
            spaceBetween:0
        },
        350:{
            slidesPerView:2,
            centeredSlides:false,
            spaceBetween:10
        },
        576:{
            slidesPerView:3,
            spaceBetween:20

        },
        834:{
            spaceBetween:20,
            slidesPerView: 4
        },
        1400:{
            spaceBetween:40
        },
    },
    loop: true,
});



//Rating swiper

var ratingSwiper = new Swiper('.rating-swiper', {
    slidesPerView: 'auto',

    spaceBetween:30,
    breakpoints: {
       1:{
        spaceBetween:20
       },
       576:{
        spaceBetween:30
       }
    },
    scrollbar:{
        el:'.swiper-scrollbar',
        draggable:true,
        dragSize:186
        
    },
    navigation:{
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
    loop: true,

});

//Stage swiper

var vw = ($(window).width())/100;
var vw = ($(window).width())/100;
if ($(window).width() >= 1920){
    var stageCount = 3
}
else if (($(window).width() >= 1920) && ($(window).width() <= 1177)){
    var stageContainerWidth = $(window).width();

    var stageCount = (stageContainerWidth / ($('.stage-inner-wrapper').width() )) 
}
else{
    var stageContainerWidth = $(window).width();

    var stageCount = (stageContainerWidth /($('.stage-inner-wrapper').width() ))

}
if (stageCount > 3){
    stageCount = 3
}
if (($('.stage-inner-wrapper').width() ) > $(window).width()){
    $('.stage-inner-wrapper').css('width', '100vw')
    stageCount = 1
}
var stageSwiper = new Swiper('.stage-swiper', {
    slidesPerView: stageCount,
    spaceBetween:6,
    autoplay:{
        delay:2000,
    },
    centeredSlides:true,
    breakpoints: {

    },
    loop: true,
    on: {
    resize:function () {
        var vw = ($(window).width())/100;
        if ($(window).width() >= 1920){
            $('.stage-inner-wrapper').css('width', 'max(390px, 33.125vw)')
            var stageCount = 3
        }
        else if (($(window).width() <= 1920) && ($(window).width() >= 1177)){
            var stageContainerWidth = $(window).width();
            $('.stage-inner-wrapper').css('width', 'max(390px, 33.125vw)')
        
            var stageCount = (stageContainerWidth / ($('.stage-inner-wrapper').width() )) 
        }
        else if (($(window).width() <= 1177) && ($(window).width() >= 576)){
            var stageContainerWidth = $(window).width();
            $('.stage-inner-wrapper').css('width', 'max(390px, 33.125vw)')
        
            var stageCount = (stageContainerWidth / ($('.stage-inner-wrapper').width() )) 
        }
        else{
            var stageContainerWidth = $(window).width();
            $('.stage-inner-wrapper').css('width', '100vw')
        
            var stageCount = 1
        
        }
        if (stageCount > 3){
            stageCount = 3
        }
        if (($('.stage-inner-wrapper').width() ) > $(window).width()){
            $('.stage-inner-wrapper').css('width', '100vw')
            stageCount = 1
        }
        stageSwiper.params.slidesPerView = stageCount;

        stageSwiper.update()

        
    }
}
});

var offersHeroSwiper = new Swiper('.offers-hero-swiper', {
    slidesPerView: 1,

    loop:true,
    autoplay:{
        delay:3000
    }

})

// FLATPICKR DATE SELECTOR CODE


var now = new Date()
var todaysDate = now.toISOString().split('T')[0];
var tomorrowsDate = new Date();
tomorrowsDate.setDate(tomorrowsDate.getDate() + 1);
tomorrowsDate.toISOString().split('T')[0];
var dateStart = todaysDate;
var dateEnd;
var checkin = document.querySelector('#checkin')
var checkout = document.querySelector('#checkout')
var pageLanguage = window.location.href;
pageLanguage = pageLanguage.substr(pageLanguage.length - 2);
var localeText;
if (pageLanguage === 'ru') {
    localeText = {
        firstDayOfWeek: 1,
        weekdays: {
            shorthand: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            longhand: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
        },
        months: {
            shorthand: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            longhand: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        },
    }
}
if (pageLanguage === 'tr') {
    localeText = {
        firstDayOfWeek: 1,
        weekdays: {
            longhand: ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'],
            shorthand: ['Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt']
        },
        months: {
            longhand: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
            shorthand: ['Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara']
        },
    }
}
if (pageLanguage === 'de') {
    localeText = {
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
                "Mär",
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
                "März",
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
    }
}
if (pageLanguage === 'en') {
    localeText = {
        weekdays: {
            shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
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
    }
}
var selectedDateText = ''

//Flatpickr start date picker
var startPicker = flatpickr("#checkin", {

    dateFormat: "Y-m-d",
    minDate: todaysDate,
    altInputClass: 'selectedDateFirst',
    defaultDate: todaysDate,
    locale: localeText,
    onReady: function (selectedDates, dateStr, instance) {
        tomorrowsDate = instance.formatDate(tomorrowsDate, "Y-m-d")

        $('.flatpickr-calendar').addClass("firstCalendar");


    },

    onChange: function (selectedDates, dateStr, instance) {
        var endDateToSet = selectedDates[0]
        endPicker.set('minDate', instance.formatDate(selectedDates[0], "Y-m-d"));
        endPicker.setDate(instance.formatDate(endDateToSet, "Y-m-d"));
        dateStart = instance.formatDate(selectedDates[0], "Y-m-d");
        dateEnd = instance.formatDate(selectedDates[0], "Y-m-d");
        $('.firstCalendar').addClass('active')



    },
    onClose: function (selectedDates, dateStr, instance) {
        dateStart = instance.formatDate(selectedDates[0], "Y-m-d");
        selectedDateText = $('.flatpickr-day.selected').html()
        endPicker.open();
        $('.firstCalendar').removeClass('active')
        $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=3');

    }


});

//Flatpickr end date picker

var endPicker = flatpickr("#checkout", {
    dateFormat: "Y-m-d",
    defaultDate: tomorrowsDate,
    minDate: todaysDate,
    locale: localeText,
    onReady: function (selectedDates, dateStr, instance) {
        $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + todaysDate + '&Checkout=' + tomorrowsDate + '&Adult=3');
        $('.flatpickr-calendar').addClass("secondCalendar");
    },
    onOpen: function (selectedDates, dateStr, instance) {
        $('#checkout').html(dateEnd)
        $('.secondCalendar').addClass('active')
    },
    onClose: function (selectedDates, dateStr, instance) {
        dateEnd = instance.formatDate(selectedDates[0], "Y-m-d");
        $(".flatpickr-day").each(function () {
            if ($(this).html() === selectedDateText) {
                $(this).addClass('firstSelectedDay')
            }
        })
        $('#checkout').html(dateEnd)
        $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=3')
        $('.guestMenu').css('display', 'flex')
        $('.guests').addClass('active')
        $('.secondCalendar').removeClass('active')

    }
});

const featureMoreButton = document.querySelector('.collapseView');
const showAll = document.querySelector('.showAllFeature')
const featureGrid = document.querySelector('.featureGrid')
const innerWidth = window.innerWidth;
if (showAll) {
    showAll.addEventListener('click', function () {
        featureMoreButton.setAttribute('style', 'display:flex')
        showAll.setAttribute('style', 'display:none')
        if (innerWidth < 576) {
            featureGrid.setAttribute('style', 'margin-bottom:0px')
        } else featureGrid.setAttribute('style', 'margin-bottom:60px')

    })
}

let guest = document.querySelector('.guests')
let guestmenu = document.querySelector('.guestMenu')
let guestAdult = document.querySelector('.guestMenuAdult')
let guestChild = document.querySelector('.guestMenuChild')

let booking = document.querySelector('.booking')
let body = document.querySelector('body')
if (guest) {
    body.addEventListener('click', function (e) {
        if ($(e.target).hasClass('flatpickr-input')) {
            guestmenu.setAttribute('style', 'display:none');
            $('.guests').removeClass('active')
            $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult + linkVariablePart)
        }
         else if (($(e.target).hasClass('guestMenuAdult')) || ($(e.target).hasClass('guests-adult')) || ($(e.target).hasClass('adult-increment')) || ($(e.target).hasClass('adult-decrement'))) {
            $('.guestMenuAdult').css('display', 'flex')
            console.log('has that class')
            $('.guests-adult').addClass('active')
            $('.guestMenuChild').css('display', 'none')
            $('.guests-child').removeClass('active')
        }
        else if (($(e.target).hasClass('guestMenuChild')) || ($(e.target).hasClass('guests-child')) || ($(e.target).hasClass('child-increment')) || ($(e.target).hasClass('child-decrement'))) {
            guestChild.setAttribute('style', 'display:flex')
            $('.guests-child').addClass('active')
            $('.guestMenuAdult').css('display', 'none')
            $('.guests-adult').removeClass('active')
        }
        else{
                        $('.guestMenuChild').css('display', 'none')
            $('.guests-child').removeClass('active')
            $('.guestMenuAdult').css('display', 'none')
            $('.guests-adult').removeClass('active')

        }
   
      


    })
    var adult = 3;
    var adultCount;
    var childCount;
    document.querySelector("#adultCount").innerText = adult;

    function adultIncrement() {
        if (adult < 5)
            adult = adult + 1;
        adultCount = adult
        document.querySelector("#adultCount").innerText = adult;
        bookingLinkChange()

    }

    function adultDecrement() {
        if (adult > 1 && adult < 6) {
            adult = adult - 1;
            adultCount = adult
        }
        document.querySelector("#adultCount").innerText = adult;
        bookingLinkChange()
    }

    var child = 0;
    var childAge1 = '';
    var childAge2 = '';
    var childAge3 = '';
        var childAge4 = '';

    
    document.querySelector("#childCount").innerText = child;

    function childIncrement() {
        if (child < 4) {
            child = child + 1;
            document.querySelector("#childCount").innerText = child;
            childCount = child;
            bookingLinkChange()
            if (child === 1) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'none')
                $('.childAgeCounter3').css('display', 'none')
                $('.childAgeCounter4').css('display', 'none')
                childAge1 = 0;

            $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)


            }
            if (child === 2) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'flex')
                $('.childAgeCounter3').css('display', 'none')
                $('.childAgeCounter4').css('display', 'none')
                childAge2 = 0;
                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)
            }
            if (child === 3) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'flex')
                $('.childAgeCounter3').css('display', 'flex')
                $('.childAgeCounter4').css('display', 'none')
                childAge3 = 0;
                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)
            }
            if (child === 4) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'flex')
                $('.childAgeCounter3').css('display', 'flex')
                                $('.childAgeCounter4').css('display', 'flex')
                                childAge4 = 0;
                                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)

            }
            if (child === 0) {
                $('.childAgeCounter1').css('display', 'none')
                $('.childAgeCounter2').css('display', 'none')
                $('.childAgeCounter3').css('display', 'none')
                $('.childAgeCounter4').css('display', 'none')
                childAge1 = '';
                childAge2 = '';
                childAge3 = '';
                                childAge4 = '';
                                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)

                $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult)

            }
        }

    }

    function childDecrement() {
        if (child <= 0) {
            child = 0
            if (child === 0) {
                $('.childAgeCounter1').css('display', 'none')
                $('.childAgeCounter2').css('display', 'none')
                                $('.childAgeCounter3').css('display', 'none')
                                                $('.childAgeCounter4').css('display', 'none')

                                childAge1 = '';
                childAge2 = '';
                childAge3 = '';
                childAge4 = '';
                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)

            }
        } else {
            child = child - 1;
            childCount = child
            if (child === 1) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'none')
                                $('.childAgeCounter3').css('display', 'none')
                                                $('.childAgeCounter4').css('display', 'none')

                childAge2 = '';
                childAge3 = '';
                childAge4 = '';
                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)

            }
            if (child === 2) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'flex')
                                $('.childAgeCounter3').css('display', 'none')
                                                $('.childAgeCounter4').css('display', 'none')

                childAge3 = '';
                childAge4 = '';
                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)

            }
            if (child === 3) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'flex')
                                $('.childAgeCounter3').css('display', 'flex')
                                                $('.childAgeCounter4').css('display', 'none')

                childAge4 = '';
                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)

            }
            if (child === 0) {
                $('.childAgeCounter1').css('display', 'none')
                $('.childAgeCounter2').css('display', 'none')
                                $('.childAgeCounter3').css('display', 'none')
                                                $('.childAgeCounter4').css('display', 'none')

                childAge1 = '';
                childAge2 = '';
                childAge3 = '';
                childAge4 = '';
                $('#childAge1Count').html(childAge1)
            $('#childAge2Count').html(childAge2)
            $('#childAge3Count').html(childAge3)
            $('#childAge4Count').html(childAge4)

            }
        }
        bookingLinkChange()
        document.querySelector("#childCount").innerText = child;
    }
}
var linkVariablePart = ''
function bookingLinkChange() {
    linkVariablePart = adult + '&ChildAges=' + childAge1 + '+' + childAge2 + '+' + childAge3 + '+' + childAge4;
    if (child === 0) {
        linkVariablePart = ''
    }
    if (child === 1) {
        linkVariablePart = adult + '&ChildAges=' + childAge1
    }
    if (child === 2) {
        linkVariablePart = adult + '&ChildAges=' + childAge1 + '+' + childAge2
    }
    if (child === 3) {
        linkVariablePart = adult + '&ChildAges=' + childAge1 + '+' + childAge2 + '+' + childAge3
    }
    if (child === 4) {
        linkVariablePart = adult + '&ChildAges=' + childAge1 + '+' + childAge2 + '+' + childAge3 + '+' + childAge4
    }

    $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adultCount + linkVariablePart)

}

function childAge1Increment() {
    if ((childAge1 < 14) && (childAge1 >= 0)) {
        childAge1 = childAge1 + 1;
        $('#childAge1Count').html(childAge1);


    }

    bookingLinkChange()

}

function childAge1Decrement() {
    if (childAge1 > 0) {
        childAge1 = childAge1 - 1;
        $('#childAge1Count').html(childAge1)

    }
    bookingLinkChange()
}
function childAge2Increment() {
    if (childAge2 < 14 && childAge2 >= 0) {
        childAge2 = childAge2 + 1;
        $('#childAge2Count').html(childAge2)

    }
    bookingLinkChange()

}

function childAge2Decrement() {

    if (childAge2 > 0) {
        childAge2 = childAge2 - 1;
        $('#childAge2Count').html(childAge2)


    }
    bookingLinkChange()
}
function childAge3Increment() {
    if (childAge3 < 14 && childAge3 >= 0) {
        childAge3 = childAge3 + 1;
        $('#childAge3Count').html(childAge3)

    }
    bookingLinkChange()

}

function childAge3Decrement() {

    if (childAge3 > 0) {
        childAge3 = childAge3 - 1;
        $('#childAge3Count').html(childAge3)


    }
    bookingLinkChange()
}


function childAge4Increment() {
    if (childAge4 < 14 && childAge4 >= 0) {
        childAge4 = childAge4 + 1;
        $('#childAge4Count').html(childAge4)

    }
    bookingLinkChange()

}

function childAge4Decrement() {

    if (childAge4 > 0) {
        childAge4 = childAge4 - 1;
        $('#childAge4Count').html(childAge4)


    }
    bookingLinkChange()
}

//Same height ratings
var highestRatingHeight = 0;
$(window).on('load resize', function () {

    $( ".rating-item" ).each(function( ) {
       var currentItemHeight = $(this).height();
       if (currentItemHeight > highestRatingHeight){
        highestRatingHeight = currentItemHeight
       }
      });
      $('.rating-item').css('height', (highestRatingHeight + 40) + 'px')
});

//Room Selection
function roomSelection(item){
}

$(document).ready(function(){
    $(".room-dropdown-link").click(function(){
     var innerText = $(this).attr("data-value");
     $('.room-selection-dropdown-btn').css('font-weight','400')
     $('.room-selection-dropdown-btn').html(innerText)
    });
  });


  //Colorful hover effect
var ww =($(window).width())/100; 
  window.onload = function() {
    let isIn = false;
    $(".colorful-image-wrapper").each(function () {
        $(".colorful-image-wrapper").on('mouseover', function(){
            isIn = true;
        })
        $(".colorful-image-wrapper").on('mouseout', function(){
            isIn = false;
        })
        $(".colorful-image-wrapper").on('mousemove', function(e){
            if (isIn) {
                function getOffset(el) {
                    const rect = el.getBoundingClientRect();
                    return {
                      left: rect.left + window.scrollX,
                      top: rect.top + window.scrollY
                    };
                  }
                 var topOfElement =  getOffset(this).top
                 var leftOfElement = getOffset(this).left
        
                var top = e.pageY - topOfElement;
                var left = e.pageX - leftOfElement;
        
                $(this).css('--x', left -  (1*ww)  + 'px');
               
                $(this).css('--y', top + 'px');
            
              }
        })
   
  
});
  }

//Adjustment for RU additional text

$(window).on('scroll load resize', function () {
     var ww = $(window).width()
    var elementsHeight =$('.booking-ru-additional-text').css('height');
    $('.booking-ru-additional-text').css('bottom', `calc( (-1 * ${elementsHeight}) - min(3vw, 25px) + 14px)`)
    $('.showcase-section-ru .offers-rooms-swiper').css('padding-top', '0')
    $('.showcase-section-ru ').css('padding-bottom','8vw')


    if ((ww > 576) && (ww < 1600)){
        $('.showcase-section-ru ').css('padding-bottom', `calc(  ${elementsHeight} + min(150px, 10.813vw))`)
        $('.showcase-section-ru .offers-rooms-swiper').css('padding-top', '0')

    }
    if (ww <= 576){
        $('.booking-ru-additional-text').css('bottom', `calc( (-1 * ${elementsHeight}) - 30px`)
        $('.showcase-section-ru .offers-rooms-swiper').css('padding-top', `0px`)
    $('.showcase-section-ru ').css('padding-bottom','0px')

    }
})


//MOBILE

var  generalSwiper = new Swiper('.general-swiper', {
    slidesPerView: 1,
    centeredSlides: true,
    preventClicks: false,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.general-pagination',
      type: 'fraction',
      formatFractionCurrent: function (number) {
        return '' + number;
      }
    },

  });


var  mobileBannerSwiper = new Swiper('.mobile-banner-swiper', {
    slidesPerView: 1,
    centeredSlides: true,
    loop:true,
    autoplay:{
        delay:3000
    }

  });






$('.travellers-btn').click(function (e) {

  var $this = $('.travellers-btn');



  if ($('body').hasClass('show-modal')) {
    $('body').removeClass('show-modal');
    $this.removeClass('active');
    if ($(window).width() < 480) {
      unlockScroll()

    }
  } else {
    $('body').addClass('show-modal');
    $this.addClass('active');

    if ($(window).width() < 480) {
      lockScroll()

    }


  }

  e.preventDefault();

});
$('.modal-close-family').click(function (e) {

  var $this = $('.travellers-btn');

  $this.removeClass('active');


  if ($('body').hasClass('show-modal')) {
    $('body').removeClass('show-modal');
    if ($(window).width() < 480) {
      unlockScroll()

    }
  } else {
    $('body').addClass('show-modal');
    $this.addClass('active');

    if ($(window).width() < 480) {
      lockScroll()

    }


  }

  e.preventDefault();

});