if($(document).ready(function(){var i=$(window).width()/100;new Swiper(".miniclubSlider",{centeredSlides:!0,loop:!0,speed:500,slidesPerView:"auto",autoplay:{delay:3e3,disableOnInteraction:!0},effect:"coverflow",coverflowEffect:{rotate:0,depth:450,stretch:-12*i,slideShadows:!1}}),$(window).on("resize load",function(){console.log("reinit")})}),576>=$(window).width())var activityContainerWidth=$(".childrenActivitySlider").width(),activitySlidesPerView=activityContainerWidth/352;else var activityContainerWidth=$(".childrenActivitySlider").width(),activitySlidesPerView=activityContainerWidth/512;var activitySlider1=new Swiper(".activitySlider",{slidesPerView:activitySlidesPerView,loop:!0,autoplay:{delay:3e3,reverseDirection:!1},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},on:{resize:function(){if(576>=$(window).width())var i=$(".childrenActivitySlider").width(),e=i/352;else var i=$(".childrenActivitySlider").width(),e=i/512;activitySlider1.params.slidesPerView=e,activitySlider1.update()}}});if(576>=$(window).width())var foodContainerWidth=$(".childrenActivitySlider").width(),foodSlidesPerView=foodContainerWidth/352;else var foodContainerWidth=$(".childrenFoodSlider").width(),foodSlidesPerView=foodContainerWidth/512;var childrenFoodSlider1=new Swiper(".childrenFoodSlider",{slidesPerView:foodSlidesPerView,loop:!0,autoplay:{delay:3e3},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},on:{resize:function(){if(576>=$(window).width())var i=$(".childrenFoodSlider").width(),e=i/352;else var i=$(".childrenFoodSlider").width(),e=i/512;childrenFoodSlider1.params.slidesPerView=e,childrenFoodSlider1.update()}}});if(576>=$(window).width())var containerWidth=$(".kidsSpecialOffer").width(),kidsSpecialSliderCount=containerWidth/352;else var containerWidth=$(".kidsSpecialOffer").width(),kidsSpecialSliderCount=containerWidth/439;var kidsSpecialOfferSlider=new Swiper(".specialOfferSlider",{slidesPerView:kidsSpecialSliderCount,loop:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},on:{resize:function(){if(576>=$(window).width())var i=$(".kidsSpecialOffer").width(),e=i/352;else var i=$(".kidsSpecialOffer").width(),e=i/439;kidsSpecialOfferSlider.params.slidesPerView=e,kidsSpecialOfferSlider.update()}}});$(document).ready(function(){lc_lightbox(".lightbox-food ")}),$(document).ready(function(){lc_lightbox(".lightbox-activity ")}),$(document).ready(function(){lc_lightbox(".lightbox-carousel ")});