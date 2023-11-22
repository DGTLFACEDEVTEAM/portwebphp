@extends('frontend.tr.layouts.master')

@section('title', 'Resmi Sayfası- Port Nature Luxury Resort Hotel Spa')
@section('description',
    'Port Nature Luxury Resort Hotel & Spa. Resmi Web Sitemizi Ziyaret Edin. Belek En Lüks Herşey
    Dahil Aile Dostu Otel. ')

@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-homepage') }}"
            aria-expanded="false">TR</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li><a class="dropdown-item first-item" href="{{ route('homepage') }}">EN</a></li>
            <li><a class="dropdown-item" href="{{ route('ru-homepage') }}">RU</a></li>
            <li><a class="dropdown-item" href="{{ route('de-homepage') }}">DE</a></li>
        </ul>
    </li>

@endsection

@section('content')

    <!-- Swiper Start -->


    @include('components.heroSwiper', ['lang' => 'tr'])
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
                <span class="guests">Misafirler</span>
            </div>
            <div class="guestMenu dropdown-menu" aria-labelledby="guestMenuDropdown">
                <div class="adultCounter dropdown-item dropdown">
                    <button class="dropdown-toggle" type="button" id="adultSelectionDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p class="guest-title">Yetişkin(ler)</p>
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
                        <p class="guest-title">Çocuk(lar)</p>
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
                            <p class="guest-title">Çocuk 1 Yaş</p>
                            <p id="childAge1" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge1Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Yaşı seçin</p>
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
                            <p class="guest-title">Çocuk 2 Yaş</p>
                            <p id="childAge2" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge2Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Yaşı seçin</p>
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
                            <p class="guest-title">Çocuk 3 Yaş</p>
                            <p id="childAge3" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge3Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Yaşı seçin</p>
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
                            <p class="guest-title">Çocuk 4 Yaş</p>
                            <p id="childAge4" class="reservation-titles child-age-count">0</p>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/home/booking-arrow.svg') }}" />
                        </button>
                        <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                            aria-labelledby="childAge4Btn">
                            <li class="dropdown-item people-item disabled">
                                <p class=" p-15 dropdown-text child-age-text">Yaşı seçin</p>
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
        <a href="https://portnature.rezervasyonal.com/?currency=TRY" target="_blank" class="bookNow">Rezervasyon Yap</a>
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
                    <span>SU PARKI</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/concerts.svg') }}"
                        alt="concerts">
                    <span>KONSERLER</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/beach.svg') }}"
                        alt="beach">
                    <span>KUM PLAJ</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/entertainment.svg') }}"
                        alt="entertainment" />
                    <span>EĞLENCELER</span>
                </div>
            </div>

        </div>

        <!-- Home Icons End -->
        <div class="thinLine"></div>
    </div>
    <!-- Inclusive Area Text -->

    @include('components.inclusiveSwiper', ['lang' => 'tr'])
    <!-- Inclusive Area Text End -->
    <!-- Concerts -->
    <div class="concertsWrapper">
        <h2 class="concertsHeader">KONSERLER</h2>
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
    <!-- Concerts End -->

    <!-- Accommdation -->
    {{-- <div class="homeAccommdation">
        <div class="homeAccommodationWrapper">
            <article>
                <h2>KONAKLAMA</h2>
                <h6>Doğaya dokunan odalar konforlu ve rahat bir tatilin anahtarıdır.<br> Odalarımız tatil deneyiminizi bir
                    üst katmana taşıyacak.</h6>
            </article>
            <div class="swiper Roomswiper">
                <div class="swiper-wrapper" style="padding-bottom: 200px">
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('tr-family-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}"
                                        alt="familyRoom" />
                                </figure>
                                <h3>AİLE ODASI</h3>
                                <span>4 Yetişkin + 1 Çocuk · 45 m² · Yandan Deniz Manzaralı</span>
                                <p>Siz odanızda dinlenirken çocuklarınız kendilerine özel alan bulabilecekler.</p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('tr-family-rooms') }}">Daha Fazlası</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('tr-kingsuit-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}"
                                        alt="kingSuite" />
                                </figure>
                                <h3>KING SÜİT</h3>
                                <span>5 Yetişkin + 1 Çocuk · 110 m² · Deniz Manzaralı</span>
                                <p>Mucize deniz görüntüsü ve<br> lüks sizi büyüleyecek.</p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('tr-kingsuit-rooms') }}">Daha Fazlası</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="toRoom" href="{{ route('tr-standard-rooms') }}">
                            <div class="otherImage">
                                <figure>
                                    <img class="lazyload"
                                        data-src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}"
                                        alt="standardRoom" />
                                </figure>
                                <h3>STANDART ODA</h3>
                                <span>2 Yetişkin + 2 Çocuk · 34 m² · Deniz / Kara / Yandan Manzaralı</span>
                                <p>Çok fazla lüks unsurlar size unutulmaz bir tatil sağlıyor.</p>
                                <div class="homeAccommdationmoreButton">
                                    <a href="{{ route('tr-standard-rooms') }}">Daha Fazlası</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-next">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper next button" />
                </div>
            </div>
        </div>
    </div> --}}
    @include('components.accommdationSwiper', ['lang' => 'tr'])

    <!-- Accomdation End -->
    <!-- Children Menu -->
    <div class="children">
        <div class="childrenContainer">
            <div class="row">
                <div class="col-md-12">
                    <h2>ÇOCUKLAR</h2>
                </div>
            </div>

            <div class="subChildren">
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrencam.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Odanızda bulunan TV'den çocuğunuzun neler yaptığını
                        izleyebilirsiniz.</span>
                </div>
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrenage.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Her yaştaki çocuk için aktiviteler</span>
                </div>
                <div class="childrenIcons">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/childrenbabysit.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Çocuğunuz, çocuklara özel hazırlanmış menülerden kendi yiyeceklerini
                        seçebilir.</span>
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
            <a href="{{ route('tr-kids-concepts') }}">Daha Fazlası</a>
        </div>
    </div>

    <!-- Children Menu End -->
    <!-- Banner -->
    <div class="homeBanner">
        <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/homeBanner.webp') }}" />
        <h3>Belek'in eşsiz doğal güzellikleri ile yetişkinler ve<br> çocuklar için inanılmaz bir sahil deneyimi yarattık
        </h3>
        <div class="moreButton">
            <a href="{{ route('tr-activity') }}">Daha Fazlası</a>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Contact -->
    {{-- @include('frontend.tr.layouts.contact') --}}
    @include('components.contactSection', ['lang' => 'tr'])

    <!-- Contact End -->

    <!-- Gastronomy Start -->
    <div class="homeGastronomy">
        <div class="homeGastronomyWrapper">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/7.svg') }}"
                            alt="seven">
                        Premium A'la Carte Restoranımız
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Farklı ülkelerden en iyi mutfaklar!</h6>
                </div>
            </div>
            <div class="gastroIconsWrapper">
                <!-- Slides -->
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/quality.svg') }}" alt="quality">
                    <div class="gastroText">
                        <span>En İyi Kalite</span>
                        <p class="gastroP">Özel yemekler için özenle seçilmiş malzemeler</p>
                    </div>
                </div>
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/drink.svg') }}" alt="drinks">
                    <div class="gastroText">
                        <span>Sınırsız</span>
                        <p class="gastroP">148 çeşit en üst kalite içki ile lüksü hissedeceksiniz</p>
                    </div>
                </div>
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload"
                        data-src="{{ asset('assets/frontend/images/home/free.svg') }}" alt="free">
                    <div class="gastroText">
                        <span>Dilediğiniz an</span>
                        <p class="gastroP">İstediğiniz zaman ücretsiz girebilirsiniz</p>
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
                                <span>UZAK DOĞU A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        Çalışma Saatlerinde
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Rezervasyon gerekmez
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('tr-fareast') }}">Daha Fazlası</a>
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
                                        Çalışma Saatlerinde
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Rezervasyon gerekmez
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('tr-alldaydinning') }}">Daha Fazlası</a>
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
                                <span>FRANSIZ A’LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        Çalışma Saatlerinde
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Rezervasyon gerekmez
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('tr-french') }}">Daha Fazlası</a>
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
                                        Çalışma Saatlerinde
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Rezervasyon gerekmez
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('tr-seaside') }}">Daha Fazlası</a>
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
                                <span>İTALYAN A’LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/clock.svg') }}"
                                            alt="clock" />
                                        Çalışma Saatlerinde
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Rezervasyon gerekmez
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('tr-italian') }}">Daha Fazlası</a>
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
                                        Çalışma Saatlerinde
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Rezervasyon gerekmez
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('tr-mini-club-alacarte') }}">Daha Fazlası</a>
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
                                        Çalışma Saatlerinde
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload"
                                            data-src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant">
                                        Rezervasyon gerekmez
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('tr-sushi-bar') }}">Daha Fazlası</a>
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
        <h6>Özel Teklifler</h6>
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
                        <p>VIP müşteri olun</p>
                        <span>Tatilinizde VIP ayrıcalıklar</span>
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
                        <p>Miksoloji Uzmanı</p>
                        <span>Sizin için özenle hazırlandı</span>
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
                        <p>Evlilik hediyeleri</p>
                        <span>Birlikte vakit geçirin</span>
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
                                        <p>Premium hizmet premium hissettirir.<br>
                                            Port Nature Luxury Resort & SPA bu his için her zaman burada.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('tr-bar-cafe') }}">Daha Fazlası</a>
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
                                        <p>Yetenekli terapistler eşliğinde lüks spa merkezimizde<br> keyifli bir kaçışla
                                            kendinizi şımartın.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('tr-spa') }}">Daha Fazlası</a>
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

                                        <span>Toplantı & Kongre</span>
                                        <p>Biz sadece eğlenceden ibaret değiliz,<br> ayrıca iş insanları için de hizmetler
                                            sunuyoruz.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('tr-meeting-congress') }}">Daha Fazlası</a>
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
                                        <p>Keşfetmeye değer nadide kahve çeşitlerini keşfedin.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('tr-davidoff-cafe') }}">Daha Fazlası</a>
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
    @include('frontend.tr.layouts.contact')
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
                <a href="https://www.facebook.com/portnature" target="_blank" target="_blank">
                    <img class="specialSvg" src="{{ asset('assets/frontend/images/instagramwhite.svg') }}"
                        alt="instagram">
                    Hoş Geldiniz</a>
                <p>Bizi Takip Edin</p>
            </div>
            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-5.webp') }}"
                alt="aboveFooter5" />
            <img class="mobileV lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-6.webp') }}"
                alt="aboveFooter6" />
            <img class="mobileV lazyload" data-src="{{ asset('assets/frontend/images/home/instagram-7.webp') }}"
                alt="aboveFooter7" />
        </div>

        <div class="phoneImage">
            <img class="lazyload" data-src="{{ asset('assets/frontend/images/home/inst-tr.webp') }}" alt="phone" />
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
