@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Sushi Bar A’La Carte - Port Nature Luxury Resort')
@section('description', 'Sushi Bar Alacarte Port Nature Luxury Resort. En lüks denize sıfır 5 yıldızlı Belek otelleri. Lüks konaklama için arayın ve fırsatları kaçırmayın.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-sushi-bar') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('sushi-bar') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-sushi-bar') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-sushi-bar') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="mainHeader">
    <div class="row">
        <div class="col-lg-6">
            <div class="swiper mainRestSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-1.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-2.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-3.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-4.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-5.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-6.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-6.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-7.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-7.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-8.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-8.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-sushibar" href="{{ asset('assets/frontend/images/sushibar/sushibarSlider-9.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/sushibar/sushibarSlider-9.webp') }}" alt="sushibar"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 video">
            {{-- Button trigger modal --}}
            <a type="button" class="restPlayButtonDesktop" data-bs-toggle="modal" data-bs-target=".restaurantModalDesktop">
                <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
                <img class="videoCover" src="{{ asset('assets/frontend/images/sushibar/sushibarVideo.webp') }}" alt="youtubeVideo"/>
            </a>
            {{-- Modal --}}
            <div class="modal fade restaurantModal restaurantModalDesktop" tabindex="-1" aria-labelledby="restaurantModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/v3kBoD1z9AU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="restaurantInfo">
    <div class="hours">
        <div class="time">
            <img class="restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
            <span>13:00 - 21:00</span>
        </div>
    </div>
    <div class="restaurantText">
        <h1>Sushi Bar A'La Carte</h1>
        <p>Uzman suşi şeflerimizin suşi ruloları yaratmak için en iyi malzemeleri kullandığı restoranımızda suşi sanatını keşfedin. Modern bir ambiyans ve olağanüstü hizmet ile Port Nature Luxury Resort & SPA'da.</p>
    </div>
</div>

<div class="mobilevideo">
    {{-- Button trigger modal --}}
    <a type="button" class="restPlayButtonMobile" data-bs-toggle="modal" data-bs-target=".restaurantModalMobile">
        <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
        <img class="videoCover" src="{{ asset('assets/frontend/images/sushibar/sushibarVideo.webp') }}" alt="youtubeVideo"/>
    </a>
    {{-- Modal --}}
    <div class="modal fade restaurantModal restaurantModalMobile" tabindex="-1" aria-labelledby="restaurantModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" >
                <iframe width="900" height="600" src="https://www.youtube.com/embed/v3kBoD1z9AU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

{{-- Contact --}}
@include('frontend.tr.layouts.contact')
{{-- Contact End --}}

{{-- Special Offer --}}
<div class="restSpecialOffer">
    <h6>Diğer Restoranlarımız</h6>
    <div class="swiper restOtherSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-main-restaurant') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/mainrestsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Ana Restoran</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-fareast') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/fareastsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Far East A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-alldaydinning') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/alldaysmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>All Day Dining A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-seaside') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/seasidesmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Seaside A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-mini-club-alacarte') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/miniclubsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Mini Club A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-italian') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/italiansmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>İtalyan A'La Carte</h5>
                </a>

            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-french') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/frenchsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Fransız A'La Carte</h5>
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
<script src="{{ asset('assets/frontend/js/restaurantDetails.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/restaurantsDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection