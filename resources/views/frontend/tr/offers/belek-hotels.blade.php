@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Belek Otelleri - Port Nature Luxury Resort Hotel')
@section('description', 'Belek Otelleri Port Nature Luxury Resort Hotel Spa. Belek en iyi 5 yıldızlı her şey dahil otel için ücretsiz online rezervasyon')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-belek-hotels') }}"
        aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('belek-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-belek-hotels') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-belek-hotels') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')
{{-- Hero Swiper Section --}}

@include('components.offers.offersDesktop.offersDesktopSwiper', ['lang' => 'tr'])


{{-- Hero Mobile Section Start --}}
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
    <p class="hero-mobile-title">
Portnature Luxury Resort Otel & Spa    </p>
 
    <a class="hero-title-location" href="https://maps.app.goo.gl/Y1qMrLmKcPsJqdiF7">
              <img src="{{ asset('assets/frontend/images/offers/mobile/hero/location.svg') }}">

            <span> Türkiye, Belek, Boğazkent</span>
            <span>— haritada göster  </span>

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
{{-- Hero Mobile Section End --}}

{{-- SHOWCASE SECTION --}}

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
        {{-- Booking Section --}}
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
        {{-- Booking Section End --}}
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
{{--- MOBILE BOOKING SECTION --}}
<section class="mobile-booking-section">
      <div class="reservation-form  ">
    <p class="reservation-form-mobile-title">Seyahatinizi otelimizle planlayın</p>
  
    {{-- DATE SELECTION SECTION --}}
    <div class="dateInputDiv" name="daterange" id="calendarRange">
      <img class="dropdown-icons dropdown-icon-mobile" src="{{ asset('assets/frontend/images/offers/mobile-booking/mobile-booking-calendar.svg') }}">
              <img class="dropdown-icons dropdown-icon-desktop" src="{{ asset('assets/frontend/images/offers/mobile-booking/calendar.webp') }}">

      <p class=" p-16 reservation-titles">
        <span id="check-in-span" class="checkInSpan">Check In</span> — <span id="check-out-span" class="checkOutSpan">
          <span class="conditional"> Check </span> Out </span>
      </p>

    </div>
    <div class="empty-booking-div"></div>
    {{-- NUMBER OF PEOPLE SELECTION SECTION --}}

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

{{--- MOBILE BOOKING SECTION END --}}

{{--- FLIGHT SECTION --}}

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
                    <a href="https://www.flypgs.com/" target="_blank"><img class="pegasus-logo"
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
{{-- TRANSFER SECTION --}}

<div class="transfer-wrapper">
    <img class="transfer-desktop" src="{{ asset('assets/frontend/images/offers/desktop-car.svg') }}">
    <img class="transfer-tablet" src="{{ asset('assets/frontend/images/offers/tablet-car.svg') }}">
    <img class="transfer-mobile" src="{{ asset('assets/frontend/images/offers/mobile-car.svg') }}">


    <div class="transfer-texts">
        <p class="transfer-title">Transfer için buraya tıklayın</p>
        <p class="transfer-mid">Konforlu bir yolculuk</p>
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService" target="_blank">Transfer İçin
            Yer Ayırtın </a>
    </div>
</div>
{{--- Mobile Flight Section Start --}}
<div class="flight-wrapper-mobile">
  <div class="flight-mobile-div">
    <div class='flight-mobile-title'>
      <p>Hemen uçak bileti ayırtın</p>
      <img src="{{ asset('assets/frontend/images/offers/plane.svg') }}">
    </div>
    <div class='flight-mobile-w-addendum collapse' id="flightCollapse">
    <div class="flight-items-wrapper">
      <div class="flight-item-wrapper">
         <a href="https://www.flypgs.com/" target="_blank">
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
{{--- Mobile Flight Section End --}}

{{--- CONTACT SECTION --}}
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
            @include('components.whatsapp.offersWhatsappContact')
        </div>
    </div>
</div>

