@php
    $translation = [
        'en' => [
            'h1' => 'Welcome To',
        ],
        'ru' => [
            'h1' => 'ДОБРО ПОЖАЛОВАТЬ В',
        ],
        'de' => [
            'h1' => 'Willkommen Im',
        ],
        'tr' => [
            'h1' => 'Hoş Geldiniz',
        ],
    ];

@endphp

<div id="heroSwiperWrapper">
    <div class="swiper-container heroTopSwiper">
        <div class="heroText">
            <h1>{!! $translation[$lang]['h1'] !!}</h1>
            <img loading="lazy" class="heroLogo" src="{{ asset('assets/frontend/images/home/heroLogoBig.webp') }}" alt="logo" />
        </div>
        <div class="heroSocialMediaIcon">
            <a href="https://www.youtube.com/user/portnaturehotel" target="_blank">
                <img loading="lazy" src="{{ asset('assets/frontend/images/youtubewhite.svg') }}" alt="portnatureyoutube" />
            </a>
            <a href="https://www.facebook.com/portnature" target="_blank">
                <img loading="lazy" src="{{ asset('assets/frontend/images/facebookwhite.svg') }}" alt="facebook" />
            </a>
            <a href="https://www.facebook.com/portnature" target="_blank">
                <img loading="lazy" src="{{ asset('assets/frontend/images/instagramwhite.svg') }}" alt="instagram" />
            </a>
            <a href="https://vk.com/publicportnature" target="_blank">
                <img loading="lazy" src="{{ asset('assets/frontend/images/vkwhite.svg') }}" alt="vk" />
            </a>
            <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html" target="_blank">
                <img loading="lazy" src="{{ asset('assets/frontend/images/tripadvisorwhite.svg') }}" alt="tripadvisor" />
            </a>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                {{-- if lang ru --}}
                @if ($lang == 'ru')
                    <picture class="w-100 ">
                        <source media="(max-width: 420px)" srcset="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-RU.webp') }}" />
                        <source media="(min-width: 420px) and (max-width: 1024px)" srcset="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-RU.webp') }}" />
                        <source media="(min-width: 1024px) and (max-width: 1920px)" srcset="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-RU.webp') }}" />
                        <source media="(min-width: 1920px)" srcset="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-RU.webp') }}" />
                        <img src="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-RU.webp') }}" class="d-block homeHeroSwiperImg " fetchpriority="high" alt="Hotel image during the day" />

                    </picture>
                @else
                    <picture class="w-100 ">
                        <source media="(max-width: 420px)" srcset="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-ING.webp') }}" />
                        <source media="(min-width: 420px) and (max-width: 1024px)" srcset="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-ING.webp') }}" />
                        <source media="(min-width: 1024px) and (max-width: 1920px)" srcset="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-ING.webp') }}" />
                        <source media="(min-width: 1920px)" srcset="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-ING.webp') }}" />
                        <img src="{{ asset('assets/frontend/images/home/banner/2024-KONSERLER-ING.webp') }}" class="d-block homeHeroSwiperImg object-fit-cover" fetchpriority="high"
                            alt="Hotel image during the day" />

                    </picture>
                @endif

            </div>
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 420px)" srcset="{{ asset('assets/frontend/images/home/banner/carousel-1-414.webp') }}" />
                    <source media="(min-width: 420px) and (max-width: 1024px)" srcset="{{ asset('assets/frontend/images/home/banner/carousel-1-820.webp') }}" />
                    <source media="(min-width: 1024px) and (max-width: 1920px)" srcset="{{ asset('assets/frontend/images/home/banner/carousel-1-1920.webp') }}" />
                    <source media="(min-width: 1920px)" srcset="{{ asset('assets/frontend/images/home/banner/carousel-1-2560.webp') }}" />
                    <img src="{{ asset('assets/frontend/images/home/banner/carousel-1-2560.webp') }}" class="d-block homeHeroSwiperImg " fetchpriority="high" alt="Hotel image during the day" />

                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 420px)" sizes="(max-width: 420px) 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-2-414.webp') }}" />
                    <source media="(min-width: 421px) and (max-width: 1024px)" sizes="(min-width: 421px) 50vw, 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-2-820.webp') }}" />
                    <source media="(min-width: 1025px) and (max-width: 1920px)" sizes="(min-width: 1025px) 33.3vw, 50vw, 100vw"
                        srcset="{{ asset('assets/frontend/images/home/banner/carousel-2-1920.webp') }}" />
                    <source media="(min-width: 1921px)" sizes="33.3vw, 50vw, 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-2-2560.webp') }}" />
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/banner/carousel-2-2560.webp') }}" class="d-block homeHeroSwiperImg" alt="Pool Image" />
                </picture>
            </div>

            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 420px)" sizes="(max-width: 420px) 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-3-414.webp') }}" />
                    <source media="(min-width: 421px) and (max-width: 1024px)" sizes="(min-width: 421px) 50vw, 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-3-820.webp') }}" />
                    <source media="(min-width: 1025px) and (max-width: 1920px)" sizes="(min-width: 1025px) 33.3vw, 50vw, 100vw"
                        srcset="{{ asset('assets/frontend/images/home/banner/carousel-3-1920.webp') }}" />
                    <source media="(min-width: 1921px)" sizes="33.3vw, 50vw, 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-3-2560.webp') }}" />
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/banner/carousel-3-2560.webp') }}" class="d-block homeHeroSwiperImg" alt="Beach Image" />
                </picture>
            </div>

            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 420px)" sizes="(max-width: 420px) 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-4-414.webp') }}" />
                    <source media="(min-width: 421px)" sizes="(min-width: 421px) 50vw, 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-4-820.webp') }}" />
                    <source media="(min-width: 1025px) and (max-width: 1920px)" sizes="(min-width: 1025px) 33.3vw, 50vw, 100vw"
                        srcset="{{ asset('assets/frontend/images/home/banner/carousel-4-1920.webp') }}" />
                    <source media="(min-width: 1921px)" sizes="33.3vw, 50vw, 100vw" srcset="{{ asset('assets/frontend/images/home/banner/carousel-4-2560.webp') }}" />
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/banner/carousel-4-2560.webp') }}" class="d-block homeHeroSwiperImg" alt="Hotel image at night" />
                </picture>
            </div>

        </div>
        <div class="swiper-button-prev heroSwiperPrev"><img src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiperleft"></div>
        <div class="swiper-button-next heroSwiperNext"><img src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiperright"></div>

    </div>

</div>
