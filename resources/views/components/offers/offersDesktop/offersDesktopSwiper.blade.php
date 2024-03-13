@php

$translation = [
    'en' => [
        'transfer' => [
            'text1' => 'For Guests',
            'text2' => 'VIP Transfer',
            'text3' => 'Free Of Charge',
            'addendum' => 'Guests who book accommodation through the call center can take advantage of the free VIP transfer service',
            ],
        'kids' => [
            'img' => 'banner-web-kids-en.webp',
            ],
            'main' => [
                'img' => 'turkish-offer-1.webp',
                ],
                'transfernew' => [
                    'img' => 'en-transfer-29feb.webp',
                    ],
],

        'de' => [
            'transfer' => [
                'text1' => 'Für Gäste',
                'text2' => 'VIP Transfer',
                'text3' => 'Kostenlos',
                'addendum' => 'Gäste, die eine Unterkunft über das Callcenter buchen, können den kostenlosen VIP-Transfer-Service nutzen',
                ],
            'kids' => [
                'img' => 'banner-web-kids-de.webp',
                ],
                'main' => [
                'img' => 'turkish-offer-1.webp',
                ],
                'transfernew' => [
                    'img' => 'de-transfer-29feb.webp',
                    ],
],


        'ru' => [
            'transfer' => [
                'text1' => 'Для гостей',
                'text2' => 'VIP трансфер',
                'text3' => 'Бесплатно',
                'addendum' => 'Гости, которые бронируют проживание через колл-центр, могут воспользоваться бесплатной услугой VIP-трансфера',
                ],
            'kids' => [
                'img' => 'banner-web-kids-ru.webp',
                ],
            'main' => [
                'img' => 'turkish-offer-1.webp',
                ],
                'transfernew' => [
                    'img' => 'ru-transfer-29feb.webp',
                    ],
],

        'tr' => [
            'transfer' => [
                'text1' => 'Misafirlerimiz İçin',
                'text2' => 'VIP Transfer',
                'text3' => 'Ücretsiz',
                'addendum' => 'Çağrı merkezi aracılığıyla rezervasyon yapan misafirlerimiz, ücretsiz VIP transfer hizmetinden yararlanabilirler',
                ],
            'kids' => [
                'img' => 'banner-web-kids.webp',
                ],
                'main' => [
                'img' => 'turkish-offer-1-new.webp',
                ],
                'transfernew' => [
                    'img' => 'en-transfer-29feb.webp',
                    ],
]

];

@endphp

<div class="hero-swiper-wrapper">

    <div class="swiper offers-hero-swiper">
        <div class="swiper-wrapper">

            @if($lang === 'tr')
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/' . $translation[$lang]['main']['img']) }}" />
                    <img class="offers-banner-mobile" src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                </div>
            </div>
        @endif



        @if($lang === 'tr')
        <div class="swiper-slide">
            <div class="offers-slide-inner offers-4">
                <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-transfer.webp') }}" />
                <img class="offers-banner-mobile"
                    src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                <div class="offers-hero-text offers-hero-4">
                    <p class="offers-4-small">
                        {!! $translation[$lang]['transfer']['text1'] !!}
                    </p>
                    <p class="offers-4-big">
                        {!! $translation[$lang]['transfer']['text2'] !!}
                    </p>
                    <div class="offers-4-medium">
                        <img class="offers-text-wrap-1"
                            src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                            {!! $translation[$lang]['transfer']['text3'] !!}
                        <img class="offers-text-wrap-2"
                            src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                    </div>

                </div>
                <div class="transfer-addendum-wrapper"><p class="offers-4-addendum"></p>
                    <p class="offers-addendum-left">{!! $translation[$lang]['transfer']['addendum'] !!}</p></div>

            </div>
        </div>
    @endif

            @if($lang !== 'tr')
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/' . $translation[$lang]['transfernew']['img']) }}" />
                    <img class="offers-banner-mobile" src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                </div>
            </div>
        @endif




            <div class="swiper-slide">
                <div class="offers-slide-inner"> 
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/' . $translation[$lang]['kids']['img']) }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                    <div class="offers-hero-text offers-hero-1">
                    </div>
                    <div class="water-sports-addendum-wrapper"> 
                        <p class="children-offers-addendum-turkish"></p>
                    </div>
                </div>
            </div>

                    
                        @if($lang !== 'tr')
                        <div class="swiper-slide">
                            <div class="offers-slide-inner">
                                <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/' . $translation[$lang]['main']['img']) }}" />
                                <img class="offers-banner-mobile" src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                            </div>
                        </div>
                    @endif



              
                <div class="swiper-slide">
                    <div class="offers-slide-inner">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-2.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-2.webp') }}" />
                    </div>
                </div>
    
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-3.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-3.webp') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-4">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-4.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-5.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-6.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-7.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-8.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-9.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-10.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                </div>
            </div>
        </div>
    </div>
</div>