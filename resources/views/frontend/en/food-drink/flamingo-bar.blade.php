@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Flamingo Bar - Port Nature Luxury Resort Hotel')
@section('description', 'Flamingo Bar Port Nature Luxury Resort Hotel Spa. 5 star all inclusive Antalya hotel prices. Review all-inclusive vacation packages at Port Nature.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('flamingo-bar') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-flamingo-bar') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-flamingo-bar') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-flamingo-bar') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="barHero">
    <div class="row">
        <div class="col-md-12">
            <h1>Flamingo Bar</h1>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="swiper PubVerticalSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-1.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-2.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-3.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-4.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-5.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-6.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-6.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-7.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-7.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-8.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-8.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-9.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-9.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-10.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-10.webp') }}" alt="Flamingo Bar"/>
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
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-1.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-2.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-3.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-4.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-5.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-6.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-6.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-7.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-7.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-8.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-8.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-9.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-9.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-10.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar-yatay-10.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="barDetailHeroText">
                <div class="hours">
                    <img src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock" class="barSvg">
                    <span>10:00 - 00:00</span>
                </div>
                <article>
                    <p>If you want to relax in warm and humid days Flamingo poolside bar is a cool choice with lots of imported drinks and hot-cold soft drinks. You can come anytime, such as when you are tired or just to drink something. You and your love always use this place for recharge. We serve Premium import drinks, local drinks, and hot drinks. Come experience the ultimate happy hour at our bar - drinks with your loved ones. Are you looking for a fun night out? Our bar has a vibrant atmosphere and plenty of drink specials to entertain you all night.
                        </p>
                </article>
            </div>
        </div>
    </div>
</div>
{{-- Contact --}}
@include('frontend.en.layouts.contact')
{{-- Contact End --}}
{{-- Special Offer --}}
<div class="barSpecialOffer">
    <h6>Other Bars & Cafes</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="SCRIPT CHIVAS"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY LOUNGE</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('irish-pub') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/irishPubSmall.webp') }}" alt="IRISH BAR"/>
                    </figure>
                    <h5>IRISH PUB</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomLink" href="{{ route('lobby-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/lobbybarsmall.webp') }}" alt="FLAMINGO BAR"/>
                    </figure>
                    <h5>LOBBY BAR</h5><div class="backgroundLines">
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
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
@endsection