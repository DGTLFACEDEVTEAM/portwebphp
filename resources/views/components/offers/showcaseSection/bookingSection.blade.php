@php

    $translation = [
        'en' => [
            'plane-before' => '...and book a ticket right away',
            'booking-section-title' => 'PLAN YOUR TRIP',
            'booking-section-title-2' => 'With our hotel',
            'booking-section-general' => [
                'select-room' => 'Select Room',
                'family-room' => 'Family',
                'standard-room' => 'Standard',
                'king-suite' => 'King Suite',
            ],
            'booking-component-inner' => [
                'adult' => 'Adult',
                'adults' => 'Adult(s)',
                'child' => 'Child',
                'children' => 'Child(ren)',
                'childage1' => 'Child 1 Age',
                'childage2' => 'Child 2 Age',
                'childage3' => 'Child 3 Age',
                'childage4' => 'Child 4 Age',
                'book-now' => 'Book Now',
            ],
        ],
        'de' => [
            'plane-before' => '... buchen Sie jetzt ein Ticket',
            'booking-section-title' => 'PLANEN SIE IHRE REISE',
            'booking-section-title-2' => 'Mit unserem Hotel',
            'booking-section-general' => [
                'select-room' => 'Zimmer auswählen',
                'family-room' => 'Familienzimmer',
                'standard-room' => 'Standard Zimmer',
                'king-suite' => 'Suite Zimmer',
            ],
            'booking-component-inner' => [
                'adult' => 'Erwachsene',
                'adults' => 'Erwachsene',
                'child' => 'Kind',
                'children' => 'Kind(er)',
                'childage1' => 'Kind 1',
                'childage2' => 'Kind 2',
                'childage3' => 'Kind 3',
                'childage4' => 'Kind 4',
                'book-now' => 'Jetzt buchen',
            ],
        ],
        'ru' => [
            'plane-before' => '.. закажите билет прямо сейчас',
            'booking-section-title' => 'Для отпуска вашей мечты ',
            'booking-section-title-2' => 'В нашем отеле',
            'booking-section-general' => [
                'select-room' => 'Выбрать номер',
                'family-room' => 'Семейный Номер',
                'standard-room' => 'Номера Стандарт',
                'king-suite' => 'Номер Suite',
            ],
            'booking-component-inner' => [
                'adult' => 'Взрослые',
                'adults' => 'Взрослые',
                'child' => 'Дети',
                'children' => 'Дети',
                'childage1' => 'Дети 1',
                'childage2' => 'Дети 2',
                'childage3' => 'Дети 3',
                'childage4' => 'Дети 4',
                'book-now' => 'Забронировать сейчас',
            ],
        ],
        'tr' => [
            'plane-before' => '... hemen bir bilet alın',
            'booking-section-title' => 'HAYALİNİZDEKİ TATİL İÇİN<',
            'booking-section-title-2' => 'Odanızı Ayırtın',
            'booking-section-general' => [
                'select-room' => 'Oda Seçenekleri',
                'family-room' => 'Aile Odası',
                'standard-room' => 'Standart Oda',
                'king-suite' => 'Süit Oda',
            ],
            'booking-component-inner' => [
                'adult' => 'Yetişkin',
                'adults' => 'Yetişkin',
                'child' => 'Çocuk',
                'children' => 'Çocuk',
                'childage1' => 'Çocuk 1 Yaş',
                'childage2' => 'Çocuk 2 Yaş',
                'childage3' => 'Çocuk 3 Yaş',
                'childage4' => 'Çocuk 4 Yaş',
                'book-now' => 'Şimdi Rezervasyon Yap',
            ],
        ],
    ];

@endphp


<div class="plane-svg colorful-image-wrapper"></div>

