@php
    $translation = [
        'en' => [
            'h3' => 'We created an unbelievable beach experience with <br> Belek’s unique natural beauty for adults and children.',
            'a' => 'More About',
            'route' => 'activity',
        ],
        'de' => [
            'h3' => 'Wir haben ein unglaubliches Stranderlebnis mit Beleks<br> einzigartiger natürlicher Schönheit für Erwachsene und Kinder geschaffen.',
            'a' => 'Mehr Uber',
            'route' => 'de-activity',
        ],
        'ru' => [
            'h3' => 'Мы создали невероятный пляж с уникальной природной красотой <br>города Белек для взрослых и детей.',
            'a' => 'Подробнее',
            'route' => 'ru-activity',
        ],
        'tr' => [
            'h3' => 'Belek\'in eşsiz doğal güzellikleri ile yetişkinler ve<br> çocuklar için inanılmaz bir sahil deneyimi yarattık',
            'a' => 'Daha Fazla',
            'route' => 'tr-activity',
        ],
    ];

@endphp
<div class="homeBanner">
    <img alt="Home Banner" loading="lazy" src="{{ asset('assets/frontend/images/home/homeBanner.webp') }}" />
    <h3>
        {!! $translation[$lang]['h3'] !!}
    </h3>
    <div class="moreButton">
        <a aria-label="{!! $translation[$lang]['a'] !!}" href="{{ route($translation[$lang]['route']) }}">{!! $translation[$lang]['a'] !!}</a>
    </div>
</div>
