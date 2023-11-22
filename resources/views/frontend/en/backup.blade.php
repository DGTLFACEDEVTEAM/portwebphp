<div id="heroSwiperWrapper">
    <div class="swiper-container heroTopSwiper">
        <div class="heroText">
            <h1>Welcome To</h1>
            <img class="heroLogo" src="{{ asset('assets/frontend/images/home/heroLogoBig.webp') }}" alt="logo" />
        </div>
        <div class="heroSocialMediaIcon">
            <a href="https://www.youtube.com/user/portnaturehotel" target="_blank">
                <img src="{{ asset('assets/frontend/images/youtubewhite.svg') }}" alt="portnatureyoutube" />
            </a>
            <a href="https://www.facebook.com/portnature" target="_blank">
                <img src="{{ asset('assets/frontend/images/facebookwhite.svg') }}" alt="facebook" />
            </a>
            <a href="https://www.facebook.com/portnature" target="_blank">
                <img src="{{ asset('assets/frontend/images/instagramwhite.svg') }}" alt="instagram" />
            </a>
            <a href="https://vk.com/publicportnature" target="_blank">
                <img src="{{ asset('assets/frontend/images/vkwhite.svg') }}" alt="vk" />
            </a>
            <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"
                target="_blank">
                <img src="{{ asset('assets/frontend/images/tripadvisorwhite.svg') }}" alt="tripadvisor" />
            </a>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 420px)"
                        srcset="{{ asset('assets/frontend/images/home/banner/carousel-1-414.webp') }}" />
                    <source media="(min-width: 420px) and (max-width: 1024px)"
                        srcset="{{ asset('assets/frontend/images/home/banner/carousel-1-820.webp') }}" />
                    <source media="(min-width: 1024px) and (max-width: 1920px)"
                        srcset="{{ asset('assets/frontend/images/home/banner/carousel-1-1920.webp') }}" />
                    <source media="(min-width: 1920px)"
                        srcset="{{ asset('assets/frontend/images/home/banner/carousel-1-2560.webp') }}" />
                    <img src="{{ asset('assets/frontend/images/home/banner/carousel-1-2560.webp') }}"
                        class="d-block homeHeroSwiperImg " fetchpriority="high" alt="Hotel image during the day" />
                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 420px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-2-414.webp') }}" />
                    <source media="(min-width: 420px) and (max-width: 1024px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-2-820.webp') }}" />
                    <source media="(min-width: 1024px) and (max-width: 1920px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-2-1920.webp') }}" />
                    <source media="(min-width: 1920px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-2-2560.webp') }}" />
                    <img data-src="{{ asset('assets/frontend/images/home/banner/carousel-2-2560.webp') }}"
                        class="d-block homeHeroSwiperImg lazyload" alt="Pool Image" />
                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 420px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-3-414.webp') }}" />
                    <source media="(min-width: 420px) and (max-width: 1024px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-3-820.webp') }}" />
                    <source media="(min-width: 1024px) and (max-width: 1920px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-3-1920.webp') }}" />
                    <source media="(min-width: 1920px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-3-2560.webp') }}" />
                    <img data-src="{{ asset('assets/frontend/images/home/banner/carousel-3-2560.webp') }}"
                        class="d-block homeHeroSwiperImg lazyload" alt="Beach Image" />
                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 420px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-4-414.webp') }}" />
                    <source media="(min-width: 420px) and (max-width: 1024px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-4-820.webp') }}" />
                    <source media="(min-width: 1024px) and (max-width: 1920px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-4-1920.webp') }}" />
                    <source media="(min-width: 1920px)"
                        data-srcset="{{ asset('assets/frontend/images/home/banner/carousel-4-2560.webp') }}" />
                    <img data-src="{{ asset('assets/frontend/images/home/banner/carousel-4-2560.webp') }}"
                        class="d-block homeHeroSwiperImg lazyload" alt="Hotel image at night" />
                </picture>
            </div>
        </div>
        <div class="swiper-button-prev heroSwiperPrev"><img
                src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiperleft"></div>
        <div class="swiper-button-next heroSwiperNext"><img
                src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiperright"></div>


    </div>

</div>
