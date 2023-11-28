function swiperAutoPlayStarter(swiper) {
    swiper.autoplay.stop();
    swiper.autoplay.delay = 1000;
    swiper.autoplay.start();
    swiper.slideNext();
}

export { swiperAutoPlayStarter };