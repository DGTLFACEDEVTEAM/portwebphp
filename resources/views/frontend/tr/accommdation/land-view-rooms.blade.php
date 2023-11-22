@extends('frontend.tr.layouts.master')

@section('title', 'Standart Kara Manzaralı Oda - Port Nature Hotel')
@section('description', 'Standart Kara Manzaralı Oda Port Nature. 10 en iyi 5 yıldızlı Antalya balayı oteli. Port Nature Luxury Resort ayrıcalıklarının tadını çıkarın')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-landview-rooms') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('landview-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-landview-rooms') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-landview-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="roomDetail">
        <div class="gardenViewRoomHero roomDetailHero">
<img class="room-hero-image" src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-cover.webp') }}" alt="Garden view room hero image"/>

        <h1>STANDART ODA · KARA MANZARALI</h1>
    </div>

    <div class="roomDetailText">
        <div class="container">
            <span>Doğanın güzelliğine ve huzuruna kapılmak isteyenler için hazırlandı.<br> Kara manzaralı odalarımızın keyfine varın.</span>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecs">
            <div class="roomSpecsInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                <p>3 YETİŞKİN + 2 Çocuk / 3 YETİŞKİN</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                <p>1 Teklİ yatak</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                <p>1 ÇİFT KİŞİLİK yatak</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                <p>34 m²</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                <p>Kara Manzaralı</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecsTablet">
            <div class="detailSpecLine">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                    <p>3 YETİŞKİN + 2 Çocuk / 3 YETİŞKİN</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                    <p>1 Teklİ yatak</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                    <p>1 ÇİFT KİŞİLİK yatak</p>
                </div>
            </div>
            <div class="detailSpecLineSecond">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                    <p>34 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                    <p>Kara Manzaralı</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomPhotos lc-land">
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-1.webp') }}">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-1.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-2.webp') }}">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-2.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-3.webp') }}">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-3.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-4.webp') }}">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-4.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-5.webp') }}">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-5.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <article>
                        <h6>Lüks deneyim</h6>
                        <p>Lüks aksesuarlar, akıllı tasarım ve akla gelebilecek her türlü konfor, bu odalardan ayrılmayı zorlaştırıyor. Düşünceli dokunuşlar her yerde. Şık, kaliteli yüzeyler bol miktarda alan sunar.</p>
                        <span>Lüks hizmetle eğlenin</span>
                    </article>
                </div>
            </div>
        </div>
    </div>
     <div class="room-features-left" data-bs-toggle="modal" data-bs-target="#detailsImgModal">
         <div class="features-see-more " data-bs-toggle="modal" data-bs-target="#detailsImgModal">
                       <img class="zoom-svg" src="{{ asset('assets/frontend/images/standardRooms/plus.svg') }}">

           <p class="features-open-details">2 Yetişkin + 2 Çocuk / 3 Yetişkin  ·  1 Tekli Yatak  ·  1 Çift Kişilik Yatak<br>34 m²  · Kara Manzaralı</p>
         </div>
         <div id="detailsImgModal" class="modal fade" role="dialog">
           <div class="modal-dialog" id="features-modal-dialog">
             <div class="modal-content " id="features-modal-content">
               <div class="modal-body" id="features-modal-body">
                 <button data-bs-dismiss="modal" class="features-modal-close close">&times;</button>
                 <p class="features-modal-title">Standart Oda - Kara Manzaralı</p>
                 <div class="modal-hr"></div>
                 <img class="features-modal-details-img modal-desktop-img" src="{{ asset('assets/frontend/images/standardRooms/standard-room-desk.webp') }}">
                 <img class="features-modal-details-img modal-mobile-img" src="{{ asset('assets/frontend/images/standardRooms/standard-room-mob.webp') }}">
               </div>
             </div>
           </div>
         </div>
         <img class="room-img" src="{{ asset('assets/frontend/images/standardRooms/standard-room-main3d.webp') }}">
       </div>
