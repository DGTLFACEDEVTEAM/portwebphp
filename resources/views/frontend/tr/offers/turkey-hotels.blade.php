@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Türkiye Otelleri - Port Nature Luxury Resort Hotel')
@section('description', 'Türkiye Otelleri Port Nature Luxury Resort Hotel Spa. Balayı konsepti olan en iyi balayı oteli özel fırsatları için şimdi rezervasyon yapın.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-turkey-hotels') }}" aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('turkey-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-turkey-hotels') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-turkey-hotels') }}">DE</a></li>
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
                            Misafirlerimiz İçin
                        </p>
                        <p class="offers-4-big">
                            VIP Transfer
                        </p>
                        <div class="offers-4-medium">
                            <img class="offers-text-wrap-1"
                                src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                            Ücretsiz
                            <img class="offers-text-wrap-2"
                                src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                        </div>

                    </div>
                    <div class="transfer-addendum-wrapper"><p class="offers-4-addendum"></p>
                        <p class="offers-addendum-left">Çağrı merkezi aracılığıyla rezervasyon yapan misafirlerimiz, ücretsiz VIP transfer hizmetinden yararlanabilirler </p> 
                    </div>
                </div>
            </div>

                        <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" loading="lazy"
                        src="{{ asset('assets/frontend/images/offers/banner-web-kids.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/turkish-offer-1.webp') }}" />
                    <div class="offers-hero-text offers-hero-turkish-2">
                        <p class="turkish-2-small">Küçük misafirlerimiz için</p>
                        <p class="turkish-2-big">
                            Hediyeler
                        </p>
                        <div class="child-text-div">
                            <img class="offers-kids-free" src="{{ asset('assets/frontend/images/offers/free.svg') }}" />

                            <p class="turkish-2-mid-1 turkish-2-mid">
                                <span class="child-dark"> 1. ÇOCUK</span> <span class="child-light"> 0-14 YAŞ</span>
                            </p>
                            <p class="turkish-2-mid turkish-2-mid-2"> <span class="child-dark"> 2. ÇOCUK</span> <span
                                    class="child-light">0-5 YAŞ</span>
                            </p>
                        </div>
                    </div>
                    <p class="children-offers-addendum-turkish"></p>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/turkish-offer-1.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/turkish-offer-mobile-1.webp') }}" />
                    <div class="offers-hero-text offers-hero-1">               
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-2.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                    {{-- <div class="offers-hero-text offers-hero-1">
                        <p class="offers-1-top">Misafirlerimiz İçin</p>
                        <p class="offers-1-big">
                            Ücretsiz <br>Su Sporları<br>Jetonları
                        </p>
                    </div>
        <div class="water-sports-addendum-wrapper">            <p class="offers-addendum">Çağrı merkezi aracılığıyla rezervasyon yapın ve hediye olarak 4 jeton
                        kazanın</p>
                        <p class="offers-addendum-right"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p></div> --}}

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-3.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-2.webp') }}" />
                    {{-- <div class="offers-hero-text offers-hero-2">
                        <p class="offers-2-big">
                            SPA <br>Hizmetleri <br>hediye!
                        </p>
                        <p class="offers-2-small">
                            Sadece çağrı merkezi aracılığıyla yapılan rezervasyonlarda.
                        </p>
                        <p class="offers-2-medium">Masaj ya da köpük<br> banyosu ücretsizdir</p>

                    </div>
                    <p class="spa-offers-addendum"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p> --}}

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner ">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-4.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-3.webp') }}" />
                    {{-- <div class="offers-hero-text offers-hero-3">
                        <div class="offers-3-medium">
                            <img class="offers-text-wrap"
                                src="{{ asset('assets/frontend/images/offers/svg/beautiful.svg') }}" />
                            Ücretsiz
                        </div>
                        <p class="offers-3-big offers-3-big-turkish">
                            Premium Pavillon
                        </p>
                        <div class="offers-3-small">
                            <img class="offers-icon" src="{{ asset('assets/frontend/images/offers/svg/call.svg') }}" />
                            Sadece çağrı merkezi aracılığıyla yapılan rezervasyonlarda
                        </div>

                    </div>
                    <p class="offers-addendum-center"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p> --}}

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-4">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-5.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                    {{-- <div class="offers-hero-text offers-hero-4">
                        <p class="offers-4-small">
                            Misafirlerimiz İçin
                        </p>
                        <p class="offers-4-big">
                            VIP Transfer
                        </p>
                        <div class="offers-4-medium">
                            <img class="offers-text-wrap-1"
                                src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                            Ücretsiz
                            <img class="offers-text-wrap-2"
                                src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                        </div>

                    </div>
                    <div class="transfer-addendum-wrapper"><p class="offers-4-addendum">
                        Çağrı merkezi aracılığıyla rezervasyon yapan misafirlerimiz, ücretsiz VIP transfer hizmetinden
                        yararlanabilirler</p>
                        <p class="offers-addendum-left"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p>
</div> --}}
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
               
            
            
            <p class="general-swiper-title">Port Nature Otelleri</p>

        </div>
        <div class="general-pagination swiper-pagination"></div>
    </div>
</div>
<div class="hero-mobile-text-wrapper">
    <p class="hero-mobile-title"> Portnature Luxury Resort Otel & Spa    </p>
 
    <a class="hero-title-location" href="https://maps.app.goo.gl/Y1qMrLmKcPsJqdiF7">
              <img src="{{ asset('assets/frontend/images/offers/mobile/hero/location.svg') }}">

            <span> Türkiye, Belek, Boğazkent</span>
            <span>— haritada göster  </span>

    </a>
</div>
<section class="rating-tablet-wrapper">
       <div class="banners-mobile">
        <a  href="https://www.booking.com/hotel/tr/port-nature-luxury-resort-amp-spa.html" target="_blank" class="mobile-banner-item">
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

