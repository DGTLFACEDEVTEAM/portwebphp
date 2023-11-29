{{-- @extends('layouts.main', ['lang' => 'de']) --}}
@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Offizielle Website- Port Nature Luxury Resort ')
@section('description',
    'Port Nature Luxury Resort Hotel & Spa. Besuchen Sie unsere offizielle Webseite. Bestes Luxus
    all inclusive familien freundliche Hotel in Belek.')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-homepage') }}"
            aria-expanded="false">DE</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item" href="{{ route('homepage') }}">EN</a></li>
            <li><a class="dropdown-item" href="{{ route('tr-homepage') }}">TR</a></li>
            <li><a class="dropdown-item" href="{{ route('ru-homepage') }}">RU</a></li>
        </ul>
    </li>

@endsection

@section('content')

    @include('components.home.heroSwiper', ['lang' => 'de'])

    @include('frontend.de.layouts.booking')

    @include('components.home.homeIcons', ['lang' => 'en'])

    @include('components.inclusiveSwiper', ['lang' => 'de'])

    {{-- {{-- Concerts --}} --}}
    {{-- <div class="concertsWrapper">
        <h2 class="concertsHeader">KONZERTE</h2>
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

    @include('components.home.accommdationSwiper', ['lang' => 'de'])

    @include('components.home.childrenSection', ['lang' => 'de'])

    @include('components.homeBanner', ['lang' => 'de'])


    @include('components.contactSection', ['lang' => 'de'])

    @include('components.home.gastronomySection', ['lang' => 'de'])

    @include('components.home.brandsSection')

    @include('components.home.specialOffer', ['lang' => 'de'])

    @include('components.home.homeServices', ['lang' => 'de'])

    @include('components.home.travelCompany')

    @include('frontend.de.layouts.contact')

    @include('components.home.aboveFooter', ['lang' => 'de'])

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
