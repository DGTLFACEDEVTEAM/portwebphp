@extends('layouts.main', ['lang' => 'ru'])

@section('title', 'Мероприятия - Port Nature Luxury Resort')
@section('description', 'Мероприятия Port Nature. Отели в Белеке, Турция 5 звезд 1 линия все включено для отдыха с детьми. Отели 5 звезд в Белеке забронировать')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-activity') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('activity') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-activity') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-activity') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

<div class="activityHero">
    <div class="heroImage">
        <figure>
            <img src="{{ asset('assets/frontend/images/activity/activities.webp') }}" alt="activity"/>
        </figure>
    </div>
    <article>
        <h1>Мероприятия</h1>
        <div class="heroIconGroup">
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opcocktail.svg') }}" alt="activity"/>
                <span>Бесплатные напитки</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opmusic.svg') }}" alt="activity"/>

                <span>Живая музыка</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opartist.svg') }}" alt="activity"/>

                <span>Популярные артисты</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opdisco.svg') }}" alt="activity"/>
                <span>Дискотека</span>
            </div>
        </div>
    </article>
</div>
<div class="activityHeaderText">
    <p>Веселье и развлечения никогда не заканчиваются в Port Nature Luxury Resort & Spa. Световые шоу, дневные и ночные вечеринки, концерты, аквапарк, пляжный волейбол, водные виды спорта и многое другое.</p>
</div>
<div class="line"></div>
{{-- First Slider --}}
<div class="activityConcertSlider">{{-- ***** CLASS NAME CHANGED ****** --}}
    <div class="swiper activityConcertSwiperSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/concerts.webp') }}" alt="Concerts"/>
                    </figure>
                <h5>Концерты</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/daynight.webp') }}" alt="Day&NightParties"/>
                    </figure>
                    <h5>Дневные & Ночные Вечеринки</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/stageshows.webp') }}" alt="StageShows"/>
                    </figure>
                    <h5>Сценические Шоу</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/lightshows.webp') }}" alt="LightShows"/>
                    </figure>
                    <h5>Световые Шоу</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/kidsshows.webp') }}" alt="KidsShows"/>
                    </figure>
                    <h5>Детские Шоу</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/activity/festivals.webp') }}" alt="Festivals"/>
                </figure>
                <h5>Фестивали</h5>
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
{{-- First Slider End --}}
{{-- Second Slider --}}
<div class="activitySlider">

            <div class="swiper activitySwiper" dir="rtl">
                <div class="swiper-wrapper second-slider-wrapper">
                    <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/activity/beachvolley.webp') }}" alt="BeachVolley"/>
                            </figure>
                        <h5>Пляжный волейбол</h5>
                    </div>
                    <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/activity/aquapark.webp') }}" alt="Aquapark"/>
                            </figure>
                        <h5>Аквапарк</h5>
                    </div>
                    <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/activity/poolgames.webp') }}" alt="PoolGames"/>
                            </figure>
                        <h5>Игры в бассейне</h5>

                    </div>
                    <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/activity/fitness.webp') }}" alt="Fitness"/>
                            </figure>
                        <h5>Фитнес</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/wateraerobics.webp') }}" alt="WaterAerobics"/>
                        </figure>
                        <h5>Водная аэробика</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Darts.webp') }}" alt="darts"/>
                        </figure>
                        <h5>Дартс</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Yoga.webp') }}" alt="yoga"/>
                        </figure>
                        <h5>Йога</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/TennisCourt.webp') }}" alt="tennis"/>
                        </figure>
                        <h5>Теннисный Корт</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Tabletennis.webp') }}" alt="tabletennis"/>
                        </figure>
                        <h5>Настольный Теннис</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Basketball.webp') }}" alt="Basketball"/>
                        </figure>
                        <h5>Баскетбол</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Minigolf.webp') }}" alt="minigolf"/>
                        </figure>
                        <h5>Мини-гольф</h5>
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
     
{{-- Second Slider End --}}
<div class="aquapark">
    <a class="roomlink" href="{{ route('ru-aquapark') }}">
        <figure>
            <img src="{{ asset('assets/frontend/images/kidsConcept/Aquapark.webp') }}" alt="Aquapark"/>
        </figure>
        <article>
            <h3>Аквапарк</h3>
            <p>18 горок  ·  Безопасноть для вашего ребенка</p>
            <div class="moreButton">
                <a href="{{ route('ru-aquapark') }}">Подробнее</a>
            </div>
        </article>
    </a>
</div>
{{-- Aquapark End --}}
{{-- Video Gallery Section Start --}}
<section class="video-gallery-section">
        <p class="video-section-title">видео галерея
</p>

        <div class="video-gallery-wrapper">

    <div class=" video-wrapper">
            {{-- Button trigger modal --}}
            <a type="button" class="restPlayButtonDesktop" data-bs-toggle="modal" data-bs-target=".activitiesModalDesktop1">
                <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
                <img class="videoCover" src="{{ asset('assets/frontend/images/activity/carnaval.webp') }}" alt="youtubeVideo"/>
            </a>
            {{-- Modal --}}
            <div class="modal fade activitiesModal activitiesModalDesktop1" tabindex="-1" aria-labelledby="activitiesModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/c2YvU0DWg1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div><div class=" video-wrapper">
            {{-- Button trigger modal --}}
            <a type="button" class="restPlayButtonDesktop" data-bs-toggle="modal" data-bs-target=".activitiesModalDesktop2">
                <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
                <img class="videoCover" src="{{ asset('assets/frontend/images/activity/survivor.webp') }}" alt="youtubeVideo"/>
            </a>
            {{-- Modal --}}
            <div class="modal fade activitiesModal activitiesModalDesktop2" tabindex="-1" aria-labelledby="activitiesModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/wASbFkMyaZ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div><div class=" video-wrapper">
            {{-- Button trigger modal --}}
            <a type="button" class="restPlayButtonDesktop" data-bs-toggle="modal" data-bs-target=".activitiesModalDesktop3">
                <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
                <img class="videoCover" src="{{ asset('assets/frontend/images/activity/bohemo.webp') }}" alt="youtubeVideo"/>
            </a>
            {{-- Modal --}}
            <div class="modal fade activitiesModal activitiesModalDesktop3" tabindex="-1" aria-labelledby="activitiesModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/ZewSOhLcDDA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div></div>
        </div>
</section>
{{-- Video Gallery Section End --}}


{{-- Contact --}}
@include('frontend.ru.layouts.contact')
{{-- Contact End --}}

<div class="otherEntertainment">
    <h3>Другие мероприятия</h3>
    <div class="entertainment otherEntertainmentSwiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment.webp') }}" alt="concerts"/>

            </figure> <span>Концерты</span>
        </div></div>
        <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment-2.webp') }}" alt="specialguests"/>

            </figure><span>Специальные гости</span>
        </div></div>
        <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment-3.webp') }}" alt="show"/>

            </figure><span>Шоу</span>
        </div></div>
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
<script src="{{ asset('assets/frontend/js/activity.js') }}"></script><script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/activity.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection