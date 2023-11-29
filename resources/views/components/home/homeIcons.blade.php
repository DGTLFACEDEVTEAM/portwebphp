@php
    $translation = [
        'en' => [
            'icon1' => 'BELEK &#8226; ANTALYA',
            'icon2' => 'AQUAPARK',
            'icon3' => 'CONCERTS',
            'icon4' => 'SANDY BEACH',
            'icon5' => 'ENTERTAINMENT',
        ],
        'ru' => [
            'icon1' => 'Белек - Анталья',
            'icon2' => 'Аквапарк',
            'icon3' => 'Концерты',
            'icon4' => 'Песчаный Пляж',
            'icon5' => 'Развлечения',
        ],
        'de' => [
            'icon1' => 'BELEK &#8226; ANTALYA',
            'icon2' => 'AQUAPARK',
            'icon3' => 'KONZERTE',
            'icon4' => 'SANDSTRAND',
            'icon5' => 'UNTERHALTUNG',
        ],
        'tr' => [
            'icon1' => 'BELEK &#8226; ANTALYA',
            'icon2' => 'SU PARKI',
            'icon3' => 'KONSERLER',
            'icon4' => 'KUM PLAJ',
            'icon5' => 'EĞLENCELER',
        ],
    ];

@endphp
<div class="homeIcons">
    <div class="homeIconContainer">
        <div class="homeIconWrapper">
            <div class="iconGroup">
                <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/homelocation.svg') }}"
                    alt="location">
                <span>{!! $translation[$lang]['icon1'] !!}</span>
            </div>
        </div>
        <div class="homeIconWrapper">
            <div class="iconGroup">
                <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/aquapark.svg') }}"
                    alt="aquapark" />
                <span>{!! $translation[$lang]['icon2'] !!}</span>
            </div>
        </div>
        <div class="homeIconWrapper">
            <div class="iconGroup">
                <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/concerts.svg') }}"
                    alt="concerts">
                <span>{!! $translation[$lang]['icon3'] !!}</span>
            </div>
        </div>
        <div class="homeIconWrapper">
            <div class="iconGroup">
                <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/beach.svg') }}"
                    alt="beach">
                <span>{!! $translation[$lang]['icon4'] !!}</span>
            </div>
        </div>
        <div class="homeIconWrapper">
            <div class="iconGroup">
                <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/entertainment.svg') }}"
                    alt="entertainment" />
                <span>{!! $translation[$lang]['icon5'] !!}</span>
            </div>
        </div>
    </div>
    {{-- Home Icons End --}}
    <div class="thinLine"></div>
</div>