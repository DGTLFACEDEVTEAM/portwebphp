@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Konzert - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Konzert Port Nature. Luxushotel für die Flitterwochen mit beste Unterhaltung in Antalya. Krönen Sie Ihre Flitterwochen mit weltberühmten StarKonzerten')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-concert') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('concert') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-concert') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-concert') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

{{-- Intro Slider Part --}}
{{-- Swiper --}}
<div class="swiper-container concertsSlider">
    <div class="swiper-wrapper concerts-swiper-wrapper">
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 1.webp') }}"
                                       alt="concerts"></div>
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 2.webp') }}"
                                       alt="concerts"></div>
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 3.webp') }}"
                                       alt="concerts"></div>
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 4.webp') }}"
                                       alt="concerts"></div>
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 5.webp') }}"
                                       alt="concerts"></div>
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 6.webp') }}"
                                       alt="concerts"></div>
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 7.webp') }}"
                                       alt="concerts"></div>
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 8.webp') }}"
                                       alt="concerts"></div>
        <div class="swiper-slide"><img class="concertsSliderImg" src="{{ asset('assets/frontend/images/concerts/Concerts 9.webp') }}"
                                       alt="concerts"></div>
    </div>
    {{-- Add Pagination --}}
    <div class="swiper-pagination"></div>
    {{-- Add Arrows --}}
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


{{-- Intro Slider Part End --}}


{{-- Concert Calendar Part Start --}}

<div class="concert-calendar">
    <div class="concert-calendar-img-wrapper">
        <img class="concert-calendar-img calendar-img-desktop" src="{{ asset('assets/frontend/images/concerts/2024-KONSERLER-1920x1080-EN.webp') }}">
        <img class="concert-calendar-img calendar-img-tablet" src="{{ asset('assets/frontend/images/concerts/2024-KONSERLER-1080x1920-EN.webp') }}">
        <img class="concert-calendar-img calendar-img-mobile" src="{{ asset('assets/frontend/images/concerts/2024-KONSERLER-1080x1920-EN.webp') }}">
    </div>
    <div class="concert-calendar-right">
        <p class="concert-calendar-heading">Konzerte</p>
        <div class="concerts-hr"></div>

        {{-- <p class="concert-calendar-text">Bevorstehende Konzerte im Hotel</p>
        <div class="calendar-flatpickr" id="calendarDatePicker"></div>
        <input id="concertsDate" data-defaultdate="today" value="Concert Date" type="text"
               class="flatpickr-input active" readonly="readonly"> --}}
    </div>
</div>
{{-- Concert Calendar Part End --}}

{{-- Offset Images Part Start--}}
<div class="offset-image-wrapper">
    <img class="offset-image-1" src="{{ asset('assets/frontend/images/concerts/An unfogettable show 2.webp') }}">
    <img class="offset-image-2" src="{{ asset('assets/frontend/images/concerts/An unfogettable show 3.webp') }}">

    <img class="offset-image-3" src="{{ asset('assets/frontend/images/concerts/An unfogettable show 4.webp') }}">

    <img class="offset-image-4" src="{{ asset('assets/frontend/images/concerts/An unfogettable show 5.webp') }}">
    <div class="offset-image-5-wrapper">
        <img class="offset-image-5" src="{{ asset('assets/frontend/images/concerts/An unfogettable show.webp') }}">
        <div class="offset-image-overlay">
            <p class="overlay-top">Ein unvergessbare</p>
            <div class="overlay-hr"></div>
            <p class="overlay-bottom">SHOW</p>
        </div>

    </div>

    <img class="offset-image-6" src="{{ asset('assets/frontend/images/concerts/anunfogettableshow6.webp') }}">

</div>
{{-- Offset Images Part End--}}
{{-- special guest --}}
<div class="homeEntertainment">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>BESONDERE GÄSTE</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Wir haben einen Unterhaltungsbereich von 1000m2 vorbereitet, wo Musik und Tanz Sie fesseln werden.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{-- First Slider --}}
            <div class="concertGallerySlider">
                <div class="swiper concertSwiperSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/concerts/entertainmentSlider-1.webp') }}" alt="Concerts"/>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/concerts/entertainmentSlider-2.webp') }}" alt="Day&NightParties"/>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/concerts/entertainmentSlider-3.webp') }}" alt="StageShows"/>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/concerts/entertainmentSlider-4.webp') }}" alt="LightShows"/>
                            </figure>

                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/concerts/entertainmentSlider-5.webp') }}" alt="KidsShows"/>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/concerts/entertainmentSlider-9.webp') }}" alt="Festivals"/>
                            </figure>
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
        </div>
    </div>
</div>


<div class="container concertsVideoSection">
    <div class="concertsVideo">
        {{-- Button trigger modal --}}
        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img style="height: 70px;width: 70px" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
        </a>
        <img src="{{ asset('assets/frontend/images/home/homeVideo.webp') }}" alt="youtubeVideo"/>
        {{-- Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="display: flex;justify-content: center;align-items: center">
                    <iframe width="900" height="600" src="https://www.youtube.com/embed/bfJxxujrVwo"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="moreButton">
        <a href="">Mehr erfahren</a>
    </div>
</div>

{{-- Contact --}}
@include('frontend.de.layouts.contact')
{{-- Contact End --}}
{{-- Special Offer --}}
{{-- Special Offer --}}
<div class="otherActivities">
    <h6>Andere Aktivitäten</h6>
    <div class="swiper otherActivitiesSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-activity') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/aquapark.webp') }}" alt="aquapark"/>
                    </figure>
                    <h5>Aquapark</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-activity') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/beachvolley.webp') }}" alt="beachvolley"/>
                    </figure>
                    <h5>BEACH-VOLLEYBALL</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-activity') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/kidsshows.webp') }}" alt="kidsshow"/>
                    </figure>
                    <h5>KINDER-SHOWS</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-activity') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/poolgames.webp') }}" alt="poolgames"/>
                    </figure>
                    <h5>POOL-SPIELE</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-activity') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/fitness.webp') }}" alt="fitness"/>
                    </figure>
                    <h5>Fitness</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-activity') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/wateraerobics.webp') }}" alt="wateraerobics"/>
                    </figure>
                    <h5>WASSERGYMNASTIK</h5>
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
<script src="{{ asset('assets/frontend/js/concerts.js') }}"></script><script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>

@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/concerts.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>

@endsection