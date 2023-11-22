@extends('frontend.ru.layouts.master')

@section('title', 'Мини клуб - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Мини клуб Port Nature Luxury Resort. Best all inclusive family hotel for kids in Belek Antalya. Call now for child friendly holiday booking offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-mini-club') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('mini-club') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-mini-club') }}">TR</a></li>
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
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/2.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/3.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/4.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/5.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/5.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/6.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/6.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/7.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/7.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/8.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/8.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/9.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/9.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/10.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/10.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
            <div class="swiper-slide">
                <a class="" href="{{ asset('assets/frontend/images/mini-club/11.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/mini-club/11.webp') }}" alt="coffee"/>
                    </figure>
                </a>
                <article>
                    <p>Где малыши развлекаются <br> и одновременно учатся.</p>
                    <span>Мини клуб</span>
                </article>
            </div>
        </div>
    </div>
</div>

    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/console.svg') }}" alt="kidsConcept"/>
            <p>Игры</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/paint.svg') }}" alt="kidsConcept"/>
            <p>Рисования</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/sports.svg') }}" alt="kidsConcept"/>
            <p>Спортивные мероприятия</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/mini-club/cooking.svg') }}" alt="kidsConcept"/>
            <p>Кулинария</p>
        </div>
    </div>

    <div class="restaurantText">
        <h1>Мини клуб</h1>
        <p>Загляните в наш необычный детский клуб, где ваших малышей ждут увлекательные поиски сокровищ, разнообразные виды спорта, кулинарные приключения и вдохновляющие занятия живописью! Мы гарантируем незабываемые впечатления от отдыха, полные азарта, веселья и познания. Наши талантливые преподаватели проведут их по пути самопознания, а волшебные тематические вечеринки не дадут забыть о чудесах. Раскройте их творческий потенциал и наблюдайте за тем, как они создают драгоценные воспоминания, которые останутся на всю жизнь. Присоединяйтесь к нам прямо сейчас, чтобы отправиться в путешествие, наполненное адреналином, и чтобы ваши дети захотели еще больше!</p>
    </div>
    <div class="gradient">

    </div>


        <div class="wrapperElement">
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/treasure.webp') }}" alt="">
            <div class="featuresText">
                <span>Охота за сокровищами</span>
                <div class="featureGrad"></div>
                <p>Мы подготовили захватывающую игру "Поиск сокровищ", которая пробудит в вашем ребенке искателя приключений. Это увлекательное занятие призвано подарить незабываемые впечатления, развивая навыки общения, решения проблем и поиска подсказок!</p>
            </div> 
        </div>
        <div class="wrapperElement">
            <div class="featuresText">
                <span>Порт Олимпиада</span>
                <div class="featureGrad"></div>
                <p>Сочетая индивидуальные и командные спортивные занятия, мы стремимся обеспечить вашему ребенку здоровый и приятный опыт. Мы работаем над тем, чтобы развлекать ваших детей веселыми мероприятиями, которые способствуют физическому развитию и формируют чувство коллективизма.</p>
            </div> 
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/olympiad.webp') }}" alt="">
        </div>
        <div class="wrapperElement">
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/chef.webp') }}" alt="">
            <div class="featuresText">
                <span>Маленький шеф-повар</span>
                <div class="featureGrad"></div>
                <p>Мы стремимся создать для ваших детей веселый и вкусный опыт, помогая им понять основы приготовления пищи. Наша цель - сделать процесс обучения приятным, чтобы дети отправились в кулинарное приключение, открывая для себя мир вкуса и кулинарного творчества.</p>
            </div> 
        </div>
        <div class="wrapperElement">
            <div class="featuresText">
                <span>Уроки искусства</span>
                <div class="featureGrad"></div>
                <p>Мы предлагаем увлекательные уроки рисования, чтобы воспитать художников в наших маленьких гостях. Эти уроки призваны вдохновлять детей на творчество и создавать благоприятную среду для раскрытия их художественных талантов. Благодаря занятиям живописью, мы стремимся привить детям любовь к искусству и самовыражению, сделав это незабываемым и обогащающим опытом для каждого ребенка.</p>
            </div> 
            <img class="wrapperImg" src="{{ asset('assets/frontend/images/mini-club/art.webp') }}" alt="">
        </div>
        <a class="topbutton" href="#"><img src="{{ asset('assets/frontend/images/mini-club/Arrow.svg') }}" alt=""></a>


<!-- Contact -->
@include('frontend.ru.layouts.contact')
<!-- Contact End -->

<div class="childrenActivitySlider">
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 горок  ·  Вода и веселье</span>
                    </figure>
                </a>
                <h5>Аквапарк</h5>
                <p>Водные виды спорта, гигантские водные горки и 4 бассейна, полные развлечениями.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Детский A'la Carte  · Еда для детей</span>
                    </figure>
                    <h5>Мини клуб</h5>
                    <p>Ваш ребенок выбирает сам с помощью нашего эксклюзивного детского меню.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" >
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/><span>Забавные машины · Игра для всех</span>
                    </figure>
                    <h5>Игровые автоматы</h5>
                    <p>Возможность полностью погрузиться в игровую атмосферу.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity">
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