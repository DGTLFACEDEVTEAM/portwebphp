@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Mini Club - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Mini Club Port Nature Luxury Resort. Best all inclusive family hotel for kids in Belek Antalya. Call now for child friendly holiday booking offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-mini-club') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('mini-club') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-mini-club') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-mini-club') }}">RU</a></li>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
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
                    <p>Hier haben die Kleinen Spaß <br> und lernen gleichzeitig.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
        </div>
    </div>
</div>

    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/console.svg') }}" alt="kidsConcept"/>
            <p>SPIELE</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/paint.svg') }}" alt="kidsConcept"/>
            <p>MALEN</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/sports.svg') }}" alt="kidsConcept"/>
            <p>SPORTLICHE AKTIVITÄTEN</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/cooking.svg') }}" alt="kidsConcept"/>
            <p>KOCHEN</p>
        </div>
    </div>

    <div class="restaurantText">
        <h1>MINI CLUB</h1>
        <p>Treten Sie ein in unseren außergewöhnlichen Kids Club, in dem aufregende Schatzsuchen, sportliche Aktivitäten, kulinarische Abenteuer und inspirierende Malsessions auf Ihre Kleinen warten! Wir garantieren ein unvergessliches Urlaubserlebnis voller Spannung, Spaß und Lernen. Unsere talentierten Lehrer werden sie auf eine Reise der Selbstentdeckung führen, und zauberhafte Themenpartys halten das Wunder am Leben. Entfesseln Sie ihre Kreativität und beobachten Sie, wie sie Erinnerungen schaffen, die sie ein Leben lang begleiten werden. Kommen Sie jetzt zu uns und erleben Sie eine adrenalingeladene Eskapade, die Ihre Kinder nach mehr verlangen lässt!</p>
    </div>
    <div class="gradient">

    </div>


        <div class="wrapperElement">
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/treasure.webp') }}" alt="">
            <div class="featuresText">
                <span>SCHATZSUCHE</span>
                <div class="featureGrad"></div>
                <p>Um den inneren Abenteurer in Ihrem Kind zu wecken, haben wir ein spannendes Schatzsuche-Spiel entwickelt. Diese aufregende Aktivität fördert die Kommunikation, das Lösen von Problemen und das Finden von Hinweisen und sorgt für ein unvergessliches Erlebnis!</p>
            </div> 
        </div>
        <div class="wrapperElement">
            <div class="featuresText">
                <span>PORT OLYMPIAD</span>
                <div class="featureGrad"></div>
                <p>Mit einer Mischung aus Einzel- und Mannschaftssportaktivitäten wollen wir Ihrem Kind eine gesunde und unterhaltsame Erfahrung bieten. Bei Port Sports Games bemühen wir uns, Ihre Kinder zu unterhalten und sie mit lustigen Veranstaltungen zu beschäftigen, die das körperliche Wohlbefinden und den Sinn für Teamarbeit fördern.</p>
            </div> 
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/olympiad.webp') }}" alt="">
        </div>
        <div class="wrapperElement">
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/chef.webp') }}" alt="">
            <div class="featuresText">
                <span>KINDERKOCH</span>
                <div class="featureGrad"></div>
                <p>Damit Ihre Kinder das Konzept von Rezepten, einschließlich des Sammelns von Zutaten und des Kochens, verstehen, bemühen wir uns, lustige und köstliche Erfahrungen für sie zu schaffen. Unser Ziel ist es, den Lernprozess so angenehm wie möglich zu gestalten, während sie sich auf kulinarische Abenteuer begeben und die Welt der Aromen und der kulinarischen Kreativität erforschen.</p>
            </div> 
        </div>
        <div class="wrapperElement">
            <div class="featuresText">
                <span>KUNSTKLASSE</span>
                <div class="featureGrad"></div>
                <p>Um die inneren Künstler in unseren kleinen Gästen zu fördern, bieten wir ansprechende Malkurse an. Diese Kurse sollen die Kreativität anregen und den Kindern eine Umgebung bieten, in der sie ihre künstlerischen Talente entdecken können. Mit unseren Malkursen wollen wir die Liebe zur Kunst und zum Selbstausdruck fördern und sie zu einer unvergesslichen und bereichernden Erfahrung für jedes Kind machen.</p>
            </div> 
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/art.webp') }}" alt="">
        </div>
        <a class="topbutton" href="#"><img src="{{ asset('assets/frontend/images/mini-club/Arrow.svg') }}" alt=""></a>


{{-- Contact --}}
@include('frontend.de.layouts.contact')
{{-- Contact End --}}

<div class="childrenActivitySlider">
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 Rutschen  ·  Wasser und Spaß</span>
                    </figure>
                </a>
                <h5>Aquapark</h5>
                <p>Der Aquapark von Port Nature hat nur Spaß. Es gibt Wassersportarten, riesige Wasserrutschen und 4 Pools.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Kinder A'la Carte  · Essen für Kinder</span>
                    </figure>
                    <h5>Mini Club</h5>
                    <p>Ihr Kind wählt das Essen mit unserem Kinder-exklusiven Menü selbst aus.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/><span>Unterhaltsame Arcade-Spiele · Spiel für alle</span>
                    </figure>
                    <h5>SPIELMASCHINEN</h5>
                    <p>Spielautomaten bieten eine wunderbare Form der Unterhaltung für jedermann.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="activities"/><span>Babysitter  ·  Pflege für Kind</span>
                    </figure>
                    <h5>BABYSITTERSERVICE</h5>
                    <p>Babysitterdienste bieten einen sicheren und kontrollierten Bereich für den inneren Frieden der Eltern.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="activities"/><span>Kinder lieben es.  ·  Sicher und spannend</span>
                    </figure>
                    <h5>SPRUNGBAHN</h5>
                    <p>Alle Materialien sind weich und sicher. Ihr Kind wird durch unsere Bahn nicht beschädigt.</p>
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