{{-- <div class="mobile-banner-wrapper">
    <div class="mobile-banner-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-tr/banner-1-tr.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-tr/banner-2-tr.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-tr/banner-3-tr.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-tr/banner-4-tr.webp') }}">
            </div>
            <div class="swiper-slide">
                <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/banners-tr/banner-5-tr.webp') }}">
            </div>
        </div>
    </div>
</div> --}}



<div class="hero-mobile-intro-wrapper">
    <p class="hero-mobile-title">
        Antalya Otelleri
    </p>
    <p class="hero-mobile-text">
Antalya esnek fırsatlarla en iyi her şey dahil 5 yıldızlı otelleri içerir. Lüks seyahat fırsatları arıyorsanız başka aramayın, Antalya otelleri sizi bekliyor. Antalya otellerinde çağrı merkezi veya online rezervasyon ile kolayca rezervasyon yapabilirsiniz. Ayrıca Antalya otelleri çağrı merkezi hizmeti de en uygun fiyat ve son dakika fırsatlarına sahiptir. Antalya otelleri web sitesi ve çağrı merkezi hizmeti en iyi fırsat paketini sunuyor. Bu fırsatı kaçırmayın ve hemen arayın. Antalya otelinde herkese göre oda bulunmaktadır. Son dakika fırsatlarıyla konaklama ararken Antalya oteli sizi bekliyor.    </p>
    <div class="hero-mobile-item">
                        <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/star-rating.webp') }}">
                        <p>
Premium A'la Carte Her Şey Dahil                        </p>

    </div>
    <div class="hero-mobile-item">
                        <img  src="{{ asset('assets/frontend/images/offers/mobile/hero/drink.webp') }}">
                        <p>
                            148 çeşit bedava alkol
                        </p>

    </div>
</div>
<!-- Hero Mobile Section End -->

<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">
    <div class="plane-svg colorful-image-wrapper"></div>
    <img class="plane-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-1.svg') }}" />
    <p class="plane-before">... hemen bir bilet alın</p>
    <div class="booking-section-wrapper">
        <p class="booking-section-title">HAYALİNİZDEKİ TATİL İÇİN</p>
        <p class="booking-section-title-2">Odanızı Ayırtın</p>
       
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
                    Oda Seçenekleri
                </button>
                <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Aile Odası">Aile Odası</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Standart Odalar">Standart
                            Odalar</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Süit Oda">Süit Oda</div>
                    </li>
                </ul>
            </div>



            <label for="checkin"></label><input id="checkin" data-defaultDate="today" value="Check-in">
            <label for="checkout"></label><input id="checkout" data-defaultDate="today" value="Check-Out">

            <div class="guestDiv guestdiv-adult"><span class="guests guests-adult">
                    <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/adult-icon.svg') }}">

                    Yetişkin</span>
                <div class="guestMenu guestMenuAdult">
                    <div class="adultCounter dropdown-item">
                        <p>Yetişkin(ler)</p>
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
                    Çocuk</span>
                <div class="guestMenu guestMenuChild">

                    <div class="childCounter dropdown-item">
                        <p>Çocuk(lar)</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childDecrement()" alt="decrement" />
                            <p id="childCount" class="childCountIncrementType"></p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childIncrement()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter1 childAgeCounter dropdown-item">
                        <p>Çocuk 1 Yaş</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge1Decrement()" alt="decrement" />
                            <p id="childAge1Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge1Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter2  childAgeCounter dropdown-item">
                        <p>Çocuk 2 Yaş</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge2Decrement()" alt="decrement" />
                            <p id="childAge2Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge2Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter3  childAgeCounter dropdown-item">
                        <p>Çocuk 3 Yaş</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge3Decrement()" alt="decrement" />
                            <p id="childAge3Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge3Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter4  childAgeCounter dropdown-item">
                        <p>Çocuk 4 Yaş</p>
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
                    src="{{ asset('assets/frontend/images/offers/svg/booknow.svg') }}" />Rezervasyon Yapın</a>
        </div>
        <!-- Booking Section End -->
    </div>

    <div class="offers-rooms-swiper swiper"><p class="offers-room-swiper-title-mobile">Konaklama</p>
        <div class="swiper-wrapper">
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/family.webp') }}" />
                <a href="{{ route('tr-family-rooms') }}" class="room-swiper-button"><span>Aile</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">4 Yetişkin +1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">45 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Yandan Deniz Manzaralı
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/king.webp') }}" />
                <a href="{{ route('tr-kingsuit-rooms') }}" class="room-swiper-button"><span>King Süit</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">5 Yetişkin +1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">110 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Deniz Manzaralı
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/standard.webp') }}" />
                <a href="{{ route('tr-standard-rooms') }}" class="room-swiper-button"><span>Standart</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">2 Yetişkin +2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">34 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Deniz / Kara / Yandan Deniz Manzaralı
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
      <div class="accommodations-features-grid collapse" id="collapseExample">
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
      <p class="room-features-list-text">Led TV</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/tea.svg') }}">
      <p class="room-features-list-text">Sıcak İçecek İstasyonu</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/wifi.svg') }}">
      <p class="room-features-list-text">Bedava Wi-Fi İnternet</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/phone.svg') }}">
      <p class="room-features-list-text">Doğrudan Hatlı Telefon</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/mirror.svg') }}">
      <p class="room-features-list-text">Makyaj Aynası</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/satellite.svg') }}">
      <p class="room-features-list-text">Uydu Yayını</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/shower.svg') }}">
      <p class="room-features-list-text">Ayrı Duş ve WC</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/slippers.svg') }}">
      <p class="room-features-list-text">Terlik</p>
    </div>
    
    
    
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/air.svg') }}">
      <p class="room-features-list-text">Split Sistem Klima</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/dryer.svg') }}">
      <p class="room-features-list-text">Saç Kurutma Makinesi</p>
    </div>
    <div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/safe.svg') }}">
      <p class="room-features-list-text">Dijital Kasa</p>
    </div><div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/towel.svg') }}">
      <p class="room-features-list-text">Havlu</p>
    </div><div class="accom-feature-item">
      <img class="svg"  src="{{ asset('assets/frontend/images/offers/mobile/icons/floor.svg') }}">
      <p class="room-features-list-text">Parke Zemin</p>
    </div>

    
  </div>
   <a class="feature-collapse-button collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  <span class="btn-collapsed">Daha Fazla Özellik</span>
    <span class="btn-open">Daha Az Özellik</span>

      </a>
