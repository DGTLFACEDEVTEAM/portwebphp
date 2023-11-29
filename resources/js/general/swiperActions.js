function swiperAutoPlayStarter(swiper) {
    swiper.autoplay.stop();
    swiper.autoplay.delay = 4e3;
    swiper.autoplay.start();
}

export { swiperAutoPlayStarter };
