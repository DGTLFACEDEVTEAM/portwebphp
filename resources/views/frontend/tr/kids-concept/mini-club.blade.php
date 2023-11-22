@extends('frontend.tr.layouts.master')

@section('title', 'Mini Club - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Mini Club Port Nature Luxury Resort. Best all inclusive family hotel for kids in Belek Antalya. Call now for child friendly holiday booking offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-mini-club') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('mini-club') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-mini-club') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-mini-club') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="kidsGallery">
    <div class="miniclubSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/1.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/1.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/2.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/3.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/4.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/5.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/5.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/6.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/6.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/7.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/7.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/8.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/8.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/9.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/9.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/10.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/10.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/11.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/11.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Küçüklerin aynı anda hem eğlendiği <br> hem de öğrendiği yer.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
        </div>
    </div>
</div>

    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/console.svg') }}" alt="kidsConcept"/>
            <p>OYUNLAR</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/paint.svg') }}" alt="kidsConcept"/>
            <p>RESIM</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/sports.svg') }}" alt="kidsConcept"/>
            <p>SPOR AKTIVITELERI</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/cooking.svg') }}" alt="kidsConcept"/>
            <p>AŞÇILIK</p>
        </div>
    </div>

    <div class="restaurantText">
        <h1>MINI CLUB</h1>
        <p>Heyecan verici hazine avlarının, çeşitli sporların, mutfak maceralarının ve ilham verici resim seanslarının miniklerinizi beklediği olağanüstü Çocuk Kulübümüze adım atın! Heyecan, eğlence ve öğrenme dolu unutulmaz bir tatil deneyimini garanti ediyoruz. Yetenekli eğitmenlerimiz onlara kendilerini keşfetme yolculuğunda rehberlik edecek ve büyülü temalı partiler mucizeyi canlı tutacak. Yaratıcılıklarını ortaya çıkarın ve ömür boyu sürecek değerli anılar yaratmalarını izleyin. Çocuklarınızın daha fazlasını istemesini sağlayacak adrenalin dolu bir kaçış için şimdi bize katılın!</p>
    </div>
    <div class="gradient">

    </div>


        <div class="wrapperElement">
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/treasure.webp') }}" alt="">
            <div class="featuresText">
                <span>HAZİNE AVI</span>
                <div class="featureGrad"></div>
                <p>Çocuğunuzun içindeki maceraperesti uyandırmak için heyecan verici bir hazine avı oyunu hazırladık. Bu heyecan verici etkinlik, iletişim, problem çözme ve ipucu bulma becerilerini geliştirerek unutulmaz bir deneyim yaşatmayı amaçlıyor!</p>
            </div> 
        </div>
        <div class="wrapperElement">
            <div class="featuresText">
                <span>PORT OLYMPIAD</span>
                <div class="featureGrad"></div>
                <p>Bireysel ve takım sporları etkinliklerinin bir karışımıyla amacımız çocuğunuza hem sağlıklı hem de keyifli bir deneyim sunmaktır. Port Sports Games'te, çocuklarınızı eğlendirmek ve fiziksel refahı teşvik eden ve takım çalışması duygusunu geliştiren eğlence dolu etkinliklerle eğlendirmek için çalışıyoruz.</p>
            </div> 
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/olympiad.webp') }}" alt="">
        </div>
        <div class="wrapperElement">
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/chef.webp') }}" alt="">
            <div class="featuresText">
                <span>AŞÇILIK</span>
                <div class="featureGrad"></div>
                <p>Çocuklarınızın malzeme toplamak ve yemek pişirmek de dahil olmak üzere yemek tarifleri kavramını anlamalarına yardımcı olmak için onlara eğlenceli ve lezzetli deneyimler yaratmaya çalışıyoruz. Amacımız, onlar mutfak maceralarına atılırken, lezzet dünyasını ve mutfak yaratıcılığını keşfederken öğrenme sürecini keyifli hale getirmektir.</p>
            </div> 
        </div>
        <div class="wrapperElement">
            <div class="featuresText">
                <span>SANAT DERSLERİ</span>
                <div class="featureGrad"></div>
                <p>Küçük misafirlerimizin içindeki sanatçıları beslemek için ilgi çekici resim dersleri sunuyoruz. Bu dersler, yaratıcılığa ilham vermek ve çocukların sanatsal yeteneklerini keşfetmeleri için besleyici bir ortam sağlamak üzere tasarlanmıştır. Resim derslerimiz aracılığıyla, sanat ve kendini ifade etme sevgisini geliştirmeyi ve bunu her çocuk için unutulmaz ve zenginleştirici bir deneyim haline getirmeyi amaçlıyoruz.</p>
            </div> 
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/art.webp') }}" alt="">
        </div>
        <a class="topbutton" href="#"><img src="{{ asset('assets/frontend/images/mini-club/Arrow.svg') }}" alt=""></a>


<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->

<div class="childrenActivitySlider">
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 Kaydırak  ·  Su ve Eğlence</span>
                    </figure>
                </a>
                <h5>Su Parkı</h5>
                <p>Port Nature aquaparkı su sporları, devasa kaydıraklar ve 4 havuzu ile sadece eğlence içerir. </p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Çocuk A'la Carte  · Çocuk İçin Yemekler</span>
                    </figure>
                    <h5>MINI CLUB</h5>
                    <p>Çocuğunuz, çocuklara özel hazırlanmış menülerden kendi yiyeceklerini seçebilir.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
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