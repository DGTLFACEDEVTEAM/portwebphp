@php
    $translation = [
        'en' => [
            'h2' => 'Port Nature Luxury Resort Hotel & Spa',
            'span' => 'Experience Luxury Beyond',
            'inclusiveText1' => '148 kinds of premium alcohol pushes the limits of all-inclusive services. You can find almost all premium alcohol brands at our bars.',
            'inclusiveText2' => "Also, you can sip your Davidoff coffee while watching the most famous artists' concerts, or when you relax with your family.",
            'articleh3' => 'Premium A\'la Carte All Inclusive',
            'articlep' => 'Our 5-star premium luxury hotel has restaurants on-site, each serving a variety of delicious foods made by renowned chefs. There are exclusive concepts for families with children. Swimming pools, saunas, health clubs, and even live music performances and cultural activities are provided to guests at a 5-star hotel.',
        ],
        'ru' => [
            'h2' => 'Port Nature Luxury Resort Hotel & Spa',
            'span' => 'Испытайте роскошь за пределами',
            'inclusiveText1' => '148 видов алкоголя премиум-класса расширяют возможности обслуживания по системе "все включено".',
            'inclusiveText2' => 'Кроме того, вы можете наслаждаться концертами самых известных артистов, проводя время со своей семьей.',
            'articleh3' => 'Премиум A\'la Carte Все включено',
            'articlep' => 'На территории нашего отеля 5 звезд премиум-класса работают рестораны с разнообразными вкусными блюдами. Для семей, есть эксклюзивная концепция для детей. К услугам гостей 5-звездочного отеля предоставляются сауны, оздоровительные центры, живая музыка, а также культурные мероприятия.',
        ],
        'de' => [
            'h2' => 'Port Nature Luxury Resort Hotel & Spa',
            'span' => 'Erleben Sie den Luxus jenseits',
            'inclusiveText1' => '148 Sorten Premium-Alkohol sprengen die Grenzen der All-Inclusive-Leistungen. Sie finden fast alle Premium-Alkoholmarken.',
            'inclusiveText2' => 'Außerdem können Sie Ihren Davidoff-Kaffee schlürfen, die Konzerte der berühmtesten Künstler ansehen und Zeit mit Ihrer Familie verbringen.',
            'articleh3' => 'Premium A\'la Carte All Inclusive',
            'articlep' => 'Unser 5-Sterne-Premium-Luxushotel verfügt über Restaurants vor Ort, die jeweils eine Vielzahl köstlicher Speisen von renommierten Köchen servieren. Familie mit Kind, exklusive Konzepte. Schwimmbäder, Saunen, Gesundheitsclubs und sogar Live-Musikdarbietungen und kulturelle Aktivitäten werden den Gästen eines 5-Sterne-Hotels geboten.',
        ],
        'tr' => [
            'h2' => 'Port Nature Luxury Resort Hotel & Spa',
            'span' => 'Lüksün ötesinde bir deneyim',
            'inclusiveText1' => '148 çeşit premium alkol ile her şey dahil servisin sınırlarını zorluyoruz. Neredeyse bütün premium alkol çeşitlerini bulabilirsiniz.',
            'inclusiveText2' => 'Ayrıca Davidoff kafede kahvenizi yudumlayabilir, en ünlü sanatçıların konserlerini izleyebilir ve ailenizle vakit geçirebilirsiniz.',
            'articleh3' => 'Premium A\'la Carte Her Şey Dahil',
            'articlep' => '5 yıldızlı premium lüks otelimizin bünyesinde, her biri ünlü şefler tarafından yapılan çeşitli lezzetli yiyecekler sunan restoranlar bulunmaktadır. Çocuklu ailelere özel konseptler. Yüzme havuzları, saunalar, sağlık kulübü ve hatta canlı konserler ve kültürel aktiviteler 5 yıldızlı otelimiz tarafından sağlanmaktadır.',
        ],
    ];

@endphp

<div class="inclusiveArea">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{!! $translation[$lang]['h2'] !!}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span>{!! $translation[$lang]['span'] !!}</span>
            </div>
        </div>
        <div class="inclusiveText">
            <p>{!! $translation[$lang]['inclusiveText1'] !!}</p>
            <p>{!! $translation[$lang]['inclusiveText2'] !!}</p>
        </div>
    </div>
    <div class="homeTextCard">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12 starNumber"> 5 <img loading="lazy" alt="icon"
                            src="{{ asset('assets/frontend/images/home/inclusiveStar.svg') }}" alt="star" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <h3>Premium A'la Carte All Inclusive</h3>
                            <p>Our 5-star premium luxury hotel has restaurants on-site, each serving a variety of
                                delicious foods made by renowned chefs. There are exclusive concepts for families with
                                children. Swimming pools, saunas, health clubs, and even live music performances and
                                cultural activities are provided to guests at a 5-star hotel. </p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Slider main container -->
                <div class="swiper inclusiveSlider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-1-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-1-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-1.png') }}"
                                alt="Portnature Hotel Pics" loading="lazy" />
                            <div class="swiper-lazy-preloader"></div>
                        </div>

                        <div class="swiper-slide">
                            <img srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-3-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-3-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-3.webp') }}"
                                alt="Portnature Hotel Pics" loading="lazy" />
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-2-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-2-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-2.webp') }}"
                                alt="Portnature Hotel Pics" loading="lazy" />
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-4-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-4-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-4.webp') }}"
                                alt="Portnature Hotel Pics" loading="lazy" />
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                        <div class="swiper-slide">
                            <img srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-5-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-5-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-5.webp') }}"
                                alt="Portnature Hotel Pics" loading="lazy" />
                            <div class="swiper-lazy-preloader"></div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination-horizontal"></div>
                </div>
            </div>
        </div>
    </div>


</div>
