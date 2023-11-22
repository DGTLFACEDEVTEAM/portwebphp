@extends('frontend.de.layouts.master')

@section('title', 'Pasta House - PORT Nature Luxury Resort & Spa')
@section('description', 'Pasta House Port Nature Luxury Resort. Bestes Hotel in Belek mit 7 verschiedenen a la carte Restaurant. Bestes Familienhotel in Belek direkt am Strand')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-pastahouse') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('pastahouse') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-pastahouse') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-pastahouse') }}">RU</a></li>
    </ul>
</li>

@endsection

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
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/4.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/5.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/5.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/6.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/6.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/7.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/7.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/8.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/8.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/9.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/9.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Italienische Kultur und Geschmack in einem Teller <br>mit Port Nature Luxus-Service.</p>
            </article>
        </div>
    </div>
</div>

<div class="pastahouseHeaderText">

    <p>Pasta ist ein Spiegelbild des italienischen Kulturerbes. Wir bemühen uns um echten italienischen Geschmack, deshalb verwenden wir echte italienische Pasta und hochwertige Zutaten.</p>
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
                        Leidenschaftlich hergestellte Pasta, italienische Perfektion pur.
                    </h2>
                    <p>In unserem Pasta-Paradies stellen wir kulinarische Meisterwerke her, bei denen jeder einzelne Nudelstrang eine Geschichte über Italien, Tradition und echte Pasta erzählt. Treten Sie ein in eine Welt voller Pasta-Zauber, in der jeder Teller eine Leinwand ist und unsere erfahrenen Köche die Künstler sind, die essbare Kunstwerke schaffen.</p>
                    <p>Entfliehen Sie in ein Pasta-Wunderland, in dem der Duft von Knoblauch und Basilikum die Luft erfüllt und Sie zu einem Tisch mit Gerichten einlädt, die die Essenz Italiens einfangen.</p>
                </article>
            </div>
        </div>
    </div>
</div>


<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Andere Bars & Cafés</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Kitkat Cafe</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>Davidoff Kafe</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-nespresso-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Nespressosmall.webp') }}" alt="nespresso"/>
                    </figure>
                    <h5>Nespresso</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="nespresso"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
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
<!-- Page Up -->
<div style="text-align: center;" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

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