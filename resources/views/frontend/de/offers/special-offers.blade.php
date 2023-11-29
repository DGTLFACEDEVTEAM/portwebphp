@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Angebote - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Angebote Port Nature Hotel. Beste Angebote im Antalya Belek all inclusive luxus resort hotel. Rufen Sie jetzt an für Sonderangebote und beste Preise.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-special-offers') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('special-offers') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-special-offers') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-special-offers') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<!-- Hero Swiper Section -->

@include('components.offers.offersDesktop.offersDesktopSwiper', ['lang' => 'de'])

<!-- Hero Swiper Section End -->


<!-- Hero Mobile Section Start -->

@include('components.offers.offersMobile.offersMobileGallery', ['lang' => 'de'])

<!-- Hero Mobile Section End -->

<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">

    @include('components.offers.showcaseSection.bookingSection', ['lang' => 'de'])
    @include('components.offers.showcaseSection.showcaseRoomSwiper', ['lang' => 'de'])

</div>
{{-- SHOWCASE SECTION END --}}

{{-- Mobile booking section --}}

@include('components.offers.offersMobile.offersMobileBooking', ['lang' => 'de'])

<!--- MOBILE BOOKING SECTION END -->

<!--- FLIGHT SECTION -->

@include('components.offers.offersDesktop.offersDesktopFlight', ['lang' => 'de'])

<!--- FLIGHT SECTION END -->

<!-- TRANSFER SECTION -->

@include('components.offers.offersDesktop.offersDesktopTransfer', ['lang' => 'de'])

<!--- Mobile Flight Section Start -->

@include('components.offers.offersMobile.offersMobileFlight', ['lang' => 'de'])

<!--- Mobile Flight Section End -->

<!--- CONTACT SECTION -->

@include('components.offers.offersDesktop.offersDesktopContact', ['lang' => 'de'])

<!--- CONTACTS SECTION MOBILE-->
@include('components.offers.offersMobile.offersMobileContact', ['lang' => 'de'])

<!--- CONTACTS SECTION MOBILE END-->

<!--- BOOKING OPPORTUNITIES SECTION 1 -->
@include('components.offers.offersDesktop.offersDesktopOppotur1', ['lang' => 'de'])

<!--- FIRST SPLIT SECTION -->
@include('components.offers.offersDesktop.offersDesktopFirstSplit', ['lang' => 'de'])

<!--- RATING SECTION -->
@include('components.offers.offersDesktop.offersDesktopRating', ['lang' => 'de'])

<!--- BOOKING OPPORTUNITIES SECTION 2 -->
@include('components.offers.offersDesktop.offersDekstopOppotur2', ['lang' => 'de'])

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/offers.js') }}"></script>
<script src="{{ asset('assets/frontend/js/offers-mobile-booking.js') }}"></script>


@endsection

@section('css-imports')
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/frontend/css/offers-mobile.css') }}" media="screen and (max-width:480px)" />


@endsection