</div>

<!-- Features -->
<div class="roomFeatures">
    <div class="roomFeaturesWrapper">
        <h6>Özellikler</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                <p>Balkon / Teras</p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/shower.svg') }}"/>
                <p>
                    Ayrı Duş & WC
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/airconditioner.svg') }}"/>
                <p>
                    Ayrılmış Klima Sistemi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/coffeset.svg') }}"/>
                <p>
                    Sıcak İçecek Seti<br> (çay & kahve)
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/digitalsafe.svg') }}"/>
                <p>
                    Dijital Kasa
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/tv.svg') }}"/>
                <p>
                    Led TV
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/towel.svg') }}"/>
                <p>
                    Havlu
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/dialphone.svg') }}"/>
                <p>
                    Doğrudan Erişimli Telefon
                </p>
            </div>
        </div>
        <div class="collapseSpecsWrapper collapse" id="collapseRoomSpecs">
            <div class=" featureGrid collapsableFeatureGrid" >
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/broadcast.svg') }}"/>
                <p>
                    Uydu Yayını
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/minibar.svg') }}"/>
                <p>
                    Minibar
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/chair.svg') }}"/>
                <p>
                    Masa & Sandalye
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/mirror.svg') }}"/>
                <p>
                    Makyaj Aynası
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/wifi.svg') }}"/>
                <p>
                    Ücretsiz Wi-Fi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/flooring.svg') }}"/>
                <p>
                    Parke Zemin
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/dryer.svg') }}"/>
                <p>
                    Saç Kurutma Makinesi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/slippers.svg') }}"/>
                <p>
                    Terlikler
                </p>
            </div>
        </div></div>
       
        <a class="moreButton showAllFeature" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseRoomSpecs">Hepsini Göster</a>

    </div>
</div>
<!-- Features End -->
<!-- 360 View -->
<div class="room360">
    <p>360° Tur</p>
    <iframe width="100%" height="500" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/7Jqpd?logo=-1&info=0&fs=1&vr=0&zoom=1&sd=1&thumbs=3"></iframe>
</div>
<!-- 360 View End -->
<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Other Rooms -->
<div class="otherRoomsWrapper">
    <div class="otherRooms">
        <div class="row">
            <div class="col-12 col-md-12">
                <article>
                    <h3>Diğer Oda Seçeneklerimiz</h3>
                    <span>İhtiyaçlarınıza yönelik Port Nature odalarını bulabilirsiniz.</span>
                </article>
            </div>
        </div>
        <div class="roomsDetailBg">
            <div class="rooms-detail-wrapper">
                <div class="other-room-wrapper">
                    <div class="otherRoomImage firstRoom">
                        <a class="roomlink" href="{{ route('tr-kingsuit-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}" alt="kingSuite"/>
                            </figure>
                            <h4>King SÜİT</h4>
                            <span>5 Yetişkin + 1  ·  110 m²  ·  Deniz Manzaralı</span>
                            <p>Mucize deniz görüntüsü ve lüks sizi büyüleyecek.</p>
                            <div class="moreButton">
                                <a href="{{ route('tr-kingsuit-rooms') }}">Daha Fazlası</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="other-room-wrapper" id="otherRoomSecond">
                    <div class="otherRoomImage">
                        <a class="roomlink" href="{{ route('tr-family-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}" alt="familyRoom"/>
                            </figure>
                            <h4>AİLE ODASI</h4>
                            <span>4 Yetişkin + 1  ·  45 m²  ·  Yandan Manzaralı</span>
                            <p>Siz odanızda dinlenirken çocuklarınız kendilerine özel alan bulabilecekler.</p>
                            <div class="moreButton">
                                <a href="{{ route('tr-family-rooms') }}">Daha Fazlası</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Other Rooms End -->

<div class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script type='text/javascript'>
    $(document).ready(function() {
        const $obj = lc_lightbox('.lc-land a');
    });
  </script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection