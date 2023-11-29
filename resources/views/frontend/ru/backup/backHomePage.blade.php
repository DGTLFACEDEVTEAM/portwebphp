@extends('frontend.ru.layouts.master')

@section('title', 'Официальный сайт - Port Nature Luxury Resort')
@section('description',
    'Официальный сайт Port Nature. Лучшие 5-звездночные отели все включено в Анталии. Раннее
    бронирование с лучшими ценами и скидками')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-homepage') }}"
            aria-expanded="false">RU</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item" href="{{ route('homepage') }}">EN</a></li>
            <li><a class="dropdown-item" href="{{ route('tr-homepage') }}">TR</a></li>
            <li><a class="dropdown-item first-item" href="{{ route('de-homepage') }}">DE</a></li>
        </ul>
    </li>

@endsection

@section('content')

    {{-- Swiper Start --}}
    @include('components.heroSwiper', ['lang' => 'ru'])
    {{-- Swiper Finish --}}

    {{-- Rezervation Section --}}
    {{-- Booking Section --}}
    <div class="booking">
        <label for="checkin"></label>
        <input id="checkin" data-defaultDate="today" value="Check-in">
        <label for="checkout"></label>
        <input id="checkout" data-defaultDate="today" value="Check-Out">
        <div class="dropdown">
            <div class="guestDiv" type="button" id="guestMenuDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                data-bs-auto-close="outside">
                <span class="guests">гости</span>
            </div>
            <div class="guestMenu dropdown-menu" aria-labelledby="guestMenuDropdown">
                <div class="adultCounter dropdown-item dropdown">
                    <button class="dropdown-toggle" type="button" id="adultSelectionDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p class="guest-title">Взрослые</p>
                        <p id="adultCount" class="reservation-titles adult-count">3 </p>
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                    </button>
                    <ul class="dropdown-menu adult-selection-dropdown-menu dropdown-menu-end"
                        aria-labelledby="adultSelectionDropdown">
                        <li class="dropdown-item people-item adult-item" value="1"> 1 </li>
                        <li class="dropdown-item people-item adult-item" value="2"> 2 </li>
                        <li class="dropdown-item people-item adult-item" value="3"> 3 </li>
                        <li class="dropdown-item people-item adult-item" value="4"> 4 </li>
                        <li class="dropdown-item people-item adult-item" value="5"> 5 </li>
                    </ul>
                </div>
                <div class="childCounter dropdown-item dropdown">
                    <button class="dropdown-toggle" type="button" id="childSelectionDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p class="guest-title">дети</p>
                        <p id="childCount">0 </p>
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                    </button>
                    <ul class="dropdown-menu child-selection-dropdown-menu dropdown-menu-end"
                        aria-labelledby="childSelectionDropdown">
                        <li class="dropdown-item people-item child-item" value="1"> 1 </li>
                        <li class="dropdown-item people-item child-item" value="2"> 2 </li>
                        <li class="dropdown-item people-item child-item" value="3"> 3 </li>
                        <li class="dropdown-item people-item child-item" value="4"> 4 </li>
                    </ul>
                </div>
                <div class="childCollapseWrapper">
                    <div class="childAgeItem child-age-item-1 dropdown">
                        <button class="dropdown-toggle" type="button" id="childAge1Btn" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <p class="guest-title">Ребенок 1 возраст
                            </p>
                            <p id="childAge1" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge1Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Выберите возраст
                                    1</p>
                            </li>
                            <li class="dropdown-item people-item child-age-item" value="0"> 0 </li>
                            <li class="dropdown-item people-item child-age-item" value="1"> 1 </li>
                            <li class="dropdown-item people-item child-age-item" value="2"> 2 </li>
                            <li class="dropdown-item people-item child-age-item" value="3"> 3 </li>
                            <li class="dropdown-item people-item child-age-item" value="4"> 4 </li>
                            <li class="dropdown-item people-item child-age-item" value="5"> 5 </li>
                            <li class="dropdown-item people-item child-age-item" value="6"> 6 </li>
                            <li class="dropdown-item people-item child-age-item" value="7"> 7 </li>
                            <li class="dropdown-item people-item child-age-item" value="8"> 8 </li>
                            <li class="dropdown-item people-item child-age-item" value="9"> 9 </li>
                            <li class="dropdown-item people-item child-age-item" value="10"> 10 </li>
                            <li class="dropdown-item people-item child-age-item" value="11"> 11 </li>
                            <li class="dropdown-item people-item child-age-item" value="12"> 12 </li>
                        </ul>
                    </div>
                    <div class="childAgeItem child-age-item-2 dropdown">
                        <button class="dropdown-toggle" type="button" id="childAge2Btn" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <p class="guest-title">Ребенок 2 возраст
                            </p>
                            <p id="childAge2" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge2Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Выберите возраст
                                    2</p>
                            </li>
                            <li class="dropdown-item people-item child-age-item" value="0"> 0 </li>
                            <li class="dropdown-item people-item child-age-item" value="1"> 1 </li>
                            <li class="dropdown-item people-item child-age-item" value="2"> 2 </li>
                            <li class="dropdown-item people-item child-age-item" value="3"> 3 </li>
                            <li class="dropdown-item people-item child-age-item" value="4"> 4 </li>
                            <li class="dropdown-item people-item child-age-item" value="5"> 5 </li>
                            <li class="dropdown-item people-item child-age-item" value="6"> 6 </li>
                            <li class="dropdown-item people-item child-age-item" value="7"> 7 </li>
                            <li class="dropdown-item people-item child-age-item" value="8"> 8 </li>
                            <li class="dropdown-item people-item child-age-item" value="9"> 9 </li>
                            <li class="dropdown-item people-item child-age-item" value="10"> 10 </li>
                            <li class="dropdown-item people-item child-age-item" value="11"> 11 </li>
                            <li class="dropdown-item people-item child-age-item" value="12"> 12 </li>
                        </ul>
                    </div>
                    <div class="childAgeItem child-age-item-3 dropdown">
                        <button class="dropdown-toggle" type="button" id="childAge3Btn" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <p class="guest-title">Ребенок 3 возраст
                            </p>
                            <p id="childAge3" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge3Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Выберите возраст
                                    3</p>
                            </li>
                            <li class="dropdown-item people-item child-age-item" value="0"> 0 </li>
                            <li class="dropdown-item people-item child-age-item" value="1"> 1 </li>
                            <li class="dropdown-item people-item child-age-item" value="2"> 2 </li>
                            <li class="dropdown-item people-item child-age-item" value="3"> 3 </li>
                            <li class="dropdown-item people-item child-age-item" value="4"> 4 </li>
                            <li class="dropdown-item people-item child-age-item" value="5"> 5 </li>
                            <li class="dropdown-item people-item child-age-item" value="6"> 6 </li>
                            <li class="dropdown-item people-item child-age-item" value="7"> 7 </li>
                            <li class="dropdown-item people-item child-age-item" value="8"> 8 </li>
                            <li class="dropdown-item people-item child-age-item" value="9"> 9 </li>
                            <li class="dropdown-item people-item child-age-item" value="10"> 10 </li>
                            <li class="dropdown-item people-item child-age-item" value="11"> 11 </li>
                            <li class="dropdown-item people-item child-age-item" value="12"> 12 </li>
                        </ul>
                    </div>
                    <div class="childAgeItem child-age-item-4 dropdown">
                        <button class="dropdown-toggle" type="button" id="childAge4Btn" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <p class="guest-title">Ребенок 4 возраст
                            </p>
                            <p id="childAge4" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge4Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Выберите возраст
                                    4</p>
                            </li>
                            <li class="dropdown-item people-item child-age-item" value="0"> 0 </li>
                            <li class="dropdown-item people-item child-age-item" value="1"> 1 </li>
                            <li class="dropdown-item people-item child-age-item" value="2"> 2 </li>
                            <li class="dropdown-item people-item child-age-item" value="3"> 3 </li>
                            <li class="dropdown-item people-item child-age-item" value="4"> 4 </li>
                            <li class="dropdown-item people-item child-age-item" value="5"> 5 </li>
                            <li class="dropdown-item people-item child-age-item" value="6"> 6 </li>
                            <li class="dropdown-item people-item child-age-item" value="7"> 7 </li>
                            <li class="dropdown-item people-item child-age-item" value="8"> 8 </li>
                            <li class="dropdown-item people-item child-age-item" value="9"> 9 </li>
                            <li class="dropdown-item people-item child-age-item" value="10"> 10 </li>
                            <li class="dropdown-item people-item child-age-item" value="11"> 11 </li>
                            <li class="dropdown-item people-item child-age-item" value="12"> 12 </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://portnature.rezervasyonal.com/?currency=TRY" target="_blank" class="bookNow">Бронировать
            сейчас</a>
    </div>
    {{-- Booking Section End --}}
    {{-- Rezervation Section End --}}

    {{-- Home Icons --}}
    <div class="homeIcons">
        <div class="homeIconContainer">
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/homelocation.svg') }}"
                        alt="location">
                    <span>Белек - Анталья</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/aquapark.svg') }}"
                        alt="aquapark" />
                    <span>Аквапарк</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/concerts.svg') }}"
                        alt="concerts">
                    <span>Концерты</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/beach.svg') }}"
                        alt="beach">
                    <span>Песчаный Пляж</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/entertainment.svg') }}"
                        alt="entertainment" />
                    <span>Развлечения</span>
                </div>
            </div>

        </div>

        {{-- Home Icons End --}}
        <div class="thinLine"></div>
    </div>
    {{-- Inclusive Area Text --}}

    @include('components.inclusiveSwiper', ['lang' => 'ru'])
    {{-- Inclusive Area Text End --}}
    {{-- Concerts --}}
    <div class="concertsWrapper">
        <h2 class="concertsHeader">Концерты</h2>
        <div class="swiper homeConcertSlider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <figure>

                    </figure>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
                <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/swipergray-left.svg') }}"
                    alt="swiper" />
            </div>
            <div class="swiper-button-next">
                <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/swipergray-right.svg') }}"
                    alt="swiper" />
            </div>
        </div>
    </div>
    </div>
    {{-- Concerts End --}}
    {{-- Accommdation --}}
    {{-- <div class="homeAccommdation">
        <div class="homeAccommodationWrapper">
            <article>
                <h2>Номера</h2>
                <h6>Номера наедине с природой - это залог расслабления и комфортного отдыха.<br> Наши номера улучшат ваши
                    впечатления от отпуска.</h6>
            </article>
            <div class="swiper Roomswiper">
                <div class="swiper-wrapper" style="padding-bottom: 200px">
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('ru-family-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}"
                                        alt="familyRoom" />
                                </figure>
                                <h3>Семейный</h3>
                                <span>4 Взрослых + 1 Ребенок · 45 m² · Боковой Вид На Море</span>
                                <p>Две комнаты для личного пространства детей и родителей.</p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('ru-family-rooms') }}">Подробнее</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('ru-kingsuit-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}"
                                        alt="kingSuite" />
                                </figure>
                                <h3>King Suite</h3>
                                <span>5 Взрослых + 1 Ребенок · 110 m² · Вид На Море</span>
                                <p>Роскошные, большие номера с чудесным сидом на море.</p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('ru-kingsuit-rooms') }}">Подробнее</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('ru-standard-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}"
                                        alt="standardRoom" />
                                </figure>
                                <h3>Стандарт</h3>
                                <span>2 Взрослых + 2 Ребенок · 34 m² · <br> Боковой вид / Море / Окрестности</span>
                                <p>Многие роскошные удобства для незабываемого отдыха.</p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('ru-standard-rooms') }}">Подробнее</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- If we need navigation buttons --}}
                <div class="swiper-button-next">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper next button" />
                </div>
            </div>
        </div>
    </div> --}}
    @include('components.accommdationSwiper', ['lang' => 'ru'])


    {{-- Accomdation End --}}
    {{-- Children Menu --}}
    <div class="children">
        <div class="childenContainer">
            <div class="row">
                <div class="col-md-12">
                    <h2>Дети</h2>
                </div>
            </div>

            <div class="subChildren">
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrencam.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Наблюдайте за своим ребенком из номера через телевизор</span>
                </div>
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrenage.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Развлечения для детей любого возраста</span>
                </div>
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrenbabysit.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Широкий выбор еды в ресторане для детей</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="childrenSwiper">
                    <div class="swiper childrenSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-1.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-1.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-1-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-1.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-3.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-3.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-3-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-3.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-4.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-4.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-4-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-4.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-5.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-5.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-5-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-5.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-6.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-6.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-6-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-6.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-7.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-7.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-7-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-7.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-10.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-10.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-10-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-10.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-11.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-11.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-11-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-11.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-12.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-12.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-12-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-12.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-13.webp') }}">
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/kids/kids-13.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-13-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-13.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" /></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        {{-- If we need navigation buttons --}}
                        <div class="swiper-button-prev inclusive-prev">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/swipergray-left.svg') }}"
                                alt="swiperleft" />
                        </div>
                        <div class="swiper-button-next inclusive-next">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/swipergray-right.svg') }}"
                                alt="swiperright" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moreButton">
            <a href="{{ route('ru-kids-concepts') }}">Подробнее</a>
        </div>
    </div>

    {{-- Children Menu End --}}
    {{-- Banner --}}
    <div class="homeBanner">
        <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/homeBanner.webp') }}" />
        <h3>Мы создали невероятный пляж с уникальной природной красотой <br>города Белек для взрослых и детей.</h3>
        <div class="moreButton">
            <a href="{{ route('ru-activity') }}">Подробнее</a>
        </div>
    </div>
    {{-- Banner End --}}
    {{-- Contact --}}
    {{-- @include('frontend.ru.layouts.contact') --}}
    @include('components.contactSection', ['lang' => 'ru'])
    {{-- Contact End --}}

    {{-- Gastronomy Start --}}
    <div class="homeGastronomy">
        <div class="homeGastronomyWrapper">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/7.svg') }}"
                            alt="seven">
                        Ресторанов A'la Carte Премиум-Класса
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Лучшие кухни разных стран!</h6>
                </div>
            </div>
            <div class="gastroIconsWrapper">
                {{-- Slides --}}
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/quality.svg') }}" alt="quality">
                    <div class="gastroText">
                        <span>Высочайшее Качество</span>
                        <p class="gastroP">Тщательно подобранные блюда для особых впечатлений</p>

                    </div>
                </div>
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/drink.svg') }}" alt="drinks">
                    <div class="gastroText">
                        <span>Безграничный</span>
                        <p class="gastroP">Вы почувствуете роскошь с 148 напитками премиум-класса</p>

                    </div>
                </div>
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/free.svg') }}" alt="free">
                    <div class="gastroText">
                        <span>БЕСПЛАТНО в любое время</span>
                        <p class="gastroP">Вход без бронирования в любое рабочее время</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="gastroSlideBg">
            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/gastroSlider-bg.webp') }}"
                alt="gastrobg" />
        </div>

        <div class="gastronomySlider">
            <div class="swiper gastronomySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img class="gastroImg lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/gastroSlider-1.webp') }}"
                                    alt="FAR EAST A'LA CARTE" />
                            </figure>
                            <article>
                                <span>Дальневосточный A’LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        В любое рабочее время
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Без Бронирования
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('ru-fareast') }}">Подробнее</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img class="gastroImg lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/gastroSlider-2.webp') }}"
                                    alt="alldaydiningrestaurant" />
                            </figure>

                            <article>
                                <span>ALL DAY DINING A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        В любое рабочее время
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Без Бронирования
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('ru-alldaydinning') }}">Подробнее</a>
                                </div>
                            </article>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img class="gastroImg lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/gastroSlider-4.webp') }}"
                                    alt="frenchrest" />
                            </figure>

                            <article>
                                <span>Французский A’LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        В любое рабочее время
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Без Бронирования
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('ru-french') }}">Подробнее</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img class="gastroImg lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/gastroSlider-5.webp') }}"
                                    alt="seasiderestaurant" />
                            </figure>

                            <article>
                                <span>SEASIDE A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        В любое рабочее время
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Без Бронирования
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('ru-seaside') }}">Подробнее</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img class="gastroImg lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/gastroSlider-6.webp') }}"
                                    alt="italianrest" />
                            </figure>
                            <article>
                                <span>Итальянский A’LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        В любое рабочее время
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Без Бронирования
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('ru-italian') }}">Подробнее</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img class="gastroImg lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/gastroSlider-8.webp') }}"
                                    alt="miniclubrest" />
                            </figure>
                            <article>
                                <span>Мини клуб A’LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        В любое рабочее время
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Без Бронирования
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('ru-mini-club-alacarte') }}">Подробнее</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img class="gastroImg lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/gastroSlider-9.webp') }}"
                                    alt="sushibar" />
                            </figure>
                            <article>
                                <span>SUSHI BAR A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        В любое рабочее время
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Без Бронирования
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('ru-sushi-bar') }}">Подробнее</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/swipergray-left.svg') }}"
                        alt="swiperleft" />
                </div>
                <div class="swiper-button-next">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/swipergray-right.svg') }}"
                        alt="swiperright" />
                </div>
            </div>
        </div>
    </div>
    {{-- Gastronomy End --}}
    {{-- Drink Brand --}}
    <div class="homeBrand">
        <div class="swiper homeBrandSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/brands/hennesy.webp') }}"
                        alt="brand" />
                </div>
                <div class="swiper-slide">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/brands/davidoff.webp') }}"
                        alt="brand" />
                </div>
                <div class="swiper-slide">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/brands/nespresso.webp') }}"
                        alt="brand" />
                </div>
                <div class="swiper-slide">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/brands/chivas.webp') }}"
                        alt="brand" />
                </div>
                <div class="swiper-slide">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/brands/kitkat.webp') }}"
                        alt="brand" />
                </div>
            </div>
        </div>
    </div>
    {{-- Drink Brand End --}}
    {{-- Special Offer --}}
    <div class="homeSpecialOffer">
        <h6>Специальные Предложения</h6>
        <div class="swiper specialOfferSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <figure>
                        <img class="lazyload"
                            data-src="{{ asset('assets/frontend/images/home/specialOfferSlider-1.webp') }}"
                            alt="vip" />
                    </figure>
                    <div class="backgroundLines">
                        <img class="radialBgImg lazyload" data-src="{{ asset('assets/frontend/images/radialBg.svg') }}"
                            alt="radialBg">
                    </div>
                    <article>
                        <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/home/vip.svg') }}"
                            alt="vip">
                        <p>Станьте VIP-клиентом</p>
                        <span>VIP-привилегии в отпуске</span>
                    </article>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img class="lazyload"
                            data-src="{{ asset('assets/frontend/images/home/specialOfferSlider-2.webp') }}"
                            alt="mixology" />
                    </figure>
                    <div class="backgroundLines">
                        <img class="radialBgImg lazyload" data-src="{{ asset('assets/frontend/images/radialBg.svg') }}"
                            alt="radialBg">
                    </div>
                    <article>
                        <img class="specialSvg lazyload"
                            data-src="{{ asset('assets/frontend/images/home/mixology.svg') }}" alt="mixology">
                        <p>Эксперт по миксологии</p>
                        <span>Подготовлено для вас</span>
                    </article>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img class="lazyload"
                            data-src="{{ asset('assets/frontend/images/home/specialOfferSlider-3.webp') }}"
                            alt="wedding" />
                    </figure>
                    <div class="backgroundLines">
                        <img class="radialBgImg lazyload" data-src="{{ asset('assets/frontend/images/radialBg.svg') }}"
                            alt="radialBg">
                    </div>
                    <article>
                        <img class="specialSvg lazyload"
                            data-src="{{ asset('assets/frontend/images/home/wedding.svg') }}" alt="wedding" />
                        <p>Свадебные подарки</p>
                        <span>Проводите время вместе</span>
                    </article>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
                <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/swipergray-left.svg') }}"
                    alt="swiper" />
            </div>
            <div class="swiper-button-next">
                <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/swipergray-right.svg') }}"
                    alt="swiper" />
            </div>
        </div>
    </div>
    {{-- Special Offer End --}}
    {{-- Services --}}
    <div class="homeServices">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="swiper homeServicesSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="serviceBackground">
                                <img class="lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/serviceSlider-bg-1.webp') }}"
                                    alt="service1" />
                            </div>
                            <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/serviceSlider-1.webp') }}"
                                            alt="service1" />
                                    </div>
                                    <div class=" serviceText">

                                        <span>Премиум Бар & Лаундж</span>
                                        <p>Премиум сервис даст чуство премиум-класса. Port Nature Luxury всегда здесь для
                                            этого ощущения.</p>
                                        <div class="homeServicesButton">{{--******* CLASS CHANGED ******--}}
                                            <a href="{{ route('ru-bar-cafe') }}">Подробнее</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="serviceBackground">
                                <img class="lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/serviceSlider-bg-2.webp') }}"
                                    alt="service2" />
                            </div>
                            <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/serviceSlider-2.webp') }}"
                                            alt="service2" />
                                    </div>
                                    <div class=" serviceText">

                                        <span>Магический Спа</span>
                                        <p>Побалуйте себя блаженным отдыхом в спа-центре с квалифицированными специалистыми.
                                        </p>
                                        <div class="homeServicesButton">{{--******* CLASS CHANGED ******--}}
                                            <a href="{{ route('ru-spa') }}">Подробнее</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="serviceBackground">
                                <img class="lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/serviceSlider-bg-3.webp') }}"
                                    alt="service3" />
                            </div>
                            <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/serviceSlider-3.webp') }}"
                                            alt="service3" />
                                    </div>
                                    <div class=" serviceText">

                                        <span>Встречи & Конгресс</span>
                                        <p>Мы не только веселые, но и серьезные для деловых людей</p>
                                        <div class="homeServicesButton">{{--******* CLASS CHANGED ******--}}
                                            <a href="{{ route('ru-meeting-congress') }}">Подробнее</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="serviceBackground">
                                <img class="lazyload"
                                    data-src="{{ asset('assets/frontend/images/home/serviceSlider-bg-4.webp') }}"
                                    alt="cafe" />
                            </div>
                            <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img class="lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/serviceSlider-4.webp') }}"
                                            alt="Cafe" />
                                    </div>
                                    <div class=" serviceText">

                                        <span>Кафе Davidoff</span>
                                        <p>Откройте для себя драгоценные сорта кофе, сделав ваш день незабываемым</p>
                                        <div class="homeServicesButton">{{--******* CLASS CHANGED ******--}}
                                            <a href="{{ route('ru-davidoff-cafe') }}">More About</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination services-swiper-pagination"></div>
                <div class="swiper-button-previous">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/swiperwhite-left.svg') }}"
                        alt="swiper" />
                </div>
                <div class="swiper-button-nextSlide">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/swiperwhite-right.svg') }}"
                        alt="swiper" />
                </div>
            </div>
        </div>

    </div>
    {{-- Services End --}}
    <div class="homeTravelCompany">
        <div class="travelSliderWrapper">
            <div class="swiper travelSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="ratinglink"
                            href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"
                            target="_blank">

                            <img class="tripadvisorlogo-img lazyload"
                                data-src="{{ asset('assets/frontend/images/home/tripadvisor-rating.svg') }}"
                                alt="travel" />

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="ratinglink"
                            href="https://www.google.com/travel/search?q=portnature%20google&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4308227%2C4429192%2C4515404%2C4597339%2C4731329%2C4757164%2C4778035%2C4814050%2C4861688%2C4864715%2C4874190%2C4886082%2C4886480%2C4893075%2C4902277%2C4906023%2C4920132%2C4924069%2C4926165%2C4926489%2C4936396%2C4949692%2C4949695%2C4953372%2C4958830%2C4961149%2C4965726%2C4965990%2C4966233&hl=tr-TR&gl=tr&cs=1&ssta=1&ts=CAESABpJCikSJzIlMHgxNGMzOTAwNDJkYmZmMmRkOjB4OWE1ZDkwNzU0MWYxZGI3MhIcEhQKBwjnDxADGAgSBwjnDxADGAkYATIECAAQAA&qs=CAEyJ0Noa0k4cmJIajlTTzVLNmFBUm9NTDJjdk1XcHRZM0Z0ZUdKakVBRTgCQgsJctvxQXWQXZoYAUILCXLb8UF1kF2aGAE&ap=ugEIb3ZlcnZpZXc&ictx=1&sa=X"
                            target="_blank">

                            <img class="googlelogo-img lazyload"
                                data-src="{{ asset('assets/frontend/images/home/google-rating.svg') }}"
                                alt="travel" />

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="ratinglink"
                            href="https://www.booking.com/hotel/tr/port-nature-luxury-resort-amp-spa.html"
                            target="_blank">

                            <img class="bookinglogo-img lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-rating.svg') }}"
                                alt="travel" />

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="ratinglink"
                            href="https://www.holidaycheck.de/hi/port-nature-luxury-resort-spa/6a10924b-2286-3a46-b5db-ad9802b8d226"
                            target="_blank">

                            <img class="holidaychecklogo-img lazyload"
                                data-src="{{ asset('assets/frontend/images/home/holidaycheck-rating.svg') }}"
                                alt="travel" />

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Contact --}}
    @include('frontend.ru.layouts.contact')
    {{-- Contact End --}}

    {{-- Bottom Fixed Book Now --}}
    <div class="fixedBookNow">
        <a href="https://portnature.rezervasyonal.com/" target="_blank">
            Book Now
        </a>
    </div>
    {{-- Above Footer --}}
    <div class="homeAboveFooter">
        <div class="aboveImg">
            <img class="mobileV lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-1.webp') }}"
                alt="aboveFooter1" />
            <img class="mobileV lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-2.webp') }}"
                alt="aboveFooter2" />
            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-3.webp') }}"
                alt="abovefooter3" />
            <div class="aboveInsta">
                <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-4.webp') }}"
                    alt="aboveFooter4" style="position:relative;" />
                <a href="https://www.facebook.com/portnature" target="_blank">
                    <img class="specialSvg" src="{{ asset('assets/frontend/images/instagramwhite.svg') }}"
                        alt="instagram">
                    Добро пожаловать</a>
                <p>Подписаться</p>
            </div>
            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-5.webp') }}"
                alt="aboveFooter5" />
            <img class="mobileV lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-6.webp') }}"
                alt="aboveFooter6" />
            <img class="mobileV lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-7.webp') }}"
                alt="aboveFooter7" />
        </div>

        <div class="phoneImage">
            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/inst-ru.webp') }}" alt="phone" />
        </div>
    </div>
    {{-- Above Footer End --}}

@endsection

@section('javascript-imports')
    <script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

@endsection

@section('css-imports')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/booking-section.css') }}" />
@endsection