</div>
    <div class="modal fade" id="peopleSelectionModal"  aria-labelledby="peopleSelectionModal" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close modal-close-family" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <p class="booking-modal-title" id="exampleModalLabel">Misafirleri seçin</p>

      <div class="dropdown adult-dropdown">
        <img class="dropdown-icons people" src="{{ asset('assets/frontend/images/offers/mobile-booking/adult.webp') }}"> Yetişkin(ler) <button class="btn dropdown-toggle" type="button" id="adultSelectionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <p id="adultCount" class="reservation-titles adult-count">2 </p>
                    <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

        </button>
        <ul class="dropdown-menu adult-selection-dropdown-menu " aria-labelledby="adultSelectionDropdown">
        
          
        </ul>
      </div>
      <div class="dropdown">
      <button class=" child-dropdown" id="childSelectionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
         Çocuk(lar) 
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
                     <p>Çocuk Yaşı 1</p>
                    <p id="childAge1" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge1Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Yaşı seçin 1</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-2">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge2Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Çocuk Yaşı 2</p>

                    <p id="childAge2" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge2Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Yaşı seçin 2</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-3">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge3Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Çocuk Yaşı 3</p>

                    <p id="childAge3" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge3Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Yaşı seçin 3</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-4">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge4Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Çocuk Yaşı 4</p>

                    <p id="childAge4" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge4Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Yaşı seçin 4</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-5">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge5Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Çocuk Yaşı 5</p>

                    <p id="childAge5" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge5Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Yaşı seçin 5</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="childAgeItem child-age-item-6">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childAge6Btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Çocuk Yaşı 6</p>

                    <p id="childAge6" class="reservation-titles child-age-count">0</p>
                             <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}"> 

                  </button>
                  <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end " aria-labelledby="childAge6Btn">
                    <li class="dropdown-item people-item disabled">
                      <p class=" p-15 dropdown-text child-age-text">Yaşı seçin 6</p>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </div>
      
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="booking-modal-close modal-close-family" data-bs-dismiss="modal">Tamam</button>
      </div>
    </div>
  </div>
</div>
</div>
<!--- MOBILE BOOKING SECTION -->
<section class="mobile-booking-section">
      <div class="reservation-form  ">
    <p class="reservation-form-mobile-title">Seyahatinizi otelimizle planlayın</p>
  
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
        Seyahat edenler
</button>

    </section>
    
  
    <a href="https://portnature.rezervasyonal.com/" target="_blank"  class=" booking-btn booking-hero-btn" type="button">
                                           <img class="drop-icon" src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-btn-mobile.svg') }}"> 

      <p class=" p-16 reservation-titles">

        Rezervasyon</p>
    </a>
  </div>
</section>

<!--- MOBILE BOOKING SECTION END -->

<!--- FLIGHT SECTION -->

<div class="flight-wrapper">
    <p class="flight-addendum">
        Web sitemizde, başka sitelere link verilmesi veya başka sitelere referans verilmiş olması sitenin sahibinin,
        link verilen veya referans verilen diğer sitelerin içeriğinden sorumluluğunu doğurmayacağı gibi ve site sahibi
        diğer sitelerin içeriğinden kaynaklanan herhangi bir zarar veya ziyandan da sorumlu tutulamayacaktır.
        Diğer sitelere yapılan tüm linkler, website kullanıcılarımızın erişim kolaylığı için websitemizde yer almıştır.
        Bu düzenleme, Port Nature ya da bağlı şirketlerinin söz konusu diğer sitelerle ya da sahipleriyle ilişkide
        olduğu anlamına gelmez.

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="https://www.flypgs.com/sehirler/antalya-ucak-bileti" target="_blank"><img class="pegasus-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-1.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a
                        href="https://www.skyscanner.com.tr/?currency=TRY&locale=tr-TR&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd" target="_blank"><img
                            class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.corendonairlines.com/tr" target="_blank"><img class="corendon-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-3.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.aviasales.ru/?params=IST1&currency=usd" target="_blank"><img class="avia-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-4.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.turkishairlines.com/tr-int/ucak-bileti/rezervasyon/" target="_blank"><img class="turkish-logo"
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
        <p class="transfer-title">Transfer için buraya tıklayın</p>
        <p class="transfer-mid">Konforlu bir yolculuk</p>
        <a class="transfer-btn" target="_blank" href="https://portnature.rezervasyonal.com/ExtraService" target="_blank">Transfer İçin
            Yer Ayırtın </a>
    </div>
</div>
<!--- Mobile Flight Section Start -->
<div class="flight-wrapper-mobile">
  <div class="flight-mobile-div">
    <div class='flight-mobile-title'>
      <p>Hemen uçak bileti ayırtın</p>
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
         <a href="https://www.skyscanner.com.tr/?currency=TRY&locale=tr-TR&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd" target="_blank">
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
  <p class="flight-mobile-addendum">Web sitemizde başka web sitelerine bağlantı verilmesi veya başka web sitelerine atıfta bulunulması, bağlantı verilen veya yönlendirilen web sitelerinin içeriğinden site sahibini sorumlu tutmaz ve diğer web sitelerinin içeriğinden kaynaklanan hiçbir zarar veya kayıptan site sahibi sorumlu tutulamaz. . Diğer web sitelerine olan tüm bağlantılar, web sitemizin kullanıcılarının rahatlığı için web sitemizde verilmektedir. Bu düzenleme, Port Nature Hotels
