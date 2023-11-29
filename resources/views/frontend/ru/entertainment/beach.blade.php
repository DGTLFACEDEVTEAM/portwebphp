@extends('layouts.main', ['lang' => 'ru'])

@section('title', 'Пляж - Port Nature Luxury Resort Hotel Spa')
@section('description', 'The Private Beach at Port Nature Luxury Resort. Best all inclusive family hotel for kids in Belek Antalya. Call now for child friendly holiday booking offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-beach') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-beach') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('en-beach') }}">EN</a></li>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
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
                    <p>Прекрасный частный пляж <br>где отдых сочетается с роскошью.</p>
                    <span>Port Nature Luxury Resort Hotel</span>
                </article>
            </div>


        </div>
    </div>
</div>

    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/sunbed.svg') }}" alt="kidsConcept"/>
            <p>Лежаки</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/gazebo.svg') }}" alt="kidsConcept"/>
            <p>Павильоны</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/jetski.svg') }}" alt="kidsConcept"/>
            <p>Водные виды спорты</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/beach/volleyball.svg') }}" alt="kidsConcept"/>
            <p>Пляжные игры</p>
        </div>
    </div>

    <div class="restaurantText">
        <h1>Пляж</h1>
        <p>Добро пожаловать в наш роскошный райский уголок! Ступите на нетронутый частный песчаный пляж, где солнце и море превращаются в захватывающее приключение. Устройтесь поудобнее на наших высококачественных шезлонгах, позволяя солнечным лучам и звукам волн унять все ваши заботы. Забронируйте заранее павильон для VIP-обслуживания и погрузитесь в первоклассный сервис, наслаждаясь каждым моментом своего пребывания на пляже.</p>
    </div>
    <div class="gradient">

    </div>


        <div class="wrapperElement">
            <img class="wrapperImgBeach" src="{{ asset('assets/frontend/images/beach/jetski.webp') }}" alt="">
            <div class="featuresText">
                <span>Раскройте свой внутренний мир искателя приключений</span>
                <div class="featureGrad"></div>
                <p>Для любителей адреналина! Погрузитесь в мир водных развлечений с нашими захватывающими водными видами спорта, где адреналин течет рекой благодаря захватывающим катаниям на водных мотоциклах, парасейлингу вопреки гравитации и множеству других увлекательных занятий. Испытайте безграничную радость, веселье и воспоминания, отправляясь в необыкновенный отпуск, равного которому нет нигде.</p>
            </div> 
        </div>
        <div class="space"></div>



{{-- Contact --}}
@include('frontend.ru.layouts.contact')
{{-- Contact End --}}

<div class="childrenActivitySlider">
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 горок  ·  Вода и веселье</span>
                    </figure>
                </a>
                <h5>Аквапарк</h5>
                <p>Водные виды спорта, гигантские водные горки и 4 бассейна, полные развлечениями.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Детский A'la Carte  · Еда для детей</span>
                    </figure>
                    <h5>Мини клуб</h5>
                    <p>Ваш ребенок выбирает сам с помощью нашего эксклюзивного детского меню.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/><span>Забавные машины · Игра для всех</span>
                    </figure>
                    <h5>Игровые автоматы</h5>
                    <p>Возможность полностью погрузиться в игровую атмосферу.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="activities"/><span>Няни для детей  ·  Уход за ребенком</span>
                    </figure>
                    <h5>Услуги няни</h5>
                    <p>Надежный и безопасный вариант, пока родители находятся вдали от своих детей.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="activities"/><span>Детям всегда понравится  ·  Безопасность и восторг</span>
                    </figure>
                    <h5>Детская площадка</h5>
                    <p>Все материалы мягкие и безопасные. Наши горки не повредит вашему ребенку.</p>
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