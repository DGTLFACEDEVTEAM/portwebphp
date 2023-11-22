$(document).ready(function () {
    if ($(window).width() < 480){

    
if ($("html:lang(en)").length) {
    var calendar = flatpickr('.dateInputDiv', {
        "mode": "range",
        minDate: "today",
        defaultDate: [dateStart, dateEnd],
        dateFormat: "Y-m-d",
        altFormat: "Y-m-d",
        onChange: function (selectedDates, dateStr, instance) {

            var startDate1 = selectedDates[0];
            var endDate1 = selectedDates[1];
            // Calculate the difference in days between start and end dates
            var diffInDays = Math.ceil((endDate1 - startDate1) / (1000 * 60 * 60 * 24));
            // Check if the date range exceeds 30 days
            if (diffInDays > 30) {
                // Set the end date as 30 days later than the start date
                newEndDate = new Date(startDate1.getTime() + (30 * 24 * 60 * 60 * 1000));
                dateEnd = newEndDate
                dateEnd = formatDate(newEndDate)

                dateStart = formatDate(startDate1)

                instance.setDate([dateStart, dateEnd]);
                $('.checkInSpan').text(dateStart)
                $('.checkOutSpan').text(dateEnd)

            } else {
                if (endDate1 !== undefined) {
                    dateStart = formatDate(startDate1);
                    dateEnd = formatDate(endDate1)
                    $('.checkInSpan').text(dateStart)
                    $('.checkOutSpan').text(dateEnd)

                }


            }


        },

        onClose: function (selectedDates, dateStr, instance) {
            $('.booking-hero-btn').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + selectedAdultNo + '&ChildAges=' + childrenString);



        }
    });

}
if ($("html:lang(ru)").length) {
    var calendar = flatpickr('.dateInputDiv', {
        "mode": "range",
        minDate: "today",
        defaultDate: [dateStart, dateEnd],
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                longhand: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
            },
            months: {
                shorthand: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
                longhand: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            },
        },
        dateFormat: "Y-m-d",
        altFormat: "Y-m-d",
        onChange: function (selectedDates, dateStr, instance) {

            var startDate1 = selectedDates[0];
            var endDate1 = selectedDates[1];
            // Calculate the difference in days between start and end dates
            var diffInDays = Math.ceil((endDate1 - startDate1) / (1000 * 60 * 60 * 24));
            // Check if the date range exceeds 30 days
            if (diffInDays > 30) {
                // Set the end date as 30 days later than the start date
                newEndDate = new Date(startDate1.getTime() + (30 * 24 * 60 * 60 * 1000));
                dateEnd = newEndDate
                dateEnd = formatDate(newEndDate)

                dateStart = formatDate(startDate1)

                instance.setDate([dateStart, dateEnd]);
                $('.checkInSpan').text(dateStart)
                $('.checkOutSpan').text(dateEnd)

            } else {
                if (endDate1 !== undefined) {
                    dateStart = formatDate(startDate1);
                    dateEnd = formatDate(endDate1)
                    $('.checkInSpan').text(dateStart)
                    $('.checkOutSpan').text(dateEnd)

                }


            }


        },

        onClose: function (selectedDates, dateStr, instance) {
            $('.booking-hero-btn').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + selectedAdultNo + '&ChildAges=' + childrenString);



        }
    });

}
if ($("html:lang(de)").length) {
    var calendar = flatpickr('.dateInputDiv', {
        "mode": "range",
        minDate: "today",
        defaultDate: [dateStart, dateEnd],
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
                longhand: ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"],
            },
            months: {
                shorthand: ["Jan", "Feb", "Mär", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez"],
                longhand: ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"],
            },
        },
        dateFormat: "Y-m-d",
        altFormat: "Y-m-d",
        onChange: function (selectedDates, dateStr, instance) {

            var startDate1 = selectedDates[0];
            var endDate1 = selectedDates[1];
            // Calculate the difference in days between start and end dates
            var diffInDays = Math.ceil((endDate1 - startDate1) / (1000 * 60 * 60 * 24));
            // Check if the date range exceeds 30 days
            if (diffInDays > 30) {
                // Set the end date as 30 days later than the start date
                newEndDate = new Date(startDate1.getTime() + (30 * 24 * 60 * 60 * 1000));
                dateEnd = newEndDate
                dateEnd = formatDate(newEndDate)

                dateStart = formatDate(startDate1)

                instance.setDate([dateStart, dateEnd]);
                $('.checkInSpan').text(dateStart)
                $('.checkOutSpan').text(dateEnd)

            } else {
                if (endDate1 !== undefined) {
                    dateStart = formatDate(startDate1);
                    dateEnd = formatDate(endDate1)
                    $('.checkInSpan').text(dateStart)
                    $('.checkOutSpan').text(dateEnd)

                }


            }


        },

        onClose: function (selectedDates, dateStr, instance) {
            $('.booking-hero-btn').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + selectedAdultNo + '&ChildAges=' + childrenString);



        }
    });

}
if ($("html:lang(tr)").length) {
    var calendar = flatpickr('.dateInputDiv', {
        "mode": "range",
        minDate: "today",
        defaultDate: [dateStart, dateEnd],
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ["Paz", "Pzt", "Sal", "Çar", "Per", "Cum", "Cmt"],
                longhand: ["Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"],
            },
            months: {
                shorthand: ["Oca", "Şub", "Mar", "Nis", "May", "Haz", "Tem", "Ağu", "Eyl", "Eki", "Kas", "Ara"],
                longhand: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
            },
        },
        dateFormat: "Y-m-d",
        altFormat: "Y-m-d",
        onChange: function (selectedDates, dateStr, instance) {

            var startDate1 = selectedDates[0];
            var endDate1 = selectedDates[1];
            // Calculate the difference in days between start and end dates
            var diffInDays = Math.ceil((endDate1 - startDate1) / (1000 * 60 * 60 * 24));
            // Check if the date range exceeds 30 days
            if (diffInDays > 30) {
                // Set the end date as 30 days later than the start date
                newEndDate = new Date(startDate1.getTime() + (30 * 24 * 60 * 60 * 1000));
                dateEnd = newEndDate
                dateEnd = formatDate(newEndDate)

                dateStart = formatDate(startDate1)

                instance.setDate([dateStart, dateEnd]);
                $('.checkInSpan').text(dateStart)
                $('.checkOutSpan').text(dateEnd)

            } else {
                if (endDate1 !== undefined) {
                    dateStart = formatDate(startDate1);
                    dateEnd = formatDate(endDate1)
                    $('.checkInSpan').text(dateStart)
                    $('.checkOutSpan').text(dateEnd)

                }


            }


        },

        onClose: function (selectedDates, dateStr, instance) {
            $('.booking-hero-btn').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + selectedAdultNo + '&ChildAges=' + childrenString);



        }
    });

}


