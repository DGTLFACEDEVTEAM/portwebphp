{{-- @extends('layouts.main', ['lang' => 'tr']) --}}
@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Resmi Sayfası- Port Nature Luxury Resort Hotel Spa')
@section('description',
    'Port Nature Luxury Resort Hotel & Spa. Resmi Web Sitemizi Ziyaret Edin. Belek En Lüks Herşey
    Dahil Aile Dostu Otel. ')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-homepage') }}"
            aria-expanded="false">TR</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item first-item" href="{{ route('homepage') }}">EN</a></li>
            <li><a class="dropdown-item" href="{{ route('ru-homepage') }}">RU</a></li>
            <li><a class="dropdown-item" href="{{ route('de-homepage') }}">DE</a></li>
        </ul>
    </li>

@endsection

@section('content')

    @include('components.home.heroSwiper', ['lang' => 'tr'])

    @include('frontend.tr.layouts.booking')

    @include('components.home.homeIcons', ['lang' => 'tr'])

    @include('components.inclusiveSwiper', ['lang' => 'tr'])

    {{-- Concerts --}}
    {{-- <div class="concertsWrapper">
        <h2 class="concertsHeader">KONSERLER</h2>
        <div class="swiper homeConcertSlider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <figure>

                    </figure>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
                <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/swipergray-left.svg') }}"
                    alt="swiper" />
            </div>
            <div class="swiper-button-next">
                <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/swipergray-right.svg') }}"
                    alt="swiper" />
            </div>
        </div>
    </div> --}}

    @include('components.home.accommdationSwiper', ['lang' => 'tr'])

    @include('components.home.childrenSection', ['lang' => 'tr'])

    @include('components.home.homeBanner', ['lang' => 'tr'])

    @include('components.contactSection', ['lang' => 'tr'])

    @include('components.home.gastronomySection', ['lang' => 'tr'])

    @include('components.home.brandsSection')

    @include('components.home.specialOffer', ['lang' => 'tr'])

    @include('components.home.homeServices', ['lang' => 'tr'])

    @include('components.home.travelCompany')

    @include('components.contactSection', ['lang' => 'tr'])

    @include('components.home.aboveFooter', ['lang' => 'tr'])

@endsection

@section('javascript-imports')
    <script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
    {{-- <script src="{{ asset('assets/frontend/js/main.js') }}"></script> --}}
@endsection

@section('css-imports')
    {{-- <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/booking-section.css') }}" /> --}}
    @vite(['resources/css/style.css'])
@endsection
