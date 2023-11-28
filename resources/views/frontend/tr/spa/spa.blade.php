@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Spa Merkezi - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Spa Merkezi Port Nature Luxury Resort. Antalya nın en iyi lüks spa oteli. Antalya premium otelde ücretsiz sauna ve hamamın keyfini çıkarın.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-spa') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('spa') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-spa') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-spa') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="spaHero">
    <div class="heroImage">
        <figure>
            <img src="{{ asset('assets/frontend/images/spa/Spa.webp') }}" alt="spa&wellness"/>
        </figure>
    </div>
    <article>
        <img class="spaSvg" src="{{ asset('assets/frontend/images/spa/spaicon.svg') }}" alt="spa"/>
        <h1>SPA</h1>
        <a class="video-watch-button restPlayButtonDesktop" type="button"  data-bs-toggle="modal" data-bs-target=".spaModalDesktop">
            <img src="{{ asset('assets/frontend/images/spa/youtube.svg') }}">
            <p> Şimdi İzleyin</p>
        </a>
    </article>
</div>
<div class="spaHeaderText">
    <div class="hours">
        <img class="spaSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
        <span>09:00 - 19:00</span>
    </div>
    <p>SPA’larımız, rahatlama, stresi azaltma ve iyileşme sağlama yetenekleri açısından etkileyicidir, bedene ve zihne fayda sağlar. Masajdan hidroterapiye, hidroterapiden aromaterapiye konuklarımıza geniş bir hizmet yelpazesi sunmak için lüks ve sükun bir atmosfer tasarladık.</p>
</div>

<!-- First Slider -->
<div class="spaFirstSlider">
    <div class="swiper spaFirstSwiperSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Turkishbath.webp') }}" alt="TurkishBath"/>
                </figure>
                <h5>TÜRK HAMAMI</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Steamroom.webp') }}" alt="Steamroom"/>
                </figure>
                <h5>BUHAR ODASI</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Sauna.webp') }}" alt="Sauna"/>
                </figure>
                <h5>Sauna</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Saltroom.webp') }}" alt="SaltRoom"/>
                </figure>
                <h5>TUZ ODASI</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Aromatherapy.webp') }}" alt="Aromatherapy"/>
                </figure>
                <h5>AROMATERAPİ</h5>
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
<!-- First Slider End -->
<!-- Second Slider -->
<div class="spaSecondSlider">

            <div class="swiper spaSecondSwiperSlider" dir="rtl">
                <div class="swiper-wrapper second-slider-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/SkinBodycare.webp') }}" alt="skin&bodycare"/>
                        </figure>
                        <h5>BEDEN ve CİLT BAKIMI</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MedicalMassage.webp') }}" alt="MedicalMassage"/>
                        </figure>
                        <h5>MEDİKAL MASAJ</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/SwedishMassage.webp') }}" alt="SwedishMassage"/>
                        </figure>
                        <h5>İSVEÇ MASAJI</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/BalineseMassage.webp') }}" alt="BALINESE MASSAGE"/>
                        </figure>
                        <h5>BALİ MASAJI</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MixedMassage.webp') }}" alt="MixedMassage"/>
                        </figure>
                        <h5>KARMA MASAJ</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MedicalMassage.webp') }}" alt="relaxmassage"/>
                        </figure>
                        <h5>RAHATLATICI MASAJ</h5>
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
<!-- Second Slider End -->
<div class="indoorPool">
    <a class="roomlink" href="{{ route('tr-indoor-pool') }}">
        <figure>
            <img src="{{ asset('assets/frontend/images/spa/IndoorPool.webp') }}" alt="IndoorPool"/>
        </figure>
        <article>
            <h3>Kapalı Havuz</h3>
            <div class="spaMoreButton">
                <a href="{{ route('tr-indoor-pool') }}">Daha Fazlası</a>
            </div>
        </article>
    </a>
</div>
<!-- IndoorPool End -->
<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

 <div class="modal fade spaModal spaModalDesktop" tabindex="-1" aria-labelledby="spaModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/oc2oepxKtS4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
</div>
@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/spa.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/spa.css') }}"/>
@endsection