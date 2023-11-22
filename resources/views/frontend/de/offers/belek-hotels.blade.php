@extends('frontend.de.layouts.master')

@section('title', 'Belek Hotels - Port Nature Luxury Resort Hotel')
@section('description', 'Belek Hotels Port Nature Luxury Resort Hotel Spa. Rufen Sie jetzt an, um das beste 5-Sterne-All-Inclusive-Hotel in Belek kostenlos zu buchen.')

@section('header-lang')


<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-belek-hotels') }}"
        aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('belek-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-belek-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-belek-hotels') }}">RU</a></li>
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
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-transfer.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                    <div class="offers-hero-text offers-hero-4">
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
                    <div class="transfer-addendum-wrapper"><p class="offers-4-addendum"></p>
                        <p class="offers-addendum-left">Gäste, die eine Unterkunft über das Callcenter buchen, können den kostenlosen
                            VIP-Transfer-Service nutzen</p></div>

                </div>
            </div>

                        <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-web-kids-de.webp') }}" />
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
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/turkish-offer-1.webp') }}" />
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
                <div class="offers-slide-inner ">
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
                          <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/hero-icon.svg') }}" />

    </a>
   <div class="general-swiper ">

            <div class="swiper-wrapper general-swiper-wrapper">
                 <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/0.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/1.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/2.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/3.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/4.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/5.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/6.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/7.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/8.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/9.webp') }}" />
                </div>
                <div class="swiper-slide">
                    <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/10.webp') }}" />
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

            <span> Türkei, Belek, Bogazkent</span>
            <span>— auf der Karte ansehen  </span>

    </a>
</div>
<section class="rating-tablet-wrapper">
       <div class="banners-mobile">
        <a href="https://www.booking.com/hotel/tr/port-nature-luxury-resort-amp-spa.html" target="_blank" class="mobile-banner-item">
                <img src="{{ asset('assets/frontend/images/offers/mobile/hero/banner-1.webp') }}">

        </a>
        <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html" target="_blank" class="mobile-banner-item">
                <img src="{{ asset('assets/frontend/images/offers/mobile/hero/banner-2.webp') }}">

        </a>
        <a href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information" target="_blank" class="mobile-banner-item">
                <img src="{{ asset('assets/frontend/images/offers/mobile/hero/banner-3.webp') }}">

        </a>
      </div>



</section>

<div class="mobile-banner-wrapper">
    <div class="mobile-banner-swiper">
        <div class="swiper-wrapper">
            {{-- <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-de/banner-1-de.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-de/banner-2-de.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-de/banner-3-de.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-de/banner-4-de.webp') }}">
            </div> --}}
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-de/banner-5-de.webp') }}">
            </div>
        </div>
    </div>
</div>



<div class="hero-mobile-intro-wrapper">
    <p class="hero-mobile-title">
        Antalya Hotels
    </p>
    <p class="hero-mobile-text">
Antalya umfasst die besten All-Inclusive-5-Sterne-Hotels mit flexiblen Angeboten. Wenn Sie auf der Suche nach Luxusreiseangeboten sind, brauchen Sie nicht weiter zu suchen. Es erwarten Sie weitere Hotels in Anlaya. Sie können eine Reservierung ganz einfach über das Callcenter oder online in Hotels in Antalya vornehmen. Darüber hinaus bietet der Callcenter-Service der Hotels in Antalya den besten Preis und Last-Minute-Möglichkeiten. Die Website und der Callcenter-Service der Hotels in Antalya bieten das beste Angebotspaket. Lassen Sie sich diese Chance nicht entgehen und rufen Sie jetzt an. Im Hotel Antalya gibt es Zimmer für jeden. Wenn Sie auf der Suche nach einer Unterkunft mit Last-Minute-Angeboten sind, wartet das Hotel Antalya auf Sie.    </p>
    <div class="hero-mobile-item">
                        <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/star-rating.webp') }}">
                        <p>
                            Premium A'la Carte All Inclusive
                        </p>

    </div>
    <div class="hero-mobile-item">
                        <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/drink.webp') }}">
                        <p>
148 Arten kostenloser Alkohol                        </p>

    </div>
