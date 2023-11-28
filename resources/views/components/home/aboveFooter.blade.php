@php
    $translation = [
        'en' => [
            'follow' => 'Follow Us',
            'welcome' => 'Welcome',
        ],
        'tr' => [
            'follow' => 'Bizi Takip Edin',
            'welcome' => 'Hoş Geldiniz',
        ],
        'de' => [
            'follow' => 'Folgen Sie uns',
            'welcome' => 'Willkommen',
        ],
        'ru' => [
            'follow' => 'Подписаться',
            'welcome' => 'Добро пожаловать',
        ],
    ];

@endphp
<div class="homeAboveFooter">
    <div class="aboveImg">
        <img class="mobileV lazyload" loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-1.webp') }}"
            alt="aboveFooter1" />
        <img class="mobileV lazyload" loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-2.webp') }}"
            alt="aboveFooter2" />
        <img loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-3.webp') }}" alt="abovefooter3" />
        <div class="aboveInsta">
            <img loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-4.webp') }}" alt="aboveFooter4"
                style="position:relative;" />
            <a href="https://www.facebook.com/portnature" target="_blank">
                <img class="specialSvg" src="{{ asset('assets/frontend/images/instagramwhite.svg') }}" alt="instagram">
                {!! $translation[$lang]['welcome'] !!}
            </a>
            <p>{!! $translation[$lang]['follow'] !!}</p>
        </div>
        <img loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-5.webp') }}" alt="aboveFooter5" />
        <img class="mobileV lazyload" loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-6.webp') }}"
            alt="aboveFooter6" />
        <img class="mobileV lazyload" loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-7.webp') }}"
            alt="aboveFooter7" />
    </div>
    <div class="phoneImage">
        <img loading="lazy" src="{{ asset('assets/frontend/images/home/inst-en.webp') }}" alt="phone" />
    </div>
</div>