// VARIABLES
var childAge1 = '';
var childAge2 = '';
var childAge3 = '';
var childAge4 = '';
var childAge5 = '';
var childAge6 = '';
var selectedAdultNo = 3;
var selectedChildNo = 0;
var childrenString = '';
var childCount = '';
var nightCount = 1;
var newEndDate = ''
var now = new Date()
var todaysDate = now.toISOString().split('T')[0];
var fourDaysLater = new Date((new Date()).valueOf() + 1000 * 3600 * 24 * 3);
fourDaysLater = fourDaysLater.toISOString().split('T')[0];
var dateStart = todaysDate;
var dateEnd = fourDaysLater;
let daysLengthTotal = '';
// FLATPICKR DATE PICKER -- CHECK IN - CHECK OUT &
// CHANGING 'Nights' TEXT ACCORDING TO NUMBER SELECTED

//Create dropdown elements


    var childContainer = $(".offers-child-dropdown-menu");
    var adultContainer = $(".adult-selection-dropdown-menu");
    var childAgeContainer = $(".child-age-dropdown-menu")
    for (var i = 0; i <= 4; i++) {
        var childListItem = $('<li class="dropdown-item people-item child-item" value="' + i + '"></li>');
        var childParagraph = $('<p class=" dropdown-text child-text">' + i + '</p>');

        childListItem.append(childParagraph);
        childContainer.append(childListItem);
    }
    for (var i = 1; i <= 5; i++) {
        var adultListItem = $('<li class="dropdown-item people-item adult-item" value="' + i + '"></li>');
        var adultParagraph = $('<p class=" dropdown-text adult-text">' + i + '</p>');

        adultListItem.append(adultParagraph);
        adultContainer.append(adultListItem);
    }
    for (var i = 0; i <= 14; i++) {
        var childAgeListItem = $('<li class="dropdown-item people-item child-age-item" value="' + i + '"></li>');
        var childAgeParagraph = $('<p class=" dropdown-text child-age-text">' + i + '</p>');

        childAgeListItem.append(childAgeParagraph);
        childAgeContainer.append(childAgeListItem);
    }


