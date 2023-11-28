@php
$translation = [
    'en' => [
        'h2-title' => 'BOOKING OPPORTUNITIES',
        'oppoturnity-title-1' => 'Antalya Hotels',
        'oppoturnity-btn' => 'More About',
        'oppoturnity-title-2' => 'Turkey Hotels',
        'oppoturnity-title-3' => 'Belek Hotels',
        ],
    'de' => [
        'h2-title' => 'BUCHUNGSOPTIONEN',
        'oppoturnity-title-1' => 'Antalya Hotels',
        'oppoturnity-btn' => 'Mehr erfahren',
        'oppoturnity-title-2' => 'Türkei Hotels',
        'oppoturnity-title-3' => 'Belek Hotels',
        ],
    'ru' => [
        'h2-title' => 'Преимущества бронирования',
        'oppoturnity-title-1' => 'Отели в Анталии',
        'oppoturnity-btn' => 'Подробнее',
        'oppoturnity-title-2' => 'Отели Турции',
        'oppoturnity-title-3' => 'Отели Белек',
        ],
    'tr' => [
        'h2-title' => 'REZERVASYON FIRSATLARI',
        'oppoturnity-title-1' => 'Antalya Otelleri',
        'oppoturnity-btn' => 'Daha Fazla',
        'oppoturnity-title-2' => 'Türkiye Otelleri',
        'oppoturnity-title-3' => 'Belek Otelleri',
        ],
];
@endphp

<div class="opportunity-wrapper first-booking-opportunities">
    <p class="h2-title">{!! $translation[$lang]['h2-title'] !!}</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('antalya-hotels') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/antalya.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['oppoturnity-title-1'] !!}</p>
                        <a class="transfer-btn" target="blank" href="{{ route('antalya-hotels') }}">{!! $translation[$lang]['oppoturnity-btn'] !!}</a>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a target="blank" href="{{ route('turkey-hotels') }}"
                    class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/turkey.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['oppoturnity-title-2'] !!}</p>
                            <a class="transfer-btn" target="blank" href="{{ route('turkey-hotels') }}">{!! $translation[$lang]['oppoturnity-btn'] !!}</a>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a target="blank" href="{{ route('belek-hotels') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/belek.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['oppoturnity-title-3'] !!}</p>
                        <a class="transfer-btn" target="blank" href="{{ route('belek-hotels') }}">{!! $translation[$lang]['oppoturnity-btn'] !!}</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>