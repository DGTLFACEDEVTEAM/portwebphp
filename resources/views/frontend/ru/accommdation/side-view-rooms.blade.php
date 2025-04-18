@extends('layouts.main', ['lang' => 'ru'])

@section('title', 'Номер Стандарт с боковым видом - Port Nature')
@section('description', 'Забронировать номер Стандарт с боковым видом Port Nature. Лучшие отели 5 звезд в Анталии. Отели все включено для отдыха с детьми в Белек')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-sideview-rooms') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('sideview-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-sideview-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-sideview-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

<div class="roomDetail">
          <div class="cornerSeaViewRoomHero roomDetailHero">
<img class="room-hero-image" src="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-cover.webp') }}" alt="Corner sea view room hero image"/>

          <h1>Номер Стандарт · Боковой вид</h1>
      </div>
  
      <div class="roomDetailText">
          <div class="container">
              <span>Море и природа ждут вашего пробуждения, создав умиротворяющую<br> и омолаживающую атмосферу для отдыха в Port Nature.</span>
          </div>
      </div>
      <div class="container">
          <div class="roomDetailSpecs">
              <div class="roomSpecsInfo">
                  <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                  <p>2 Взрослых + 2 Ребенка / 3 Взрослых</p>
              </div>
              <div class="roomSpecsInfo">
                  <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                  <p>1 односп. кровать</p>
              </div>
              <div class="roomSpecsInfo">
                  <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                  <p>1 двусп. кровать</p>
              </div>
              <div class="roomSpecsInfo">
                  <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                  <p>34 m²</p>
              </div>
              <div class="roomSpecsInfo">
                  <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                  <p>Боковой вид</p>
              </div>
          </div>
          <div class="container">
              <div class="roomDetailSpecsTablet">
                  <div class="detailSpecLine">
                      <div class="roomSpecsInfo">
                          <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                          <p>2 Взрослых + 2 Ребенка / 3 Взрослых</p>
                      </div>
                      <div class="roomSpecsInfo">
                          <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                          <p>1 односп. кровать</p>
                      </div>
                      <div class="roomSpecsInfo">
                          <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                          <p>1 двусп. кровать</p>
                      </div>
                  </div>
                  <div class="detailSpecLineSecond">
                      <div class="roomSpecsInfo">
                          <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                          <p>34 m²</p>
                      </div>
                      <div class="roomSpecsInfo">
                          <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                          <p>Боковой вид</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="roomPhotos lc-side">
                <div class="row">
                    <div class="col-12 col-md-6 p-3">
                        <a href="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-1.webp') }}">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-1.webp') }}"
                                 alt="cornerseaview"/>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 p-3">
                        <a href="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-2.webp') }}">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-2.webp') }}"
                                 alt="cornerseaview"/>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 p-3">
                        <a href="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-3.webp') }}">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-3.webp') }}"
                                 alt="cornerseaview"/>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 p-3">
                        <a href="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-4.webp') }}">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-4.webp') }}"
                                 alt="cornerseaview"/>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 p-3">
                        <a href="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-5.webp') }}">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-5.webp') }}"
                                 alt="cornerseaview"/>
                        </a>
                    </div>
                      <div class="col-12 col-md-6 p-3">
                          <article>
                              <h6>За роскошными услугами</h6>
                              <p>В широких окнах вашей комнаты переплетаются зеленые и голубые оттенки. Самое спокойное
                                  утро ждет вас в этом номере.</p>
                              <span>Успокаювающие ноты природы</span>
                          </article>
                      </div>
                  </div>
              </div>
          </div>
           <div class="room-features-left" data-bs-toggle="modal" data-bs-target="#detailsImgModal">
         <div class="features-see-more " data-bs-toggle="modal" data-bs-target="#detailsImgModal">
                       <img class="zoom-svg" src="{{ asset('assets/frontend/images/standardRooms/plus.svg') }}">

           <p class="features-open-details">2 Взрослых + 2 Ребенок / 3 Взрослых  ·  1 односп. кровати  ·  1 двусп. кровать<br>34 m²  ·  Боковой вид</p>
         </div>
         <div id="detailsImgModal" class="modal fade" role="dialog">
           <div class="modal-dialog" id="features-modal-dialog">
             <div class="modal-content " id="features-modal-content">
               <div class="modal-body" id="features-modal-body">
                 <button data-bs-dismiss="modal" class="features-modal-close close">&times;</button>
                 <p class="features-modal-title">Номер Стандарт - Боковой вид</p>
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
     
  {{-- Features --}}
  <div class="roomFeatures">
    <div class="roomFeaturesWrapper">
        <h6>Особенности</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                <p>Балкон / Терраса</p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/shower.svg') }}"/>
                <p>
                    Отдельный душ & туалет
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/airconditioner.svg') }}"/>
                <p>
                    Кондиционер сплит-системы
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/coffeset.svg') }}"/>
                <p>
                    Набор для чая и кофе
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/digitalsafe.svg') }}"/>
                <p>
                    Цифровой сейф
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
                    Полотенце
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/dialphone.svg') }}"/>
                <p>
                    Прямая линия
                </p>
            </div>
        </div>
        <div class="collapseSpecsWrapper collapse" id="collapseRoomSpecs">
          <div class=" featureGrid collapsableFeatureGrid" >
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/broadcast.svg') }}"/>
                <p>
                    Спутниковое вещание
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/minibar.svg') }}"/>
                <p>
                    Мини-бар
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/chair.svg') }}"/>
                <p>
                    Стол & Стулья
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/mirror.svg') }}"/>
                <p>
                    Зеркало для макияжа
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/wifi.svg') }}"/>
                <p>
                    Бесплатный Wi-fi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/flooring.svg') }}"/>
                <p>
                    Паркетный пол
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/dryer.svg') }}"/>
                <p>
                    Фен
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg lazyload" data-src="{{ asset('assets/frontend/images/accommdation/slippers.svg') }}"/>
                <p>
                    Тапочки
                </p>
            </div>
        </div></div>
   
      
        <a class="moreButton showAllFeature" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseRoomSpecs"> Показать все</a>

    </div>