</div>
<!-- Hero Mobile Section End -->
<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">
    <div class="plane-svg colorful-image-wrapper"></div>
    <img class="plane-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-1.svg') }}" />
    <p class="plane-before">... buchen Sie jetzt ein Ticket</p>
    <div class="booking-section-wrapper">
        <p class="booking-section-title">PLANEN SIE IHRE REISE</p>
        <p class="booking-section-title-2">Mit unserem Hotel</p>
        <div class="brand-swiper-wrapper">
            <div class="swiper brand-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a
                            href="https://www.tripadvisor.com.tr/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html" target="_blank"><img
                                class="svg-tripadvisor"
                                src="{{ asset('assets/frontend/images/offers/tripadvisor.webp') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a
                            href="https://www.booking.com/searchresults.tr.html?ss=Port+Nature&ssne=Side&ssne_untouched=Side&label=bookings-name-lO9ne8CLb_o7ijml9UoG0QS540961834209%3Apl%3Ata%3Ap1%3Ap22.563.000%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1012764%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcX_GyndjDE1ljcv9tcUssY&aid=376386&lang=tr&sb=1&src_elem=sb&src=searchresults&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure" target="_blank"><img
                                class="svg-booking"
                                src="{{ asset('assets/frontend/images/offers/booking.webp') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a
                            href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information?chkin=2023-04-11&chkout=2023-04-12&x_pwa=1&rfrr=HSR&pwa_ts=1679996745179&referrerUrl=aHR0cHM6Ly93d3cuZXhwZWRpYS5jb20vSG90ZWwtU2VhcmNo&useRewards=false&rm1=a2&regionId=6034717&destination=Belek%2C+Serik%2C+Antalya+Region%2C+T%C3%BCrkiye&destType=CURRENT_LOCATION&selected=8108100&latLong=36.83444%2C31.162045&sort=RECOMMENDED&userIntent=" target="_blank"><img
                                class="svg-expedia"
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
                    Zimmer auswählen
                </button>
                <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Familienzimmer">
                            Familienzimmer</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Standard Zimmer">Standard
                            Zimmer</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Suite Zimmer">Suite Zimmer
                        </div>
                    </li>
                </ul>
            </div>



            <label for="checkin"></label><input id="checkin" data-defaultDate="today" value="Check-in">
            <label for="checkout"></label><input id="checkout" data-defaultDate="today" value="Check-Out">

            <div class="guestDiv guestdiv-adult"><span class="guests guests-adult">
                    <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/adult-icon.svg') }}">

                    Erwachsene</span>
                <div class="guestMenu guestMenuAdult">
                    <div class="adultCounter dropdown-item">
                        <p>Erwachsene</p>
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
                    Kinder</span>
                <div class="guestMenu guestMenuChild">

                    <div class="childCounter dropdown-item">
                        <p>Kind(er)</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childDecrement()" alt="decrement" />
                            <p id="childCount" class="childCountIncrementType"></p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childIncrement()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter1 childAgeCounter dropdown-item">
                        <p>Kind 1</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge1Decrement()" alt="decrement" />
                            <p id="childAge1Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge1Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter2  childAgeCounter dropdown-item">
                        <p>Kind 2 </p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge2Decrement()" alt="decrement" />
                            <p id="childAge2Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge2Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter3  childAgeCounter dropdown-item">
                        <p>Kind 3 </p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge3Decrement()" alt="decrement" />
                            <p id="childAge3Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge3Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter4  childAgeCounter dropdown-item">
                        <p>Kind 4</p>
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
                    src="{{ asset('assets/frontend/images/offers/svg/booknow.svg') }}" />Jetzt buchen</a>
        </div>
        <!-- Booking Section End -->
    </div>

    <div class="offers-rooms-swiper swiper"><p class="offers-room-swiper-title-mobile">Unterkunft</p>
        <div class="swiper-wrapper">
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/family.webp') }}" />
                <a href="{{ route('de-family-rooms') }}" class="room-swiper-button"><span>Familie</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">4 Erwachsene + 1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">45 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Seitlicher Meerblick
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/king.webp') }}" />
                <a href="{{ route('de-kingsuit-rooms') }}" class="room-swiper-button"><span>King Suite</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">5 Erwachsene + 1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">110 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Meerblick
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/standard.webp') }}" />
                <a href="{{ route('de-standard-rooms') }}" class="room-swiper-button"><span>Standard</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">2 Erwachsene + 2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">34 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Meer-/Seiten-/Landblick
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="room-swiper-controls">
            <div class="swiper-prev">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 13L1 7L7 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="swiper-next">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13L7 7L1 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="swiper-scrollbar"></div>

        </div>
    </div>
     <div class="accommodations-features-grid collapse accommodations-features-german" id="collapseExample">

    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/balcony.svg') }}">
      <p class="room-features-list-text"> Balkon</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/bar.svg') }}">
      <p class="room-features-list-text">Minibar</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/tv.svg') }}">
      <p class="room-features-list-text">LED-Fernseher</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/tea.svg') }}">
      <p class="room-features-list-text">Heißgetränkestation</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/wifi.svg') }}">
      <p class="room-features-list-text">Kostenloses WLAN</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/phone.svg') }}">
      <p class="room-features-list-text">Direktwahltelefon</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/mirror.svg') }}">
      <p class="room-features-list-text">Schminkspiegel</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/satellite.svg') }}">
      <p class="room-features-list-text">Satellitenübertragung</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/shower.svg') }}">
      <p class="room-features-list-text">Separate Dusche und WC</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/slippers.svg') }}">
      <p class="room-features-list-text">Hausschuhe</p>
    </div>
    
    
    
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/air.svg') }}">
      <p class="room-features-list-text">Split-System-Klimaanlage</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/dryer.svg') }}">
      <p class="room-features-list-text">Haartrockner</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/safe.svg') }}">
      <p class="room-features-list-text">Digitaler Safe</p>
    </div><div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/towel.svg') }}">
      <p class="room-features-list-text">Handtuch</p>
    </div><div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/floor.svg') }}">
      <p class="room-features-list-text">Parkettboden</p>
    </div>

    
  </div>
   <a class="feature-collapse-button collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  <span class="btn-collapsed">Mehr über</span>
    <span class="btn-open">Weniger darüber</span>

      </a>
</div>
    <div class="modal fade" id="peopleSelectionModal"  aria-labelledby="peopleSelectionModal" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close modal-close-family" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <p class="booking-modal-title" id="exampleModalLabel">Wählen Sie Gäste aus</p>

      <div class="dropdown adult-dropdown">
        <img class="dropdown-icons people" src="{{ asset('assets/frontend/images/offers/mobile-booking/adult.webp') }}"> Erwachsene <button class="btn dropdown-toggle" type="button" id="adultSelectionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <p id="adultCount" class="reservation-titles adult-count">2 </p>
                    <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

        </button>
        <ul class="dropdown-menu adult-selection-dropdown-menu " aria-labelledby="adultSelectionDropdown">
        
          
        </ul>
      </div>
      <div class="dropdown">
      <button class=" child-dropdown" id="childSelectionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
         Kinder 
                  <p id="childCount" class="reservation-titles child-count">0</p>

                  <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

      </button>
        <ul class="dropdown-menu offers-child-dropdown-menu " aria-labelledby="childSelectionDropdown">
        
      
        </ul></div>
        <div class="child-collapse-wrapper">
        
         
            <div class="childCollapseWrapper">
              <div class="childAgeItem child-age-item-1">
               
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge1Btn" data-bs-toggle="dropdown" aria-expanded="false">
                     <p>Alter der Kinder 1</p>
                    <p id="childAge1" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge1Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Alter auswählen 1</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-2">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge2Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Alter der Kinder 2</p>

                    <p id="childAge2" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge2Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Alter auswählen 2</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-3">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge3Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Alter der Kinder 3</p>

                    <p id="childAge3" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge3Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Alter auswählen 3</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-4">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge4Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Alter der Kinder 4</p>

                    <p id="childAge4" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge4Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Alter auswählen 4</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-5">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge5Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Alter der Kinder 5</p>

                    <p id="childAge5" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge5Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Alter auswählen 5</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-6">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge6Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Alter der Kinder 6</p>

                    <p id="childAge6" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end " aria-labelledby="childAge6Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Alter auswählen 6</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </div>
      
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="booking-modal-close modal-close-family" data-bs-dismiss="modal">Erledigt</button>
      </div>
    </div>
  </div>
</div>