// CHANGING 'Adults Number' ACCORDING TO NUMBER SELECTED

if (document.querySelector('.adult-item')) {

    document.querySelectorAll('.adult-item').forEach(function (adultNoChoices) {

        adultNoChoices.addEventListener('click', function (e) {

            selectedAdultNo = e.target.value;
            $('.adult-count').html(selectedAdultNo);



        });

    });

}

// CHANGING 'Child Count' ACCORDING TO NUMBER SELECTED

if (document.querySelector('.child-item')) {
    document.querySelectorAll('.child-item').forEach(function (childNoChoices) {
        childNoChoices.addEventListener('click', function (e) {
            if (e.target.parentNode.querySelector('.child-text')) {
                                        console.log(childAge1, childAge2, childAge3)

                selectedChildNo = e.target.value;

                // Hide all child age items
                $('.childAgeItem').css('display', 'none');

                // Show the appropriate number of child age items and toggle the collapse
                childCount = selectedChildNo;
                for (var i = 1; i <= childCount; i++) {
                    $('.child-age-item-' + i).css('display', 'flex');
                }
                $('#childAgesCollapse').collapse("show");

                // Set child ages to 0 if they are empty
                for (var i = 1; i <= childCount; i++) {
                    var ageVarName = 'childAge' + i;
                    if (!(Number.isInteger(window[ageVarName]))) {
                        window[ageVarName] = 0;

                    }
                }

                $('.child-count').text(selectedChildNo);
            }
        });
    });
}
$(".age-collapse-toggle").click(function (e) {
    e.stopPropagation();

    if (selectedChildNo == 0) {
        $('#childSelectionDropdown').dropdown("toggle")
    }
})


$(window).on('load resize', function () {
    if ($(window).width() > 480) {
        if (!($('#hotelSelectionDropdownMenu').hasClass('hotel-selection-dropdown-menu'))) {
            $('#hotelSelectionDropdownMenu').addClass('hotel-selection-dropdown-menu')

        }
    }
    else {
        $('#hotelSelectionDropdownMenu').removeClass('hotel-selection-dropdown-menu')

    }
   
});


        $(".child-age-item").click(function (e) {
            var childIndex = $(this).closest('.childAgeItem').index() + 1;
            selectedChildAge = e.target.value;
            var childVariableName = 'childAge' + childIndex;
            // Access the variable dynamically
            window[childVariableName] = selectedChildAge;
            $(`.child-age-item-` + childIndex + '  .child-age-count').html(selectedChildAge)


        });
var newDate = '';

function addDaysToDate(dateString, daysToAdd) {
    var dateToBeAddedTo = new Date(dateString);
    daysToAdd = parseInt(daysToAdd)
    dateToBeAddedTo.setDate(dateToBeAddedTo.getDate() + daysToAdd);

    var year = dateToBeAddedTo.getFullYear();
    var month = String(dateToBeAddedTo.getMonth() + 1).padStart(2, '0');
    var day = String(dateToBeAddedTo.getDate()).padStart(2, '0');

    var result = year + '-' + month + '-' + day;
    return result;
}

//HELPER FUNCTIONS
function formatDate(date) {
    var year = date.getFullYear();
    var month = String(date.getMonth() + 1).padStart(2, '0');
    var day = String(date.getDate()).padStart(2, '0');

    return year + '-' + month + '-' + day;
}

$(".booking-hero-btn").click(function (e) {

    var childrenString = '';

    for (var i = 1; i <= childCount; i++) {
        childrenString += (i > 1 ? '+' : '') + window['childAge' + i];
    }

    var url = 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + selectedAdultNo;

    if (childCount > 0) {

        url += '&ChildAges=' + childrenString;
    }

    $('.booking-hero-btn').attr("href", url);
});

$('.hero-mobile-sender').on('click', () => {
    if (navigator.share) {
        var currentLink = window.location.href;
        var currentTitle = document.title;
        var filteredData = '';
        console.log(currentTitle);

     $.get(currentLink, function(data) {
   var filteredData = $(data).filter('meta[property="og:title"]').attr("content");

        console.log(filteredData)
  }); 

        navigator.share({
            title: currentTitle,
            text: filteredData,
            url: currentLink,
        })
            .then(() => console.log('Successful share'))
            .catch((error) => console.log('Error sharing', error));
    } else {
        console.log('Share not supported on this browser.');
    }
});

}
});