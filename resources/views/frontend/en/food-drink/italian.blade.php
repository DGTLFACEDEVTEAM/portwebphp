@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Italian Alacarte Restaurant - Port Nature Hotel')
@section('description', 'Italian Alacarte Restaurant Hotel. All inclusive beach hotel in Belek Antalya. Dont pay extra for great Italian flavors at Port Nature Luxury Resort.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('italian') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-italian') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-italian') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-italian') }}">DE</a></li>
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
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-1.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-2.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-3.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-4.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-5.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-6.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-6.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-7.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-7.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-8.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-8.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-italian" href="{{ asset('assets/frontend/images/italian/italianSlider-9.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/italian/italianSlider-9.webp') }}" alt="seaside"/>
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
                <img class="videoCover" src="{{ asset('assets/frontend/images/italian/italianVideo.webp') }}" alt="youtubeVideo"/>
            </a>
            {{-- Modal --}}
            <div class="modal fade restaurantModal restaurantModalDesktop" tabindex="-1" aria-labelledby="restaurantModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/g9FjLbA-9P4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="restaurantInfo">
    <div class="hours">
        <div class="time">
            <img class=“restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>

            <span>12:30 - 17:00</span>
        </div>
        <div class="time">
            <img class=“restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>

            <span>18:00 - 21:00</span>
        </div>
    </div>
    <div class="restaurantText">
        <h1>Italian A'La Carte</h1>
        <p>Port Nature's Italian Restaurant has original Italian kinds of pasta, and top-quality pizza topping with top chefs' hands. Italian atmosphere restaurant feel like you are in Italy.</p>
    </div>
</div>

<div class="mobilevideo">
    {{-- Button trigger modal --}}
    <a type="button" class="restPlayButtonMobile" data-bs-toggle="modal" data-bs-target=".restaurantModalMobile">
        <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
        <img class="videoCover" src="{{ asset('assets/frontend/images/italian/italianVideo.webp') }}" alt="youtubeVideo"/>
    </a>
    {{-- Modal --}}
    <div class="modal fade restaurantModal restaurantModalMobile" tabindex="-1" aria-labelledby="restaurantModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" >
                <iframe width="900" height="600" src="https://www.youtube.com/embed/g9FjLbA-9P4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('main-restaurant') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/mainrestsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Main Restaurant</h5>
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
<div class="pageUpButton">
    <a href="#">
        <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 18L10.5 8L1 18" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M17 8L10.5 1L4 8" stroke="#233038" stroke-opacity="0.8" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
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