</div>
<!--- MOBILE BOOKING SECTION -->
<section class="mobile-booking-section">
      <div class="reservation-form  ">
    <p class="reservation-form-mobile-title">Planen Sie Ihre Reise mit unserem Hotel</p>
  
    <!-- DATE SELECTION SECTION -->
    <div class="dateInputDiv" name="daterange" id="calendarRange">
      <img class="dropdown-icons dropdown-icon-mobile" src="{{ asset('assets/frontend/images/offers/mobile-booking/mobile-booking-calendar.svg') }}">
              <img class="dropdown-icons dropdown-icon-desktop" src="{{ asset('assets/frontend/images/offers/mobile-booking/calendar.webp') }}">

      <p class=" p-16 reservation-titles">
        <span id="check-in-span" class="checkInSpan">Check In</span> — <span id="check-out-span" class="checkOutSpan">
          <span class="conditional"> Check </span> Out </span>
      </p>

    </div>
    <div class="empty-booking-div"></div>
    <!-- NUMBER OF PEOPLE SELECTION SECTION -->

    <section class="people-selection-mobile" >
      <button type="button " class="travellers-btn" data-bs-toggle="modal" data-bs-target="#peopleSelectionModal">
          <img class="traveller-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/travellers-icon.svg') }}"> 
Reisende
</button>

    </section>
    
  
    <a href="https://portnature.rezervasyonal.com/" target="_blank"  class=" booking-btn booking-hero-btn" type="button">
                                           <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-btn-mobile.svg') }}"> 

      <p class=" p-16 reservation-titles">

        Buchen Sie jetzt</p>
    </a>
  </div>
</section>

<!--- MOBILE BOOKING SECTION END -->


<!--- FLIGHT SECTION -->

<div class="flight-wrapper">
    <p class="flight-addendum">
        Das Verlinken oder Verweisen auf andere Websites auf unserer Website macht den Website-Inhaber nicht für den
        Inhalt der verlinkten oder verlinkten Websites verantwortlich, und der Website-Inhaber kann nicht für Schäden
        oder Verluste haftbar gemacht werden, die durch den Inhalt anderer Websites entstehen. Alle Links zu anderen
        Websites werden auf unserer Website für die Benutzerfreundlichkeit unserer Website bereitgestellt. Diese
        Vereinbarung impliziert nicht, dass Port Nature oder seine verbundenen Unternehmen in irgendeiner Weise mit
        diesen anderen Websites oder ihren Eigentümern verbunden oder verbunden sind.

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="https://www.flypgs.com/de/stadte/billigfluge-nach-antalya" target="_blank"><img class="pegasus-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-1.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a
                        href="https://www.skyscanner.de/?currency=EUR&locale=de-DE&market=DE&traveller_context=17bf6fc2-2c6d-462d-8876-65d3e77dfa21" target="_blank"><img
                            class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.corendonairlines.com/de" target="_blank"><img class="corendon-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-3.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.aviasales.ru/?params=IST1&currency=usd" target="_blank"><img class="avia-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-4.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.turkishairlines.com/en-int/flights/booking/index.html" target="_blank"><img
                            class="turkish-logo" src="{{ asset('assets/frontend/images/offers/logo-5.webp') }}" /></a>
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
        <p class="transfer-title">Klicken Sie hier, um einen Transfer zu buchen</p>
        <p class="transfer-mid">Verbringen Sie die Straße in Komfort</p>
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService" target="_blank">Transfer
            buchen</a>
    </div>
</div>

<!--- CONTACT SECTION -->
<div class="offers-contact-wrapper">
    <div class="offers-contact-div">
        <div class="luggage-image-wrapper colorful-image-wrapper"></div>


        <div class="offers-contact-info">
            <p class="offers-contact-title">Kostenloser Kontakt zum Call Center oder Online-Buchung</p>
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
  <p class="contacts-mobile-title"> Kontaktieren Sie uns jetzt</p>
  <div class="contacts-mobile-wrapper">  
      <a href="mailto:callcenter@portnature.com.tr" class="contacts-mobile-item">
                  <img src="{{ asset('assets/frontend/images/offers/mail.svg') }}">
                  <p>info@portnature.com.tr</p>

  </a>
    <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank" class="contacts-mobile-item">
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
<!--- FIRST SPLIT SECTION -->
<div class="offers-first-split">
    <div class="first-split-clouds colorful-image-wrapper">
    </div>
    <div class="split-text">
        <h1>Hotel Belek</h1>
        <p>
            <b>Hotel Belek</b> ist ein beliebtes Touristenziel in Antalya in der Türkei.
             Belek ist bekannt für seine schönen Strände, klares Wasser und schöne Hotels. 
             In Belek finden Sie die besten 5 Sterne Hotels mit flexiblen Angeboten. Wenn Sie auf 
             der Suche nach luxuriösen Reiseangeboten sind, suchen Sie nicht weiter, das Hotel Belek 
             wartet auf Sie. Sie können eine Reservierung leicht mit <a href="tel:+902427310707">Call-Center</a> oder durch <a href="https://portnature.rezervasyonal.com/" target="_blank">Online-Buchung</a> 
             für Hotels in Belek machen. Auch Belek Hotel Call-Center-Service hat den besten Preis und 
             Letzte-Minute-Gelegenheiten. Die Belek Hotels Webseite und Call-Center-Service bieten die 
             besten Angebotpakete. Verpassen Sie nicht diese Chance, und <a href="tel:+902427310707">rufen Sie uns jetzt an</a>.
        </p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/de">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/de/belek/hotel-belek-port-nature-premium-hotel-resort.webp') }}" />
    </a>