</div>
{{-- Features End --}}
      {{-- 360 View --}}
      <div class="room360">
        <p>360° Rundgang</p>
        <iframe width="100%" height="500" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/7Jqpd?logo=-1&info=0&fs=1&vr=0&zoom=1&sd=1&thumbs=3"></iframe>
    </div>
      {{-- 360 View End --}}
      {{-- Contact --}}
      @include('frontend.ru.layouts.contact')
      {{-- Contact End --}}
      {{-- Other Rooms --}}
      <div class="container">
          <div class="otherRooms">
              <div class="row">
                  <div class="col-12 col-md-12">
                      <article>
                          <h3>Другие виды номеров</h3>
                          <span>Ознакомьтесь в другими номерами, которые Port Nature предлагает специально для вас.</span>
                      </article>
                  </div>
              </div>
              <div class="roomsDetailBg">
                  <div class="row">
                      <div class="other-room-wrapper">
                          <div class="otherRoomImage firstRoom">
                              <a class="roomlink" href="{{ route('ru-kingsuit-rooms') }}">
                                  <figure>
                                      <img src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}" alt="kingSuite"/>
                                  </figure>
                                  <h4>King Suite</h4>
                                  <span>5 Взрослых + 1  ·  110 m²  ·  Вид На Море</span>
                                  <p>Роскошные, большие номера с чудесным видом на море.</p>
                                  <div class="moreButton">
                                      <a href="{{ route('ru-kingsuit-rooms') }}">More About</a>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="other-room-wrapper" id="otherRoomSecond">
                          <div class="otherRoomImage">
                              <a class="roomlink" href="{{ route('ru-family-rooms') }}">
                                  <figure>
                                      <img src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}" alt="familyRoom"/>
                                  </figure>
                                  <h4>Семейный</h4>
                                  <span>4 Взрослых + 1  ·  45 m²  ·  Угловой Вид На Море</span>
                                  <p>Две комнаты для личного пространства детей и родителей.</p>
                                  <div class="moreButton">
                                      <a href="{{ route('ru-family-rooms') }}">Подробнее</a>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      {{-- Other Rooms End --}}

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script type='text/javascript'>
    $(document).ready(function() {
        const $obj = lc_lightbox('.lc-side a');
    });
  </script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection