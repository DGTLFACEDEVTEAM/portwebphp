@extends('layouts.main', ['lang' => 'en'])

@section('title', 'King Suite Room -Port Nature Luxury Resort Hotel Spa Hotel')
@section('description', 'King Suite Room Port Nature Hotel. Best luxury sea view suites for family and honeymoon in all inclusive Belek hotel. Click for prices of suite rooms.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('kingsuit-rooms') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-kingsuit-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kingsuit-rooms') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-kingsuit-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

    <div class="roomDetail">
            <div class="kingSuiteDetailHero roomDetailHero">
<img class="room-hero-image" src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-slider.webp') }}" alt="King suite room hero image"/>

            <h1>King Suite Room</h1>
        </div>

        <div class="roomDetailText">
            <div class="container">
                <span>Miracle sea view, and luxurious, large rooms will mesmerize you. Large balcony, 3 separate rooms, modern and high-quality design.</span>
            </div>
        </div>
        <div class="container">
            <div class="roomDetailSpecs">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}"
                         alt="adult"/>
                    <p>5 Adults + 1 Child</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}"
                         alt="singlebed"/>
                    <p>2 single beds</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}"
                         alt="doublebed"/>
                    <p>1 double bed</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}"
                         alt="meter"/>
                    <p>110 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}"
                         alt="view"/>
                    <p>Sea View</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="roomDetailSpecsTablet">
                <div class="detailSpecLine">
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}"
                             alt="adult"/>
                        <p>5 Adults + 1</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}"
                             alt="singlebed"/>
                        <p>2 single beds</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}"
                             alt="doublebed"/>
                        <p>1 double bed</p>
                    </div>
                </div>
                <div class="detailSpecLineSecond">
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}"
                             alt="meter"/>
                        <p>110 m²</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}"
                             alt="view"/>
                        <p>Sea View</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="roomPhotos lc-king">
                <div class="row">
                  <div class="col-12 col-md-6 p-4">
                      <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-1.webp') }}">
                          <img class="lazyload" data-src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-1.webp') }}" alt="kingsuite-1"/>
                      </a>
                  </div>
                  <div class="col-12 col-md-6 p-4">
                      <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-2.webp') }}">
                          <img class="lazyload" data-src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-2.webp') }}" alt="kingsuite-2"/>
                      </a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 col-md-6 p-4">
                      <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-3.webp') }}">
                          <img class="lazyload" data-src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-3.webp') }}" alt="kingsuite-3"/>
                      </a>
                  </div>
                  <div class="col-12 col-md-6 p-4">
                      <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-4.webp') }}">
                          <img class="lazyload" data-src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-4.webp') }}" alt="kingsuite-4"/>
                      </a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 col-md-6 p-4">
                      <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-5.webp') }}">
                          <img class="lazyload" data-src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-5.webp') }}" alt="kingsuite-5"/>
                      </a>
                  </div>
                    <div class="col-12 col-md-6 p-3">
                        <article>
                            <h6>Luxurious and Comfort Like A King</h6>
                            <p>The Port Nature, these elegant, three-bedroom suites are among the most spacious suites
                                in the hotel. Each suite overlooks the sea. There are marble foyers and generous space
                                separate sitting room and a large bedroom with a large balcony</p>
                            <span>Enjoy your holiday</span>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="room-features-left" data-bs-toggle="modal" data-bs-target="#detailsImgModal">
         <div class="features-see-more " data-bs-toggle="modal" data-bs-target="#detailsImgModal">
                       <img class="zoom-svg" src="{{ asset('assets/frontend/images/kingSuite/plus.svg') }}">

           <p class="features-open-details">5 Adults + 1 child ·  2 Single Beds  ·  1 Double Bed<br>110 m²  ·  Sea View</p>
         </div>
         <div id="detailsImgModal" class="modal fade" role="dialog">
           <div class="modal-dialog" id="features-modal-dialog">
             <div class="modal-content " id="features-modal-content">
               <div class="modal-body" id="features-modal-body">
                 <button data-bs-dismiss="modal" class="features-modal-close close">&times;</button>
                 <p class="features-modal-title">King Suite Room</p>
                 <div class="modal-hr"></div>
                 <img class="features-modal-details-img modal-desktop-img" src="{{ asset('assets/frontend/images/kingSuite/king-suit-room-desk.webp') }}">
                 <img class="features-modal-details-img modal-mobile-img" src="{{ asset('assets/frontend/images/kingSuite/king-suit-room-mob.webp') }}">
               </div>
             </div>
           </div>
         </div>
         <img class="room-img" src="{{ asset('assets/frontend/images/kingSuite/king-suit-main3d.webp') }}">
       </div>
    </div>

{{-- Features --}}
<div class="roomFeatures">
    <div class="roomFeaturesWrapper">
        <h6>Features</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                <p>Balcony / Terrace</p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/shower.svg') }}"/>
                <p>
                    Separate Shower & WC
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/airconditioner.svg') }}"/>
                <p>
                    Split-System Air Conditioner
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/coffeset.svg') }}"/>
                <p>
                    Hot Drink Set-Up 
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/digitalsafe.svg') }}"/>
                <p>
                    Digital Safe
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
                    Towel
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/dialphone.svg') }}"/>
                <p>
                    Direct Dial Phone
                </p>
            </div>
        </div>
        <div class="collapseSpecsWrapper collapse" id="collapseRoomSpecs">
          <div class=" featureGrid collapsableFeatureGrid" >
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/broadcast.svg') }}"/>
                <p>
                    Satellite Broadcasting
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
                    Table and Chair
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/mirror.svg') }}"/>
                <p>
                    Make-up Mirror
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/wifi.svg') }}"/>
                <p>
                    Free Wi-Fi Internet
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/flooring.svg') }}"/>
                <p>
                    Antibacterial Parquet Flooring
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/dryer.svg') }}"/>
                <p>
                    Hair Dryer
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/slippers.svg') }}"/>
                <p>
                    Slippers
                </p>
            </div>
        </div></div>
    
        <a class="moreButton showAllFeature" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseRoomSpecs">Show More</a>

    </div>
</div>
{{-- Features End --}}
    {{-- 360 View --}}
    <div class="room360">
        <p>360° Tour</p>
        <iframe width="100%" height="500" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/7JqfK?logo=-1&info=0&fs=1&vr=0&zoom=1&sd=1&thumbs=3"></iframe>
    </div>
    {{-- 360 View End --}}
    {{-- Contact --}}
    @include('frontend.en.layouts.contact')
    {{-- Contact End --}}
    {{-- Other Rooms --}}
<div class="otherRoomsWrapper">
        <div class="otherRooms">
            <div class="row">
                <div class="col-12 col-md-12">
                    <article>
                        <h3>Other Rooms Options</h3>
                        <span>You can see your Port Nature room choice with our target-specific room option.</span>
                    </article>
                </div>
            </div>
            <div class="roomsDetailBg">
                <div class="rooms-detail-wrapper">
                    <div class="other-room-wrapper">
                        <div class="otherRoomImage firstRoom">
                            <a class="roomlink" href="{{ route('family-rooms') }}">
                                <figure>
                                    <img src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}"
                                         alt="familyroom"/>
                                </figure>
                                <h4>Family Room</h4>
                                <span>4 Adults + 1 ·  45 m²  ·  Side View</span>
                                <p>Your children will find their own private space while you relax in the next room.</p>
                                <div class="moreButton">
                                    <a href="{{ route('family-rooms') }}">More About</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="other-room-wrapper" id="otherRoomSecond">
                        <div class="otherRoomImage">
                            <a class="roomlink" href="{{ route('standard-rooms') }}">
                                <figure>
                                    <img src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}"
                                         alt="standardRoom"/>
                                </figure>
                                <h4>Standard Room</h4>
                                <span>2 Adults + 2 Children  ·  34 m²  ·  Sea / Side / Land</span>
                                <p>Many of the luxurious features provide you with unforgettable holiday.</p>
                                <div class="moreButton">
                                    <a href="{{ route('standard-rooms') }}">More About</a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Other Rooms End --}}
    <div class="pageUpButton">
        <a href="#">
            <img style="margin-bottom: 30px" class="accommdationSvg"
                 src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
        </a>
    </div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script type='text/javascript'>
      $(document).ready(function() {
        const $obj = lc_lightbox('.lc-king a');
      });
  </script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection