@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Special Offers - Port Nature Luxury Resort Hotel')
@section('description', 'Special Offers Port Nature Luxury Resort. Best Deals at Antalya Belek all inclusive luxury
    resort hotel. Call now for special offers and best prices.')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('special-offers') }}"
            aria-expanded="false">EN</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item first-item" href="{{ route('tr-special-offers') }}">TR</a></li>
            <li><a class="dropdown-item" href="{{ route('ru-special-offers') }}">RU</a></li>
            <li><a class="dropdown-item" href="{{ route('de-special-offers') }}">DE</a></li>
        </ul>
    </li>

@endsection

@section('content')

<!-- Hero Swiper Section -->

@include('components.offers.offersDesktop.offersDesktopSwiper', ['lang' => 'en'])

<!-- Hero Swiper Section End -->



<!-- Hero Mobile Section Start -->

@include('components.offers.offersMobile.offersMobileGallery', ['lang' => 'en'])

<!-- Hero Mobile Section End -->

<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">

    @include('components.offers.showcaseSection.bookingSection', ['lang' => 'en'])
    @include('components.offers.showcaseSection.showcaseRoomSwiper', ['lang' => 'en'])

</div>
{{-- SHOWCASE SECTION END --}}

{{-- Mobile booking section --}}

@include('components.offers.offersMobile.offersMobileBooking', ['lang' => 'en'])

<!--- MOBILE BOOKING SECTION END -->

<!--- FLIGHT SECTION -->

@include('components.offers.offersDesktop.offersDesktopFlight', ['lang' => 'en'])

<!--- FLIGHT SECTION END -->

<!-- TRANSFER SECTION -->

@include('components.offers.offersDesktop.offersDesktopTransfer', ['lang' => 'en'])


<!--- Mobile Flight Section Start -->

@include('components.offers.offersMobile.offersMobileFlight', ['lang' => 'en'])

<!--- Mobile Flight Section End -->

<!--- CONTACT SECTION -->

@include('components.offers.offersDesktop.offersDesktopContact', ['lang' => 'en'])

<!--- CONTACTS SECTION MOBILE-->
@include('components.offers.offersMobile.offersMobileContact', ['lang' => 'en'])

<!--- CONTACTS SECTION MOBILE END-->

<!--- BOOKING OPPORTUNITIES SECTION 1 -->
@include('components.offers.offersDesktop.offersDesktopOppotur1', ['lang' => 'en'])

<!--- FIRST SPLIT SECTION -->
@include('components.offers.offersDesktop.offersDesktopFirstSplit', ['lang' => 'en'])

<!--- RATING SECTION -->
@include('components.offers.offersDesktop.offersDesktopRating', ['lang' => 'en'])

<!--- BOOKING OPPORTUNITIES SECTION 2 -->
@include('components.offers.offersDesktop.offersDekstopOppotur2', ['lang' => 'en'])


@endsection

@section('javascript-imports')
    <script src="{{ asset('assets/frontend/js/offers.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/offers-mobile-booking.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>

@endsection

@section('css-imports')
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}" />
    <link rel="stylesheet" media="screen and (max-width:480px)"
        href="{{ asset('assets/frontend/css/offers-mobile.css') }}" />


@endsection
