@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Main Restaurant - Port Nature Luxury Resort Hotel')
@section('description', 'Main Restaurant Port Nature Luxury Resort. Premium beach hotel in Kadiye Antalya with best offers. Click here for affordable holiday booking.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('main-restaurant') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-main-restaurant') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-main-restaurant') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-main-restaurant') }}">DE</a></li>
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
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-1.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-2.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-3.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-4.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-5.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-6.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-6.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-7.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-7.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-8.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-8.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-9.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-9.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 video">
            {{-- Button trigger modal --}}
            <a type="button" class="restPlayButtonDesktop" data-bs-toggle="modal"
               data-bs-target=".restaurantModalDesktop">
                <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
                <img class="videoCover" src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurantVideo.webp') }}" alt="youtubeVideo"/>
            </a>
            {{-- Modal --}}
            <div class="modal fade restaurantModal restaurantModalDesktop" tabindex="-1"
                 aria-labelledby="restaurantModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <iframe width="900" height="600" src=""
                                title="YouTube video player"
                                frameborder="0"
                                id="restaurantIframeDesktop"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
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
            <span>07:00 - 11:00</span>
        </div>
        <div class="time">
            <img class=“restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
            <span>12:30 - 15:00</span>
        </div>
        <div class="time">
            <img class=“restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
            <span>18:30 - 21:00</span>
        </div>
    </div>
    <div class="restaurantText">
        <h1>Main Restaurant</h1>
        <p>We offer a wide selection of mouth-watering dishes that will satisfy every palate, from savory meats to fresh
            salads with open buffet. Our expert chefs use only the freshest ingredients to create flavorful and healthy
            dishes. </p>
    </div>
</div>

<div class="mobilevideo">
    {{-- Button trigger modal --}}
    <a type="button" class="restPlayButtonMobile" data-bs-toggle="modal" data-bs-target=".restaurantModalMobile">
        <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
        <img class="videoCover" src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurantVideo.webp') }}" alt="youtubeVideo"/>
    </a>
    {{-- Modal --}}
    <div class="modal fade restaurantModal restaurantModalMobile" tabindex="-1" aria-labelledby="restaurantModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <iframe width="300" height="600" src=""
                        id="restaurantIframeMobile"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

{{-- Contact --}}
@include('frontend.en.layouts.contact')
{{-- Contact End --}}


<div class="restSpecialOffer">
    <h6>Other Restaurants</h6>
    <div class="swiper restOtherSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('alldaydinning') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/alldaysmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>All Day Dining A'La Carte</h5>
                    <div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('fareast') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/fareastsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Far East A'La Carte</h5>
                    <div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('french') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/frenchsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>French A'La Carte</h5>
                    <div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('seaside') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/seasidesmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Sea Side A'La Carte</h5>
                    <div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('sushi-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/sushibarsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Sushi Bar A'La Carte</h5>
                    <div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('italian') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/italiansmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Italian A'La Carte</h5>
                    <div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('mini-club-alacarte') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/miniclubsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Mini Club A'La Carte</h5>
                    <div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <img class="restSvg" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper"/>
        </div>
        <div class="swiper-button-next">
            <img class="restSvg" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>
        </div>
    </div>
</div>

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