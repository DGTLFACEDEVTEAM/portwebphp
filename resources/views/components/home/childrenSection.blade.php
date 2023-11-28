@php
    $translation = [
        'en' => [
            'h2' => 'CHILDREN',
            'subChildrenText1' => 'You can watch what your child is doing on TV in your rooms',
            'subChildrenText2' => 'Activities for children of any age',
            'subChildrenText3' => 'Your child chooses their desired food from our child exclusive menu',
            'a' => [
                'text' => 'More',
                'link' => route('kids-concepts'),
            ],
        ],
        'de' => [
            'h2' => 'KINDER',
            'subChildrenText1' => 'Auf dem Fernseher in Ihrem Zimmer können Sie sehen, was Ihr Kind macht',
            'subChildrenText2' => 'Aktivitäten für Kinder jeden Alters',
            'subChildrenText3' => 'Ihr Kind wählt selbst mit unserem Kinder-Exklusiv-Menü',
            'a' => [
                'text' => 'Mehr Uber',
                'link' => route('de-kids-concepts'),
            ],
        ],
        'tr' => [
            'h2' => 'ÇOCUKLAR',
            'subChildrenText1' => 'Odanızda bulunan TV\'den çocuğunuzun neler yaptığını izleyebilirsiniz.',
            'subChildrenText2' => 'Her yaştaki çocuk için aktiviteler',
            'subChildrenText3' => 'Çocuğunuz, çocuklara özel hazırlanmış menülerden kendi yiyeceklerini seçebilir.',
            'a' => [
                'text' => 'Daha Fazla',
                'link' => route('tr-kids-concepts'),
            ],
        ],
        'ru' => [
            'h2' => 'Дети',
            'subChildrenText1' => 'Наблюдайте за своим ребенком из номера через телевизор',
            'subChildrenText2' => 'Развлечения для детей любого возраста',
            'subChildrenText3' => 'Широкий выбор еды в ресторане для детей',
            'a' => [
                'text' => 'Больше',
                'link' => route('ru-kids-concepts'),
            ],
        ],
    ];
@endphp
<div class="children">
    <div class="childrenContainer">
        <div class="row">
            <div class="col-md-12">
                <h2>{!! $translation[$lang]['h2'] !!}</h2>
            </div>
        </div>
        <div class="subChildren">
            <div class="childrenIcons">
                <img loading="lazy" src="{{ asset('assets/frontend/images/home/childrencam.svg') }}" alt="children" />
                <span class="subChildrenText">{!! $translation[$lang]['subChildrenText1'] !!}</span>
            </div>
            <div class="childrenIcons">
                <img loading="lazy" src="{{ asset('assets/frontend/images/home/childrenage.svg') }}" alt="children" />
                <span class="subChildrenText">{!! $translation[$lang]['subChildrenText2'] !!}</span>
            </div>
            <div class="childrenIcons">
                <img loading="lazy" src="{{ asset('assets/frontend/images/home/childrenbabysit.svg') }}"
                    alt="children" />
                <span class="subChildrenText">{!! $translation[$lang]['subChildrenText3'] !!}</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="childrenSwiper">
                <div class="swiper childrenSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-1.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-1.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-1-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-1.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-3.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-3.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-3-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-3.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-4.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-4.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-4-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-4.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-5.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-5.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-5-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-5.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-6.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-6.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-6-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-6.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-7.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-7.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-7-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-7.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-10.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-10.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-10-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-10.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-11.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-11.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-11-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-11.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-12.webp') }}">
                                <img loading="lazy" src="{{ asset('assets/frontend/images/home/kids/kids-12.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-12-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-12.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="lightbox-childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/kids/kids-full-size/kids-13.webp') }}">
                                <img loading="lazy"
                                    src="{{ asset('assets/frontend/images/home/kids/kids-13.webp') }}"
                                    data-srcset="{{ asset('assets/frontend/images/home/kids/kids-13-mobile.webp') }} 390w, {{ asset('assets/frontend/images/home/kids/kids-13.webp') }} 1920w"
                                    sizes="((min-width: 1px) and (max-width:480px)) 390w, (min-width:480px) 1920w"
                                    alt="childrenslider" />
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev inclusive-prev">
                        <img loading="lazy" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}"
                            alt="swiperleft" />
                    </div>
                    <div class="swiper-button-next inclusive-next">
                        <img loading="lazy" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}"
                            alt="swiperright" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="moreButton">
        <a href="{!! $translation[$lang]['a']['link'] !!}" >{!! $translation[$lang]['a']['text'] !!}</a>
    </div>
</div>