<img class="plane-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-1.svg') }}" />
<p class="plane-before">{!! $translation[$lang]['plane-before'] !!}</p>
<div class="booking-section-wrapper">
    <p class="booking-section-title">{!! $translation[$lang]['booking-section-title'] !!}</p>
    <p class="booking-section-title-2">{!! $translation[$lang]['booking-section-title-2'] !!}</p>
    <div class="brand-swiper-wrapper">
        <div class="swiper brand-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="https://www.tripadvisor.com.tr/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"
                        target="_blank"><img class="svg-tripadvisor"
                            src="{{ asset('assets/frontend/images/offers/tripadvisor.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.booking.com/searchresults.tr.html?ss=Port+Nature&ssne=Side&ssne_untouched=Side&label=bookings-name-lO9ne8CLb_o7ijml9UoG0QS540961834209%3Apl%3Ata%3Ap1%3Ap22.563.000%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1012764%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcX_GyndjDE1ljcv9tcUssY&aid=376386&lang=tr&sb=1&src_elem=sb&src=searchresults&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure"
                        target="_blank"><img class="svg-booking"
                            src="{{ asset('assets/frontend/images/offers/booking.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.tripadvisor.com.tr/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"
                        target="_blank"><img class="svg-tripadvisor"
                            src="{{ asset('assets/frontend/images/offers/tripadvisor.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information?chkin=2023-04-11&chkout=2023-04-12&x_pwa=1&rfrr=HSR&pwa_ts=1679996745179&referrerUrl=aHR0cHM6Ly93d3cuZXhwZWRpYS5jb20vSG90ZWwtU2VhcmNo&useRewards=false&rm1=a2&regionId=6034717&destination=Belek%2C+Serik%2C+Antalya+Region%2C+T%C3%BCrkiye&destType=CURRENT_LOCATION&selected=8108100&latLong=36.83444%2C31.162045&sort=RECOMMENDED&userIntent="
                        target="_blank"><img class="svg-expedia"
                            src="{{ asset('assets/frontend/images/offers/expedia.webp') }}" /></a>
                </div>
            </div>
        </div>


    </div>
    <!-- Booking Section -->
    <div class="booking">
        <div class="dropdown room-selection-dropdown">
            <button class="room-selection-dropdown-btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                {!! $translation[$lang]['booking-section-general']['select-room'] !!}
            </button>
            <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <div class="dropdown-item room-dropdown-link" href="#" data-value="Family Room">
                        {!! $translation[$lang]['booking-section-general']['family-room'] !!}</div>
                </li>
                <li>
                    <div class="dropdown-item room-dropdown-link" href="#" data-value="Standard Room">
                        {!! $translation[$lang]['booking-section-general']['standard-room'] !!}</div>
                </li>
                <li>
                    <div class="dropdown-item room-dropdown-link" href="#" data-value="King Suite">
                        {!! $translation[$lang]['booking-section-general']['king-suite'] !!}</div>
                </li>
            </ul>
        </div>
        <label for="checkin"></label><input id="checkin" data-defaultDate="today" value="Check-in">
        <label for="checkout"></label><input id="checkout" data-defaultDate="today" value="Check-Out">
        <div class="guestDiv guestdiv-adult"><span class="guests guests-adult">
                <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/adult-icon.svg') }}">

                {!! $translation[$lang]['booking-component-inner']['adult'] !!}</span>
            <div class="guestMenu guestMenuAdult">
                <div class="adultCounter dropdown-item">
                    <p>{!! $translation[$lang]['booking-component-inner']['adults'] !!}</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="adult-decrement"
                            onclick="adultDecrement()" alt="decrement" />
                        <p id="adultCount" class="adultCountIncrementType"></p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="adult-increment"
                            onclick="adultIncrement()" alt="increment" />
                    </div>
                </div>
            </div>
        </div>
        <div class="guestDiv guestdiv-child"><span class="guests guests-child">
                <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/child-icon.svg') }}">
                {!! $translation[$lang]['booking-component-inner']['child'] !!}</span>
            <div class="guestMenu guestMenuChild">

                <div class="childCounter dropdown-item">
                    <p>{!! $translation[$lang]['booking-component-inner']['children'] !!}</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                            onclick="childDecrement()" alt="decrement" />
                        <p id="childCount" class="childCountIncrementType"></p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                            onclick="childIncrement()" alt="increment" />
                    </div>
                </div>
                <div class="childAgeCounter1 childAgeCounter dropdown-item">
                    <p>{!! $translation[$lang]['booking-component-inner']['childage1'] !!}/p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                            onclick="childAge1Decrement()" alt="decrement" />
                        <p id="childAge1Count">0</p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                            onclick="childAge1Increment()" alt="increment" />
                    </div>
                </div>
                <div class="childAgeCounter2  childAgeCounter dropdown-item">
                    <p>{!! $translation[$lang]['booking-component-inner']['childage2'] !!}</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                            onclick="childAge2Decrement()" alt="decrement" />
                        <p id="childAge2Count">0</p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                            onclick="childAge2Increment()" alt="increment" />
                    </div>
                </div>
                <div class="childAgeCounter3  childAgeCounter dropdown-item">
                    <p>{!! $translation[$lang]['booking-component-inner']['childage3'] !!}</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                            onclick="childAge3Decrement()" alt="decrement" />
                        <p id="childAge3Count">0</p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                            onclick="childAge3Increment()" alt="increment" />
                    </div>
                </div>
                <div class="childAgeCounter4  childAgeCounter dropdown-item">
                    <p>{!! $translation[$lang]['booking-component-inner']['childage4'] !!}</p>
                    <div class="counter-item">
                        <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                            onclick="childAge4Decrement()" alt="decrement" />
                        <p id="childAge4Count">0</p>
                        <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                            onclick="childAge4Increment()" alt="increment" />
                    </div>
                </div>
            </div>

        </div>
        <a href="https://portnature.rezervasyonal.com/?currency=TRY" target="_blank" class="bookNow"><img
                src="{{ asset('assets/frontend/images/offers/svg/booknow.svg') }}" />{!! $translation[$lang]['booking-component-inner']['book-now'] !!}</a>
    </div>
    <!-- Booking Section End -->
</div>
