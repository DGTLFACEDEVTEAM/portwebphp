@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Lobby Bar - Port Nature Luxury Resort Hotel')
@section('description', 'Lobby Bar Port Nature Luxury Resort Hotel Spa. Das populärste Frühbucherhotel in Bogazkent Antalya. Besuchen Sie unsere Website für die besten Preise.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-lobby-bar') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('lobby-bar') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-lobby-bar') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-lobby-bar') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="barHero">
    <div class="row">
        <div class="col-md-12">
            <h1>Lobby Bar</h1>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="swiper PubVerticalSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D1.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D2.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D3.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D4.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D5.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D6.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D6.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D7.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D7.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D8.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D8.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D9.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D9.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D10.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-D10.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="swiper BarHorizontalSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y1.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y2.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y3.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y4.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y5.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y6.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y6.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y7.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y7.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y8.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y8.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y9.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y9.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y10.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar-Y10.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="barDetailHeroText">
                <div class="hours">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6812 22.775C16.028 22.775 20.3624 17.9565 20.3624 12.0125C20.3624 6.06853 16.028 1.25 10.6812 1.25C5.33442 1.25 1 6.06853 1 12.0125C1 17.9565 5.33442 22.775 10.6812 22.775Z"
                              stroke="#233038" stroke-opacity="0.8" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M10.6797 5.55273V12.0102L14.5522 14.1627" stroke="#233038" stroke-opacity="0.8"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>24/7</span>
                </div>
                <article>
                    <p>Genießen Sie das raffinierte Ambiente unserer rund um die Uhr geöffneten Lobby Bar, wo Sie eine Welt erstklassiger Spirituosen, exquisiter lokaler und internationaler Cocktails sowie erfrischender Heiß- und Kaltgetränke entdecken können.</p>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- Video Section Start -->
<section class="video-section">
    <p class="video-section-title">Videogalerie</p>
     <div class=" video-wrapper">
            <!-- Button trigger modal -->
            <a type="button" class="restPlayButtonDesktop" data-bs-toggle="modal" data-bs-target=".restaurantModalDesktop">
                <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
                <img class="videoCover" src="{{ asset('assets/frontend/images/barCafes/lobby-bar.webp') }}" alt="youtubeVideo"/>
            </a>
            <!-- Modal -->
            <div class="modal fade restaurantModal restaurantModalDesktop" tabindex="-1" aria-labelledby="restaurantModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/EHJcJqSjDXE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Video Section End -->
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Andere Bars & Cafés</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="SCRIPT CHIVAS"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
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
                <a class="roomlink" href="{{ route('de-irish-pub') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/irishPubSmall.webp') }}" alt="IRISH PUB"/>
                    </figure>
                    <h5>IRISH PUB</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-flamingo-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/flamingobarsmall.webp') }}" alt="FLAMINGO BAR"/>
                    </figure>
                    <h5>FLAMINGO BAR</h5><div class="backgroundLines">
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
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
@endsection