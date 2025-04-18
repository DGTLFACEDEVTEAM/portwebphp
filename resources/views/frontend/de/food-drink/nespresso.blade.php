@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Nespresso Cafe - Port Nature Luxury Hotel')
@section('description', 'Nespresso Cafe Port Nature Luxury Resort Hotel Spa. Bestes Familienhotel in Side Türkei. Buchen Sie ein All inclusive Urlaubspaket für Side.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-nespresso-cafe') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('nespresso-cafe') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-nespresso-cafe') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-nespresso-cafe') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="nespressoSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-1.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-1.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Perfekter Kaffee ist nichts,<br> was dem Zufall überlassen werden kann.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Perfekter Kaffee ist nichts,<br> was dem Zufall überlassen werden kann.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Perfekter Kaffee ist nichts,<br> was dem Zufall überlassen werden kann.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-4.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Perfekter Kaffee ist nichts,<br> was dem Zufall überlassen werden kann.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-5.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-5.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Perfekter Kaffee ist nichts,<br> was dem Zufall überlassen werden kann.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-6.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-6.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Perfekter Kaffee ist nichts,<br> was dem Zufall überlassen werden kann.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-7.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-7.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Perfekter Kaffee ist nichts,<br> was dem Zufall überlassen werden kann.</p>
            </article>
        </div>
    </div>
</div>

<div class="nespressoHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/nespresso/nespressoLogo.png') }}" alt="nespresso"/>
    </figure>
    <p>Perfekter Kaffeegenuss ist kein Zufall: Er muss bewusst, konsequent und kompromisslos Tasse für Tasse geschaffen werden, indem wir unsere Prinzipien leben.</p>
</div>

<div class="container">
    <div class="nespressoText">
        <div class="row">
            <div class="col-lg-6">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespresso.webp') }}" alt="hennesy"/>
                </figure>
            </div>
            <div class="col-lg-6">
                <article>
                    <h2>
                        Begleiten Sie die einzigartige Reise von der Bohne bis zur Tasse.
                    </h2>
                    <p>Auf dem komplexen Weg von der Bohne zur Tasse gibt es Möglichkeiten, Dinge schneller und billiger zu erledigen als wir. Aber es gibt keinen besseren Weg!
                    </p>
                    <p>Da schon eine einzige fehlerhafte Kaffeebohne die gesamte Charge beschädigen kann, wird die Qualitätskontrolle in jeder Phase sorgfältig durchgeführt und jedes Detail mit bewusster Hingabe korrekt ausgeführt. Port Nature ist der richtige Ort, um diesen sorgfältig zubereiteten Kaffee zu genießen.</p>
                </article>
            </div>
        </div>
        <img class="coffeebg" src="{{ asset('assets/frontend/images/nespresso/nespressoBg.png') }}" alt="bg"/>
    </div>
</div>

{{-- Contact --}}
@include('frontend.de.layouts.contact')
{{-- Contact End --}}
{{-- Special Offer --}}
<div class="barSpecialOffer">
    <h6>Andere Bars & Cafés</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY LOUNGE</h5><div class="backgroundLines">
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
                <a class="roomlink" href="{{ route('de-chivas-lounge') }}">
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
{{-- Special Offer End --}}
{{-- Page Up Button --}}
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/js/nespresso.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/nespresso.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection