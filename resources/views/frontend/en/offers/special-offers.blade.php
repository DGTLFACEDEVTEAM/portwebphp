@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Special Offers - Port Nature Luxury Resort Hotel')
@section('description', 'Special Offers Port Nature Luxury Resort. Best Deals at Antalya Belek all inclusive luxury
    resort hotel. Call now for special offers and best prices.')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('special-offers') }}"
            aria-expanded="false">EN</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item first-item" href="{{ route('tr-special-offers') }}">TR</a></li>
            <li><a class="dropdown-item" href="{{ route('ru-special-offers') }}">RU</a></li>
            <li><a class="dropdown-item" href="{{ route('de-special-offers') }}">DE</a></li>
        </ul>
    </li>

@endsection

@section('content')



    <!-- Hero Swiper Section -->

    <div class="hero-swiper-wrapper">

        <div class="swiper offers-hero-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="offers-slide-inner offers-4">
                        <img class="offers-banner"
                            src="{{ asset('assets/frontend/images/offers/banner-transfer.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                        <div class="offers-hero-text offers-hero-4">
                            <p class="offers-4-small">
                                For Guests
                            </p>
                            <p class="offers-4-big">
                                VIP Transfer
                            </p>
                            <div class="offers-4-medium">
                                <img class="offers-text-wrap-1"
                                    src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                                Free Of Charge
                                <img class="offers-text-wrap-2"
                                    src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                            </div>

                        </div>
                        <div class="transfer-addendum-wrapper">
                            <p class="offers-4-addendum"></p>
                            <p class="offers-addendum-left">Guests who book accommodation through the call center can take
                                advantage of the free VIP
                                transfer service</p>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="offers-slide-inner">
                        <img class="offers-banner"
                            src="{{ asset('assets/frontend/images/offers/banner-web-kids-en.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                        <div class="offers-hero-text offers-hero-1">
                        </div>
                        <div class="water-sports-addendum-wrapper">
                            <p class="children-offers-addendum-turkish"></p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="offers-slide-inner">
                        <img class="offers-banner"
                            src="{{ asset('assets/frontend/images/offers/turkish-offer-1.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                        {{-- <div class="offers-hero-text offers-hero-1">
                        <p class="offers-1-top">Für Gäste</p>
                        <p class="offers-1-big">
                            Kostenlose <br> Marke
                        </p>
                        <p class="offers-1-bottom">Für Wassersport</p>
                    </div>
                           <div class="water-sports-addendum-wrapper">             <p class="offers-addendum">Buchen Sie Ihren Urlaub über das Callcenter und erhalten Sie 4 Marke als
                        Geschenk</p>
                        <p class="offers-addendum-right">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p></div> --}}




                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-2.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-2.webp') }}" />
                        {{-- <div class="offers-hero-text offers-hero-2">
                        <p class="offers-2-big">
                            Wellness <br>Geschenk!
                        </p>
                        <p class="offers-2-small">
                            Bei Buchung über das Callcenter
                        </p>
                        <p class="offers-2-medium">Kostenlose Massage<br> oder Schaummbad</p>
                    </div>
                    <p class="spa-offers-addendum">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p> --}}

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-3.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-3.webp') }}" />
                        {{-- <div class="offers-hero-text offers-hero-3">
                        <div class="offers-3-medium">
                            <img class="offers-text-wrap"
                                src="{{ asset('assets/frontend/images/offers/svg/beautiful.svg') }}" />
                            Kostenlos
                        </div>
                        <p class="offers-3-big">
                            Premium Pavillon
                        </p>
                        <div class="offers-3-small">
                            <img class="offers-icon" src="{{ asset('assets/frontend/images/offers/svg/call.svg') }}" />
                            Bei Buchung einer King Suite über das Call Center
                        </div>

                    </div>
                    <p class="offers-addendum-center">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p> --}}

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner offers-4">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-4.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                        {{-- <div class="offers-hero-text offers-hero-4">
                        <p class="offers-4-small">
                            Für Gäste
                        </p>
                        <p class="offers-4-big">
                            VIP Transfer
                        </p>
                        <div class="offers-4-medium">
                            <img class="offers-text-wrap-1"
                                src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                            Kostenlos
                            <img class="offers-text-wrap-2"
                                src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                        </div>

                    </div>
                    <div class="transfer-addendum-wrapper"><p class="offers-4-addendum">
                        Gäste, die eine Unterkunft über das Callcenter buchen, können den kostenlosen
                        VIP-Transfer-Service nutzen</p>
                        <p class="offers-addendum-left">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p></div> --}}

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner offers-5">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-5.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                        {{-- <div class="offers-hero-text offers-hero-5">
                        <p class="offers-5-big">Geschenke</p>
                        <img src="{{ asset('assets/frontend/images/offers/svg/line-two.svg') }}" />
                        <p class="offers-5-small">Für die Kleinen</p>
                       

                    </div> <p class="children-offers-addendum">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner offers-5">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-6.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner offers-5">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-7.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner offers-5">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-8.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner offers-5">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-9.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="offers-slide-inner offers-5">
                        <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-10.webp') }}" />
                        <img class="offers-banner-mobile"
                            src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Hero Mobile Section Start -->
    <div class="gallery-wrapper">
        <p class="hero-mobile-subtitle">
            Premium A'la Carte All Inclusive
        </p>
        <a class="hero-mobile-sender">
            <img src="{{ asset('assets/frontend/images/offers/mobile/hero/hero-icon.svg') }}" />

        </a>
        <div class="general-swiper ">

            <div class="swiper-wrapper general-swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/0.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/1.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/2.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/3.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/4.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/5.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/6.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/7.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/8.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/9.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/10.webp') }}" />
                </div>



                <p class="general-swiper-title">Port Nature Hotels
                </p>

            </div>
            <div class="general-pagination swiper-pagination"></div>
        </div>
    </div>
    <div class="hero-mobile-text-wrapper">
        <p class="hero-mobile-title">
            Portnature Luxury Resort Hotel & Spa
        </p>

        <a class="hero-title-location" href="https://maps.app.goo.gl/Y1qMrLmKcPsJqdiF7">
            <img src="{{ asset('assets/frontend/images/offers/mobile/hero/location.svg') }}">

            <span> Turkey, Belek, Bogazkent</span>
            <span>— view on the map </span>

        </a>
    </div>
    <section class="rating-tablet-wrapper">
        <div class="banners-mobile">
            <a href="https://www.booking.com/hotel/tr/port-nature-luxury-resort-amp-spa.html" target="_blank"
                class="mobile-banner-item">
                <img src="{{ asset('assets/frontend/images/offers/mobile/hero/banner-1.webp') }}">

            </a>
            <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"
                target="_blank" class="mobile-banner-item">
                <img src="{{ asset('assets/frontend/images/offers/mobile/hero/banner-2.webp') }}">

            </a>
            <a href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information"
                target="_blank" class="mobile-banner-item">
                <img src="{{ asset('assets/frontend/images/offers/mobile/hero/banner-3.webp') }}">

            </a>
        </div>



    </section>

    <div class="mobile-banner-wrapper">
        <div class="mobile-banner-swiper">
            <div class="swiper-wrapper">
                {{-- <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-en/banner-1-en.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-en/banner-2-en.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-en/banner-3-en.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-en/banner-4-en.webp') }}">
            </div> --}}
                <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-en/banner-5-en.webp') }}">
                </div>
            </div>
        </div>
    </div>



    <div class="hero-mobile-intro-wrapper">
        <p class="hero-mobile-title">
            Antalya Hotels
        </p>
        <p class="hero-mobile-text">
            Antalya includes the best all inclusive 5 star hotels with flexible deals. If you are looking for luxury travel
            deals, don’t look any further Anlaya hotels await you. You can make a reservation easily with the call center or
            online booking at Antalya hotels. Also, the Antalya hotels call center service has the best price and
            last-minute opportunities. Antalya hotels website and call center service offer the best deals package. Don’t
            miss this chance and call now. There are rooms for everyone in the Antalya hotel. When you looking for
            accommodation with last-minute deals Antalya hotel waiting for you.
        </p>
        <div class="hero-mobile-item">
            <img src="{{ asset('assets/frontend/images/offers/mobile/hero/star-rating.webp') }}">
            <p>
                Premium A'la Carte All Inclusive
            </p>

        </div>
        <div class="hero-mobile-item">
            <img src="{{ asset('assets/frontend/images/offers/mobile/hero/drink.webp') }}">
            <p>
                148 kinds of free alcohol
            </p>

        </div>
    </div>
    <!-- Hero Mobile Section End -->


    <!-- SHOWCASE SECTION -->

    <div class="showcase-section-wrapper">
        <div class="plane-svg colorful-image-wrapper"></div>

        <img class="plane-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-1.svg') }}" />
        <p class="plane-before">...and book a ticket right away</p>
        <div class="booking-section-wrapper">
            <p class="booking-section-title">PLAN YOUR TRIP</p>
            <p class="booking-section-title-2">With our hotel</p>
            <div class="brand-swiper-wrapper">
                <div class="swiper brand-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="https://www.tripadvisor.com.tr/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"
                                target="_blank"><img class="svg-tripadvisor"
                                    src="{{ asset('assets/frontend/images/offers/tripadvisor.webp') }}" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.booking.com/searchresults.tr.html?ss=Port+Nature&ssne=Side&ssne_untouched=Side&label=bookings-name-lO9ne8CLb_o7ijml9UoG0QS540961834209%3Apl%3Ata%3Ap1%3Ap22.563.000%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1012764%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcX_GyndjDE1ljcv9tcUssY&aid=376386&lang=tr&sb=1&src_elem=sb&src=searchresults&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure"
                                target="_blank"><img class="svg-booking"
                                    src="{{ asset('assets/frontend/images/offers/booking.webp') }}" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information?chkin=2023-04-11&chkout=2023-04-12&x_pwa=1&rfrr=HSR&pwa_ts=1679996745179&referrerUrl=aHR0cHM6Ly93d3cuZXhwZWRpYS5jb20vSG90ZWwtU2VhcmNo&useRewards=false&rm1=a2&regionId=6034717&destination=Belek%2C+Serik%2C+Antalya+Region%2C+T%C3%BCrkiye&destType=CURRENT_LOCATION&selected=8108100&latLong=36.83444%2C31.162045&sort=RECOMMENDED&userIntent="
                                target="_blank"><img class="svg-expedia"
                                    src="{{ asset('assets/frontend/images/offers/expedia.webp') }}" /></a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Booking Section -->
            <div class="booking">
                <div class="dropdown room-selection-dropdown">
                    <button class="room-selection-dropdown-btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Select Room
                    </button>
                    <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <div class="dropdown-item room-dropdown-link" href="#" data-value="Family Room">Family
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-item room-dropdown-link" href="#" data-value="Standard Room">
                                Standard</div>
                        </li>
                        <li>
                            <div class="dropdown-item room-dropdown-link" href="#" data-value="King Suite">King
                                Suite</div>
                        </li>
                    </ul>
                </div>



                <label for="checkin"></label><input id="checkin" data-defaultDate="today" value="Check-in">
                <label for="checkout"></label><input id="checkout" data-defaultDate="today" value="Check-Out">

                <div class="guestDiv guestdiv-adult"><span class="guests guests-adult">
                        <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/adult-icon.svg') }}">

                        Adult</span>
                    <div class="guestMenu guestMenuAdult">
                        <div class="adultCounter dropdown-item">
                            <p>Adult(s)</p>
                            <div class="counter-item">
                                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="adult-decrement"
                                    onclick="adultDecrement()" alt="decrement" />
                                <p id="adultCount" class="adultCountIncrementType"></p>
                                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="adult-increment"
                                    onclick="adultIncrement()" alt="increment" />
                            </div>
                        </div>


                    </div>

                </div>
                <div class="guestDiv guestdiv-child"><span class="guests guests-child">
                        <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/child-icon.svg') }}">
                        Child</span>
                    <div class="guestMenu guestMenuChild">

                        <div class="childCounter dropdown-item">
                            <p>Child(ren)</p>
                            <div class="counter-item">
                                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                    onclick="childDecrement()" alt="decrement" />
                                <p id="childCount" class="childCountIncrementType"></p>
                                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                    onclick="childIncrement()" alt="increment" />
                            </div>
                        </div>
                        <div class="childAgeCounter1 childAgeCounter dropdown-item">
                            <p>Child 1 Age</p>
                            <div class="counter-item">
                                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                    onclick="childAge1Decrement()" alt="decrement" />
                                <p id="childAge1Count">0</p>
                                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                    onclick="childAge1Increment()" alt="increment" />
                            </div>
                        </div>
                        <div class="childAgeCounter2  childAgeCounter dropdown-item">
                            <p>Child 2 Age</p>
                            <div class="counter-item">
                                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                    onclick="childAge2Decrement()" alt="decrement" />
                                <p id="childAge2Count">0</p>
                                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                    onclick="childAge2Increment()" alt="increment" />
                            </div>
                        </div>
                        <div class="childAgeCounter3  childAgeCounter dropdown-item">
                            <p>Child 3 Age</p>
                            <div class="counter-item">
                                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                    onclick="childAge3Decrement()" alt="decrement" />
                                <p id="childAge3Count">0</p>
                                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                    onclick="childAge3Increment()" alt="increment" />
                            </div>
                        </div>
                        <div class="childAgeCounter4  childAgeCounter dropdown-item">
                            <p>Child 4 Age</p>
                            <div class="counter-item">
                                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                    onclick="childAge4Decrement()" alt="decrement" />
                                <p id="childAge4Count">0</p>
                                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                    onclick="childAge4Increment()" alt="increment" />
                            </div>
                        </div>
                    </div>

                </div>
                <a href="https://portnature.rezervasyonal.com/?currency=TRY" target="_blank" class="bookNow"><img
                        src="{{ asset('assets/frontend/images/offers/svg/booknow.svg') }}" />Book Now</a>
            </div>
            <!-- Booking Section End -->
        </div>

        <div class="offers-rooms-swiper swiper">
            <p class="offers-room-swiper-title-mobile">Accommodation</p>
            <div class="swiper-wrapper">
                <div class="swiper-slide rooms-swiper-slide">
                    <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/family.webp') }}" />
                    <a href="{{ route('family-rooms') }}" class="room-swiper-button"><span>Family</span>
                        <img class="btn-chevron"
                            src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                    </a>
                    <div class="room-swiper-details">
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                            <p class="room-detail-text">4 adults + 1</p>

                        </div>
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                            <p class="room-detail-text">45 m2</p>

                        </div>
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                            <p class="room-detail-text">Side Sea View
                            </p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide rooms-swiper-slide">
                    <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/king.webp') }}" />
                    <a href="{{ route('kingsuit-rooms') }}" class="room-swiper-button"><span>King Suite</span>
                        <img class="btn-chevron"
                            src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                    </a>
                    <div class="room-swiper-details">
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                            <p class="room-detail-text">5 adults + 1</p>

                        </div>
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                            <p class="room-detail-text">110 m2</p>

                        </div>
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                            <p class="room-detail-text">Sea View
                            </p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide rooms-swiper-slide">
                    <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/standard.webp') }}" />
                    <a href="{{ route('standard-rooms') }}" class="room-swiper-button"><span>Standard</span>
                        <img class="btn-chevron"
                            src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                    </a>
                    <div class="room-swiper-details">
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                            <p class="room-detail-text">2 adults + 2</p>

                        </div>
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                            <p class="room-detail-text">34 m2</p>

                        </div>
                        <div class="room-detail-item">
                            <img class="room-svg-swiper"
                                src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                            <p class="room-detail-text">Sea / Side / Land View
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="room-swiper-controls">
                <div class="swiper-prev">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-next">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-scrollbar"></div>

            </div>
        </div>
        <div class="accommodations-features-grid collapse" id="collapseExample">
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/balcony.svg') }}">
                <p class="room-features-list-text"> Balcony</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/bar.svg') }}">
                <p class="room-features-list-text">Minibar</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/tv.svg') }}">
                <p class="room-features-list-text">Led TV</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/tea.svg') }}">
                <p class="room-features-list-text">Hot Drink Set-Up</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/wifi.svg') }}">
                <p class="room-features-list-text">Free Wi-Fi Internet</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/phone.svg') }}">
                <p class="room-features-list-text">Direct Dial Phone</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/mirror.svg') }}">
                <p class="room-features-list-text">Make-up Mirror</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/satellite.svg') }}">
                <p class="room-features-list-text">Satellite Broadcasting</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/shower.svg') }}">
                <p class="room-features-list-text">Seperate Shower & WC</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/slippers.svg') }}">
                <p class="room-features-list-text">Slippers</p>
            </div>



            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/air.svg') }}">
                <p class="room-features-list-text">Split-System Air Conditioner</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/dryer.svg') }}">
                <p class="room-features-list-text">Hair Dryer</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/safe.svg') }}">
                <p class="room-features-list-text">Digital Safe</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/towel.svg') }}">
                <p class="room-features-list-text">Towel</p>
            </div>
            <div class="accom-feature-item">
                <img class="svg" src="{{ asset('assets/frontend/images/offers/mobile/icons/floor.svg') }}">
                <p class="room-features-list-text">Parquet Flooring</p>
            </div>


        </div>
        <a class="feature-collapse-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            <span class="btn-collapsed">More About Features</span>
            <span class="btn-open">Less About Features</span>

        </a>
    </div>
    <div class="modal fade" id="peopleSelectionModal" aria-labelledby="peopleSelectionModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close modal-close-family" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="booking-modal-title" id="exampleModalLabel">Select guests</p>

                    <div class="dropdown adult-dropdown">
                        <img class="dropdown-icons people"
                            src="{{ asset('assets/frontend/images/offers/mobile-booking/adult.webp') }}"> Adults <button
                            class="btn dropdown-toggle" type="button" id="adultSelectionDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p id="adultCount" class="reservation-titles adult-count">2 </p>
                            <img class="drop-icon"
                                src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                        </button>
                        <ul class="dropdown-menu adult-selection-dropdown-menu " aria-labelledby="adultSelectionDropdown">


                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class=" child-dropdown" id="childSelectionDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Children
                            <p id="childCount" class="reservation-titles child-count">0</p>

                            <img class="drop-icon"
                                src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                        </button>
                        <ul class="dropdown-menu offers-child-dropdown-menu " aria-labelledby="childSelectionDropdown">


                        </ul>
                    </div>
                    <div class="child-collapse-wrapper">


                        <div class="childCollapseWrapper">
                            <div class="childAgeItem child-age-item-1">

                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="childAge1Btn"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <p>Child's age 1</p>
                                        <p id="childAge1" class="reservation-titles child-age-count">0</p>
                                        <img class="drop-icon"
                                            src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                    </button>
                                    <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                                        aria-labelledby="childAge1Btn">
                                        <li class="dropdown-item people-item disabled">
                                            <p class=" p-15 dropdown-text child-age-text">Select age 1</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="childAgeItem child-age-item-2">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="childAge2Btn"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <p>Child's age 2</p>

                                        <p id="childAge2" class="reservation-titles child-age-count">0</p>
                                        <img class="drop-icon"
                                            src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                    </button>
                                    <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end"
                                        aria-labelledby="childAge2Btn">
                                        <li class="dropdown-item people-item disabled">
                                            <p class=" p-15 dropdown-text child-age-text">Select age 2</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="childAgeItem child-age-item-3">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="childAge3Btn"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <p>Child's age 3</p>

                                        <p id="childAge3" class="reservation-titles child-age-count">0</p>
                                        <img class="drop-icon"
                                            src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                    </button>
                                    <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                                        aria-labelledby="childAge3Btn">
                                        <li class="dropdown-item people-item disabled">
                                            <p class=" p-15 dropdown-text child-age-text">Select age 3</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="childAgeItem child-age-item-4">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="childAge4Btn"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <p>Child's age 4</p>

                                        <p id="childAge4" class="reservation-titles child-age-count">0</p>
                                        <img class="drop-icon"
                                            src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                    </button>
                                    <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                                        aria-labelledby="childAge4Btn">
                                        <li class="dropdown-item people-item disabled">
                                            <p class=" p-15 dropdown-text child-age-text">Select age 4</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="childAgeItem child-age-item-5">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="childAge5Btn"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <p>Child's age 5</p>

                                        <p id="childAge5" class="reservation-titles child-age-count">0</p>
                                        <img class="drop-icon"
                                            src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                    </button>
                                    <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                                        aria-labelledby="childAge5Btn">
                                        <li class="dropdown-item people-item disabled">
                                            <p class=" p-15 dropdown-text child-age-text">Select age 5</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="childAgeItem child-age-item-6">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="childAge6Btn"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <p>Child's age 6</p>

                                        <p id="childAge6" class="reservation-titles child-age-count">0</p>
                                        <img class="drop-icon"
                                            src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                    </button>
                                    <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end "
                                        aria-labelledby="childAge6Btn">
                                        <li class="dropdown-item people-item disabled">
                                            <p class=" p-15 dropdown-text child-age-text">Select age 6</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="booking-modal-close modal-close-family"
                        data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
    <!--- MOBILE BOOKING SECTION -->
    <section class="mobile-booking-section">
        <div class="reservation-form  ">
            <p class="reservation-form-mobile-title">Plan your trip with our hotel</p>

            <!-- DATE SELECTION SECTION -->
            <div class="dateInputDiv" name="daterange" id="calendarRange">
                <img class="dropdown-icons dropdown-icon-mobile"
                    src="{{ asset('assets/frontend/images/offers/mobile-booking/mobile-booking-calendar.svg') }}">
                <img class="dropdown-icons dropdown-icon-desktop"
                    src="{{ asset('assets/frontend/images/offers/mobile-booking/calendar.webp') }}">

                <p class=" p-16 reservation-titles">
                    <span id="check-in-span" class="checkInSpan">Check In</span> — <span id="check-out-span"
                        class="checkOutSpan">
                        <span class="conditional"> Check </span> Out </span>
                </p>

            </div>
            <div class="empty-booking-div"></div>
            <!-- NUMBER OF PEOPLE SELECTION SECTION -->

            <section class="people-selection-mobile">
                <button type="button " class="travellers-btn" data-bs-toggle="modal"
                    data-bs-target="#peopleSelectionModal">
                    <img class="traveller-icon"
                        src="{{ asset('assets/frontend/images/offers/mobile-booking/travellers-icon.svg') }}">
                    Travellers
                </button>

            </section>


            <a href="https://portnature.rezervasyonal.com/" target="_blank" class=" booking-btn booking-hero-btn"
                type="button">
                <img class="drop-icon"
                    src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-btn-mobile.svg') }}">

                <p class=" p-16 reservation-titles">

                    Book Now</p>
            </a>
        </div>
    </section>

    <!--- MOBILE BOOKING SECTION END -->
    <!--- FLIGHT SECTION -->

    <div class="flight-wrapper">
        <p class="flight-addendum">
            On our website, linking to other websites or referring to other websites does not hold the site owner
            responsible for the content of the linked or referred websites, and the site owner cannot be held liable for any
            damage or loss arising from the content of other websites. All links to other websites are provided on our
            website for the convenience of our website users. This arrangement does not imply that Port Nature or its
            affiliates are in any way associated with or related to those other websites or their owners.

        </p>
        <div class="flight-swiper-div">
            <div class="swiper flight-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.flypgs.com/en/cities/flights-to-antalya" target="_blank"><img
                                class="pegasus-logo"
                                src="{{ asset('assets/frontend/images/offers/logo-1.webp') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.skyscanner.com/" target="_blank"><img class="scanner-logo"
                                src="{{ asset('assets/frontend/images/offers/logo-2.webp') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.corendonairlines.com/" target="_blank"><img class="corendon-logo"
                                src="{{ asset('assets/frontend/images/offers/logo-3.webp') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.aviasales.ru/?params=IST1&currency=usd" target="_blank"><img
                                class="avia-logo" src="{{ asset('assets/frontend/images/offers/logo-4.webp') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.turkishairlines.com/en-int/flights/booking/index.html" target="_blank"><img
                                class="turkish-logo"
                                src="{{ asset('assets/frontend/images/offers/logo-5.webp') }}" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TRANSFER SECTION -->

    <div class="transfer-wrapper">
        <img class="transfer-desktop" src="{{ asset('assets/frontend/images/offers/desktop-car.svg') }}">
        <img class="transfer-tablet" src="{{ asset('assets/frontend/images/offers/tablet-car.svg') }}">
        <img class="transfer-mobile" src="{{ asset('assets/frontend/images/offers/mobile-car.svg') }}">


        <div class="transfer-texts">
            <p class="transfer-title">Click here to book a transfer</p>
            <p class="transfer-mid">Spend the road in comfort</p>
            <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService"
                target="_blank">Book
                Transfer</a>
        </div>
    </div>
    <!--- Mobile Flight Section Start -->
    <div class="flight-wrapper-mobile">
        <div class="flight-mobile-div">
            <div class='flight-mobile-title'>
                <p>Book a plane ticket right away</p>
                <img src="{{ asset('assets/frontend/images/offers/plane.svg') }}">
            </div>
            <div class='flight-mobile-w-addendum collapse' id="flightCollapse">
                <div class="flight-items-wrapper">
                    <div class="flight-item-wrapper">
                        <a href="https://www.flypgs.com/sehirler/antalya-ucak-bileti" target="_blank">
                            <img class="pegasus-logo" src="{{ asset('assets/frontend/images/offers/logo-1.webp') }}" />
                        </a>
                    </div>
                    <div class="flight-item-wrapper">
                        <a href="https://www.skyscanner.com.tr/?currency=TRY&locale=tr-TR&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd"
                            target="_blank">
                            <img class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.webp') }}" />
                        </a>
                    </div>
                    <div class="flight-item-wrapper">
                        <a href="https://www.corendonairlines.com/tr" target="_blank">
                            <img class="corendon-logo" src="{{ asset('assets/frontend/images/offers/logo-3.webp') }}" />
                        </a>
                    </div>
                    <div class="flight-item-wrapper">
                        <a href="https://www.aviasales.ru/?params=IST1&currency=usd" target="_blank">
                            <img class="avia-logo" src="{{ asset('assets/frontend/images/offers/logo-4.webp') }}" />
                        </a>
                    </div>
                    <div class="flight-item-wrapper">
                        <a href="https://www.turkishairlines.com/tr-int/ucak-bileti/rezervasyon/" target="_blank">
                            <img class="turkish-logo" src="{{ asset('assets/frontend/images/offers/logo-5.webp') }}" />
                        </a>
                    </div>
                </div>
                <p class="flight-mobile-addendum">On our website, linking to other websites or referring to other websites
                    does not hold the site owner responsible for the content of the linked or referred websites, and the
                    site owner cannot be held liable for any damage or loss arising from the content of other websites. All
                    links to other websites are provided on our website for the convenience of our website users. This
                    arrangement does not imply that Port Nature Hotels or its affiliates are in any way associated with or
                    related to those other websites or their owners.
                </p>
            </div>
            <a class="flight-collapse-button collapsed" data-bs-toggle="collapse" data-bs-target="#flightCollapse"
                aria-expanded="false" aria-controls="flightCollapse">
                <span class="btn-collapsed">More Airlines</span>
                <span class="btn-open">Less Airlines</span>

            </a>
            <hr class="flight-mobile-hr">
            <div class='flight-mobile-title'>
                <p>Spend time on the road in comfort</p>
                <img src="{{ asset('assets/frontend/images/offers/car.svg') }}">
            </div>
            <a class="transfer-mobile-btn" href="https://portnature.rezervasyonal.com/" target="_blank"> Book
                Transfer</a>
        </div>
    </div>
    <!--- Mobile Flight Section End -->

    <!--- CONTACT SECTION -->
    <div class="offers-contact-wrapper">
        <div class="offers-contact-div">
            <div class="luggage-image-wrapper colorful-image-wrapper"></div>

            <div class="offers-contact-info">
                <p class="offers-contact-title">Free contact call centre or online booking</p>
                <a href="tel:+902427310707">
                    <img src="{{ asset('assets/frontend/images/offers/svg/phone.svg') }}" />

                    +90 (242) 731 07 07
                </a>
                <a href="mailto:info@portnature.com.tr">
                    <img src="{{ asset('assets/frontend/images/offers/svg/mail.svg') }}" />
                    info@portnature.com.tr
                </a>
                <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank"
                    class="offers-contact-whatsapp">
                    <img src="{{ asset('assets/frontend/images/offers/svg/whatsapp.svg') }}" />
                    WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!--- CONTACTS SECTION MOBILE-->
    <section class="contacts-section-mobile">
        <p class="contacts-mobile-title"> Contact Us Now</p>
        <div class="contacts-mobile-wrapper">
            <a href="mailto:callcenter@portnature.com.tr" class="contacts-mobile-item">
                <img src="{{ asset('assets/frontend/images/offers/mail.svg') }}">
                <p>info@portnature.com.tr</p>

            </a>
            <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank"
                class="contacts-mobile-item">
                <img src="{{ asset('assets/frontend/images/offers/whatsapp.svg') }}">
                <p>Whatsapp</p>

            </a>
            <a href="tel:+902427310707" class="contacts-mobile-item">
                <img src="{{ asset('assets/frontend/images/offers/phone.svg') }}">
                <p>+90 (242) 731 07 07</p>

            </a>
        </div>
    </section>
    <!--- CONTACTS SECTION MOBILE END-->


    <!--- BOOKING OPPORTUNITIES SECTION 1 -->

    <div class="opportunity-wrapper first-booking-opportunities">
        <p class="h2-title">BOOKING OPPORTUNITIES</p>
        <div class="swiper opportunity-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="{{ route('antalya-hotels') }}" class="opportunity-slide">
                        <div class="op-img-wrapper">
                            <img src="{{ asset('assets/frontend/images/offers/general/antalya.webp') }}" />
                        </div>
                        <div class="opportunity-text">
                            <p class="opportunity-title">Antalya Hotels</p>
                            <a class="transfer-btn" target="blank" href="{{ route('antalya-hotels') }}">More About</a>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a target="blank" href="{{ route('turkey-hotels') }}" class="opportunity-slide">
                        <div class="op-img-wrapper">
                            <img src="{{ asset('assets/frontend/images/offers/general/turkey.webp') }}" />
                        </div>
                        <div class="opportunity-text">
                            <p class="opportunity-title">Turkey Hotels</p>
                            <a class="transfer-btn" target="blank" href="{{ route('turkey-hotels') }}">More About</a>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a target="blank" href="{{ route('belek-hotels') }}" class="opportunity-slide">
                        <div class="op-img-wrapper">
                            <img src="{{ asset('assets/frontend/images/offers/general/belek.webp') }}" />
                        </div>
                        <div class="opportunity-text">
                            <p class="opportunity-title">Belek Hotels</p>
                            <a class="transfer-btn" target="blank" href="{{ route('belek-hotels') }}">More About</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--- FIRST SPLIT SECTION -->
    <div class="offers-first-split">
        <div class="first-split-clouds colorful-image-wrapper">
        </div>
        <div class="split-text">
            <h1>SPECIAL OFFERS</h1>
            <p>Introducing our special hotel offers! Enjoy luxurious <a
                    href="https://www.portnature.com.tr/rooms">accommodations</a>, stunning views, and exceptional service.
                With unbeatable prices and exclusive amenities, there's no better place to stay. Make an <a
                    href="https://portnature.rezervasyonal.com/?_gl=1*1t14gzh*_ga*NzI2Nzc2MjAuMTY4MjQ5NTU2Ng..*_ga_6EYM72GR61*MTY4MjY3MDQyNS43LjEuMTY4MjY3MDQ0MS4wLjAuMA..">online
                    booking now</a> and turn your dream vacation into a reality. We offer a variety of packages to suit your
                every need. Our hotel has everything you need for a comfortable and memorable stay. Don't miss out, reserve
                your room today! Additionally, the <a href="https://www.portnature.com.tr/en"> Port Nature Luxury Resort
                    Hotel's</a> <a href="tel:+902427310707">call center</a> is offering special deals exclusively for you.
                Contact the <a href="tel:+902427310707">call center</a> now to take advantage of these exclusive offers.
            </p>
        </div>
        <a class="split-img" href="https://www.portnature.com.tr/en">
            <img
                src="{{ asset('assets/frontend/images/offers/seo/en/antalya/antalya-hotels-port-nature-premium-resort-hotel.webp') }}" />
        </a>
    </div>

    <!--- RATING SECTION -->

    <div class="rating-wrapper">
        <p class="rating-title">Through the Eyes of Our Guests </p>
        <div class="rating-swiper-div">
            <p class="rating-addendum">Positive (15)</p>
            <div class="swiper rating-swiper swiper-container">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-1.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Irina S</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    They settled in immediately . Daily cleaning, the rooms are
                                    fully equipped with hygiene products. Amazed by the wonderful
                                    service in restaurants . Coffee and ice cream with desserts just fly away.
                                    Responsive Russian-speaking staff solves any request.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-2.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Tatiana R</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    A place where you want to return to ❤️
                                    We had a family vacation 2vzr and children (4 and 6 years old) in May 2022 and were
                                    delighted 😍 Despite the fact that the concerts were canceled, the animation was at the
                                    highest level.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-3.webp') }}">

                                <div class="rating-info">
                                    <p class="rating-name">Gatti423</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    An unbiased review of an objective tourist is a good Turkish hotel, strong, good.As a
                                    result, I will say that I can recommend the hotel, even despite the end of the season
                                    everything was great, at least for us. Mood creates emotions. What you tune in to, you
                                    will get)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-4.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Lida K</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    Thanks to the animators of the hotel for an unforgettable stay! 💕
                                    I have been to many hotels in Turkey, but this one will always remain in my heart! There
                                    are too many advantages to list them all...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-5.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Paradise601</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    The best holiday at the beginning of the season!
                                    I liked everything very much, the weather let us down for a couple of days, but there
                                    are no complaints about the hotel. Top notch service, excellent food. In a word, I love
                                    it!!!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-6.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Leonid Sh</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    Vacation with wife
                                    We were received very warmly and joyfully. A pleasant surprise was a one-time free visit
                                    to the spa with a choice of any procedure you like. This is really wow! Thank you!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-7.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Elina</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    Holidays with parents and children
                                    This is our second year with the whole family. And for the second year we are leaving
                                    with good impressions. Children's animation is on top. Will definitely come back again!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-8.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Artem B</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    Rest is great
                                    I really liked the hotel, delicious cocktails, I like the food in the restaurant. Every
                                    evening there is a mini disco for younger children, younger children run with joy every
                                    evening.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-9.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Lyubov M</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    Lovely vacation
                                    Oh, we fell in love with this hotel with all our heart, it was a wonderful vacation
                                    where everyone liked it.
                                    Kids club you are the best!!! Thanks to all the staff of the hotel. We will come again!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rating-item">
                            <div class="rating-upper">
                                <img class="rating-profile-pic"
                                    src="{{ asset('assets/frontend/images/offers/contacts-10.webp') }}">
                                <div class="rating-info">
                                    <p class="rating-name">Arthur K</p>
                                    <div class="rating-stars"></div>
                                </div>
                            </div>
                            <div class="rating-lower">
                                <p class="rating-text">
                                    Liked the hotel very much. Vacationing with my son. There are many activities for
                                    children, every day there are activities on the street. Animator Nastya spends boccia,
                                    football and darts twice. The hotel has nice staff.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="rating-swiper-controls">
                    <div class="swiper-prev">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 13L1 7L7 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </div>
                    <div class="swiper-next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L1 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </div>
                    <div class="swiper-scrollbar"></div>

                </div>
            </div>
        </div>

    </div>

    <!--- BOOKING OPPORTUNITIES SECTION 2 -->

    <div class="opportunity-wrapper second-booking-opportunities">
        <p class="h2-title">BOOKING OPPORTUNITIES</p>
        <div class="swiper opportunity-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="{{ route('concert') }}" class="opportunity-slide">
                        <div class="op-img-wrapper">
                            <img src="{{ asset('assets/frontend/images/offers/opportunities-one.webp') }}" />
                        </div>
                        <div class="opportunity-text">
                            <p class="opportunity-title">Upcoming Concerts at the Hotel 💓💥</p>
                            <p>Experience world-class music in the comfort of Port Nature Luxury Resort Hotel with our
                                exclusive
                                concert series featuring top performers from around the globe.</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.planetware.com/tourist-attractions-/antalya-tr-ant-at.html"
                        class="opportunity-slide">
                        <div class="op-img-wrapper">
                            <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                        </div>
                        <div class="opportunity-text">
                            <p class="opportunity-title">Visit The Best Locations In Antalya

                                🥰 💤 🏖 </p>
                            <p>Antalya has a must-visit destination with unique nature for those seeking to immerse
                                themselves in this beautiful city's rich history and culture.</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('spa') }}" class="opportunity-slide">
                        <div class="op-img-wrapper">
                            <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                        </div>
                        <div class="opportunity-text">
                            <p class="opportunity-title">Experience Ultimate Relaxation 🥰 💎</p>
                            <p>Unwind and rejuvenate your mind, body, and soul with our luxurious spa treatments, designed
                                to relax and refresh you from head to toe. </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript-imports')
    <script src="{{ asset('assets/frontend/js/offers.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/offers-mobile-booking.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>

@endsection

@section('css-imports')
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}" />
    <link rel="stylesheet" media="screen and (max-width:480px)"
        href="{{ asset('assets/frontend/css/offers-mobile.css') }}" />


@endsection
