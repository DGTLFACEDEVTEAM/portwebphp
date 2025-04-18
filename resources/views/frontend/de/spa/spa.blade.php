@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Spa Zentrum - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Spa Zentrum Port Nature Luxury Resort. Bestes Luxus Spa Hotel in Antalya Türkei. Genießen Sie eine kostenlose Sauna und ein Hammam im Hotel in Antalya')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-spa') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('spa') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-spa') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-spa') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="spaHero">
    <div class="heroImage">
        <figure>
            <img src="{{ asset('assets/frontend/images/spa/Spa.webp') }}" alt="spa&wellness"/>
        </figure>
    </div>
    <article>
        <img class="spaSvg" src="{{ asset('assets/frontend/images/spa/spaicon.svg') }}" alt="spa"/>
        <h1>Spa & Wellness</h1>
        <a class="video-watch-button restPlayButtonDesktop" type="button"  data-bs-toggle="modal" data-bs-target=".spaModalDesktop">
            <img src="{{ asset('assets/frontend/images/spa/youtube.svg') }}">
            <p> Schau jetzt
</p>
        </a>
    </article>
</div>
<div class="spaHeaderText">
    <div class="hours">
        <img class="spaSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
        <span>09:00 - 19:00</span>
    </div>
    <p>Unsere SPAs sind beeindruckend in ihrer Fähigkeit, zu entspannen, Stress abzubauen und Heilung zu fördern. Wir haben eine Atmosphäre von Luxus und Ruhe geschaffen, um unseren Gästen eine breite Palette von Dienstleistungen anzubieten, von der Massage bis zur Hydrotherapie, von der Hydrotherapie bis zur Aromatherapie.</p>
</div>


{{-- First Slider --}}
<div class="spaFirstSlider">
    <div class="swiper spaFirstSwiperSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Turkishbath.webp') }}" alt="TurkishBath"/>
                </figure>
                <h5>TÜRKISCHES BAD</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Steamroom.webp') }}" alt="Steamroom"/>
                </figure>
                <h5>DAMPFRAUM</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Sauna.webp') }}" alt="Sauna"/>
                </figure>
                <h5>Sauna</h5>
            </div>
            {{-- <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Saltroom.webp') }}" alt="SaltRoom"/>
                </figure>
                <h5>SALZRAUM</h5>
            </div> --}}
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Aromatherapy.webp') }}" alt="Aromatherapy"/>
                </figure>
                <h5>AROMATHERAPIE</h5>
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
{{-- First Slider End --}}
{{-- Second Slider --}}
<div class="spaSecondSlider">

            <div class="swiper spaSecondSwiperSlider" dir="rtl">
                <div class="swiper-wrapper second-slider-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/SkinBodycare.webp') }}" alt="skin&bodycare"/>
                        </figure>
                        <h5>HAUT- & KÖRPERPFLEGE</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MedicalMassage.webp') }}" alt="MedicalMassage"/>
                        </figure>
                        <h5>MEDIZINISCHE MASSAGE</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/SwedishMassage.webp') }}" alt="SwedishMassage"/>
                        </figure>
                        <h5>SCHWEDISCHE MASSAGE</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/BalineseMassage.webp') }}" alt="BALINESE MASSAGE"/>
                        </figure>
                        <h5>BALINESISCHE MASSAGE</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MixedMassage.webp') }}" alt="MixedMassage"/>
                        </figure>
                        <h5>GEMISCHTE MASSAGE</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MedicalMassage.webp') }}" alt="relaxmassage"/>
                        </figure>
                        <h5>ENTSPANNUNGSMASSAGE</h5>
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

 
{{-- Second Slider End --}}
<div class="indoorPool">
    <a class="roomlink" href="{{ route('de-indoor-pool') }}">
        <figure>
            <img src="{{ asset('assets/frontend/images/spa/IndoorPool.webp') }}" alt="IndoorPool"/>
        </figure>
        <article>
            <h3>Innenpool</h3>
            <div class="spaMoreButton">
                <a href="{{ route('de-indoor-pool') }}">Mehr erfahren</a>
            </div>
        </article>
    </a>
</div>
{{-- IndoorPool End --}}
{{-- Contact --}}
@include('frontend.de.layouts.contact')
{{-- Contact End --}}
{{-- Page Up Button --}}
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

 <div class="modal fade spaModal spaModalDesktop" tabindex="-1" aria-labelledby="spaModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/oc2oepxKtS4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
</div>
@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/spa.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/spa.css') }}"/>
@endsection