{{--- CONTACTS SECTION MOBILE--}}
<section class="contacts-section-mobile">
  <p class="contacts-mobile-title"> Şimdi Bize Ulaşın</p>
  <div class="contacts-mobile-wrapper">  
      <a href="mailto:callcenter@portnature.com.tr" class="contacts-mobile-item">
                  <img src="{{ asset('assets/frontend/images/offers/mail.svg') }}">
                  <p>info@portnature.com.tr</p>

  </a>
  @include('components.whatsapp.offersWhatsappContactMobile')
  <a href="tel:+902427310707" class="contacts-mobile-item">
                  <img src="{{ asset('assets/frontend/images/offers/phone.svg') }}">
                  <p>+90 (242) 731 07 07</p>

  </a>
</div>
</section>
{{--- CONTACTS SECTION MOBILE END--}}

{{--- FIRST SPLIT SECTION --}}
<div class="offers-first-split">
    <div class="first-split-clouds colorful-image-wrapper">
    </div>
    <div class="split-text">
        <h1>Belek Otelleri</h1>
        <p><b>Belek otelleri</b> sadece oda çeşitliliği ile değil, sunduğu çeşitli <a
                href="https://portnature.com.tr/konserler">aktivitelerle</a> de tatilcilerin beklentilerini
            karşılamaktadır. Bu aktiviteler
            arasında, su sporları, <a href="https://www.portnature.com.tr/spa-merkezi">spa ve masaj hizmetleri</a>, <a
                href="https://portnature.com.tr/konserler">konserler</a> ve animasyon programları
            gibi birçok seçenek yer almaktadır. Ayrıca, Belek otelleri (Belek hotels) yakınlarındaki
            tarihi ve doğal güzellikleri keşfetmek isteyenler için de birçok turistik olanaklar

            mevcuttur. Aspendos Tiyatrosu, <a
                href="https://www.hurriyet.com.tr/seyahat/side-antik-kenti-nerede-side-antik-kenti-hakkinda-bilgi-tarihi-efsanesi-giris-ucreti-ve-ziyaret-saatleri-2023-41610757">Side
                Antik Kenti</a> ve Köprülü Kanyon gibi popüler tarihi yerler,
            Belek hotel transfer ile kolayca ulaşılabilen yerler arasındadır. Belek otelleri, turistlerin her türlü
            ihtiyacına
            uygun şekilde tasarlanmıştır ve unutulmaz bir tatil deneyimi sunmak için çalışmaktadır.</p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/tr">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/tr/belek/belek-otelleri-port-nature-premium-hotel-resort.webp') }}" />
    </a>
</div>
{{--- BOOKING OPPORTUNITIES SECTION --}}


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
                <a href="https://gezimanya.com/belek" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Belek'te Ziyaret Edilecek Yerler


                            🥰 💤 🏖 </p>
                        <p>Belek eşsiz doğası ve şehir atmosferiyle size birçok aktivite imkanı sunar. Tekne turları,
                            Taurus'ta ailecek buggy keyfi yapabilir, saat kulesini ve camiyi gezebilirsiniz. </p>
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



{{--- RATING SECTION --}}

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

