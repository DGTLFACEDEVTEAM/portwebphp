@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Family Room -Port Nature Luxury Resort Hotel Spa Hotel')
@section('description', 'Family Room Port Nature Luxury Resort. Comfortable family rooms at Port Nature Luxury Resort. Check out our family rooms in the luxury Belek Hotel.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('family-rooms') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-family-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-family-rooms') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-family-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="roomDetail">
    <div class="familyRoomDetailHero roomDetailHero">
<img class="room-hero-image" src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-slider.jpg') }}" alt="Family room hero image"/>
        <h1>FAMILY ROOM</h1>
    </div>

    <div class="roomDetailText">
        <div class="container">
            <span>Experience a luxurious and warm family holiday at our hotel. With our Family concept, your child can have their own private space while you relax in the comfort of your room.</span>
        </div>
    </div>
    <div class="container">
      <div class="roomDetailSpecs">
          <div class="roomSpecsInfo">
              <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
              <p>4 Adults + 1 Child</p>
          </div>
          <div class="roomSpecsInfo">
              <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
              <p>1 single bed + Bunk Bed</p>
          </div>
          <div class="roomSpecsInfo">
              <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
              <p>1 double bed</p>
          </div>
          <div class="roomSpecsInfo">
              <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
              <p>45 m²</p>
          </div>
          <div class="roomSpecsInfo">
              <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
              <p>SIDE SEA VIEW</p>
          </div>
      </div>
  </div>
    <div class="container">
        <div class="roomDetailSpecsTablet">
            <div class="detailSpecLine">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                    <p>4 Adults + 1 Child</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                    <p>1 SINGLE BED + BUNK BED</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                    <p>1 double bed</p>
                </div>
            </div>
            <div class="detailSpecLineSecond">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                    <p>45 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                    <p>SIDE SEA VIEW</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomPhotos" id="lcl_elems_wrapper" title="Family Rooms">
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-1.jpg') }}">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-1.jpg') }}" alt="familyroom1"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-2.jpg') }}">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-2.jpg') }}" alt="familyroom2"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-3.jpg') }}">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-3.jpg') }}" alt="familyroom3"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-4.jpg') }}">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-4.jpg') }}" alt="familyroom4"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-5.jpg') }}">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-5.jpg') }}" alt="familyroom5"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <article>
                        <h6>Comfort for the whole family</h6>
                        <p>Spacious and with distinctive features, Luxury Family Rooms decorated in 21st century standards. Experience breathtaking views of the Mediterranean from the luxurious main bedroom.</p>
                        <span>Enjoy your family holiday</span>
                    </article>
                </div>
            </div>
        </div>
    </div>

</div>
 {{-- <div class="room-features-left" data-bs-toggle="modal" data-bs-target="#detailsImgModal">
         <div class="features-see-more " data-bs-toggle="modal" data-bs-target="#detailsImgModal">
                       <img class="zoom-svg" src="{{ asset('assets/frontend/images/familyroom/plus.svg') }}">

           <p class="features-open-details">4 Adults + 1  ·  1 double bed  ·  2 single beds<br>45 m²  ·  Corner Sea View</p>
         </div>
         <div id="detailsImgModal" class="modal fade" role="dialog">
           <div class="modal-dialog" id="features-modal-dialog">
             <div class="modal-content " id="features-modal-content">
               <div class="modal-body" id="features-modal-body">
                 <button data-bs-dismiss="modal" class="features-modal-close close">&times;</button>
                 <p class="features-modal-title">Family Room</p>
                 <div class="modal-hr"></div>
                 <img class="features-modal-details-img modal-desktop-img" src="{{ asset('assets/frontend/images/familyroom/family-room-desk.webp') }}">
                 <img class="features-modal-details-img modal-mobile-img" src="{{ asset('assets/frontend/images/familyroom/family-room-mob.webp') }}">
               </div>
             </div>
           </div>
         </div>
         <img class="room-img" src="{{ asset('assets/frontend/images/familyroom/family-room-main3d.webp') }}">
       </div> --}}
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
{{-- <div class="room360">
    <p>360° Tour</p>
    <iframe width="100%" height="500" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/7JkrL?logo=-1&info=0&fs=1&vr=0&zoom=1&sd=1&thumbs=3"></iframe>
</div> --}}
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
                        <a class="roomlink" href="{{ route('kingsuit-rooms') }}">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}" alt="kingSuite"/>
                        </figure>
                        <h4>King Suite</h4>
                        <span>5 Adults +1  ·  110 m²  ·  Sea View</span>
                        <p>Miracle sea view, and luxurious, large rooms will mesmerize you.</p>
                        <div class="moreButton">
                            <a href="{{ route('kingsuit-rooms') }}">More About</a>
                        </div></a>
                    </div>
                </div>
                <div class="other-room-wrapper" id="otherRoomSecond">
                    <div class="otherRoomImage">
                        <a class="roomlink" href="{{ route('standard-rooms') }}">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}" alt="standardRoom"/>
                        </figure>
                        <h4>Standard Room</h4>
                        <span>2 Adults + 2 Children  ·  34 m²  ·  Corner / Sea / Garden</span>
                        <p>Many of the luxurious features provide you with unforgettable holiday.</p>
                        <div class="moreButton">
                            <a href="{{ route('standard-rooms') }}">More About</a>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Page Up Button --}}
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')

<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script type='text/javascript'>
      $(document).ready(function() {
          const $obj = lc_lightbox('#lcl_elems_wrapper a');
      });
</script>

@endsection

@section('css-imports')

<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>

@endsection