</div>
<!--- BOOKING OPPORTUNITIES SECTION -->

<div class="opportunity-wrapper">
    <p class="h2-title">BUCHUNGSMÖGLICHKEITEN</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('de-concert') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-one.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Bevorstehende Konzerte im Hotel 💓💥</p>
                        <p>Erleben Sie Weltklasse-Musik im Komfort des Port Nature Luxury Resort Hotel mit unserer exklusiven
                            Konzertreihe mit Spitzenkünstlern aus aller Welt.</p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.getyourguide.de/belek-l7932/" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Besuchen Sie die besten Orte in Belek

                            🥰 💤 🏖 </p>
                        <p>Belek hat eine einzigartige Natur- und Stadtatmosphäre. Sie sollten eine halbtägige Bootstour
                            und Familien-Buggy-Safari machen. Sie sollten Belek Uhrenturm und die Moschee besuchen. </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('de-spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Erleben Sie ultimative Entspannung 🥰 💎</p>
                        <p>Entspannen und verjüngen Sie Körper, Geist und Seele mit unseren luxuriösen Spa-Behandlungen,
                            die Sie von Kopf bis Fuß entspannen und erfrischen. </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<!--- RATING SECTION -->

<div class="rating-wrapper">
    <p class="rating-title">Durch die Augen unserer Gäste </p>
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
                                <p class="rating-name">Belall423</p>
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
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-next">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-scrollbar"></div>

            </div>
        </div>
    </div>

</div>

<!-- Split to right 1 -->
<div class="splits-mother-wrapper">
    <div class="grey-wrapper">
        <div class="split-wrapper first-split">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-2.svg') }}">

            </div>
            <div class="split-2">
                <h2 class="split-text-1">Beste Hotel Belek</h2>
                <p>
                    Zwischen Mittelmeer und Taurusgebirge befinden sich die beste hotels Belek und die beste <b>Belek Beach
                    Resort</b>. Unabhängig von Ihrer Wahl, wird Luxury Belek Resort bieten feines Essen und türkische Bäder.
                    Die Gegend um die beste Hotel in Belek ist ein Teil der türkischen Riviera, die auch als Türkische
                    Küste bekannt ist und über lange und atemberaubende Strände verfügt. In den beste Luxury Belek hotel
                    finden Sie Aromen der <a href="https://www.portnature.com.tr/speisen-getranke">internationalen Küche</a> und türkische Spezialitäten. Die Hotel in Belek 5 sterne
                    servieren klassische <a href="https://www.portnature.com.tr/alacarte-restaurant-french">französische</a> Gerichte, <a href="https://www.portnature.com.tr/alacarte-restaurant-italian">italienische</a> Pasta-Variationen und mediterrane Menüs <a href="https://www.portnature.com.tr/restaurants-alacarte">à
                    la carte.</a> Premium-Hotels in Belek verfügen in der Regel über zahlreiche Schwimmbäder und
                    <a href="https://www.portnature.com.tr/aqua-park">Wasserparks</a>.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Hotel Belek 5 Sterne</h3>
            <p> Erleben Sie unvergleichlichen Luxus und Komfort im <b>hotels Belek 5 sterne</b>, einem beliebten
                 Reiseziel in Turkey. Diese High-End-Hotels bieten eine breite Palette von Weltklasse-Annehmlichkeiten,
                  einschließlich der feinen Küche, üppige <a href="https://portnature.com.tr/spa-zentrum">Spa-Einrichtungen</a> Verbringen Sie Ihre Tage mit Faulenzen an den
                   herrlichen Pools. Die makellosen Sandstrände und das kristallklare Wasser eignen sich hervorragend zum 
                   Entspannen und für Wassersportler. Genießen Sie die herzliche türkische Gastfreundschaft und schaffen Sie 
                   unvergessliche Erinnerungen während Ihres Aufenthalts im hotels Belek 5 sterne.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/king-suite-zimmer">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/de/belek/hotel-belek-5-sterne-king-suite-zimmer.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">5 Sterne Hotel Belek Kinderfreundlich</h4>
                <p>
                    In Belek befinden sich die besten 5 sterne und kinderfreundlichen Hotel der Türkei und der Welt, die
                    den Besuchern <a href="https://portnature.com.tr/unterhaltung">Unterhaltung</a> bieten. Jedes Belek Familienresort bereichert Ihren Urlaub mit einem
                    reichhaltigen offenen Frühstücksbuffet, <a href="https://www.portnature.com.tr/speisen-getranke">Speisen und Getränken</a>. Außerdem sind unsere Chefs darüber
                    aufmerksam, Ihren Kindern gesundes Mahl zu geben, falls sie eins im <a href="https://portnature.com.tr/alacarte-restaurant-mini-club">Miniklub</a> oder Minirestaurant
                    brauchen. Die Belek-Familienhotels bieten ein vielfältiges Angebot von <a href="https://portnature.com.tr/familienzimmer">Famillienzimmern</a>, das jedem
                    Geschmack und jedem Budget gerecht wird. Diejenigen, die Komfort und Spaß in ihrem Urlaub
                    kombinieren wollen, können einen Aufenthalt im Resort Belek genießen. Verpassen Sie also nicht die
                    Gelegenheit, ein <b>Belek urlaub mit Flug</b> zu buchen.</p>
                <h5 class="third-second-h4 split-text-3">Belek Aquapark Hotel</h5>
                <p>
                    In Belek gibt es mehrere Hotel mit <a href="https://portnature.com.tr/aqua-park">Aquapark</a> auf dem Gelände, die den Gästen einen unterhaltsamen und
                    spannenden Urlaub bieten. <b>Belek resort 5 sterne mit Aquapark</b> verfügen in der Regel über mehrere
                    Wasserrutschen, Schwimmbad, und andere Wasserattraktionen. Eines der beliebtesten Aquapark-Resorts
                    in Belek ist das Port Nature Luxury Resort mit über 18 verschiedenen Rutschen. Mit ihren aufregenden
                    Aquapark-Einrichtungen und komfortablen <a href="https://www.portnature.com.tr/zimmer">Unterkünften</a> sind diese Famillienzimmer die perfekte Wahl .
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/pubirish">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/de/belek/all-inclusive-belek-hotel-irish-pub.webp') }}">


        </a>
        <div class="split-2">
            <h3 class="split-text-4">All Inclusive Belek Hotel</h3>
            <p>
                Belek Hotel All Inclusive ist unverzichtbar für alle, die Komfort, Unterhaltung, kulinarische Genüsse
                und Luxus in Belek suchen. Im Belek Resort All Inclusive ist alles auf Ihren Geschmack zugeschnitten und
                es stehen viele Alternativen zur Verfügung. Sie können sich am Pool oder am Strand sonnen, denn beides
                ist in den Belek Hotels 5 sterne All Inclusive möglich. Es gibt ein reichhaltiges Angebot, darunter
                offene Buffets oder <a href="https://portnature.com.tr/restaurants-alacarte">À-la-carte-Restaurants</a> <a href="https://www.portnature.com.tr/alacarte-restaurant-all-day-dining">All Day Dining</a>, <a href="https://www.portnature.com.tr/alacarte-restaurant-seaside">Seaside</a>, <a href="https://www.portnature.com.tr/alacarte-restaurant-far-east">Far East</a>, wo Sie internationale
                Küche finden. Wählen Sie die Hotels Belek 5 sterne, um Ihr Glück in den Flitterwochen zu steigern und
                unvergessliche Momente in Belek zu erleben. </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h4 class="split-text-5">5 Sterne Hotel Belek Ultra All Inclusive</h4>
                <p>
                    <b>Belek Hotels 5-Sterne All Inclusive</b> sind ideal für Sommerreisen, 
                    Flitterwochen und Familienurlaube. Mit einem tiefblauen Meer, goldenen Stränden
                     und üppiger Natur bieten die Belek Ultra Hotels Erlebnisse für jeden Geschmack 
                     und Budget. Wer Komfort, Unterhaltung, Geschmack und Luxus sucht, wird im resort Belek
                      5 sterne alles finden. Die Belek-Ultra-Resorts bieten eine reiche Auswahl <a href="https://portnature.com.tr/cafes-bars">Bars</a> und 
                      Gerichten im <a href="https://portnature.com.tr/hauptrestaurant">Hauptrestaurant</a>, die sowohl internationale Küche als auch lokale Köstlichkeiten 
                      umfassen. Entdecken Sie diesen Sommer die 10 besten Hotels in Belek mit Flugoptionen, die 
                      für ihr erfahrenes Management bekannt sind. 
                </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/konzert">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/de/belek/premium-belek-hotel-konzerte.webp') }}">
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">

            </a>

        </div>
        <div class="split-2">
            <h2 class="split-text-6">Premium Belek Hotel</h2>
            <p>
                Premium Belek resort bietet eine Reihe von Unterhaltungsmöglichkeiten für alle Altersgruppen. 
                Bleiben Sie in unserem Premium Belek Resort und genießen Sie Fitnesscenter und die Trainingsmöglichkeiten. 
                Premium-Club hotels in Belek 5 sterne ist der perfekte Ort für einen romantischen Kurzurlaub oder Flitterwochen.
                Übernachten Sie in unseren Hotels in Belek und entdecken Sie die reiche Geschichte und Kultur der Stadt. 
                
                Unsere Premium Belek Resort <a href="https://portnature.com.tr/zimmer">Zimmer</a> sind mit modernen Annehmlichkeiten für Ihren Komfort ausgestattet.
                 Die direkte Strandlage von Hotel Belek mit Flug bietet einfachen Zugang zum Meer und zum Wassersport.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h3 class="split-text-7">Luxus Premium Belek</h3>
                <p>
                    Luxury <b>Premium Belek hotel</b> verfügt über ausgezeichnete Tagungs- und Veranstaltungsräume für
                    <a href="https://www.portnature.com.tr/tagung-kongress">Firmenveranstaltungen</a>. Das Personal von Resort Belek bietet einen außergewöhnlichen Service.
                    Entspannen Sie sich im Komfort von 5 Sterne Hotel Belek mit Außenpool und <a href="https://portnature.com.tr/innenpool">Innenpool</a>. Erleben Sie die
                    ultimative Entspannung in 5 Sterne Hotel Belek mit <a href="https://portnature.com.tr/spa-zentrum">Spa und Sauna</a>. <a href="https://portnature.rezervasyonal.com/" target="_blank">Buchen Sie jetzt</a> und erhalten Sie
                    eine kostenlose <a href="https://portnature.com.tr/aktiviaten">Aktivität</a> in 5 Sterne Hotel Belek All Inclusive.
                </p>
                <h3 class="split-text-7">Beste Luxushotel Belek</h3>
                <p>
                    Bleiben Sie in <b>Hotel Luxury Belek</b> und erhalten Sie ein Belek Hotel 5 Sterne Gastfreundschaft. Belek
                    5 Sterne resort hat einen atemberaubenden Blick auf das Mittelmeer. Belek Hotels 5 Sterne All
                    Inclusive bietet ein einzigartiges und unvergessliches Urlaubserlebnis. <a href="https://portnature.rezervasyonal.com/" target="_blank">Buchen Sie</a> Ihren Aufenthalt
                    in Hotel Belek Beach Resort und machen Sie Erinnerungen. Das Belek Beach Resort ist der am besten
                    erreichbare Ort in der Stadt. Unser 5 Sterne Hotels Belek verfügt über eine Vielzahl von <a href="https://portnature.com.tr/zimmer">Zimmertypen</a>
                    -beispielsweise die <a href="https://portnature.com.tr/king-suite-zimmer">Kingsuite</a>, <a href="https://www.portnature.com.tr/standard-zimmer">Standardzimmer</a>, <a href="https://www.portnature.com.tr/standard-meerblick-zimmer">Standard Meerblick</a> und <a href="https://www.portnature.com.tr/standard-landblick-zimmer">Standard Landblick Zimmer-</a> die
                    Ihren Wünschen entsprechen. Genießen Sie köstliche Speisen in den Restaurants Belek Beach Resort vor
                    Ort.
                </p>
            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile"
                    src="{{ asset('assets/frontend/images/offers/svg/mobile/location-01.svg') }}">

            </div>
        </div>
    </div>



    <!-- Stage Swiper Section -->

    <div class="stage-wrapper">
        <div class="swiper stage-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{ route('de-activity') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/activities.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">eine gute Zeit haben</p>
                            <p class="stage-heading">Aktivitäten</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('de-concert') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/concert.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">Ihre Lieblingskünstler</p>
                            <p class="stage-heading">Bühnenshows</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('de-aquapark') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/aquapark.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">Sicherheit für Ihr Kind</p>
                            <p class="stage-heading">Aquapark</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <!-- Three Image Section -->
    <div class="three-img-wrapper">
        <div class="three-img-div">
            <div class="split-svg three-img-1 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h2 class="split-text-8">Belek Beach Resort Hotel</h2>
                <p>
                    Belek Beach Resort hat einen ausgezeichneten Ruf für Service und Gastfreundschaft. 
                    Bleiben Sie in Belek Hotel und bekommen Sie ein <a href="https://portnature.com.tr/familienzimmer">Famillienzimmer</a> und <a href="https://portnature.com.tr/king-suite-zimmer">King suit</a>. Belek 5 
                    Sterne Resort hat flexible Stornierungsbedingungen, damit Sie sich keine Sorgen machen 
                    müssen. Belek resort direkt am Strand Optionen besser für Familienurlaub.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h3 class="split-text-9">Belek Hotels Direkt am Strand</h3>
                <p>
                    Belek Hotels direkt am Strand und in der Nähe beliebter Sehenswürdigkeiten. Belek Hotels direkt 
                    am Strand Lage hat Vorteile. Sparen Sie bei Ihrer nächsten Reise durch frühzeitige <b>Buchung 
                    in Hotel Premium Belek</b>. Haben Sie Spaß mit Belek Club Hotels. Belek Luxury Hotel bietet eine 
                    Vielzahl von <a href="https://portnature.com.tr/aktiviaten">Aktivitäten</a> für die ganze Familie. In Belek 5 Sterne Resort Angebote umfassen Premium 
                    Belek Angebote. Entfliehen Sie in unser Belek Resort und genießen Sie unsere <a href="https://portnature.com.tr/spa-zentrum">Spa- und Wellnessangebote </a>
                    im Belek 5 Sterne Resort. </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-10">Belek Resort & Spa</h4>
                <p>
                    <a href="https://portnature.rezervasyonal.com/" target="_blank">Buchen Sie jetzt</a> und sparen Sie bei Ihrem Aufenthalt in unserem Belek Resort & Spa mit Hotels Luxury
                    Belek. Genießen Sie spezielle Rabatte, wenn Sie direkt bei <b>Hotels in Belek</b> buchen. Belek Club Resort
                    bietet exklusive Vorteile für Mitglieder des Treueprogramms. Erleben Sie Luxus und Komfort in Belek
                    Beach Resort hotels. Belek Beach Resort bietet eine Reihe von Paketen, die den Bedürfnissen aller
                    travellersn in Belek Beach entsprechen. Nutzen Sie zeitlich begrenztes Angebot in Luxury Belek hotels
                    Bleiben Sie in Belek Hotel und genießen Sie Premium Belek hotels Frühstück jeden Morgen.
            </div>
        </div>

    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper  double-text-single">


            <div class="double-text">
                <h5 class="split-text-11">Urlaub in Belek</h5>
                <p>
                    Belek Hotels 5-Sterne All Inclusive Konzept umfasst Belek Beach. Belek Resort All 
                    Inclusive dient Ihnen einen unvergesslichen Urlaub mit <a href="https://portnature.com.tr/konzert">konzerte</a>. Sie verdienen Belek Hotels
                     direkt am Strand Urlaub in diesem Sommer. Belek 5 Sterne Resort bietet unglaublichen Urlaub 
                     mit Belek Angeboten. <a href="tel:+902427310707">Rufen Sie jetzt</a> an und profitieren Sie von den Vorteilen des Luxury Belek Resort.
                 </p>
            </div>



        </div>
    </div>

</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/offers.js') }}"></script>
<script src="{{ asset('assets/frontend/js/offers-mobile-booking.js') }}"></script>


@endsection

@section('css-imports')
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/frontend/css/offers-mobile.css') }}" media="screen and (max-width:480px)" />


@endsection