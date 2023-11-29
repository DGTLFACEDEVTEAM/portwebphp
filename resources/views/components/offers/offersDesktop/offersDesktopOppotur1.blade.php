@php
$translation = [
    'en' => [
        'h2-title' => 'BOOKING OPPORTUNITIES',
        'oppoturnity-title-1' => 'Antalya Hotels',
        'oppoturnity-btn' => 'More About',
        'oppoturnity-title-2' => 'Turkey Hotels',
        'oppoturnity-title-3' => 'Belek Hotels',
        'link-antalya' => 'antalya-hotels',
        'link-belek' => 'belek-hotels',
        'link-turkey' => 'turkey-hotels',
        ],
    'de' => [
        'h2-title' => 'BUCHUNGSOPTIONEN',
        'oppoturnity-title-1' => 'Antalya Hotels',
        'oppoturnity-btn' => 'Mehr erfahren',
        'oppoturnity-title-2' => 'Türkei Hotels',
        'oppoturnity-title-3' => 'Belek Hotels',
        'link-antalya' => 'de-antalya-hotels',
        'link-belek' => 'de-belek-hotels',
        'link-turkey' => 'de-turkey-hotels',
        ],
    'ru' => [
        'h2-title' => 'Преимущества бронирования',
        'oppoturnity-title-1' => 'Отели в Анталии',
        'oppoturnity-btn' => 'Подробнее',
        'oppoturnity-title-2' => 'Отели Турции',
        'oppoturnity-title-3' => 'Отели Белек',
        'link-antalya' => 'ru-antalya-hotels',
        'link-belek' => 'ru-belek-hotels',
        'link-turkey' => 'ru-turkey-hotels',
        ],
    'tr' => [
        'h2-title' => 'REZERVASYON FIRSATLARI',
        'oppoturnity-title-1' => 'Antalya Otelleri',
        'oppoturnity-btn' => 'Daha Fazla',
        'oppoturnity-title-2' => 'Türkiye Otelleri',
        'oppoturnity-title-3' => 'Belek Otelleri',
        'link-antalya' => 'tr-antalya-hotels',
        'link-belek' => 'tr-belek-hotels',
        'link-turkey' => 'tr-turkey-hotels',
        ],
];
@endphp

<div class="opportunity-wrapper first-booking-opportunities">
    <p class="h2-title">{!! $translation[$lang]['h2-title'] !!}</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route($translation[$lang]['link-antalya']) }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/antalya.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['oppoturnity-title-1'] !!}</p>
                        <a class="transfer-btn" target="blank" href="{{ route($translation[$lang]['link-antalya']) }}">{!! $translation[$lang]['oppoturnity-btn'] !!}</a>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route($translation[$lang]['link-turkey']) }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/turkey.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['oppoturnity-title-2'] !!}</p>
                            <a class="transfer-btn" target="blank" href="{{ route($translation[$lang]['link-turkey']) }}">{!! $translation[$lang]['oppoturnity-btn'] !!}</a>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route($translation[$lang]['link-belek']) }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/belek.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['oppoturnity-title-3'] !!}</p>
                        <a class="transfer-btn" target="blank" href="{{ route($translation[$lang]['link-belek']) }}">{!! $translation[$lang]['oppoturnity-btn'] !!}</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>