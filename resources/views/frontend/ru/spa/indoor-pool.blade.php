@extends('layouts.main', ['lang' => 'ru'])

@section('title', 'Крытый бассейн - Port Nature Luxury Resort')
@section('description', 'Крытый бассейн Port Nature. Отели Белека со скидками при раннем бронировании. Ознакомьтесь со специальными ценами в 5-звездочном отеле в Кадрие')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-indoor-pool') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('indoor-pool') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-indoor-pool') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-indoor-pool') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

<div class="indoorPoolSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/indoorpool.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/indoorpool/indoorpool.webp') }}" alt="IndoorPool"/>
                </figure>
            </a>
        </div>
        <div class="swiper-slide">
            <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/indoorpool2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/indoorpool/indoorpool2.webp') }}" alt="IndoorPool"/>
                </figure>
            </a>
        </div>
        <div class="swiper-slide">
            <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/indoorpool3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/indoorpool/indoorpool3.webp') }}" alt="IndoorPool"/>
                </figure>
            </a>
        </div>
        <div class="swiper-slide">
            <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/indoorpool4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/indoorpool/indoorpool4.webp') }}" alt="IndoorPool"/>
                </figure>
            </a>
        </div>
        <div class="swiper-slide">
            <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/indoorpool5.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/indoorpool/indoorpool5.webp') }}" alt="IndoorPool"/>
                </figure>
            </a>
        </div>
    </div>
</div>

<div class="indoorPoolHeaderText">
    <h1>Крытый Бассейн</h1>
    <div class="poolLine"></div>{{-- ***** CLASS CHANGED ********--}}
    <div class="headerTextGroup">
        <div class="hour">
            <img class="indoorSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
            <span>09:00 - 19:00</span>
        </div>
        <p>Насладитесь непревзойденным расслаблением и изысканностью в роскошном крытом бассейне с искрящейся водой, элегантным декором и безмятежной атмосферой.</p>
    </div>
</div>

{{-- Gallery --}}
<div class="gallery">
    <div class="swiper gallerySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/pool.webp') }}">
                        <img src="{{ asset('assets/frontend/images/indoorpool/pool.webp') }}" alt="indoorPool"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/pool2.webp') }}">
                        <img src="{{ asset('assets/frontend/images/indoorpool/pool2.webp') }}" alt="indoorPool"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/pool3.webp') }}">
                        <img src="{{ asset('assets/frontend/images/indoorpool/pool3.webp') }}" alt="indoorPool"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightboxInsidePool" href="{{ asset('assets/frontend/images/indoorpool/pool4.webp') }}">
                        <img src="{{ asset('assets/frontend/images/indoorpool/pool4.webp') }}" alt="indoorPool"/>
                    </a>
                </figure>
            </div>
        </div>
        <div class="swiper-button-next">
            <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 26L14 13.5L1 1" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</div>
{{-- Contact --}}
@include('frontend.ru.layouts.contact')
{{-- Contact End --}}
{{-- Special Offer --}}
<div class="otherActivities">
    <h6>Другие спа-услуги</h6>
    <div class="swiper otherActivitiesSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-spa') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/spa/SkinBodycare.webp') }}" alt="SkinBodyCare"/>
                    </figure>
                    <h5>Уход за кожей и телом</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-spa') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/spa/Aromatherapy.webp') }}" alt="AROMATHERAPY"/>
                    </figure>
                    <h5>Ароматерапия</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-spa') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/spa/Turkishbath.webp') }}" alt="TurkishBath"/>
                    </figure>
                    <h5>Турецкая баня</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-spa') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/spa/BalineseMassage.webp') }}" alt="BalineseMassage"/>
                    </figure>
                    <h5>Балийский массаж</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-spa') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/spa/SwedishMassage.webp') }}" alt="SwedishMassage"/>
                    </figure>
                    <h5>Шведский массаж</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-spa') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/spa/MixedMassage.webp') }}" alt="MixedMassage"/>
                    </figure>
                    <h5>Смешанный массаж</h5>
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
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script src="{{ asset('assets/frontend/js/indoorPool.js') }}"></script>
<script type='text/javascript'>
    $(document).ready(function() {
        const $obj = lc_lightbox('.lightboxInsidePool');
    });
</script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/indoorPool.css') }}"/>
@endsection