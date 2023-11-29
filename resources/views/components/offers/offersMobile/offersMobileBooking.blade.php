@php
    $translation = [
        'en' => [
            'booking-modal-title' => 'Select guests',
            'adults' => 'Adults',
            'children' => 'Children',
            'child-age-1' => 'Child age 1',
            'child-age-2' => 'Child age 2',
            'child-age-3' => 'Child age 3',
            'child-age-4' => 'Child age 4',
            'child-age-5' => 'Child age 5',
            'child-age-6' => 'Child age 6',
            'select-age-1' => 'Select age 1',
            'select-age-2' => 'Select age 2',
            'select-age-3' => 'Select age 3',
            'select-age-4' => 'Select age 4',
            'select-age-5' => 'Select age 5',
            'select-age-6' => 'Select age 6',
            'done' => 'Done',
            'reservationform-mobile-title' => 'Plan your trip with our hotel',
            'check-in' => 'Check In',
            'check-out' => 'Check Out',
            'travellers' => 'Travellers',
            'book-now' => 'Book Now',
        ],
        'de' => [
            'booking-modal-title' => 'Wählen Sie Gäste aus',
            'adults' => 'Erwachsene',
            'children' => 'Kinder',
            'child-age-1' => 'Alter der Kinder 1',
            'child-age-2' => 'Alter der Kinder 2',
            'child-age-3' => 'Alter der Kinder 3',
            'child-age-4' => 'Alter der Kinder 4',
            'child-age-5' => 'Alter der Kinder 5',
            'child-age-6' => 'Alter der Kinder 6',
            'select-age-1' => 'Alter 1 auswählen',
            'select-age-2' => 'Alter 2 auswählen',
            'select-age-3' => 'Alter 3 auswählen',
            'select-age-4' => 'Alter 4 auswählen',
            'select-age-5' => 'Alter 5 auswählen',
            'select-age-6' => 'Alter 6 auswählen',
            'done' => 'Erledigt',
            'reservationform-mobile-title' => 'Planen Sie Ihre Reise mit unserem Hotel',
            'check-in' => 'Check-In',
            'check-out' => 'Check-Out',
            'travellers' => 'Reisende',
            'book-now' => 'Jetzt buchen',
        ],
        'ru' => [
            'booking-modal-title' => 'Выберите гостей',
            'adults' => 'Взрослые',
            'children' => 'Дети',
            'child-age-1' => 'Возраст ребенка 1',
            'child-age-2' => 'Возраст ребенка 2',
            'child-age-3' => 'Возраст ребенка 3',
            'child-age-4' => 'Возраст ребенка 4',
            'child-age-5' => 'Возраст ребенка 5',
            'child-age-6' => 'Возраст ребенка 6',
            'select-age-1' => 'Выберите возраст 1',
            'select-age-2' => 'Выберите возраст 2',
            'select-age-3' => 'Выберите возраст 3',
            'select-age-4' => 'Выберите возраст 4',
            'select-age-5' => 'Выберите возраст 5',
            'select-age-6' => 'Выберите возраст 6',
            'done' => 'Готово',
            'reservationform-mobile-title' => 'Спланируйте свое путешествие вместе с нашим отелем',
            'check-in' => 'Дата заезда',
            'check-out' => 'Дата выезда',
            'travellers' => 'Гости',
            'book-now' => 'Бронировать сейчас',
        ],
        'tr' => [
            'booking-modal-title' => 'Misafirleri seçin',
            'adults' => 'Yetişkinler',
            'children' => 'Çocuklar',
            'child-age-1' => 'Çocuk yaş 1',
            'child-age-2' => 'Çocuk yaş 2',
            'child-age-3' => 'Çocuk yaş 3',
            'child-age-4' => 'Çocuk yaş 4',
            'child-age-5' => 'Çocuk yaş 5',
            'child-age-6' => 'Çocuk yaş 6',
            'select-age-1' => 'Yaş 1 seç',
            'select-age-2' => 'Yaş 2 seç',
            'select-age-3' => 'Yaş 3 seç',
            'select-age-4' => 'Yaş 4 seç',
            'select-age-5' => 'Yaş 5 seç',
            'select-age-6' => 'Yaş 6 seç',
            'done' => 'Tamam',
            'reservationform-mobile-title' => 'Seyahatinizi otelimizle planlayın',
            'check-in' => 'Check-In',
            'check-out' => 'Check-Out',
            'travellers' => 'Seyehat Edenler',
            'book-now' => 'Rezervasyon',
        ],
    ];
@endphp

<div class="modal fade" id="peopleSelectionModal" aria-labelledby="peopleSelectionModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal-close-family" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="booking-modal-title" id="exampleModalLabel">{!! $translation[$lang]['booking-modal-title'] !!}</p>

                <div class="dropdown adult-dropdown">
                    <img class="dropdown-icons people"
                        src="{{ asset('assets/frontend/images/offers/mobile-booking/adult.webp') }}">
                    {!! $translation[$lang]['adults'] !!} <button class="btn dropdown-toggle" type="button"
                        id="adultSelectionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <p id="adultCount" class="reservation-titles adult-count">2 </p>
                        <img class="drop-icon"
                            src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                    </button>
                    <ul class="dropdown-menu adult-selection-dropdown-menu " aria-labelledby="adultSelectionDropdown">


                    </ul>
                </div>
                <div class="dropdown">
                    <button class=" child-dropdown" id="childSelectionDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {!! $translation[$lang]['children'] !!}
                        <p id="childCount" class="reservation-titles child-count">0</p>

                        <img class="drop-icon"
                            src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                    </button>
                    <ul class="dropdown-menu offers-child-dropdown-menu " aria-labelledby="childSelectionDropdown">


                    </ul>
                </div>
                <div class="child-collapse-wrapper">


                    <div class="childCollapseWrapper">
                        <div class="childAgeItem child-age-item-1">

                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="childAge1Btn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>{!! $translation[$lang]['child-age-1'] !!}</p>
                                    <p id="childAge1" class="reservation-titles child-age-count">0</p>
                                    <img class="drop-icon"
                                        src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                </button>
                                <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                                    aria-labelledby="childAge1Btn">
                                    <li class="dropdown-item people-item disabled">
                                        <p class=" p-15 dropdown-text child-age-text">{!! $translation[$lang]['select-age-1'] !!}</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="childAgeItem child-age-item-2">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="childAge2Btn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>{!! $translation[$lang]['child-age-2'] !!}</p>

                                    <p id="childAge2" class="reservation-titles child-age-count">0</p>
                                    <img class="drop-icon"
                                        src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                </button>
                                <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end"
                                    aria-labelledby="childAge2Btn">
                                    <li class="dropdown-item people-item disabled">
                                        <p class=" p-15 dropdown-text child-age-text">{!! $translation[$lang]['select-age-2'] !!}</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="childAgeItem child-age-item-3">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="childAge3Btn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>{!! $translation[$lang]['child-age-3'] !!}</p>

                                    <p id="childAge3" class="reservation-titles child-age-count">0</p>
                                    <img class="drop-icon"
                                        src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                </button>
                                <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                                    aria-labelledby="childAge3Btn">
                                    <li class="dropdown-item people-item disabled">
                                        <p class=" p-15 dropdown-text child-age-text">{!! $translation[$lang]['select-age-3'] !!}</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="childAgeItem child-age-item-4">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="childAge4Btn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>{!! $translation[$lang]['child-age-4'] !!}</p>

                                    <p id="childAge4" class="reservation-titles child-age-count">0</p>
                                    <img class="drop-icon"
                                        src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                </button>
                                <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                                    aria-labelledby="childAge4Btn">
                                    <li class="dropdown-item people-item disabled">
                                        <p class=" p-15 dropdown-text child-age-text">{!! $translation[$lang]['select-age-4'] !!}</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="childAgeItem child-age-item-5">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="childAge5Btn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>{!! $translation[$lang]['child-age-5'] !!}</p>

                                    <p id="childAge5" class="reservation-titles child-age-count">0</p>
                                    <img class="drop-icon"
                                        src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                </button>
                                <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                                    aria-labelledby="childAge5Btn">
                                    <li class="dropdown-item people-item disabled">
                                        <p class=" p-15 dropdown-text child-age-text">{!! $translation[$lang]['select-age-5'] !!}</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="childAgeItem child-age-item-6">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="childAge6Btn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>{!! $translation[$lang]['child-age-6'] !!}</p>

                                    <p id="childAge6" class="reservation-titles child-age-count">0</p>
                                    <img class="drop-icon"
                                        src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-mobile-arrow.svg') }}">

                                </button>
                                <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end "
                                    aria-labelledby="childAge6Btn">
                                    <li class="dropdown-item people-item disabled">
                                        <p class=" p-15 dropdown-text child-age-text">{!! $translation[$lang]['select-age-6'] !!}</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="booking-modal-close modal-close-family"
                    data-bs-dismiss="modal">{!! $translation[$lang]['done'] !!}</button>
            </div>
        </div>
    </div>
</div>
{{--- MOBILE BOOKING SECTION --}}
<section class="mobile-booking-section">
    <div class="reservation-form  ">
        <p class="reservation-form-mobile-title">{!! $translation[$lang]['reservationform-mobile-title'] !!}</p>

        {{-- DATE SELECTION SECTION --}}
        <div class="dateInputDiv" name="daterange" id="calendarRange">
            <img class="dropdown-icons dropdown-icon-mobile"
                src="{{ asset('assets/frontend/images/offers/mobile-booking/mobile-booking-calendar.svg') }}">
            <img class="dropdown-icons dropdown-icon-desktop"
                src="{{ asset('assets/frontend/images/offers/mobile-booking/calendar.webp') }}">

            <p class=" p-16 reservation-titles">
                <span id="check-in-span" class="checkInSpan">{!! $translation[$lang]['check-in'] !!}</span> — <span
                    id="check-out-span" class="checkOutSpan">
                    <span class="conditional">{!! $translation[$lang]['check-out'] !!} </span> </span>
            </p>

        </div>
        <div class="empty-booking-div"></div>
        {{-- NUMBER OF PEOPLE SELECTION SECTION --}}

        <section class="people-selection-mobile">
            <button type="button " class="travellers-btn" data-bs-toggle="modal"
                data-bs-target="#peopleSelectionModal">
                <img class="traveller-icon"
                    src="{{ asset('assets/frontend/images/offers/mobile-booking/travellers-icon.svg') }}">
                    {!! $translation[$lang]['travellers'] !!}
            </button>

        </section>


        <a href="https://portnature.rezervasyonal.com/" target="_blank" class=" booking-btn booking-hero-btn"
            type="button">
            <img class="drop-icon"
                src="{{ asset('assets/frontend/images/offers/mobile-booking/booking-btn-mobile.svg') }}">

            <p class=" p-16 reservation-titles">

                {!! $translation[$lang]['book-now'] !!} </p>
        </a>
    </div>
</section>

{{--- MOBILE BOOKING SECTION END --}}
