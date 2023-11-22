
if ($(window).width() <= 576) {
    var containerWidth = $('.restSpecialOffer').width();
    var restOtherSliderCount = (containerWidth / 345)
}
else {
    var containerWidth = $('.restSpecialOffer').width();
    var restOtherSliderCount = (containerWidth / 439)

}
const restOtherSlider = document.querySelector('.restOtherSlider')


if (restOtherSlider) {
    var restOtherSliderName = new Swiper(restOtherSlider, {
        slidesPerView: restOtherSliderCount,
        loop: true,
        autoplay: {
            delay: 3000
        },
        pagination: {
            el: '.swiper-pagination',
            renderBullet: function (index, className) {
                return '<span class="' + className + ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                    '<circle cx="3" cy="3" r="3" fill="#CFCFCF"/>' +
                    '</svg></span>';
            },
        },
        on: {
            sliderMove: function () {
                $('.radialBgImg').css('visibility', 'hidden')

            },
            slideChange: function () {
                $('.radialBgImg').css('visibility', 'visible')
            },
            resize: function () {
                if ($(window).width() <= 576) {
                    var containerWidth = $('.restSpecialOffer').width();
                    var restOtherSliderCount = (containerWidth / 352)
                }
                else {
                    var containerWidth = $('.restSpecialOffer').width();
                    var restOtherSliderCount = (containerWidth / 439)

                }
                restOtherSliderName.params.slidesPerView = restOtherSliderCount
                restOtherSliderName.update()


            }
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },


    });

}


const mainRestSlider = new Swiper(".mainRestSlider", {
    slidesPerView: 1,
    spaceBetween: 73,
    loop: true,
    autoplay: {
        delay: 3000
    }
});

const restaurant = document.querySelector('.restaurantText')
if (restaurant) {
    $(document).ready(function () {
        var restaurantSrc = $('.modal-content iframe').attr("src")
        $('.restaurantModalDesktop').on('hidden.bs.modal', function (e) {
            $('.modal-content iframe').attr("src", "");
            $('.modal-content iframe').attr("src", restaurantSrc);

        });
        $('.restaurantModalMobile').on('hidden.bs.modal', function (e) {
            $('.modal-content iframe').attr("src", "");
            $('modal-content iframe').attr("src", restaurantSrc);
        });
    })

}

//Lightbox
$(document).ready(function () {
    const $obj = lc_lightbox('.lightbox-alldaydining ');
});
$(document).ready(function () {
    const $obj = lc_lightbox('.lightbox-fareast ');
});
$(document).ready(function () {
    const $obj = lc_lightbox('.lightbox-french ');
});
$(document).ready(function () {
    const $obj = lc_lightbox('.lightbox-italian ');
});
$(document).ready(function () {
    const $obj = lc_lightbox('.lightbox-seaside ');
});
$(document).ready(function () {
    const $obj = lc_lightbox('.lightbox-sushibar ');
});

$(document).ready(function () {
    const $obj = lc_lightbox('.lightbox-alldaydining ');
});

