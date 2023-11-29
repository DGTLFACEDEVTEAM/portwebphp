@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Privater Strand - Port Nature Luxury Resort Hotel Spa')
@section('description', 'The Private Beach at Port Nature Luxury Resort. Best all inclusive family hotel for kids in Belek Antalya. Call now for child friendly holiday booking offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-beach') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-beach') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-beach') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('en-beach') }}">EN</a></li>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
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
                    <p>Der schöne Privatstrand <br> wo Entspannung auf Luxus trifft.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>


        </div>
    </div>
</div>

    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/sunbed.svg') }}" alt="kidsConcept"/>
            <p>SONNENLIEGE</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/gazebo.svg') }}" alt="kidsConcept"/>
            <p>PAVILON</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/jetski.svg') }}" alt="kidsConcept"/>
            <p>WASSERSPORT</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/volleyball.svg') }}" alt="kidsConcept"/>
            <p>STRANDSPIELE</p>
        </div>
    </div>

    <div class="restaurantText">
        <h1>STRAND</h1>
        <p>Willkommen in unserem Luxusparadies! Betreten Sie den unberührten privaten Sandstrand, wo Sonne und Meer zu einem aufregenden Abenteuer werden. Machen Sie es sich auf unseren hochwertigen Sonnenliegen bequem und lassen Sie sich von den Sonnenstrahlen und dem Rauschen der Wellen alle Sorgen wegspülen. Buchen Sie im Voraus einen Pavillon für die ultimative VIP-Behandlung und tauchen Sie ein in den erstklassigen Service und genießen Sie jeden Moment Ihres Sonnen- und Meererlebnisses in Ihrem Urlaub.</p>
    </div>
    <div class="gradient">

    </div>


        <div class="wrapperElement">
            <img class="wrapperImgBeach" src="{{ asset('assets/frontend/images/beach/jetski.webp') }}" alt="">
            <div class="featuresText">
                <span>Entfesseln Sie Ihren inneren Abenteurer</span>
                <div class="featureGrad"></div>
                <p>Für Adrenalinfans! Tauchen Sie ein in eine aufregende Welt auf dem Wasser mit unseren aufregenden Wassersportarten, bei denen das Adrenalin bei aufregenden Jet-Ski-Fahrten, Parasailing über die Schwerkraft hinaus und zahlreichen anderen aufregenden Aktivitäten frei fließt. Erleben Sie grenzenlose Freude, Spaß und Erinnerungen, während Sie sich auf einen außergewöhnlichen Urlaub wie keinen anderen einlassen.</p>
            </div> 
        </div>
        <div class="space"></div>



{{-- Contact --}}
@include('frontend.de.layouts.contact')
{{-- Contact End --}}

<div class="childrenActivitySlider">
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 Rutschen  ·  Wasser und Spaß</span>
                    </figure>
                </a>
                <h5>Aquapark</h5>
                <p>Der Aquapark von Port Nature hat nur Spaß. Es gibt Wassersportarten, riesige Wasserrutschen und 4 Pools.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Kinder A'la Carte  · Essen für Kinder</span>
                    </figure>
                    <h5>Mini Club</h5>
                    <p>Ihr Kind wählt das Essen mit unserem Kinder-exklusiven Menü selbst aus.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/><span>Unterhaltsame Arcade-Spiele · Spiel für alle</span>
                    </figure>
                    <h5>SPIELMASCHINEN</h5>
                    <p>Spielautomaten bieten eine wunderbare Form der Unterhaltung für jedermann.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}">
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