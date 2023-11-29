@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Özel Plaj - Port Nature Luxury Resort Hotel Spa')
@section('description', 'The Private Beach at Port Nature Luxury Resort. Best all inclusive family hotel for kids in Belek Antalya. Call now for child friendly holiday booking offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-beach') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('en-beach') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-beach') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-beach') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="kidsGallery">
    <div class="miniclubSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/1.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/1.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/2.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/3.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/4.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/5.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/5.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/6.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/6.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/7.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/7.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/8.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/8.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/9.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/9.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/10.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/10.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/beach/11.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/beach/11.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Huzurun lüks ile buluştuğu <br> özel plaj.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>


        </div>
    </div>
</div>

    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/sunbed.svg') }}" alt="kidsConcept"/>
            <p>Şezlong</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/gazebo.svg') }}" alt="kidsConcept"/>
            <p>Pavilyon</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/jetski.svg') }}" alt="kidsConcept"/>
            <p>Su Sporları</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/volleyball.svg') }}" alt="kidsConcept"/>
            <p>Plaj Oyunları</p>
        </div>
    </div>

    <div class="restaurantText">
        <h1>Sahil</h1>
        <p>Lüks cennetimize hoş geldiniz! Güneşle denizin heyecan verici bir maceraya dönüştüğü bozulmamış özel kum plaja adım atın. Yüksek kaliteli şezlonglarımızda rahatınıza bakın, Güneş ışınları ve dalga seslerinin tüm endişelerinizi gidermesine izin verin. En üst düzey VIP muamelesi için bir pavilyona ön rezervasyon yaptırın ve kendinizi birinci sınıf hizmete bırakın, tatilinizde güneş ve deniz deneyiminizin her anının tadını çıkarın.</p>
    </div>
    <div class="gradient">

    </div>


        <div class="wrapperElement">
            <img class="wrapperImgBeach" src="{{ asset('assets/frontend/images/beach/jetski.webp') }}" alt="">
            <div class="featuresText">
                <span>İçinizdeki Maceraperesti Serbest Bırakın</span>
                <div class="featureGrad"></div>
                <p>Adrenalin tutkunları için! Heyecan verici jet ski gezintileri, yer çekimine meydan okuyan deniz paraşütü ve çok sayıda diğer heyecan verici aktiviteyle adrenalinin özgürce aktığı heyecan verici su sporlarımızla suda heyecan dolu bir dünyaya dalın. Benzeri olmayan olağanüstü bir tatile balıklama dalarken sizi bekleyen sınırsız neşe, eğlence ve anılar biriktirin.</p>
            </div> 
        </div>
        <div class="space"></div>



{{-- Contact --}}
@include('frontend.tr.layouts.contact')
{{-- Contact End --}}

<div class="childrenActivitySlider">
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 Kaydırak  ·  Su ve Eğlence</span>
                    </figure>
                </a>
                <h5>Su Parkı</h5>
                <p>Port Nature aquaparkı su sporları, devasa kaydıraklar ve 4 havuzu ile sadece eğlence içerir. </p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Çocuk A'la Carte  · Çocuk İçin Yemekler</span>
                    </figure>
                    <h5>MINI CLUB</h5>
                    <p>Çocuğunuz, çocuklara özel hazırlanmış menülerden kendi yiyeceklerini seçebilir.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/><span>Eğlence Makineleri · Herkes İçin Oyun</span>
                    </figure>
                    <h5>OYUN MAKİNELERİ</h5>
                    <p>Oyun makineleri herkes için harika bir eğlence şekli sunuyor.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="activities"/><span>Bebek Bakıcısı  ·  Bebek Bakıcısı</span>
                    </figure>
                    <h5>BEBEK BAKIM HİZMETİ</h5>
                    <p>Bebek bakıcılığı hizmetleri, ebeveynlerin iç huzuru için güvenli ve kontrollü bir alan sağlar.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="activities"/><span>Çocuklar her zaman sever  ·  Güven ve heyecan</span>
                    </figure>
                    <h5>ATLAMA PİSTİ</h5>
                    <p>Tüm malzemeler yumuşak ve güvenlidir. Çocuğunuz parkurumuzda zarar görmez.</p>
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

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script src="{{ asset('assets/frontend/js/mini-club.js') }}"></script>
<script type='text/javascript'>
    $(document).ready(function () {
        const $obj = lc_lightbox('.lc-children a');
    });
</script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/mini-club.css') }}"/>
@endsection