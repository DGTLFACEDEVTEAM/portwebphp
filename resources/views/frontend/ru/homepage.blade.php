{{-- @extends('layouts.main', ['lang' => 'ru']) --}}
@extends('layouts.main', ['lang' => 'ru'])
@section('title', 'Официальный сайт - Port Nature Luxury Resort')
@section('description',
    'Официальный сайт Port Nature. Лучшие 5-звездночные отели все включено в Анталии. Раннее
    бронирование с лучшими ценами и скидками')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-homepage') }}"
            aria-expanded="false">RU</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item" href="{{ route('homepage') }}">EN</a></li>
            <li><a class="dropdown-item" href="{{ route('tr-homepage') }}">TR</a></li>
            <li><a class="dropdown-item first-item" href="{{ route('de-homepage') }}">DE</a></li>
        </ul>
    </li>

@endsection

@section('content')

    @include('components.home.heroSwiper', ['lang' => 'ru'])

    @include('frontend.ru.layouts.booking')

    @include('components.home.homeIcons', ['lang' => 'ru'])

    @include('components.inclusiveSwiper', ['lang' => 'ru'])

    <!-- Concerts -->
    {{-- <div class="concertsWrapper">
        <h2 class="concertsHeader">Концерты</h2>
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
    <!-- Concerts End -->
    @include('components.home.accommdationSwiper', ['lang' => 'ru'])

    @include('components.home.childrenSection', ['lang' => 'ru'])

    @include('components.home.homeBanner', ['lang' => 'ru'])

    @include('components.contactSection', ['lang' => 'ru'])

    @include('components.home.gastronomySection', ['lang' => 'ru'])

    @include('components.home.brandsSection')

    @include('components.home.specialOffer', ['lang' => 'ru'])

    @include('components.home.homeServices', ['lang' => 'ru'])

    @include('components.home.travelCompany')

    @include('components.contactSection', ['lang' => 'ru'])

    <!-- Bottom Fixed Book Now -->
    <div class="fixedBookNow">
        <a href="https://portnature.rezervasyonal.com/" target="_blank">
            Book Now
        </a>
    </div>

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