'in veya bağlı kuruluşlarının herhangi bir şekilde diğer web siteleri veya sahipleriyle ilişkili veya ilgili olduğu anlamına gelmez.
</p></div>
    <a class="flight-collapse-button collapsed"  data-bs-toggle="collapse" data-bs-target="#flightCollapse" aria-expanded="false" aria-controls="flightCollapse">
  <span class="btn-collapsed">Daha Fazla Havayolu</span>
    <span class="btn-open">Daha Az Havayolu</span>

      </a>
      <hr class="flight-mobile-hr">
      <div class='flight-mobile-title'>
      <p>Yolda rahatça vakit geçirin</p>
      <img src="{{ asset('assets/frontend/images/offers/car.svg') }}">
    </div>
    <a class="transfer-mobile-btn" href="https://portnature.rezervasyonal.com/" target="_blank"> Transfer Rezervasyonu</a>
  </div>
</div>
<!--- Mobile Flight Section End -->

<!--- CONTACT SECTION -->
<div class="offers-contact-wrapper">
    <div class="offers-contact-div">
        <div class="luggage-image-wrapper colorful-image-wrapper"></div>

        <div class="offers-contact-info">
            <p class="offers-contact-title">Ücretsiz çağrı merkezi veya online rezervasyon</p>
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
  <p class="contacts-mobile-title"> Şimdi Bize Ulaşın</p>
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
        <h1>Türkiye Otelleri</h1>
        <p><b>Türkiye otelleri</b>, ziyaretçilere sundukları yüksek kaliteli hizmetleri ve çeşitli konaklama seçenekleri ile
            dünyanın en popüler turistik destinasyonlarından biridir. Türkiye en iyi tatil otelleri herkesin
            beklentilerini karşılayabilecek tatil fırsatları ile sizleri bekliyor. Türkiye en uygun otel, sadece
            konaklama hizmetleri ile değil aynı zamanda <a href="{{ route('tr-food-drink') }}">yeme-içme</a>, <a href="{{ route('tr-entertainment') }}">eğlence</a>, <a href="{{ route('tr-spa') }}">spa ve wellness</a> gibi hizmetleri de sunar.
            Ayrıca en iyi Türkiye oteli için rezervasyon yapmak ve fırsatlardan yararlanmak çok kolay. Tercihiniz ne
            olursa olsun hemen Türkiye <a href="https://portnature.rezervasyonal.com/?_gl=1*10t808v*_ga*MTY1Mjk1MDk1OS4xNjgyNjgzMzQ0*_ga_6EYM72GR61*MTY4MzExMDQ5My40LjEuMTY4MzExNDU1OS4wLjAuMA..">otel rezervasyonu</a> yapmak için <a href="tel:+902427310707">bizi arayın</a>.

        </p>
    </div>
    <a class="split-img" href="{{ route ('tr-homepage') }}">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/tr/turkey/turkiye-otelleri-port-nature-premium-resort-hotel.webp') }}" />
    </a>
</div>

<!--- BOOKING OPPORTUNITIES SECTION -->


