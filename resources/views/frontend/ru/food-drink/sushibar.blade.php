@extends('layouts.main', ['lang' => 'ru'])

@section('title', 'Sushi Bar Alacarte - Port Nature Hotel')
@section('description', 'Суши-бар Alacarte Port Nature Luxury Resort. Отели Белека 5 звезд для отдыха с детьми ультра все включено. Дешевые отели в Кадрие Белек')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-sushi-bar') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('sushi-bar') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-sushi-bar') }}">TR</a></li>
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
        <p>Незабываемые на вкус суши только с свежими ингредиентами из опытных рук. С современной атмосферой и исключительным сервисом в Port Nature Luxury Resort & SPA.</p>
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
@include('frontend.ru.layouts.contact')
{{-- Contact End --}}

{{-- Special Offer --}}
<div class="restSpecialOffer">
    <h6>Другие рестораны</h6>
    <div class="swiper restOtherSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-main-restaurant') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/mainrestsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Главный ресторан</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-fareast') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/fareastsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Дальневосточный A'la Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-alldaydinning') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/alldaysmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>All Day Dining A'la Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-seaside') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/seasidesmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Seaside A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-mini-club-alacarte') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/miniclubsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Мини Клуб A'la Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-italian') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/italiansmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Итальянский A'la Carte</h5>
                </a>

            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-french') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/frenchsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Французский A'la Carte</h5>
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