@extends('frontend.ru.layouts.master')

@section('title', 'Pasta House - Port Nature Luxury Resort')
@section('description', 'Pasta House Port Nature Luxury Resort. Кафе с итальянской пастой в отеле 5 звезд в Белек. Забронировать онлайн бесплатно отель')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-pastahouse') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('pastahouse') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-pastahouse') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-pastahouse') }}">DE</a></li>
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
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/4.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/5.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/5.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/6.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/6.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/7.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/7.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/8.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/8.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/9.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/9.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Итальянская культура и вкус в одном<br> блюде в Port Nature.</p>
            </article>
        </div>
    </div>
</div>

<div class="pastahouseHeaderText">

    <p>Паста - это отражение итальянского культурного наследия. Мы стремимся к истинно итальянскому вкусу, поэтому готовим настоящую пасту из качественных ингредиентов.</p>
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
Настоящее совершенство - паста, приготовленная со вкусом.                    </h2>
                    <p>Окунитесь в волшебный мир пасты, где каждая тарелка - это холст, а наши опытные повара - художники, создающие съедобные произведения искусства.</p>
                    <p>Перенеситесь в страну чудес пасты, где воздух наполняется ароматом чеснока и базилика, манящим вас к столу, украшенному блюдами, которые передают суть Италии.</p>
                </article>
            </div>
        </div>
    </div>
</div>


<!-- Contact -->
@include('frontend.ru.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Другие бары & кафе</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
             <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>DAVIDOFF Кафе</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-nespresso-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Nespressosmall.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>Nespresso</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
           
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
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
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
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