@extends('layouts.main', ['lang' => 'ru'])

@section('title', 'Специальные Предложения 2024 - Port Nature')
@section('description', 'Специальные предложения Port Nature. Отели в Белеке Турция 5 звезд все включено 1 линия. Акции и скидки в отеле 5 звезд Анталии.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-special-offers') }}"
        aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('special-offers') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-special-offers') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-special-offers') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

{{-- Hero Swiper Section --}}

@include('components.offers.offersDesktop.offersDesktopSwiper', ['lang' => 'ru'])

{{-- Hero Swiper Section End --}}


{{-- Hero Mobile Section Start --}}

@include('components.offers.offersMobile.offersMobileGallery', ['lang' => 'ru'])

{{-- Hero Mobile Section End --}}

{{-- SHOWCASE SECTION --}}

<div class="showcase-section-wrapper">

    @include('components.offers.showcaseSection.bookingSection', ['lang' => 'ru'])
    @include('components.offers.showcaseSection.showcaseRoomSwiper', ['lang' => 'ru'])

</div>
{{-- SHOWCASE SECTION END --}}

{{-- Mobile booking section --}}

@include('components.offers.offersMobile.offersMobileBooking', ['lang' => 'ru'])

{{--- MOBILE BOOKING SECTION END --}}

{{--- FLIGHT SECTION --}}

@include('components.offers.offersDesktop.offersDesktopFlight', ['lang' => 'ru'])

{{--- FLIGHT SECTION END --}}

{{-- TRANSFER SECTION --}}

@include('components.offers.offersDesktop.offersDesktopTransfer', ['lang' => 'ru'])

{{--- Mobile Flight Section Start --}}

@include('components.offers.offersMobile.offersMobileFlight', ['lang' => 'ru'])

{{--- Mobile Flight Section End --}}

{{--- CONTACT SECTION --}}

@include('components.offers.offersDesktop.offersDesktopContact', ['lang' => 'ru'])

{{--- CONTACTS SECTION MOBILE--}}
@include('components.offers.offersMobile.offersMobileContact', ['lang' => 'ru'])

{{--- CONTACTS SECTION MOBILE END--}}

{{--- BOOKING OPPORTUNITIES SECTION 1 --}}
@include('components.offers.offersDesktop.offersDesktopOppotur1', ['lang' => 'ru'])

{{--- FIRST SPLIT SECTION --}}
@include('components.offers.offersDesktop.offersDesktopFirstSplit', ['lang' => 'ru'])

{{--- RATING SECTION --}}
@include('components.offers.offersDesktop.offersDesktopRating', ['lang' => 'ru'])

{{--- BOOKING OPPORTUNITIES SECTION 2 --}}
@include('components.offers.offersDesktop.offersDekstopOppotur2', ['lang' => 'ru'])

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