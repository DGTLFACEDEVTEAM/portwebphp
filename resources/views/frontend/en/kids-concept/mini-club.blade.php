@extends('layouts.main', ['lang' => 'en'])
@section('title', 'Mini Club - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Mini Club Port Nature Luxury Resort. Best all inclusive family hotel for kids in Belek Antalya. Book now for child friendly holiday booking offers.')
@section('header-lang')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('mini-club') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-mini-club') }}">TR</a></li>
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
                        <img src="{{ asset('assets/frontend/images/mini-club/1.webp') }}" loading="lazy" alt="Mini Club Photo 1"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/2.webp') }}" loading="lazy" alt="Mini Club Photo 2"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/3.webp') }}" loading="lazy" alt="Mini Club Photo 3"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/4.webp') }}" loading="lazy" alt="Mini Club Photo 4"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/5.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/5.webp') }}" loading="lazy" alt="Mini Club Photo 5"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/6.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/6.webp') }}" loading="lazy" alt="Mini Club Photo 6"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/7.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/7.webp') }}" loading="lazy" alt="Mini Club Photo 7"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/8.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/8.webp') }}" loading="lazy" alt="Mini Club Photo 8"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/9.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/9.webp') }}" loading="lazy" alt="Mini Club Photo 9"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/10.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/10.webp') }}" loading="lazy" alt="Mini Club Photo 10"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/11.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/11.webp') }}" loading="lazy" alt="Mini Club Photo 11"/>
                    </figure>
                </a>
                <article>
                    <p>The place where the little ones have fun <br> learn, and relax all at once.</p>
                    <span>MINI CLUB</span>
                </article>
            </div>
        </div>
    </div>
</div>
    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/console.svg') }}" alt="kidsConcept icon 1"/>
            <p>Games</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/paint.svg') }}" alt="kidsConcept icon 2"/>
            <p>Painting</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/sports.svg') }}" alt="kidsConcept icon 3"/>
            <p>Sports Activities</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/cooking.svg') }}" alt="kidsConcept icon 4"/>
            <p>Cooking</p>
        </div>
    </div>
    <div class="restaurantText">
        <h1>MINI CLUB</h1>
        <p>Step into our extraordinary Kids Club, where thrilling treasure hunts, heart-pumping sports, culinary adventures, and inspiring painting sessions await your little ones! We guarantee an unforgettable vacation experience filled with excitement, fun, and learning. Our talented instructors will guide them on a journey of self-discovery, and magical themed parties keep the wonder alive. Unleash their creativity and watch as they create cherished memories that will last a lifetime. Join us now for an adrenaline-packed escapade that will leave your kids asking for more!</p>
    </div>
    <div class="gradient">
    </div>
        <div class="wrapperElement">
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/treasure.webp') }}" loading="lazy" alt="Treasure Hunt activity picture">
            <div class="featuresText">
                <span>TREASURE HUNT</span>
                <div class="featureGrad"></div>
                <p>To awaken the inner adventurer in your child, we've crafted a thrilling treasure hunt game. This exciting activity aims to foster their communication, problem-solving, and clue-finding skills, ensuring an unforgettable experience!</p>
            </div> 
        </div>
        <div class="wrapperElement">
            <div class="featuresText">
                <span>PORT OLYMPIAD</span>
                <div class="featureGrad"></div>
                <p>With a mix of solo and team sports activities, our goal is to provide your child with both a healthy and enjoyable experience. At Port Sports Games, we strive to keep your kids entertained and engaged in fun-filled events that promote physical well-being and foster a sense of teamwork.</p>
            </div> 
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/olympiad.webp') }}" loading="lazy" alt="Hotel olympic games  picture">
        </div>
        <div class="wrapperElement">
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/chef.webp') }}" loading="lazy" alt="An education program photo for teacinh kids how to cook">
            <div class="featuresText">
                <span>KID CHEF</span>
                <div class="featureGrad"></div>
                <p>To help your kids grasp the concept of recipes, including gathering ingredients and cooking, we strive to create fun and delicious experiences for them. Our goal is to make the learning process enjoyable as they embark on culinary adventures, exploring the world of flavors and culinary creativity.</p>
            </div> 
        </div>
        <div class="wrapperElement">
            <div class="featuresText">
                <span>ART CLASS</span>
                <div class="featureGrad"></div>
                <p>To nurture the inner artists within our little guests, we offer engaging painting classes. These sessions are designed to inspire creativity and provide a nurturing environment for children to explore their artistic talents. Through our painting classes, we aim to foster a love for art and self-expression, making it a memorable and enriching experience for each child.</p>
            </div> 
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/art.webp') }}" loading="lazy" alt="An art class photo for children">
        </div>
        <a class="topbutton" href="#"><img src="{{ asset('assets/frontend/images/mini-club/Arrow.svg') }}" alt="An icon for navigation"></a>
<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->
<div class="childrenActivitySlider">
    <p>Special Offers</p>
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" loading="lazy" alt="activities photo 1"/>
                        <span>18 slides  ·  Water and Fun</span>
                    </figure>
                </a>
                <h5>Aquapark</h5>
                <p>Port Nature’s aquapark has only fun. There are water sports, giant water slides, and 4 pools.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" loading="lazy" alt="activities photo 2"/>
                        <span>Child A'la Carte  · Food for Child</span>
                    </figure>
                    <h5>Mini Club</h5>
                    <p>Your children can choose their desired food for themselves with our child-exclusive menu.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" loading="lazy" alt="activities photo 3"/>
                        <span>Fun arcade machines · Games for Everyone</span>
                    </figure>
                    <h5>Games for Everyone</h5>
                    <p>Game machines offer a wonderful form of entertainment for everyone. </p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" loading="lazy" alt="activities photo 4"/>
                        <span>Babbysitters  ·  Care for Child</span>
                    </figure>
                    <h5>BabySitting Service</h5>
                    <p>Babysitting services provide a safe and controlled area for parents' inner peace.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" loading="lazy" alt="activities photo 5"/>
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