<div class="opportunity-wrapper">
    <p class="h2-title">REZERVASYON FIRSATLARI</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('tr-concert') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-one.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Otelde Yaklaşan Konserler 💓💥</p>
                        <p>Dünyanın dört bir yanından en iyi sanatçıların yer aldığı özel konserlerimizle, Port Nature
                            Luxury Resort Hotel konforunda birinci sınıf müziği deneyimleyin. </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.ntv.com.tr/galeri/n-life/gezi/turkiyede-gezilecek-yerler-gorulmesi-gereken-turistik-ve-tarihi-50-yer,nQz60xe96kO3yEVnFLPr1Q"
                    class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Türkiye'de Ziyaret Edilecek Yerler



                            🥰 💤 🏖 </p>
                        <p>Türkiye, kadim kültürü, canlı gece hayatı, tazeleyici havası ve leziz mutfağı ile şaşırtıcı
                            derecede güzel, yemyeşil ve tarihi şehirlere sahiptir. </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('tr-spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Derin Bir Rahatlama Yaşayın 🥰 💎</p>
                        <p>Zihninizi, bedeninizi ve ruhunuzu stresten kurtarmak ve tazelemek için tasarlanmış olan lüks,
                            kaliteli ve temiz spamızın keyfini ailecek çıkarın. </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>




<!--- RATING SECTION -->

<div class="rating-wrapper">
    <p class="rating-title">Misafirlerin Gözünden </p>
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
                <h2 class="split-text-1">Türkiye En Uygun Tatil Otelleri Herşey Dahil</h2>
                <p>
                    Tatil planlarınız arasında herşey dahil konsepti var ise, Türkiye'nin pek çok bölgesinde lezzetli
                    yemekler ve kaliteli konaklama sunan tatil köyü bulabilirsiniz. Türkiye, dünyanın en güzel tatil
                    yeri olmasıyla birlikte, her şey dahil konaklama seçeneği ve <a href="https://portnature.rezervasyonal.com/?_gl=1*1jabg3w*_ga*MTY1Mjk1MDk1OS4xNjgyNjgzMzQ0*_ga_6EYM72GR61*MTY4MzExMDQ5My40LjEuMTY4MzExNDgwOC4wLjAuMA..">erken rezervasyon</a> fırsatları ile
                    tatilcilerin ilgisini çekmektedir. Türkiye <b>en uygun tatil otelleri herşey dahil</b> konseptin yanı sıra
                    çocuk konsepti ile tatilcilere büyük avantaj sunmaktadır. Çocuklar için özel olarak tasarlanmış
                    <a href="https://portnature.com.tr/mini-club-alacarte-restoran">çocuk kulüpleri</a>, eğlenceli animasyonlar ve çok daha fazlası sunulmaktadır. Dünya mutfağından <a href="https://portnature.com.tr/fransiz-alacarte-restoran">Fransız
                    alakart</a>, <a href="https://portnature.com.tr/italyan-alacarte-restoran">İtalyan alakart</a>, <a href="https://portnature.com.tr/all-day-dining-alacarte-restoran">All Day Dining alakart</a> ve <a href="https://portnature.com.tr/uzak-dogu-alacarte-restoran">Uzak Doğu alakart</a> birbirinden lezzetli yemekleri
                    ile herşey dahil Türkiye otel hizmetlerindendir.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Türkiye Ultra Herşey Dahil En Uygun Otelleri</h3>
            <p> <b>Türkiye ultra herşey dahil oteller</b>, tatilciler için geniş bir hizmet yelpazesinde <a href="https://portnature.com.tr/aktiviteler">aktivite</a> seçenekleri
                sunarlar. Plajlar, <a href="https://portnature.com.tr/su-parki">havuzlar ve su kaydırakları</a>, spor salonları, mini golf alanları ve çocuk kulüpleri,
                Türkiye ultra herşey dahil en uygun otelleri için değişmez ayrıcalıklardır. Ayrıca, geceleri düzenlenen
                canlı müzik, gösteri ve <a href="https://portnature.com.tr/konserler">konserler</a> tatilcilerin eğlenceli zaman geçirmelerini sağlar. Türkiye ultra
                herşey dahil oteller, aynı zamanda tatilcilerin yerel kültür ve yemekleri de keşfetmelerini sağlayacak
                olanaklar sunarlar. Konuklar, <a href="https://portnature.com.tr/nespresso-kafe">Nespresso Kafe</a> ile Türk kahvesi tadımı ve yöresel yemekler ile Türk
                kültürünü ve yemeklerini yakından deneyimleyebilirler. En iyi tekliflerle <a href="https://portnature.rezervasyonal.com/?_gl=1*43uxy6*_ga*MTY1Mjk1MDk1OS4xNjgyNjgzMzQ0*_ga_6EYM72GR61*MTY4MzExMDQ5My40LjEuMTY4MzExNTYwNi4wLjAuMA..">Türkiye otel rezervasyonu</a>
                yapmak için <a href="tel:+902427310707">çağrı merkezimizi arayın</a>.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/standart-odalar">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/tr/turkey/akvaparkli-turkiye-otelleri-standart-odalar .webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Türkiye Otelleri Tatil Fiyatları</h4>
                <p>
                    Türkiye otelleri tatil fiyatları, <a href="https://portnature.com.tr/konaklama">konaklama</a> seçeneklerine ve tatil bölgesine göre değişkenlik
                    göstermektedir. Ancak genel olarak, Türkiye'nin turistik bölgelerindeki oteller, diğer ülkelerdeki
                    otellere kıyasla en uygun otel fiyatlarını sunmaktadır. Türkiye oteli tarafından sunulan <a href="https://portnature.rezervasyonal.com/?_gl=1*tog2h0*_ga*MTY1Mjk1MDk1OS4xNjgyNjgzMzQ0*_ga_6EYM72GR61*MTY4MzExMDQ5My40LjEuMTY4MzExNTYwNi4wLjAuMA..">erken
                    rezervasyon</a> ve indirim kampanyalarından da yararlanarak tatil masraflarınızı daha da
                    azaltabilirsiniz. Bu nedenle, tatil planı yaparken Türkiye otel fiyatları hakkında araştırma
                    yapmanız da fayda var. <b>Türkiye otelleri tatil fiyatları</b>, <a href="https://portnature.com.tr/standart-odalar">standart oda</a>, <a href="https://portnature.com.tr/aile-odasi">aile odası</a> ve ya <a href="https://portnature.com.tr/king-suite-oda">king süit</a>
                    oda gibi konaklama seçeneklerine göre de değişkenlik göstermektedir. İhtiyaçlarınıza en uygun otel
                    için <a href="tel:+902427310707">çağrı merkezi ile rezervasyon</a> yapın, Türkiye'nin muhteşem güzelliklerini keşfetmek için
                    unutulmaz bir tatil deneyimi yaşayın.
                </p>

            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/born9-launge-hennessy">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/tr/turkey/turkiye-antalya-otelleri-born9-hennessy-lounge-bar.webp') }}">


        </a>
        <div class="split-2">
            <h5 class="split-text-4">Türkiye Otelleri Tatil Paketleri</h5>
            <p>
                Türkiye oteli, turistlerin tercihlerine göre farklı <b>tatil paketleri</b> sunar. Aileler için çocuk dostu
                Türkiye oteli çocuk kulüpleri, oyun alanları ve animasyon aktiviteleri gibi çocukların eğlenebileceği
                imkanlar sunmaktadır. Çiftler için romantik tatil paketleri sunan Türkiye oteli ise <a href="https://portnature.com.tr/king-suite-oda">king süit oda</a>, özel
                yemekler ve <a href="https://portnature.com.tr/spa-merkezi">spa hizmetleri</a> gibi romantik detaylar dikkat çeker. Türkiye herşey dahil otel, dünya
                standartlarında hizmet vererek turistlerin konforlu ve güvenilir bir tatil geçirmenizi sağlar. Türkiye
                otelleri tatil paketleri konaklama, <a href="https://portnature.com.tr/yeme-icme">yeme-içme</a> gibi hizmetleri içerir ve turistlere ekstra ücret ödemeden
                tatillerini planlama imkanı sunar.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h2 class="split-text-5">Türkiye En İyi Oteller</h2>
                <p>
                    Türkiye, zengin tarihi, doğal güzellikleri ve lüks oteller ile turistler için popüler bir
                    destinasyondur. Türkiye sahillerinde, ziyaretçilerin konforlu ve lüks konaklama deneyimi
                    yaşayabilecekleri denize sıfır en iyi Türkiye otelleri bulunmaktadır. Bazı Türkiye otelleri sahilde
                    yer alırken, bazıları da tarihi mekanlara yakın konumlanmıştır. Bu oteller, spa, fitness merkezi,
                    yüzme havuzu, <a href="https://portnature.com.tr/alacarte-restoranlar">alakart restoranlar</a>, <a href="https://portnature.com.tr/barlar-kafeler">barlar ve kafeler</a> ile ziyaretçilere her açıdan unutulmaz bir
                    tatil sunar. <b>Türkiye nin en iyi oteli</b>, kaliteli hizmetleri, konforlu lüks süit odaları, muhteşem
                    manzaraları ve lezzetli yemekleri ile sizleri bekliyor. Türkiye'de en iyi oteller arasından
                    dilediğinizi seçin ve <a href="tel:+902427310707">çağrı merkezi ile rezervasyon</a> yaparak yerinizi ayırttın.
                </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/aktiviteler">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/tr/turkey/turkiye-5-yildizli-aile-otelleri-konserler.webp') }}">

                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">

            </a>

        </div>
        <div class="split-2">
            <h3 class="split-text-6">Türkiye En Lüks Oteller</h3>
            <p>
                <b>Türkiye en lüks oteller</b>, dünya standartlarında konaklama deneyimi sunan ve en üst düzey hizmetleri
                sağlayan tesislerdir. Türkiye'nin en lüks otelleri bölgenin zengin kültürü ve doğal güzellikleriyle
                birleştiğinde unutulmaz bir tatil deneyim sunmaktadır. Bu otellerde, yüksek standartlarda tasarlanmış
                <a href="https://www.portnature.com.tr/konaklama">odalar</a>, <a href="https://www.portnature.com.tr/king-suite-oda">king süitler</a> ve <a href="https://portnature.com.tr/standart-deniz-manzarali-oda">deniz manzaralı standart odalar</a> hizmet vermektedir. Türk ve dünya mutfağından
                lezzetleri deneyimleyebileceğiniz <a href="https://portnature.com.tr/alacarte-restoranlar">alakart restoranlar</a>, <a href="https://portnature.com.tr/sushi-bar-alacarte-restoran">Sushi Bar</a>, muhteşem kokteyller tadacağınız
                <a href="https://portnature.com.tr/bar-flamingo">Flamingo Bar</a> ve <a href="https://portnature.com.tr/irishpub">Irish Pub</a> Türkiye en lüks oteller ile sizleri bekliyor. Birbirinden özel hizmetlerden
                yararlanmak için hemen en lüks Türkiye otel <a href="https://portnature.rezervasyonal.com/?_gl=1*imerbt*_ga*MTcwODk4ODk0Ny4xNjgyNDk1NTY4*_ga_6EYM72GR61*MTY4MzExMTU3Ni4xNi4xLjE2ODMxMTI2OTAuMC4wLjA.">rezervasyon yapın</a> ve yaz tatilinizin keyfini çıkarın.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h4 class="split-text-7">En Uygun Spa Otelleri Türkiye</h4>
                <p>
                    Türkiye en uygun spa otelleri hem sağlık ve konfor açısından hem de lezzetli <a href="https://www.portnature.com.tr/ana-restoran">yemekleri</a> ile de öne
                    çıkmaktadır. Özellikle Türk mutfağına özgü lezzetli yemekler ile konukların hem bedenlerine hem de
                    damaklarına hitap etmektedir. <b>Türkiye <a href="https://www.portnature.com.tr/spa-merkezi">spa</a> oteli</b>, zengin termal kaynakları ve doğal güzellikleri ile
                    sağlıklı ve dinlendirici bir tatil sunmaktadır. Bu oteller, ziyaretçilerine modern spa teknolojileri
                    ve uygulamalarını kullanarak termal suların faydalarını sunmaktadır. Türkiye en uygun spa otelleri,
                    sağlıklı yaşam konusunda birçok seçenek ile ziyaretçilerine unutulmaz bir deneyim yaşatır.
                </p>
                <h5 class="split-text-7">Türkiye 5 Yıldızlı En İyi Termal Otelleri </h5>
                <p>
                    Türkiye, doğal termal kaynakları ve eşsiz coğrafi konumu ile dünya genelinde termal turizm açısından
                    büyük bir pazara sahiptir. <b>Türkiye 5 yıldızlı termal otelleri</b>, misafirlerine yüksek kalitede sağlık
                    turizminin yanı sıra tatil amaçlı konaklama imkânı da sunmaktadır. Bu otellerde genellikle <a href="https://portnature.com.tr/spa-merkezi">spa
                    merkezleri</a>, sauna ve hamam gibi sağlık ve wellness imkanları sizlerin hizmetindedir. Sağlık turizmi
                    açısından önemli bir potansiyele sahip Türkiye Termal oteller, aynı zamanda keyifli bir tatil için
                    de ideal bir seçimdir. Türkiye 5 yıldızlı termal otel, sağlık, konfor ve lüksü misafirlerine bir
                    arada yaşatır.
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
                    <a href="{{ route('tr-activity') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/activities.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">İyi Eğlenceler</p>
                            <p class="stage-heading">Aktiviteler</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('tr-concert') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/concert.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">En Sevdiğiniz Sanatçılar</p>
                            <p class="stage-heading">Sahne Şovları</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('tr-aquapark') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/aquapark.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">Çocuklar İçin Güvenli</p>
                            <p class="stage-heading">Su Parkı</p>
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
                <h3 class="split-text-8">En İyi Aile Otelleri Türkiye </h3>
                <p>
                    <b>Türkiye en iyi aile otelleri</b>, tatilcilere yüksek kaliteli ve konforlu konaklama imkanları
                    sunmaktadır. Bu otellerde lüks <a href="https://portnature.com.tr/aile-odasi">aile odaları</a>, <a href="https://portnature.com.tr/mini-club-alacarte-restoran">çocuk kulüpleri</a>, çocuk oyun alanları, <a href="https://www.portnature.com.tr/eglenceler">animasyon ve
                    eğlence</a> programları gibi birçok olanak bulunmaktadır. Ayrıca çoğu aile oteli SPA merkezleri, fitness
                    salonları ve golf sahaları gibi aktiviteler de hizmet vermektedir. Yaz aylarında denize sıfır
                    konumda bulunan otellerde, <a href="https://portnature.com.tr/seaside-alacarte-restoran">Seaside alakart</a> restoranda dalgaların sesinde akşam yemeğinin tadını
                    çıkarabilirsiniz. Türkiye'nin farklı bölgelerinde yer alan en iyi aile otelleri, Türk ve Dünya
                    mutfağından zengin yemek seçenekleri ile dikkat çekmektedir. Bu nedenle, ailece yapılacak keyifli
                    bir tatil için Türkiye en iyi aile oteli 2024 fırsatlarına mutlaka göz atın.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-9">Türkiye Çocuk Dostu Aquapark Otelleri </h4>
                <p>
                    Türkiye, mavi bayraklı plajları, yaz boyu güneşli havası ve zengin kültürel mirasıyla turistlerin
                    ilgi odağı olmuştur. Türkiye'de tatil yapmak isteyen aileler için çocuk dostu aquapark oteli her
                    zaman harika bir seçim olmuştur. Çocuk dostu aquapark otelleri, su kaydırakları, açık ve <a href="https://portnature.com.tr/kapali-havuz">kapalı
                    yüzme havuzları</a> ile keyifli ve unutulmaz bir tatil deneyimi sunar. Bu otellerde çocuklara özel <a href="https://portnature.com.tr/mini-club-alacarte-restoran">Mini
                    Club alakart</a>, çocuklar için gün boyu <a href="https://portnature.com.tr/aktiviteler">eğlenceli aktiviteler</a> ve çocuk bakım hizmetleri de
                    sunulmaktadır. Türkiye'nin özellikle Antalya bölgesinde birçok çocuk dostu aquapark oteli
                    bulunmaktadır. <b>Antalya aile otelleri</b>, çocuklara keyifli bir tatil yaşatarak, aynı zamanda
                    ebeveynlere dinlenme ve rahatlama fırsatı sağlamaktadır.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h3 class="split-text-10">Türkiye Balayı Otelleri </h3>
                <p>
                    Türkiye yeni evli balayı çiftleri için sayısız lüks otel seçeneği ile doludur. Özellikler Akdeniz
                    sahilindeki Antalya balayı otelleri, doğal güzellikleri, şık tasarımları ve muhteşem manzaraları ile
                    balayı tatili için ideal tercihler arasındadır. <b>Türkiye en iyi balayı oteli</b>, <a href="https://portnature.com.tr/script-launge-chivas">Script Chivas Lounge</a>,
                    <a href="https://portnature.com.tr/davidoff-kafe">Davidoff Cafe</a> ve yüksek standartlı <a href="https://portnature.com.tr/alacarte-restoranlar">alakart restoranlar</a> gibi birçok alternatif bulundurmaktadır.
                    <a href="https://portnature.com.tr/yeme-icme">Yiyecek ve içecek</a> çeşitliği ile size birçok imkân sunan bu oteller <a href="https://portnature.com.tr/uzak-dogu-alacarte-restoran">Uzak Doğu alakart</a> restoran ile
                    dünya mutfağından lezzetleri sizinle buluşturuyor. Yapmanız gereken2024 fırsatları sayfamıza göz
                    atmak ve hayalinizde balayı tatili için özel balayı tatil paketleri arasından seçim yapmak.
                </p>
            </div>
        </div>

    </div>



    <div class="split-wrapper eighth-split">
        <div class="split-1">
            <div class="split-svg eighth-split-img colorful-image-wrapper"></div>
            <img class="three-img-mobile" src="{{ asset('assets/frontend/images/offers/svg/camera.svg') }}">
            <img class="three-img-mobile img-rotate" src="{{ asset('assets/frontend/images/offers/svg/ticket.svg') }}">
            <img class="three-img-mobile img-rotate" src="{{ asset('assets/frontend/images/offers/svg/glasses.svg') }}">
        </div>
        <div class="split-2">
            <h4 class="split-text-12">Türkiye Otelleri Balayı Tatili </h4>
            <p>
                Türkiye en iyi balayı otelleri, çiftlere rüya gibi bir tatil deneyimi sunmak için özel olarak
                tasarlanmıştır. Otellerin geniş ve konforlu odaları, en ince ayrıntısına kadar düşünülmüş olanaklarla
                sizi şımartacaktır. Ayrıca otellerdeki özel <a href="https://portnature.com.tr/spa-merkezi">spa hizmetleri</a> ile masaj, Türk hamamı ve sauna keyfi
                yapabilirsiniz. Türkiye'de oteller balayı tatili için mükemmel bir seçimdir ve unutulmaz bir balayı
                deneyimi sunar. Özellikle Antalya bölgesinde bulunan lüks oteller, balayı tatil paketleri ve romantik
                atmosferleri ile çiftlerin tatil deneyimini unutulmaz kılar. Ayrıca <b>Antalya en iyi balayı oteli</b> çiftler
                için romantik akşam yemekleri, şampanya ikramları gibi sürprizler sunmaktadır.
            </p>
        </div>
    </div>


    <div class="grey-wrapper">
        <div class="double-text-wrapper  ">


            <div class="double-text">
                <h2 class="split-text-11">Türkiye Otelleri Rezervasyon</h2>
                <p>
                    <a href="https://portnature.rezervasyonal.com/?_gl=1*imerbt*_ga*MTcwODk4ODk0Ny4xNjgyNDk1NTY4*_ga_6EYM72GR61*MTY4MzExMTU3Ni4xNi4xLjE2ODMxMTI2OTAuMC4wLjA.">Türkiye otel rezervasyonu</a>  genellikle çevrimiçi olarak yapılmaktadır. 
                    
                    Birçok Türkiye oteli, kendi web sitelerinde veya diğer platformlarda <a href="https://portnature.rezervasyonal.com/?_gl=1*imerbt*_ga*MTcwODk4ODk0Ny4xNjgyNDk1NTY4*_ga_6EYM72GR61*MTY4MzExMTU3Ni4xNi4xLjE2ODMxMTI2OTAuMC4wLjA.">online 
                    rezervasyon</a> hizmeti vermektedir. Türkiye'de oteller birçok farklı <a href="https://portnature.com.tr/konaklama">konaklama</a> 
                    seçeneği sunmaktadır. Bu seçenekler arasında, lüks 5 yıldızlı otellerden ekonomik 
                    apart otellere kadar birçok kategori yer almaktadır. Bu oteller seçeneğiniz 
                    ne olursa olsun yüksek standartlara sahip olup, modern olanaklar sunmaktadır. 
                    Türkiye en iyi otel rezervasyonu için online rezervasyon yapabilir veya <a href="tel:+902427310707">çağrı 
                    merkezi ile rezervasyon</a> hakkında detaylı bilgilere ulaşabilirsiniz. Ayrıca, yaz 
                    döneminden önce 2024 fırsatları ile yapacağınız erken rezervasyon size en uygun 
                    tatil seçeneklerini sunacaktır.
                </p>
            </div>
            <div class="double-text">
                <h3 class="split-text-11">En iyi otel rezervasyon siteleri hangileri?</h3>
                <p>
                    <b>Türkiye otelleri</b> için rezervasyon, tatil sezonuna göre farklılık göstermektedir.
                     Özellikle yaz aylarında, Antalya gibi turistik bölgelerde otellerin doluluk oranları 
                     oldukça yüksektir. Bu nedenle, tatil planlaması yaparken, en uygun otel ve rezervasyon 
                     platformu seçimi önemlidir. En iyi Antalya oteli için tatil döneminin dışında yapılacak 
                     bir seyahat size avantajlı <a href="https://portnature.rezervasyonal.com/?_gl=1*imerbt*_ga*MTcwODk4ODk0Ny4xNjgyNDk1NTY4*_ga_6EYM72GR61*MTY4MzExMTU3Ni4xNi4xLjE2ODMxMTI2OTAuMC4wLjA.">fiyatlar</a> sunabilir. Her koşulda Antalya <a href="https://portnature.com.tr/tr">Belek Port Nature
                      Luxury Resort Hotel</a> web sitesi bu otel için Türkiye’nin en iyi rezervasyon platformudur. 
                      Birçok <a href="https://www.portnature.com.tr/konaklama">konaklama</a> seçeneği, <a href="https://portnature.com.tr/cocuk-konsepti">çocuk konsepti</a>, 2024 yılı özel fırsatlar ve çok daha fazlasını 
                      sunan en iyi Antalya oteli tüm isteklere cevap veriyor. 
                 </p>
            </div>



        </div>
    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper  ">


            <div class="double-text">
                <h4 class="split-text-11">Türkiye Otelleri Tatil Fırsatları</h4>
                <p>
                    Kültürel tarihi ve doğal güzellikleri ile Türkiye, en popüler tatil 
                    destinasyonlarından biridir. Ülkenin özellikle Antalya bölgesinde farklı tatil 
                    seçenekleri sunan birçok lüks otel bulunmaktadır. Akdeniz sahil şeridinde yer alan 
                    
                    tatil beldelerindeki oteller, deniz, güneş ve kum tatili arayanlara mükemmel tatil 
                    fırsatları sunar. Türkiye otelleri tatil fırsatları konusunda oldukça geniş yelpazede
                     seçenekler sunmaktadır. Erken rezervasyon fırsatları, balayı paketleri ve özel aile
                      tatili paketleri, en iyi her şey dahil Antalya otelleri tarafından sunulmaktadır.
                       Tüm doğal güzellikle birlikte sayısız tatil fırsatları için <a href="tel:+902427310707">çağrı merkezi ile rezervasyon</a> yapabilirsiniz.
                 </p>
            </div>
            <div class="double-text">
                <h5 class="split-text-11">Türkiye Otelleri Son Dakika Fırsatları</h5>
                <p>
                    Türkiye oteli için son dakika tatil planları yapan tatil severler uygun fırsatlar bulabilirler. 
                    Tatil sezonu boyunca doluluk oranları yüksek olmaktadır. Bu nedenle oteller son dakika boş kalan 
                    odaları en uygun son dakika otel fırsatları ile satışa çıkarır. Ayrıca, bazı Türkiye otelleri son 
                    dakika kampanyaları düzenleyerek tatilcileri cezbederler. Bu kampanyalar arasında, ücretsiz transfer, 
                    <a href="https://portnature.com.tr/spa-merkezi">spa merkezi</a> indirimleri, <a href="https://portnature.com.tr/alacarte-restoranlar">alakart restoran</a> indirimleri gibi fırsatlar yer alabilir. Ancak, son dakika 
                    fırsatlarına erişmek için erken rezervasyon yapmaktan vazgeçip tatil tarihlerini mümkün olduğunca esnek
                     tutmak gerekebilir.
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
<link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('assets/frontend/css/offers-mobile.css') }}" />


@endsection