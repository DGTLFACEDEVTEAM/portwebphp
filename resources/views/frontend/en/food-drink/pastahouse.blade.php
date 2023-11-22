@extends('frontend.en.layouts.master')

@section('title', 'Pasta House - PORT Nature Luxury Resort Hotel')
@section('description', 'Pasta House Port Nature Luxury Resort Hotel Spa. Best hotel in Belek with 7 different a la carte restaurants. Best Belek family beachfront hotel.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('pastahouse') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-pastahouse') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-pastahouse') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-pastahouse') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')


@section('content')

<div class="pastahouseSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/1.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/1.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/4.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/5.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/5.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/6.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/6.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/7.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/7.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/8.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/8.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/9.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/9.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italian culture and taste in one plate<br> with Port Nature luxury service.</p>
            </article>
        </div>
    </div>
</div>

<div class="pastahouseHeaderText">

    <p>Pasta is a reflection of the Italian cultural heritage. We make an effort to real Italian taste for this reason we use real Italian pasta and high quality ingredients.</p>
</div>

<div class="container">
    <div class="pastahouseText">
        <div class="row">
            <div class="col-lg-6">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/pastahouse.webp') }}" alt="hennesy"/>
                </figure>
            </div>
            <div class="col-lg-6">
                <article>
                    <h2>
                        Passionately crafted pasta, pure Italian perfection.
                    </h2>
                    <p>At our pasta paradise, we craft culinary masterpieces where each strand of pasta tells a story of Italy, tradition, and real pasta. Step into a world of pasta enchantment, where every plate is a canvas and our skilled chefs are the artists, creating edible works of art.</p>
                    <p>Escape to a pasta wonderland where the aroma of garlic and basil fills the air, beckoning you to a table adorned with dishes that capture the essence of Italy.</p>
                </article>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->

<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Other Bars & Cafes</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
             <div class="swiper-slide">
                <a class="roomlink" href="{{ route('davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>Davidoff Cafe</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('nespresso-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Nespressosmall.webp') }}" alt="nespresso cafe"/>
                    </figure>
                    <h5>Nespresso</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
           
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Script Chivas</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper"/>
        </div>
        <div class="swiper-button-next">
            <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>
        </div>
    </div>
</div>
<!-- Special Offer End -->
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection


@endsection




@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/js/pastahouse.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/pastahouse.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection