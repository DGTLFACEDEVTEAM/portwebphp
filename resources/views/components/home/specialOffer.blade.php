@php
    $translation = [
        'en' => [
            'h2' => 'Special Offers',
            'slides' => [
                [
                    'img' => 'home/specialOfferSlider-1.webp',
                    'alt' => 'vip',
                    'svg' => 'home/vip.svg',
                    'p' => 'Become a VIP customer',
                    'span' => 'VIP privilege on your holiday',
                ],
                [
                    'img' => 'home/specialOfferSlider-2.webp',
                    'alt' => 'mixology',
                    'svg' => 'home/mixology.svg',
                    'p' => 'Mixology Expert',
                    'span' => 'Alchemy with spirits',
                ],
                [
                    'img' => 'home/specialOfferSlider-3.webp',
                    'alt' => 'wedding',
                    'svg' => 'home/wedding.svg',
                    'p' => 'Wedding gift',
                    'span' => 'Spend time together',
                ],
            ],
        ],
        'tr' => [
            'h2' => 'Özel Teklifler',
            'slides' => [
                [
                    'img' => 'home/specialOfferSlider-1.webp',
                    'alt' => 'vip',
                    'svg' => 'home/vip.svg',
                    'p' => 'VIP müşteri olun',
                    'span' => 'Tatilinizde VIP ayrıcalıklar',
                ],
                [
                    'img' => 'home/specialOfferSlider-2.webp',
                    'alt' => 'mixology',
                    'svg' => 'home/mixology.svg',
                    'p' => 'Miksoloji Uzmanı',
                    'span' => 'Sizin için özenle hazırlandı',
                ],
                [
                    'img' => 'home/specialOfferSlider-3.webp',
                    'alt' => 'wedding',
                    'svg' => 'home/wedding.svg',
                    'p' => 'Evlilik hediyeleri',
                    'span' => 'Birlikte vakit geçirin',
                ],
            ],
        ],
        'ru' => [
            'h2' => 'Специальные Предложения',
            'slides' => [
                [
                    'img' => 'home/specialOfferSlider-1.webp',
                    'alt' => 'vip',
                    'svg' => 'home/vip.svg',
                    'p' => 'Станьте VIP-клиентом',
                    'span' => 'VIP-привилегии в отпуске',
                ],
                [
                    'img' => 'home/specialOfferSlider-2.webp',
                    'alt' => 'mixology',
                    'svg' => 'home/mixology.svg',
                    'p' => 'Эксперт по миксологии',
                    'span' => 'Подготовлено для вас',
                ],
                [
                    'img' => 'home/specialOfferSlider-3.webp',
                    'alt' => 'wedding',
                    'svg' => 'home/wedding.svg',
                    'p' => 'Свадебные подарки',
                    'span' => 'Проводите время вместе',
                ],
            ],
        ],
        'de' => [
            'h2' => 'Sonderangebote',
            'slides' => [
                [
                    'img' => 'home/specialOfferSlider-1.webp',
                    'alt' => 'vip',
                    'svg' => 'home/vip.svg',
                    'p' => 'Werden Sie VIP-Kunde',
                    'span' => 'VIP-Privileg in Ihrem Urlaub',
                ],
                [
                    'img' => 'home/specialOfferSlider-2.webp',
                    'alt' => 'mixology',
                    'svg' => 'home/mixology.svg',
                    'p' => 'Experte für Mixologie',
                    'span' => 'Sorgfältig zubereitet für Sie',
                ],
                [
                    'img' => 'home/specialOfferSlider-3.webp',
                    'alt' => 'wedding',
                    'svg' => 'home/wedding.svg',
                    'p' => 'Hochzeitsgeschenk',
                    'span' => 'Zeit zusammen verbringen',
                ],
            ],
        ],
    ];

@endphp
<div class="homeSpecialOffer">
    <h2>{!! $translation[$lang]['h2'] !!}</h2>
    <div class="swiper specialOfferSlider">
        <div class="swiper-wrapper">
            @foreach ($translation[$lang]['slides'] as $slide)
                <div class="swiper-slide">
                    <figure>
                        <img loading="lazy" src="{{ asset('assets/frontend/images/' . $slide['img']) }}"
                            alt="{{ $slide['alt'] }}" />
                    </figure>
                    <div class="backgroundLines">
                        <img class="radialBgImg lazyload" data-src="{{ asset('assets/frontend/images/radialBg.svg') }}"
                            alt="radialBg">
                    </div>
                    <article>
                        <img class="specialSvg" loading="lazy"
                            src="{{ asset('assets/frontend/images/' . $slide['svg']) }}" alt="{{ $slide['alt'] }}">
                        <p>{!! $slide['p'] !!}</p>
                        <span>{!! $slide['span'] !!}</span>
                    </article>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <img class="specialSvg lazyload" loading="lazy"
                src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper" />
        </div>
        <div class="swiper-button-next">
            <img class="specialSvg lazyload" loading="lazy"
                src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper" />
        </div>
    </div>
</div>
