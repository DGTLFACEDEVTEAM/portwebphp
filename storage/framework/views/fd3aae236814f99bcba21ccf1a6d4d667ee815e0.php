<div class="booking topBooking" id="blogBooking">
    <label for="checkin"></label>
    <input id="checkin" name="checkin" data-defaultDate="today" placeholder="Select Date.." title="Check-in"
        value="Check-in">
    <label for="checkout"></label>
    <input id="checkout" name="checkout" data-defaultDate="today" placeholder="Select Date.." title="Check-out"
        value="Check-Out">
    <div class="dropdown">
        <div class="guestDiv" type="button" id="guestMenuDropdown" data-bs-toggle="dropdown"
            data-bs-auto-close="outside">
            <span class="guests">Guests</span>
        </div>
        <div class="guestMenu dropdown-menu" aria-labelledby="guestMenuDropdown">
            <div class="adultCounter dropdown-item dropdown">
                <button class="dropdown-toggle" type="button" id="adultSelectionDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <p class="guest-title">Adult(s)</p>
                    <p id="adultCount" class="reservation-titles adult-count">3 </p>
                    <img loading="lazy" alt="icon"
                        src="<?php echo e(asset('assets/frontend/images/home/booking-arrow.svg')); ?>" />
                </button>
                <ul class="dropdown-menu adult-selection-dropdown-menu dropdown-menu-end"
                    aria-labelledby="adultSelectionDropdown">
                    <li class="dropdown-item people-item adult-item" value="1"> 1 </li>
                    <li class="dropdown-item people-item adult-item" value="2"> 2 </li>
                    <li class="dropdown-item people-item adult-item" value="3"> 3 </li>
                    <li class="dropdown-item people-item adult-item" value="4"> 4 </li>
                    <li class="dropdown-item people-item adult-item" value="5"> 5 </li>
                </ul>
            </div>
            <div class="childCounter dropdown-item dropdown">
                <button class="dropdown-toggle" type="button" id="childSelectionDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <p class="guest-title">Child(ren)</p>
                    <p id="childCount">0 </p>
                    <img loading="lazy" alt="icon"
                        src="<?php echo e(asset('assets/frontend/images/home/booking-arrow.svg')); ?>" />
                </button>
                <ul class="dropdown-menu child-selection-dropdown-menu dropdown-menu-end"
                    aria-labelledby="childSelectionDropdown">
                    <li class="dropdown-item people-item child-item" value="1"> 1 </li>
                    <li class="dropdown-item people-item child-item" value="2"> 2 </li>
                    <li class="dropdown-item people-item child-item" value="3"> 3 </li>
                    <li class="dropdown-item people-item child-item" value="4"> 4 </li>
                </ul>
            </div>
            <div class="childCollapseWrapper">
                <div class="childAgeItem child-age-item-1 dropdown">
                    <button class="dropdown-toggle" type="button" id="childAge1Btn" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p class="guest-title">Child's age 1</p>
                        <p id="childAge1" class="reservation-titles child-age-count">0</p>
                        <img loading="lazy" alt="icon"
                            src="<?php echo e(asset('assets/frontend/images/home/booking-arrow.svg')); ?>" />
                    </button>
                    <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end" aria-labelledby="childAge1Btn">
                        <li class="dropdown-item people-item disabled">
                            <p class=" p-15 dropdown-text child-age-text">Select age 1</p>
                        </li>
                        <li class="dropdown-item people-item child-age-item" value="0"> 0 </li>
                        <li class="dropdown-item people-item child-age-item" value="1"> 1 </li>
                        <li class="dropdown-item people-item child-age-item" value="2"> 2 </li>
                        <li class="dropdown-item people-item child-age-item" value="3"> 3 </li>
                        <li class="dropdown-item people-item child-age-item" value="4"> 4 </li>
                        <li class="dropdown-item people-item child-age-item" value="5"> 5 </li>
                        <li class="dropdown-item people-item child-age-item" value="6"> 6 </li>
                        <li class="dropdown-item people-item child-age-item" value="7"> 7 </li>
                        <li class="dropdown-item people-item child-age-item" value="8"> 8 </li>
                        <li class="dropdown-item people-item child-age-item" value="9"> 9 </li>
                        <li class="dropdown-item people-item child-age-item" value="10"> 10 </li>
                        <li class="dropdown-item people-item child-age-item" value="11"> 11 </li>
                        <li class="dropdown-item people-item child-age-item" value="12"> 12 </li>
                    </ul>
                </div>
                <div class="childAgeItem child-age-item-2 dropdown">
                    <button class="dropdown-toggle" type="button" id="childAge2Btn" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p class="guest-title">Child's age 2</p>
                        <p id="childAge2" class="reservation-titles child-age-count">0</p>
                        <img class="lazyload" alt="icon" loading="lazy"
                            src="<?php echo e(asset('assets/frontend/images/home/booking-arrow.svg')); ?>" />
                    </button>
                    <ul class="dropdown-menu child-age-dropdown-menu dropdown-menu-end"
                        aria-labelledby="childAge2Btn">
                        <li class="dropdown-item people-item disabled">
                            <p class=" p-15 dropdown-text child-age-text">Select age 2</p>
                        </li>
                        <li class="dropdown-item people-item child-age-item" value="0"> 0 </li>
                        <li class="dropdown-item people-item child-age-item" value="1"> 1 </li>
                        <li class="dropdown-item people-item child-age-item" value="2"> 2 </li>
                        <li class="dropdown-item people-item child-age-item" value="3"> 3 </li>
                        <li class="dropdown-item people-item child-age-item" value="4"> 4 </li>
                        <li class="dropdown-item people-item child-age-item" value="5"> 5 </li>
                        <li class="dropdown-item people-item child-age-item" value="6"> 6 </li>
                        <li class="dropdown-item people-item child-age-item" value="7"> 7 </li>
                        <li class="dropdown-item people-item child-age-item" value="8"> 8 </li>
                        <li class="dropdown-item people-item child-age-item" value="9"> 9 </li>
                        <li class="dropdown-item people-item child-age-item" value="10"> 10 </li>
                        <li class="dropdown-item people-item child-age-item" value="11"> 11 </li>
                        <li class="dropdown-item people-item child-age-item" value="12"> 12 </li>
                    </ul>
                </div>
                <div class="childAgeItem child-age-item-3 dropdown">
                    <button class="dropdown-toggle" type="button" id="childAge3Btn" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p class="guest-title">Child's age 3</p>
                        <p id="childAge3" class="reservation-titles child-age-count">0</p>
                        <img class="lazyload" loading="lazy" alt="icon"
                            src="<?php echo e(asset('assets/frontend/images/home/booking-arrow.svg')); ?>" />
                    </button>
                    <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                        aria-labelledby="childAge3Btn">
                        <li class="dropdown-item people-item disabled">
                            <p class=" p-15 dropdown-text child-age-text">Select age 3</p>
                        </li>
                        <li class="dropdown-item people-item child-age-item" value="0"> 0 </li>
                        <li class="dropdown-item people-item child-age-item" value="1"> 1 </li>
                        <li class="dropdown-item people-item child-age-item" value="2"> 2 </li>
                        <li class="dropdown-item people-item child-age-item" value="3"> 3 </li>
                        <li class="dropdown-item people-item child-age-item" value="4"> 4 </li>
                        <li class="dropdown-item people-item child-age-item" value="5"> 5 </li>
                        <li class="dropdown-item people-item child-age-item" value="6"> 6 </li>
                        <li class="dropdown-item people-item child-age-item" value="7"> 7 </li>
                        <li class="dropdown-item people-item child-age-item" value="8"> 8 </li>
                        <li class="dropdown-item people-item child-age-item" value="9"> 9 </li>
                        <li class="dropdown-item people-item child-age-item" value="10"> 10 </li>
                        <li class="dropdown-item people-item child-age-item" value="11"> 11 </li>
                        <li class="dropdown-item people-item child-age-item" value="12"> 12 </li>
                    </ul>
                </div>
                <div class="childAgeItem child-age-item-4 dropdown">
                    <button class="dropdown-toggle" type="button" id="childAge4Btn" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p class="guest-title">Child's age 4</p>
                        <p id="childAge4" class="reservation-titles child-age-count">0</p>
                        <img class="lazyload" loading="lazy" alt="icon"
                            src="<?php echo e(asset('assets/frontend/images/home/booking-arrow.svg')); ?>" />
                    </button>
                    <ul class="dropdown-menu  child-age-dropdown-menu dropdown-menu-end"
                        aria-labelledby="childAge4Btn">
                        <li class="dropdown-item people-item disabled">
                            <p class=" p-15 dropdown-text child-age-text">Select age 4</p>
                        </li>
                        <li class="dropdown-item people-item child-age-item" value="0"> 0 </li>
                        <li class="dropdown-item people-item child-age-item" value="1"> 1 </li>
                        <li class="dropdown-item people-item child-age-item" value="2"> 2 </li>
                        <li class="dropdown-item people-item child-age-item" value="3"> 3 </li>
                        <li class="dropdown-item people-item child-age-item" value="4"> 4 </li>
                        <li class="dropdown-item people-item child-age-item" value="5"> 5 </li>
                        <li class="dropdown-item people-item child-age-item" value="6"> 6 </li>
                        <li class="dropdown-item people-item child-age-item" value="7"> 7 </li>
                        <li class="dropdown-item people-item child-age-item" value="8"> 8 </li>
                        <li class="dropdown-item people-item child-age-item" value="9"> 9 </li>
                        <li class="dropdown-item people-item child-age-item" value="10"> 10 </li>
                        <li class="dropdown-item people-item child-age-item" value="11"> 11 </li>
                        <li class="dropdown-item people-item child-age-item" value="12"> 12 </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="https://portnature.rezervasyonal.com/?currency=TRY" target="_blank" class="bookNow">Book
        Now</a>
</div>
<?php /**PATH /Users/jack/Documents/GitHub/portwebphp/resources/views/frontend/en/layouts/booking.blade.php ENDPATH**/ ?>