{{-- Split to right 1 --}}
<div class="splits-mother-wrapper">
    <div class="grey-wrapper">
        <div class="split-wrapper first-split">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-2.svg') }}">

            </div>
            <div class="split-2">
                <h2 class="split-text-1">Belek Aquapark Otelleri</h2>
                <p>
                   <a href="https://portnature.com.tr/su-parki"> Belek aquapark otelleri</a> hem rahat hem de çocuklar için eğlenceli bir tatil imkânı sunar. Çünkü her
                    yaş grubuna uygun kaydıraklar, havuzlar ve su parkları Belek otelleri hizmetlerinde mevcuttur.
                    Aquaparklar, genellikle çocuklu aileler tarafından tercih edilir. Belek'teki aquapark otelleri
                    genellikle yüksek kaliteli ve lüks tatil imkanları sunarlar. Ayrıca aquaparklar, yaz günlerinde
                    Akdeniz sıcaklarında serinlemek ve eğlenmek için harika bir seçenektir. Tatil tutkunları, sıcak yaz
                    günlerinde aquaparklarda eğlenirken, akşamları da lüks otel hizmetleri ile dinlenerek tatillerinin
                    tadını çıkarabilirler. Belek aquapark otelleri <a href="https://portnature.rezervasyonal.com/" target="_blank">erken rezervasyon</a> fırsatlarına çok geç olmadan göz
                    atın, bizi <a href="tel:+902427310707">çağrı merkezimiz</a> aracılığıyla arayın ve hayalini kurduğunuz tatile kavuşun.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Belekte Oteller</h3>
            <p> Belek, Akdeniz'in en ünlü tatil beldelerinden biridir ve birçok tatilci tarafından tercih edilir.
                Belekte oteller (hotels in Belek) konaklamak isteyen tatilciler için birçok farklı <a href="https://portnature.com.tr/aile-odasi">aile odası</a> ve <a href="https://portnature.com.tr/king-suite-oda">king
                süit</a> oda seçenekleri. Belek otel yorumları seçeceğiniz konsept ve memnuniyet konusunda size yardımcı
                olabilir. Fakat öncelikli olarak en iyi Belek oteli <b>Port Nature Luxury Resort Hotel</b> resmi web sitemizde
                araştırma yapmanızı öneririm. Daha sonra dilediğiniz tatile lüks bir Belek otel ile ulaşmanız kaçınılmaz
                olacak. Ayrıcalıkların farkında olmanıza yaptığınız Belek otel incelemeleri ve Belek beach resort hotel
                ile tatil yapan turistlerin yaptığı değerlendirmeler sizleri aydınlatacaktır.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/king-suite-oda">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/tr/belek/belekte-oteller-king-suite-oda.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Belek 5 Yıldızlı Oteller</h4>
                <p>
                    <b>Belek 5 yıldızlı oteller</b> hakkında <a href="tel:+902427310707">detaylı bilgi almak için</a>, belek beach resort hotel veya resmî web
                    sitelerini ziyaret edebilirsiniz. Belek otelleri, lüks <a href="https://portnature.com.tr/konaklama">konaklama</a>, <a href="https://www.portnature.com.tr/all-day-dining-alacarte-restoran">All Day Dining</a>, <a href="https://www.portnature.com.tr/uzak-dogu-alacarte-restoran">Uzak Doğu</a> ve
                    <a href="https://portnature.com.tr/fransiz-alacarte-restoran">Fransız</a> <a href="https://portnature.com.tr/alacarte-restoranlar">alakart restoranlar</a>, <a href="https://portnature.com.tr/bar-flamingo">Flamingo bar</a>, ve <a href="https://portnature.com.tr/davidoff-kafe">Davidoff Cafe</a> gibi birçok farkındalık sunmaktadırlar.
                    Ayrıca 5 yıldızlı Belek çocuk dostu otel, çocuklu aileler için özel aktiviteler de sunacaktır. Port
                    Nature Luxury Resort otel web sitesinde sizin için tanınan fırsatları görebilirsiniz. Belek 5
                    yıldızlı otelleri genellikle ultra her şey dahil hizmet vermektedirler ve birçoğu denize sıfır
                    konumlarda yer almaktadırlar. Belek otel tatili, her koşulda konforlu ve lüks bir tatil için ideal
                    bir seçenektir.
                </p>

            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/irishpub">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/tr/belek/belek-en-iyi-oteller-irish-pub.webp') }}">


        </a>
        <div class="split-2">
            <h5 class="split-text-4">Belek Tatil Otelleri</h5>
            <p>
                Belek, Akdeniz'in en ünlü tatil beldelerinden biri olarak bilinir ve her yıl binlerce turist tarafından
                ziyaret edilir. Belek tatil otelleri (Belek resort hotel), denize sıfır konumları, ultra her şey dahil
                konsepti ve kaliteli hizmetleri ile tanınmaktadır. Belek otelleri ile yerel lezzetlerin sunulduğu
                <a href="https://portnature.com.tr/alacarte-restoranlar">alakart restoranlar</a>, <a href="https://portnature.com.tr/barlar-kafeler">kafeler</a>, <a href="https://portnature.com.tr/kit-kat-kafe">KitKat kafe</a>, gece kulüpleri ve alışveriş merkezleri gibi pek çok seçenek
                de mevcuttur. <b>Aile dostu Belek otelleri</b>, <a href="https://portnature.com.tr/eglenceler">eğlence</a> ve <a href="https://portnature.com.tr/konserler">konserler</a> ile öne çıkarken, çiftler için özel olarak
                tasarlanmış romantik seçenekler sunan oteller de mevcuttur. Kim ile nasıl bir tatil planı yapıyor
                olursanız olun, Belek otelleri, tatilinizi unutulmaz bir deneyim haline getirecektir.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h2 class="split-text-5">Belek En İyi Oteller</h2>
                <p>
                    <b>Belek en iyi oteller</b>, özel plajları, <a href="https://portnature.com.tr/italyan-alacarte-restoran">İtalyan</a>, <a href="https://portnature.com.tr/fransiz-alacarte-restoran">Fransız</a> ve <a href="https://portnature.com.tr/uzak-dogu-alacarte-restoran">Uzak doğu</a> <a href="https://portnature.com.tr/alacarte-restoranlar">alakart restoranlar</a>, <a href="https://portnature.com.tr/mini-club-alacarte-restoran">Mini Club</a>
                    gibi birçok hizmet sunarlar. Ayrıca, Belek otelleri dalış turları ve doğa yürüyüşleri gibi birçok
                    farklı aktivite ve tur seçeneği de mevcuttur. En iyi Belek otelleri (top hotels Belek), yüzlerce
                    içeceğin sunulduğu <a href="https://portnature.com.tr/bar-flamingo">Flamingo bar</a>, <a href="https://portnature.com.tr/script-launge-chivas">Script Chivas lounge</a>, <a href="https://portnature.com.tr/born9-launge-hennessy">Born 9 Hennessy bar</a>, <a href="https://www.portnature.com.tr/bar-lobby">Lobby bar</a> ve <a href="https://www.portnature.com.tr/irishpub">Irish pub</a>
                    ile hizmet sunmaktadır. Belek otelleri ile her yaşa uygun etkinlikler, çocuk kulüpleri, su parkları
                    ve gece kulüpleri gibi özel hizmetler de sizleri bekliyor. Belek beach hotel en iyi fırsatlarından
                    yararlanmak için vakit kaybetmeden fırsatlara fırsat katıp erken <a href="https://portnature.rezervasyonal.com/" target="_blank">rezervasyon yapmayı unutmayın</a>.
                </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/konserler">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/tr/belek/belekteki-ultra-her-sey-dahil-oteller-konserler.webp') }}">

                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">

            </a>

        </div>
        <div class="split-2">
            <h3 class="split-text-6">Belek Her Şey Dahil Otelleri</h3>
            <p>
                Belek her şey dahil oteller, misafirlerine rahat, konforlu ve lüks bir süit, <a href="https://portnature.com.tr/aile-odasi">aile odası</a> veya <a href="https://portnature.com.tr/standart-deniz-manzarali-oda">deniz
                manzaralı standart oda</a> deneyimi sunmak için birçok olanak sağlar. Tatil beldesi özellikle sahip olduğu
                lüks Belek her şey dahil otelleri (Belek all inclusive hotels) ile dikkat çekmektedir. Belek her şey
                dahil otelleri, aynı zamanda balayı çiftleri için de bir tercihtir, balayınızı unutulmaz kılmak sunulan
                özel paketlerle mümkün. Bu paketler genellikle özel odalar, mutluluk verecek şampanya ve çikolata,
                masajlar gibi birçok sürprizler içerir. Belek otelleri arasından bu unutulmaz balayı fırsatları için
                <a href="https://www.portnature.com.tr/tr">Port Nature Luxury Resort Hotel</a> özel paketleri sizleri bekliyor.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h4 class="split-text-7">Belek teki Ultra Her Şey Dahil Oteller</h4>
                <p>
                    Belek ultra her şey dahil otelleri, hem konforlu bir tatil imkanı hem de sağlıklı bir yaşam tarzı
                    için de ideal bir seçimdir. Ultra Belek otellerin büyük bir çoğunluğunda yoga dersleri, açık hava
                    sporları gibi oldukça özel <a href="https://portnature.com.tr/aktiviteler">aktiviteler</a> sunulur. <a href="https://portnature.com.tr/spa-merkezi">Spa merkezleri</a> de bu oteller için olmazsa olmazdır
                    ve burada misafirler rahatlatıcı masajlar ve çeşitli cilt bakımı terapileri gibi hizmetlerden
                    yararlanabilirler. Ayrıca, Belek ultra her şey dahil otel restoranlarında <a href="https://portnature.com.tr/sushi-bar-alacarte-restoran">Sushi bar</a> da mevcuttur.
                    Sonuç olarak, Belek Ultra her şey dahil otelleri, sağlıklı bir tatil geçirmek için de doğru bir
                    seçenektir. Her yönden ultra bir Belek tatili için hemen şimdi <a href="https://portnature.rezervasyonal.com/" target="_blank">rezervasyonunuzu tamamlayın</a>.
                </p>
                <h2 class="split-text-7">Belek Lüks Oteller </h2>
                <p>
                    <b>Belek lüks oteller (Belek luxury hotels)</b>, doğal güzelliklerle çevrili konumlarıyla yerli ve yabancı
                    birçok turistin ilgisini çekmektedir. Tatil planlarınız arasında lüks bir konaklama deneyimi yaşamak
                    var ise, Belek'teki lüks otelleri tercih edebilirsiniz. Fakat lüks tatil planınızı yaparken Belek
                    paketleri gibi seçeneklerden önce Port Nature Luxury Resort Hotel paketlerine mutlaka göz atın. Port
                    Nature Luxury Resort Hotel Belek oteli özel kampanyaları ve lüks <a href="https://portnature.com.tr/konaklama">konaklama</a> paketleri ile sizleri
                    şaşırtacak. <a href="https://portnature.rezervasyonal.com/" target="_blank">Bir tıkla</a> hayalinizdeki lüks tatile ulaşmanız artık çok kolay.
                </p>
            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile"
                    src="{{ asset('assets/frontend/images/offers/svg/mobile/location-01.svg') }}">

            </div>
        </div>
    </div>



    {{-- Stage Swiper Section --}}

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
    {{-- Three Image Section --}}
    <div class="three-img-wrapper">
        <div class="three-img-div">
            <div class="split-svg three-img-1 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h3 class="split-text-8">Deluxe Belek Otel </h3>
                <p>
                    <b>Deluxe Belek Otel</b>, lüks bir tatil kompleksidir. Bu oteller kendine özgü mimarisi ve modern tasarımı
                    ile dikkat çekmektedir ve doğayla bütünlükleri korumaları en seçici özellerindedir. Deluxe Belek
                    Otel (hotel deluxe Belek) <a href="https://portnature.com.tr/nespresso-kafe">Nespresso cafe</a>, açık ve <a href="https://portnature.com.tr/kapali-havuz">kapalı havuzu</a>, spa merkezi ve eğlenmek için <a href="https://portnature.com.tr/konserler">konser</a>
                    alanlarına sahiptir. Tüm bu olanaklar sayesinde misafirlerine eğlenceli ve dinlendirici bir tatil
                    imkânı sağlar. Ayrıca, deluxe Belek otelin lüks ve konforlu odaları, konuklarına unutulmaz bir
                    konaklama deneyimi yaşatmayı hedefler. Bu oteller sadece tatil amaçlı konaklamalar için değil, <a href="https://portnature.com.tr/toplanti-kongre">iş
                    amaçlı ziyaretler</a> için de çok tercih edilen bir seçenektir.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-9">Belek Premium Otel </h4>
                <p>
                    Belek Premium Otel, konum olarak Akdeniz kıyısında yer almaktadır ve misafirlerine muhteşem
                    manzaralar sunmaktadır. Otel odaları modern ve rahat mobilyalar ile tüm ihtiyaçlarınızı karşılayacak
                    şekilde tasarlanmıştır. Ayrıca, tesisin büyük yüzme havuzları, fitness salonu, çocuk oyun alanları
                    ve konser etkinlikleri gibi birçok rekreasyonel olanakları da vardır. Belek premium otel (Belek
                    premium hotel), gastronomi deneyimleri konusunda da oldukça başarılı bir tesis olarak öne çıkıyor.
                    Otel restoranları, dünya mutfaklarından <a href="https://portnature.com.tr/yeme-icme">yemekler</a> sunan zengin menüler ile tatilcilerin damak zevkine
                    hitap ediyor. Belek premium otel ile her şey istediğiniz gibi ve fazlası var. <a href="tel:+902427310707">Çağrı merkezini arayın</a>
                    ve ihtiyaçlarınıza uygun Belek premium otel odanızı hemen ayırtın.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-10">Belek Denize Sıfır Oteller </h4>
                <p>
                    Belek'in en çekici özelliği muhteşem sahilleridir ve bu nedenle birçok otel denize sıfır veya yakın
                    konumdadır. Denize sıfır oteller (Belek beach resort otel), doğrudan denize erişmek isteyen
                    tatilciler için en doğru seçenektir. Belek'te birçok lüks 5 yıldızlı otel ve tatil köyü
                    bulunmaktadır ve bunların çoğunluğu denize sıfır konumdadır. Belek denize sıfır oteller, yılın her
                    dönemi turist çekmektedir. Ancak özellikle yaz aylarında yoğun ilgi ile doluluk oranları çok yüksek
                    olmaktadır. Bu nedenle, Belek'teki denize sıfır otel için tatil planları yaparken erken rezervasyon
                    yapmak her açıdan önerilir. <a href="https://portnature.rezervasyonal.com/" target="_blank">Rezervasyonunuzu tamamlayın</a>, En iyi Belek otel tatilinizde <a href="https://portnature.com.tr/seaside-alacarte-restoran">Seaside
                    alakart</a> restoranında içeceğinizi yudumlarken deniz manzarasının tadını çıkarın.
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
            <h5 class="split-text-12">Belek Erken Rezervasyon Otelleri </h5>
            <p>
                Belek, turistik bir belde olduğu için pek çok erken rezervasyon seçeneği sunan otel barındırmaktadır.
                Belekteki erken rezervasyon otelleri genellikle deniz manzaralı lüks tesislerdir. Belek, doğal
                güzellikleri ve uzun sahil şeridi ile dikkat çeker. Erken rezervasyon yapmak, tatil bütçenizi korumak ve
                sevdiğiniz bir otelde konaklama garantisi elde etmek için harika bir yoldur. Rezervasyon yapmadan önce
                seçtiğiniz tesisin yıldız sayısı, konumu, fiyatı ve müşteri yorumları da dikkate alınması önemlidir.
                Belekteki erken rezervasyon otelleri, genellikle çiftler, aileler ve <a href="https://portnature.com.tr/cocuk-konsepti">çocuklar için</a> uygun paket
                seçenekleri sunar. Tatil planlarınızı erken yaparak, Belek'te unutulmaz bir tatil deneyimi
                yaşayabilirsiniz.
            </p>
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