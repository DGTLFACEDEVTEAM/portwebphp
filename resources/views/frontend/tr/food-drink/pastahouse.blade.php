@extends('frontend.tr.layouts.master')

@section('title', 'Pasta House - PORT Nature Luxury Resort Hotel Spa')
@section('description', 'Pasta House Port Nature Luxury Hotel Spa. En iyi alakart restoranlara sahip Belek aile oteli. Belek özel plaja sahip aile oteli.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-pastahouse') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('pastahouse') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-pastahouse') }}">RU</a></li>
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
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/4.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/5.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/5.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/6.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/6.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/7.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/7.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/8.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/8.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-pastahouse" href="{{ asset('assets/frontend/images/pastahouse/9.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/pastahouse/9.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Port Nature'ın lüks hizmeti ile İtalyan Kültürü <br>ve tadı tek bir tabakta</p>
            </article>
        </div>
    </div>
</div>

<div class="pastahouseHeaderText">

    <p>Makarna, İtalyan kültürel mirasının bir yansımasıdır. Gerçek İtalyan lezzeti için çaba harcıyoruz bu nedenle gerçek İtalyan makarnası ve kaliteli malzemeler kullanıyoruz.</p>
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
                        Tutkuyla hazırlanmış makarna... Saf İtalyan mükemmelliği.
                    </h2>
                    <p>Makarna cennetimizde, her bir makarna telinin İtalyan, geleneği ve gerçek makarnanın hikayesini anlattığı mutfak başyapıtları üretiyoruz. Her tabağın bir tuval olduğu ve yetenekli şeflerimizin yenilebilir sanat eserleri yaratan sanatçılar olduğu bir makarna büyüsü dünyasına adım atın.</p>
                    <p>Sarımsak ve fesleğen aromasının havayı doldurduğu ve sizi İtalya'nın özünü yakalayan yemeklerle süslenmiş bir masaya çağırdığı makarna harikalar diyarına gelin.</p>
                </article>
            </div>
        </div>
    </div>
</div>


<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Diğer Kafeler & Barlar</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>Davidoff Kafe</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-nespresso-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Nespressosmall.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>Nespresso </h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-chivas-lounge') }}">
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