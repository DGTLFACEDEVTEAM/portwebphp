@extends('frontend.tr.layouts.master')

@section('title', 'Özel Teklifler 2024 - Port Nature Luxury Resort')
@section('description', 'Özel Teklifler 2024 Port Nature. Antalya Belek herşey dahil lüks resort oteldeki en iyi
    fırsatlar. Özel teklifler ve fiyatlar için hemen arayın.')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-special-offers') }}"
            aria-expanded="false">TR</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item first-item" href="{{ route('special-offers') }}">EN</a></li>
            <li><a class="dropdown-item" href="{{ route('ru-special-offers') }}">RU</a></li>
            <li><a class="dropdown-item" href="{{ route('de-special-offers') }}">DE</a></li>
        </ul>
    </li>

@endsection

@section('content')

<!-- Hero Swiper Section -->

@include('components.offers.offersDesktop.offersDesktopSwiper', ['lang' => 'tr'])

<!-- Hero Swiper Section End -->


<!-- Hero Mobile Section Start -->

@include('components.offers.offersMobile.offersMobileGallery', ['lang' => 'tr'])

<!-- Hero Mobile Section End -->

<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">

    @include('components.offers.showcaseSection.bookingSection', ['lang' => 'tr'])
    @include('components.offers.showcaseSection.showcaseRoomSwiper', ['lang' => 'tr'])

</div>
{{-- SHOWCASE SECTION END --}}

{{-- Mobile booking section --}}

@include('components.offers.offersMobile.offersMobileBooking', ['lang' => 'tr'])

<!--- MOBILE BOOKING SECTION END -->

<!--- FLIGHT SECTION -->

@include('components.offers.offersDesktop.offersDesktopFlight', ['lang' => 'tr'])

<!--- FLIGHT SECTION END -->

<!-- TRANSFER SECTION -->

@include('components.offers.offersDesktop.offersDesktopTransfer', ['lang' => 'tr'])

<!--- Mobile Flight Section Start -->

@include('components.offers.offersMobile.offersMobileFlight', ['lang' => 'tr'])

<!--- Mobile Flight Section End -->

<!--- CONTACT SECTION -->

@include('components.offers.offersDesktop.offersDesktopContact', ['lang' => 'tr'])

<!--- CONTACTS SECTION MOBILE-->
@include('components.offers.offersMobile.offersMobileContact', ['lang' => 'tr'])

<!--- CONTACTS SECTION MOBILE END-->

<!--- BOOKING OPPORTUNITIES SECTION 1 -->
@include('components.offers.offersDesktop.offersDesktopOppotur1', ['lang' => 'tr'])

<!--- FIRST SPLIT SECTION -->
@include('components.offers.offersDesktop.offersDesktopFirstSplit', ['lang' => 'tr'])

<!--- RATING SECTION -->
@include('components.offers.offersDesktop.offersDesktopRating', ['lang' => 'tr'])

<!--- BOOKING OPPORTUNITIES SECTION 2 -->
@include('components.offers.offersDesktop.offersDekstopOppotur2', ['lang' => 'tr'])



@endsection


@section('javascript-imports')
    <script src="{{ asset('assets/frontend/js/offers.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/offers-mobile-booking.js') }}"></script>


@endsection

@section('css-imports')
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}" />
    <link rel="stylesheet" media="screen and (max-width:480px)"
        href="{{ asset('assets/frontend/css/offers-mobile.css') }}" />


@endsection
