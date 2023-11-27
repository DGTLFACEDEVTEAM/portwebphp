@extends('frontend.en.layouts.master') @section('title', 'Official Website- Port Nature Luxury Resort Hotel') @section('description',
'Port
Nature Luxury Resort Hotel & Spa. Visit our Official Website. Best luxury all inclusive familiy friendly hotel in
Belek.')
@section('header-lang')
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('homepage') }}"
            aria-expanded="false">EN</a>
        <ul class="dropdown-menu dropdownmobile language">
            <li>
                <a class="dropdown-item" href="{{ route('tr-homepage') }}">TR</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('ru-homepage') }}">RU</a>
            </li>
            <li>
                <a class="dropdown-item first-item" href="{{ route('de-homepage') }}">DE</a>
            </li>
        </ul>
    </div> @endsection @section('content')
    <!-- Swiper Start -->
    @include('components.heroSwiper', ['lang' => 'en'])
    <!-- Swiper Finish -->

    <!-- Rezervation Section -->
    <!-- Booking Section -->

    @include('frontend.en.layouts.booking')

    <!-- Booking Section End -->
    <!-- Rezervation Section End -->

    <!-- Home Icons -->
    {{-- <div class="homeIcons">
        <div class="homeIconContainer">
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/homelocation.svg') }}"
                        alt="location">
                    <span>BELEK &#8226; ANTALYA</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/aquapark.svg') }}"
                        alt="aquapark" />
                    <span>AQUAPARK</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/concerts.svg') }}"
                        alt="concerts">
                    <span>CONCERTS</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/beach.svg') }}"
                        alt="beach">
                    <span>SANDY BEACH</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img loading="lazy" alt="icon" src="{{ asset('assets/frontend/images/home/entertainment.svg') }}"
                        alt="entertainment" />
                    <span>ENTERTAINMENT</span>
                </div>
            </div>
        </div>
        <!-- Home Icons End -->
        <div class="thinLine"></div>
    </div> --}}

    @include('components.homeIcons', ['lang' => 'en'])
    <!-- Home Icons End -->
    <!-- Inclusive Area Text -->
    @include('components.inclusiveSwiper', ['lang' => 'en'])
    <!-- Inclusive Area Text End -->

    <!-- Concerts -->
    {{-- <div class="concertsWrapper">
        <h2 class="concertsHeader">Concerts</h2>
        <div class="swiper homeConcertSlider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <figure>

                    </figure>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
                <img alt="icon" class="specialSvg lazyload" loading="lazy"
                    src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper" />
            </div>
            <div class="swiper-button-next">
                <img alt="icon" class="specialSvg lazyload" loading="lazy"
                    src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper" />
            </div>
        </div>
    </div> --}}

    <!-- Concerts End -->
    <!-- Accommdation -->

    {{-- @include('components.accommdationSwiper') with paramater --}}
    @include('components.accommdationSwiper', ['lang' => 'en'])
    <!-- Accomdation End -->
    <!-- Children Menu -->
    <div class="children">
        <div class="childrenContainer">
            <div class="row">
                <div class="col-md-12">
                    <h2>CHILDREN</h2>
                </div>
            </div>
            <div class="subChildren">
                <div class="childrenIcons">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/childrencam.svg') }}" alt="children" />
                    <span class="subChildrenText">You can watch what your child is doing on TV in your rooms</span>
                </div>
                <div class="childrenIcons">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/childrenage.svg') }}" alt="children" />
                    <span class="subChildrenText">Activities for children of any age</span>
                </div>
                <div class="childrenIcons">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/childrenbabysit.svg') }}"
                        alt="children" />
                    <span class="subChildrenText">Your child chooses their desired food from our child exclusive
                        menu</span>
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
                                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-1.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-1-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-1.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-3.webp') }}">
                                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-3.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-3-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-3.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-4.webp') }}">
                                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-4.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-4-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-4.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-5.webp') }}">
                                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-5.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-5-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-5.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-6.webp') }}">
                                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-6.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-6-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-6.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-7.webp') }}">
                                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-7.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-7-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-7.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-10.webp') }}">
                                    <img loading="lazy"
                                        src="{{ asset('assets/frontend/images/home/kids/kids-10.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-10-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-10.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-11.webp') }}">
                                    <img loading="lazy"
                                        src="{{ asset('assets/frontend/images/home/kids/kids-11.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-11-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-11.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-12.webp') }}">
                                    <img loading="lazy"
                                        src="{{ asset('assets/frontend/images/home/kids/kids-12.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-12-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-12.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="lightbox-childrenSliderLink"
                                    href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-13.webp') }}">
                                    <img loading="lazy"
                                        src="{{ asset('assets/frontend/images/home/kids/kids-13.webp') }}"
                                        data-srcset="{{ asset('assets/frontend/images/home/kids/kids-13-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-13.webp') }} 1920w"
                                        sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                        alt="childrenslider" />
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev inclusive-prev">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}"
                                alt="swiperleft" />
                        </div>
                        <div class="swiper-button-next inclusive-next">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}"
                                alt="swiperright" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moreButton">
            <a href="{{ route('kids-concepts') }}">More About</a>
        </div>
    </div>
    <!-- Children Menu End -->
    <!-- Banner -->
    <div class="homeBanner">
        <img alt="Home Banner" loading="lazy" src="{{ asset('assets/frontend/images/home/homeBanner.webp') }}" />
        <h3>We created an unbelievable beach experience with <br> Belek’s unique natural beauty for adults and children.
        </h3>
        <div class="moreButton">
            <a href="{{ route('activity') }}">More About</a>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Contact -->
    {{-- @include('frontend.en.layouts.contact') --}}
    @include('components.contactSection', ['lang' => 'en'])

    <!-- Contact End -->
    <!-- Gastronomy Start -->
    <div class="homeGastronomy">
        <div class="homeGastronomyWrapper">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>
                        <img loading="lazy" src="{{ asset('assets/frontend/images/home/7.svg') }}" alt="seven"> Of
                        Our Premium A'La
                        Carte Restaurants
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>The best cuisines of different countries!</h6>
                </div>
            </div>
            <div class="gastroIconsWrapper">
                <!-- Slides -->
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload" laoding="lazy"
                        src="{{ asset('assets/frontend/images/home/quality.svg') }}" alt="quality">
                    <div class="gastroText">
                        <span>Top Quality</span>
                        <p class="gastroP">Carefully selected ingredients for gourmet cuisine.</p>
                    </div>
                </div>
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload" laoding="lazy"
                        src="{{ asset('assets/frontend/images/home/drink.svg') }}" alt="drinks">
                    <div class="gastroText">
                        <span>Unlimited</span>
                        <p class="gastroP">You will feel the luxury with 148 kinds of blue-ribbon drinks. </p>
                    </div>
                </div>
                <div class="gastroIcons">
                    <img style="width: unset" class="lazyload" laoding="lazy"
                        src="{{ asset('assets/frontend/images/home/free.svg') }}" alt="free">
                    <div class="gastroText">
                        <span>FREE within working hours</span>
                        <p class="gastroP">You enter at your convenience</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gastroSlideBg">
            <img loading="lazy" src="{{ asset('assets/frontend/images/home/gastroSlider-bg.webp') }}" alt="gastrobg" />
        </div>
        <div class="gastronomySlider">
            <div class="swiper gastronomySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/gastroSlider-1.webp') }}"
                                    alt="FAR EAST A'LA CARTE" />
                            </figure>
                            <article>
                                <span>FAR EAST A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock" />
                                        At any working time
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant"> Booking is not required
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('fareast') }}">More About</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/gastroSlider-2.webp') }}"
                                    alt="alldaydiningrestaurant" />
                            </figure>
                            <article>
                                <span>ALL DAY DINING A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock" />
                                        At any working time
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant"> Booking is not required
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('alldaydinning') }}">More About</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/gastroSlider-4.webp') }}"
                                    alt="frenchrest" />
                            </figure>
                            <article>
                                <span>FRENCH A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock" />
                                        At any working time
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant"> Booking is not required
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('french') }}">More About</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/gastroSlider-5.webp') }}"
                                    alt="seasiderestaurant" />
                            </figure>
                            <article>
                                <span>SEASIDE A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock" />
                                        At any working time
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant"> Booking is not required
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('seaside') }}">More About</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/gastroSlider-6.webp') }}"
                                    alt="italianrest" />
                            </figure>
                            <article>
                                <span>ITALIAN A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock" />
                                        At any working time
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant"> Booking is not required
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('italian') }}">More About</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/gastroSlider-8.webp') }}"
                                    alt="miniclubrest" />
                            </figure>
                            <article>
                                <span>MINI CLUB A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock" />
                                        At any working time
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant"> Booking is not required
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('mini-club-alacarte') }}">More About</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gastroSlide">
                            <figure>
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/gastroSlider-9.webp') }}"
                                    alt="sushibar" />
                            </figure>
                            <article>
                                <span>SUSHI BAR A'LA CARTE</span>
                                <div class="gastroTextSec">
                                    <p>
                                        <img class="gastroIconSmall gastroIcon1 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock" />
                                        At any working time
                                    </p>
                                    <p>
                                        <img class="gastroIconSmall gastroIcon2 lazyload" laoding="lazy"
                                            src="{{ asset('assets/frontend/images/home/booking.svg') }}"
                                            alt="bookingresturant"> Booking is not required
                                    </p>
                                </div>
                                <div class="homeGastroMoreButton">
                                    <a href="{{ route('sushi-bar') }}">More About</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}"
                        alt="swiperleft" />
                </div>
                <div class="swiper-button-next">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}"
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
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/brands/hennesy.webp') }}"
                        alt="brand" />
                </div>
                <div class="swiper-slide">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/brands/davidoff.webp') }}"
                        alt="brand" />
                </div>
                <div class="swiper-slide">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/brands/nespresso.webp') }}"
                        alt="brand" />
                </div>
                <div class="swiper-slide">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/brands/chivas.webp') }}"
                        alt="brand" />
                </div>
                <div class="swiper-slide">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/home/brands/kitkat.webp') }}"
                        alt="brand" />
                </div>
            </div>
        </div>
    </div>
    <!-- Drink Brand End -->
    <!-- Special Offer -->
    <div class="homeSpecialOffer">
        <h2>Special Offers</h2>
        <div class="swiper specialOfferSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <figure>
                        <img loading="lazy" src="{{ asset('assets/frontend/images/home/specialOfferSlider-1.webp') }}"
                            alt="vip" />
                    </figure>
                    <div class="backgroundLines">
                        <img class="radialBgImg lazyload" data-src="{{ asset('assets/frontend/images/radialBg.svg') }}"
                            alt="radialBg">
                    </div>
                    <article>
                        <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/home/vip.svg') }}"
                            alt="vip">
                        <p>Become a VIP customer</p>
                        <span>VIP privilege on your holiday</span>
                    </article>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img loading="lazy" src="{{ asset('assets/frontend/images/home/specialOfferSlider-2.webp') }}"
                            alt="mixology" />
                    </figure>
                    <div class="backgroundLines">
                        <img class="radialBgImg lazyload" data-src="{{ asset('assets/frontend/images/radialBg.svg') }}"
                            alt="radialBg">
                    </div>
                    <article>
                        <img class="specialSvg lazyload" laoding="lazy"
                            src="{{ asset('assets/frontend/images/home/mixology.svg') }}" alt="mixology">
                        <p>Mixology Expert</p>
                        <span>Alchemy with spirits</span>
                    </article>
                </div>
                <div class="swiper-slide">
                    <figure>
                        <img loading="lazy" src="{{ asset('assets/frontend/images/home/specialOfferSlider-3.webp') }}"
                            alt="wedding" />
                    </figure>
                    <div class="backgroundLines">
                        <img class="radialBgImg lazyload" laoding="lazy"
                            src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                    <article>
                        <img class="specialSvg lazyload" laoding="lazy"
                            src="{{ asset('assets/frontend/images/home/wedding.svg') }}" alt="wedding" />
                        <p>Wedding gift</p>
                        <span>Spend time together</span>
                    </article>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
                <img class="specialSvg lazyload" laoding="lazy"
                    src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper" />
            </div>
            <div class="swiper-button-next">
                <img class="specialSvg lazyload" laoding="lazy"
                    src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper" />
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
                                <img loading="lazy"
                                    src="{{ asset('assets/frontend/images/home/serviceSlider-bg-1.webp') }}"
                                    alt="service1" />
                            </div>
                            <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img loading="lazy"
                                            src="{{ asset('assets/frontend/images/home/serviceSlider-1.webp') }}"
                                            alt="service1" />
                                    </div>
                                    <div class=" serviceText">
                                        <span>Premium Bar & Lounge</span>
                                        <p>Premium service feels premium. Port Nature Luxury Resort Hotel & Spa is always
                                            here for this feeling.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('bar-cafe') }}">More About</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="serviceBackground">
                                <img loading="lazy"
                                    src="{{ asset('assets/frontend/images/home/serviceSlider-bg-2.webp') }}"
                                    alt="service2" />
                            </div>
                            <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img loading="lazy"
                                            src="{{ asset('assets/frontend/images/home/serviceSlider-2.webp') }}"
                                            alt="service2" />
                                    </div>
                                    <div class=" serviceText">
                                        <span>Magic Spa</span>
                                        <p>Get spoiled on a blissful escape at our luxurious spa with skilled therapists.
                                        </p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('spa') }}">More About</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="serviceBackground">
                                <img loading="lazy"
                                    src="{{ asset('assets/frontend/images/home/serviceSlider-bg-3.webp') }}"
                                    alt="service3" />
                            </div>
                            <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img loading="lazy"
                                            src="{{ asset('assets/frontend/images/home/serviceSlider-3.webp') }}"
                                            alt="service3" />
                                    </div>
                                    <div class=" serviceText">
                                        <span>Meetings and Congress</span>
                                        <p>We are not only fun but also appeal to the business person.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('meeting-congress') }}">More About</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="serviceBackground">
                                <img loading="lazy"
                                    src="{{ asset('assets/frontend/images/home/serviceSlider-bg-4.webp') }}"
                                    alt="cafe" />
                            </div>
                            <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img loading="lazy"
                                            src="{{ asset('assets/frontend/images/home/serviceSlider-4.webp') }}"
                                            alt="Cafe" />
                                    </div>
                                    <div class=" serviceText">
                                        <span>Davidoff Cafe</span>
                                        <p class='davidoffLine'>No reservation required. Discover precious coffee varieties
                                            worth discovering.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('davidoff-cafe') }}">More About</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination services-swiper-pagination"></div>
                <div class="swiper-button-previous">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/swiperwhite-left.svg') }}"
                        alt="swiper" />
                </div>
                <div class="swiper-button-nextSlide">
                    <img loading="lazy" src="{{ asset('assets/frontend/images/swiperwhite-right.svg') }}"
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
                            <img class="tripadvisorlogo-img " laoding="lazy"
                                src="{{ asset('assets/frontend/images/home/tripadvisor-rating.svg') }}"
                                alt="travel" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="ratinglink"
                            href="https://www.google.com/travel/search?q=portnature%20google&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4308227%2C4429192%2C4515404%2C4597339%2C4731329%2C4757164%2C4778035%2C4814050%2C4861688%2C4864715%2C4874190%2C4886082%2C4886480%2C4893075%2C4902277%2C4906023%2C4920132%2C4924069%2C4926165%2C4926489%2C4936396%2C4949692%2C4949695%2C4953372%2C4958830%2C4961149%2C4965726%2C4965990%2C4966233&hl=tr-TR&gl=tr&cs=1&ssta=1&ts=CAESABpJCikSJzIlMHgxNGMzOTAwNDJkYmZmMmRkOjB4OWE1ZDkwNzU0MWYxZGI3MhIcEhQKBwjnDxADGAgSBwjnDxADGAkYATIECAAQAA&qs=CAEyJ0Noa0k4cmJIajlTTzVLNmFBUm9NTDJjdk1XcHRZM0Z0ZUdKakVBRTgCQgsJctvxQXWQXZoYAUILCXLb8UF1kF2aGAE&ap=ugEIb3ZlcnZpZXc&ictx=1&sa=X"
                            target="_blank">
                            <img class="googlelogo-img " laoding="lazy"
                                src="{{ asset('assets/frontend/images/home/google-rating.svg') }}" alt="travel" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="ratinglink"
                            href="https://www.booking.com/hotel/tr/port-nature-luxury-resort-amp-spa.html"
                            target="_blank">
                            <img class="bookinglogo-img " laoding="lazy"
                                src="{{ asset('assets/frontend/images/home/booking-rating.svg') }}" alt="travel" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="ratinglink"
                            href="https://www.holidaycheck.de/hi/port-nature-luxury-resort-spa/6a10924b-2286-3a46-b5db-ad9802b8d226"
                            target="_blank">
                            <img class="holidaychecklogo-img " laoding="lazy"
                                src="{{ asset('assets/frontend/images/home/holidaycheck-rating.svg') }}"
                                alt="travel" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact --> @include('frontend.en.layouts.contact')
    <!-- Contact End -->
    <!-- Above Footer -->
    <div class="homeAboveFooter">
        <div class="aboveImg">
            <img class="mobileV lazyload" laoding="lazy"
                src="{{ asset('assets/frontend/images/home/instagram-1.webp') }}" alt="aboveFooter1" />
            <img class="mobileV lazyload" laoding="lazy"
                src="{{ asset('assets/frontend/images/home/instagram-2.webp') }}" alt="aboveFooter2" />
            <img loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-3.webp') }}" alt="abovefooter3" />
            <div class="aboveInsta">
                <img loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-4.webp') }}"
                    alt="aboveFooter4" style="position:relative;" />
                <a href="https://www.facebook.com/portnature" target="_blank">
                    <img class="specialSvg" src="{{ asset('assets/frontend/images/instagramwhite.svg') }}"
                        alt="instagram"> Welcome </a>
                <p>Follow Us</p>
            </div>
            <img loading="lazy" src="{{ asset('assets/frontend/images/home/instagram-5.webp') }}" alt="aboveFooter5" />
            <img class="mobileV lazyload" laoding="lazy"
                src="{{ asset('assets/frontend/images/home/instagram-6.webp') }}" alt="aboveFooter6" />
            <img class="mobileV lazyload" laoding="lazy"
                src="{{ asset('assets/frontend/images/home/instagram-7.webp') }}" alt="aboveFooter7" />
        </div>
        <div class="phoneImage">
            <img loading="lazy" src="{{ asset('assets/frontend/images/home/inst-en.webp') }}" alt="phone" />
        </div>
    </div>
    <!-- Above Footer End --> @endsection @section('javascript-imports')
    <script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script> @endsection @section('css-imports')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/frontend/css/booking-section.css') }}" /> @endsection
