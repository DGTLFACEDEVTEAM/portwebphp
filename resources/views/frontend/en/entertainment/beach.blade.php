@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Private Beach - Port Nature Luxury Resort Hotel Spa')
@section('description', 'The Private Beach at Port Nature Luxury Resort. Best all inclusive family hotel for kids in Belek Antalya. Call now for child friendly holiday booking offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('en-beach') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-beach') }}">TR</a></li>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
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
                    <p>The beautiful private beach <br> where relaxation meets luxury.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>


        </div>
    </div>
</div>

    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/sunbed.svg') }}" alt="kidsConcept"/>
            <p>Sunbed</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/gazebo.svg') }}" alt="kidsConcept"/>
            <p>Pavilion</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/jetski.svg') }}" alt="kidsConcept"/>
            <p>Water Sports</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/volleyball.svg') }}" alt="kidsConcept"/>
            <p>Beach Games</p>
        </div>
    </div>

    <div class="restaurantText">
        <h1>Beach</h1>
        <p>Welcome to our luxurious paradise! Step onto the pristine private sandy beach, where the sun-kissed experience becomes a thrilling adventure. Get comfortable on our high-quality sunbeds, soaking up the golden rays and letting all worries drift away. For the ultimate VIP treatment, pre-book a pavilion and immerse yourself in premium service, savoring every moment of your sun-drenched escape.</p>
    </div>
    <div class="gradient">

    </div>


        <div class="wrapperElement">
            <img class="wrapperImgBeach" src="{{ asset('assets/frontend/images/beach/jetski.webp') }}" alt="">
            <div class="featuresText">
                <span>Unleash Your Inner Adventurer</span>
                <div class="featureGrad"></div>
                <p>Thrill-seekers, rejoice! Dive into a world of aquatic excitement with our thrilling water sports, where adrenaline flows freely with thrilling jet ski rides, gravity-defying parasailing, and a plethora of other exhilarating activities. Embrace the boundless joy, fun, and memories awaiting you as you dive headfirst into an extraordinary vacation like no other.</p>
            </div> 
        </div>
        <div class="space"></div>



{{-- Contact --}}
@include('frontend.en.layouts.contact')
{{-- Contact End --}}

<div class="childrenActivitySlider">
    <p>Special Offers</p>
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/>
                        <span>18 slides  ·  Water and Fun</span>
                    </figure>
                </a>
                <h5>Aquapark</h5>
                <p>Port Nature’s aquapark has only fun. There are water sports, giant water slides, and 4 pools.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/>
                        <span>Child A'la Carte  · Food for Child</span>
                    </figure>
                    <h5>Mini Club</h5>
                    <p>Your children can choose their desired food for themselves with our child-exclusive menu.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/>
                        <span>Fun arcade machines · Games for Everyone</span>
                    </figure>
                    <h5>Games for Everyone</h5>
                    <p>Game machines offer a wonderful form of entertainment for everyone. </p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="activities"/>
                        <span>Babbysitters  ·  Care for Child</span>
                    </figure>
                    <h5>BabySitting Service</h5>
                    <p>Babysitting services provide a safe and controlled area for parents' inner peace.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="activities"/>
                        <span>Children always like  ·  Safety and excitement</span>
                    </figure>
                    <h5>Jumping Track</h5>
                    <p>All materials are soft and safe. Your child will not be damaged by our track.</p>
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