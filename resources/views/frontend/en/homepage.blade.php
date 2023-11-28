@extends('layouts.main', ['lang' => 'en'])
@section('title', 'Official Website- Port Nature Luxury Resort Hotel') @section('description',
'Port
Nature Luxury Resort Hotel & Spa. Visit our Official Website. Best luxury all inclusive familiy friendly hotel in
Belek.')
@section('header-lang')
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('homepage') }}"
            aria-expanded="false">EN</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li>
                <a class="dropdown-item" href="{{ route('tr-homepage') }}">TR</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('ru-homepage') }}">RU</a>
            </li>
            <li>
                <a class="dropdown-item first-item" href="{{ route('de-homepage') }}">DE</a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    @include('components.home.heroSwiper', ['lang' => 'en'])

    @include('frontend.en.layouts.booking')

    @include('components.home.homeIcons', ['lang' => 'en'])

    @include('components.inclusiveSwiper', ['lang' => 'en'])

    <!-- Concerts -->
    {{-- <div class="concertsWrapper">
        <h2 class="concertsHeader">Concerts</h2>
        <div class="swiper homeConcertSlider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <figure>

                    </figure>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
                <img alt="icon" class="specialSvg lazyload" loading="lazy"
                    src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper" />
            </div>
            <div class="swiper-button-next">
                <img alt="icon" class="specialSvg lazyload" loading="lazy"
                    src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper" />
            </div>
        </div>
    </div> --}}

    @include('components.home.accommdationSwiper', ['lang' => 'en'])

    @include('components.home.childrenSection', ['lang' => 'en'])

    @include('components.home.homeBanner', ['lang' => 'en'])

    @include('components.contactSection', ['lang' => 'en'])

    @include('components.home.gastronomySection', ['lang' => 'en'])

    @include('components.home.brandsSection')

    @include('components.home.specialOffer', ['lang' => 'en'])

    @include('components.home.homeServices', ['lang' => 'en'])

    @include('components.home.travelCompany')

    @include('components.contactSection', ['lang' => 'en'])

    @include('components.home.aboveFooter', ['lang' => 'en'])

@endsection
@section('javascript-imports')
    <script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
    {{-- <script src="{{ asset('assets/frontend/js/main.js') }}"></script> @endsection @section('css-imports') --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/frontend/css/booking-section.css') }}" /> @endsection
