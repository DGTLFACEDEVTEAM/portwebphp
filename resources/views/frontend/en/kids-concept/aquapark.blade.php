@extends('layouts.main', ['lang' => 'en'])

@section('title', 'Aquapark - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Aquapark Port Nature Luxury Resort Hotel. Top 10 child friendly hotels with water park in Side Turkey. Get ready to enjoy your best aquapark holiday.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('aquapark') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-aquapark') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-aquapark') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-aquapark') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="aquaparkHero">
    <figure>
        <img src="{{ asset('assets/frontend/images/aquapark/aquapark.webp') }}" alt="aquaHero"/>
        <span>
            <img style="position:absolute;height: unset;width: unset;right: 0;top: 0;z-index: 1;aspect-ratio: unset" src="{{ asset('assets/frontend/images/aquapark/Palm.svg') }}" alt="palm"/>
        </span>
    </figure>
    <article>
        <h1>Aquapark</h1>
        {{-- <span>Our aquapark, with 18 water slides, will fill you with joy and provide a thrilling experience. Even kids can't wait to ride again, setting record levels of excitement.</span>
        <p>Port Nature’s aquapark has only fun.
            There are water sports, a giant water slide, the 4 pools for everyone, and pure fun.</p> --}}
    </article>
</div>
{{-- Aquapark Hero End --}}
{{-- Gallery --}}
<div class="gallery">
    <h2>Gallery</h2>
    <div class="swiper aquaparkSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-new1.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-new1.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-new2.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-new2.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
            {{-- <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-2.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-2.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div> --}}
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-3.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-3.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-new3.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-new3.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-new4.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-new4.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
            {{-- <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-4.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-4.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div> --}}
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next">
            <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="aquaIcon">
        <img style="height: unset;width: unset" src="{{ asset('assets/frontend/images/kidsConcept/opaquapark.svg') }}"/>
        <p>Get ready to make a splash in 18 water slides and 4 refreshing pools. </p>
    </div>
</div> --}}
{{-- Gallery End --}}
{{-- Video Start --}}
{{-- <div class="container">
    <div class="aquaparkVideo">
        
        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img style="height: 65px;width: 65px" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="playButton"/>
        </a>
        <img src="{{ asset('assets/frontend/images/aquapark/aquaparkVideo.png') }}" alt="youtubeVideo"/>
       
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="display: flex;justify-content: center;align-items: center">
                    <iframe width="860" height="515" src="https://www.youtube.com/embed/QAFojciW2kk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <span>Because you deserve it!</span>
    </div>
</div> --}}
{{-- Video End --}}

{{-- Contact --}}
@include('frontend.en.layouts.contact')
{{-- Contact End --}}

{{-- Special Offer --}}
<div class="aquaparkSpecialOffer">
    <h6>Special Offers</h6>
    <div class="swiper aquaparkSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="aquaparkspecialoffer"/>
                </figure>
                <h5>Mini Club</h5>
                <div class="backgroundLines">
                        <img class="radialBgImg" src="http://portnature.dgtl.com/assets/frontend/images/radialBg.svg" alt="radialBg" style="visibility: visible;">
                    </div>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="aquaparkspecialoffer"/>
                </figure>
                <h5>Game Machines</h5>
                <div class="backgroundLines">
                        <img class="radialBgImg" src="http://portnature.dgtl.com/assets/frontend/images/radialBg.svg" alt="radialBg" style="visibility: visible;">
                    </div>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="aquaparkspecialoffer"/>
                </figure>
                <h5>Jumping Track</h5>
                <div class="backgroundLines">
                        <img class="radialBgImg" src="http://portnature.dgtl.com/assets/frontend/images/radialBg.svg" alt="radialBg" style="visibility: visible;">
                    </div>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="aquaparkspecialoffer"/>
                </figure>
                <h5>Babysitting</h5>
                <div class="backgroundLines">
                        <img class="radialBgImg" src="http://portnature.dgtl.com/assets/frontend/images/radialBg.svg" alt="radialBg" style="visibility: visible;">
                    </div>
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
{{-- Special Offer End --}}

@endsection


@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/aquapark.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>

@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/aquapark.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>

@endsection