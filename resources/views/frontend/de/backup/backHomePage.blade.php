@extends('frontend.de.layouts.master')

@section('title', 'Offizielle Website- Port Nature Luxury Resort ')
@section('description',
    'Port Nature Luxury Resort Hotel & Spa. Besuchen Sie unsere offizielle Webseite. Bestes Luxus
    all inclusive familien freundliche Hotel in Belek.')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-homepage') }}"
            aria-expanded="false">DE</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item" href="{{ route('homepage') }}">EN</a></li>
            <li><a class="dropdown-item" href="{{ route('tr-homepage') }}">TR</a></li>
            <li><a class="dropdown-item" href="{{ route('ru-homepage') }}">RU</a></li>
        </ul>
    </li>

@endsection

@section('content')

    <!-- Swiper Start -->
    @include('components.heroSwiper', ['lang' => 'de'])

    <!-- Swiper Finish -->
    <!-- Rezervation Section -->
    <!-- Booking Section -->
    <div class="booking">
        <label for="checkin"></label>
        <input id="checkin" data-defaultDate="today" value="Check-in">
        <label for="checkout"></label>
        <input id="checkout" data-defaultDate="today" value="Check-Out">
        <div class="dropdown">
            <div class="guestDiv" type="button" id="guestMenuDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                data-bs-auto-close="outside">
                <span class="guests">Gäste</span>
            </div>
            <div class="guestMenu dropdown-menu" aria-labelledby="guestMenuDropdown">
                <div class="adultCounter dropdown-item dropdown">
                    <button class="dropdown-toggle" type="button" id="adultSelectionDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p class="guest-title">Erwachsene</p>
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
                        <p class="guest-title">Kind(er)</p>
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
                            <p class="guest-title">Kind 1 Alter</p>
                            <p id="childAge1" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge1Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Alter 1</p>
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
                            <p class="guest-title">Kind 2 Alter</p>
                            <p id="childAge2" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge2Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Alter 2</p>
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
                            <p class="guest-title">Kind 3 Alter</p>
                            <p id="childAge3" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge3Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Alter 3</p>
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
                            <p class="guest-title">Kind 4 Alter</p>
                            <p id="childAge4" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge4Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Alter 4</p>
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
        <a href="https://portnature.rezervasyonal.com/?currency=TRY" target="_blank" class="bookNow">Büchen Sie</a>
    </div>
    <!-- Booking Section End -->
    <!-- Rezervation Section End -->

    <!-- Home Icons -->
    <div class="homeIcons">
        <div class="homeIconContainer">
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/homelocation.svg') }}"
                        alt="location">
                    <span>BELEK &#8226; ANTALYA</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/aquapark.svg') }}"
                        alt="aquapark" />
                    <span>AQUAPARK</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/concerts.svg') }}"
                        alt="concerts">
                    <span>KONZERTE</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/beach.svg') }}"
                        alt="beach">
                    <span>SANDSTRAND</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/entertainment.svg') }}"
                        alt="entertainment" />
                    <span>UNTERHALTUNG</span>
                </div>
            </div>

        </div>

        <!-- Home Icons End -->
        <div class="thinLine"></div>
    </div>
    <!-- Inclusive Area Text -->

    @include('components.inclusiveSwiper', ['lang' => 'de'])
    <!-- Inclusive Area Text End -->
    <!-- Concerts -->
    <div class="concertsWrapper">
        <h2 class="concertsHeader">KONZERTE</h2>
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
    <!-- Concerts End --><!-- VIDEO SCRIPT PARTS -->

    <!-- Accommdation -->
    {{-- <div class="homeAccommdation">
        <div class="homeAccommodationWrapper">
            <article>
                <h2>ZIMMER</h2>
                <h6>Zimmer in Kontakt mit der Natur sind ein Schlüssel für Entspannung und einen komfortablen Urlaub.<br>
                    Unser Zimmer bereichert Ihr Urlaubserlebnis.</h6>
            </article>
            <div class="swiper Roomswiper">
                <div class="swiper-wrapper" style="padding-bottom: 200px">
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('de-family-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}"
                                        alt="familyRoom" />
                                </figure>
                                <h3>FAMILIENZIMMER</h3>
                                <span>4 ERWACHSENE + 1 KIND · 45 m² · Mit seitlichem Meerblick</span>
                                <p>Ihre Kinder finden ihren eigenen Rückzugsort, während Sie sich im Nebenzimmer entspannen.
                                </p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('de-family-rooms') }}">Mehr Uber</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('de-kingsuit-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}"
                                        alt="kingSuite" />
                                </figure>
                                <h3>King Suite</h3>
                                <span>5 ERWACHSENE + 1 KIND · 110 m² · Meerblick</span>
                                <p>Wunderbarer Meerblick und luxuriöse, große Zimmer werden Sie faszinieren.</p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('de-kingsuit-rooms') }}">Mehr Uber</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('de-standard-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}"
                                        alt="standardRoom" />
                                </figure>
                                <h3>STANDARDZIMMER</h3>
                                <span>2 ERWACHSENE + 2 KINDER · 34 m² · Mit seitlichem Meer-/Meer-/Landblick</span>
                                <p>Viele der luxuriösen Ausstattungsmerkmale sorgen für einen unvergesslichen Urlaub.</p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('de-standard-rooms') }}">Mehr Uber</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper next button" />
                </div>
            </div>
        </div>
    </div> --}}
    @include('components.accommdationSwiper', ['lang' => 'de'])


    <!-- Accomdation End -->
    <!-- Children Menu -->
    <div class="children">
        <div class="childrenContainer">
            <div class="row">
                <div class="col-md-12">
                    <h2>KINDER</h2>
                </div>
            </div>

            <div class="subChildren">
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrencam.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Auf dem Fernseher in Ihrem Zimmer können Sie sehen, was Ihr Kind
                        macht</span>
                </div>
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrenage.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Aktivitäten für Kinder jeden Alters</span>
                </div>
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrenbabysit.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Ihr Kind wählt selbst mit unserem Kinder-Exklusiv-Menü</span>
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

                        <!-- If we need navigation buttons -->
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
            <a href="{{ route('de-kids-concepts') }}">Mehr Uber</a>
        </div>
    </div>
    <!-- Children Menu End -->
    <!-- Banner -->
    <div class="homeBanner">
        <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/homeBanner.webp') }}" />
        <h3>Wir haben ein unglaubliches Stranderlebnis mit Beleks<br> einzigartiger natürlicher Schönheit für Erwachsene und
            Kinder geschaffen.</h3>
        <div class="moreButton">
            <a href="{{ route('de-activity') }}">Mehr Uber</a>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Contact -->
    {{-- @include('frontend.de.layouts.contact')  --}}
    @include('components.contactSection', ['lang' => 'de'])
    <!-- Contact End -->
    <!-- Gastronomy Start -->
    <div class="homeGastronomy">
        <div class="homeGastronomyWrapper">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/7.svg') }}"
                            alt="seven">
                        unserer Premium À-la-carte-Restaurants
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Die besten Küchen verschiedener Länder!</h6>
                </div>
            </div>
            <div class="gastroIconsWrapper">
                <!-- Slides -->
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/quality.svg') }}" alt="quality">
                    <div class="gastroText">
                        <span>Top Qualität</span>
                        <p class="gastroP">Sorgfältig ausgewählte Zutaten für besondere Speisen</p>
                    </div>
                </div>
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/drink.svg') }}" alt="drinks">
                    <div class="gastroText">
                        <span>Unbegrenzt</span>
                        <p class="gastroP">Sie werden den Luxus mit 148 verschiedenen Blue-Ribbon-Getränke spüren.
                        </p>
                    </div>
                </div>
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/free.svg') }}" alt="free">
                    <div class="gastroText">
                        <span>Innerhalb der Arbeitszeit</span>
                        <p class="gastroP">Eintritt ohne Reservierung zu allen Geschäftszeiten</p>
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
                                <span>FAR EAST A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        Zu jeder Arbeitszeit
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Ohne Buchung
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('de-fareast') }}">Mehr Uber</a>
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
                                        Zu jeder Arbeitszeit
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Ohne Buchung
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('de-alldaydinning') }}">Mehr Uber</a>
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
                                <span>FRENCH A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        Zu jeder Arbeitszeit
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Ohne Buchung
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('de-french') }}">Mehr Uber</a>
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
                                        Zu jeder Arbeitszeit
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Ohne Buchung
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('de-seaside') }}">Mehr Uber</a>
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
                                <span>ITALIAN A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        Zu jeder Arbeitszeit
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Ohne Buchung
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('de-italian') }}">Mehr Uber</a>
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
                                <span>MINI CLUB A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        Zu jeder Arbeitszeit
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Ohne Buchung
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('de-mini-club-alacarte') }}">Mehr Uber</a>
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
                                        Zu jeder Arbeitszeit
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Ohne Buchung
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('de-sushi-bar') }}">Mehr Uber</a>
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
    <!-- Gastronomy End -->
    <!-- Drink Brand -->
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
    <!-- Drink Brand End -->

    <!-- Special Offer -->
    <div class="homeSpecialOffer">
        <h6>Sonderangebote</h6>
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
                        <p>Werden Sie VIP-Kunde</p>
                        <span>VIP-Privileg in Ihrem Urlaub</span>
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
                        <p>Experte für Mixologie</p>
                        <span>Sorgfältig zubereitet für Sie</span>
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
                        <p>Hochzeitsgeschenk</p>
                        <span>Zeit zusammen verbringen</span>
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
    <!-- Special Offer End -->
    <!-- Services -->
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

                                        <span>Premium Bar & Lounge</span>
                                        <p>Premium-Service fühlt sich erstklassig an.<br>
                                            Für dieses Gefühl ist das Port Nature Luxury Resort immer da.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('de-bar-cafe') }}">Mehr Uber</a>
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

                                        <span>Magic Spa</span>
                                        <p>Gönnen Sie sich in unserem luxuriösen Spa mit erfahrenen Therapeuten eine
                                            glückselige Flucht.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('de-spa') }}">Mehr Uber</a>
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

                                        <span>Tagung & Kongress</span>
                                        <p>Bei uns geht es nicht nur um Unterhaltung, sondern sprechen auch den Unternehmer
                                            an.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('de-meeting-congress') }}">Mehr Uber</a>
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

                                        <span>Davidoff Kafe</span>
                                        <p>Entdecken Sie kostbare Kaffeesorten,<br> die es wert sind, weiter zu gehen.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('de-davidoff-cafe') }}">Mehr Uber</a>
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
    <!-- Services End -->
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
    <!-- Contact -->
    @include('frontend.de.layouts.contact')
    <!-- Contact End -->

    <!-- Above Footer -->
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
                    Willkommen</a>
                <p>Folgen Sie uns</p>
            </div>
            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-5.webp') }}"
                alt="aboveFooter5" />
            <img class="mobileV lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-6.webp') }}"
                alt="aboveFooter6" />
            <img class="mobileV lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-7.webp') }}"
                alt="aboveFooter7" />
        </div>

        <div class="phoneImage">
            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/inst-de.webp') }}" alt="phone" />
        </div>
    </div>
    <!-- Above Footer End -->

@endsection

@section('javascript-imports')
    <script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
@endsection

@section('css-imports')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/booking-section.css') }}" />
@endsection
