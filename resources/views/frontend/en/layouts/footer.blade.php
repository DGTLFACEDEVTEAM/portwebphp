{{-- Bottom Fixed Book Now --}}
<a class="fixedBookNow" href="https://portnature.rezervasyonal.com/" target="_blank">
    Book Now
</a>
{{-- Footer --}}
<footer>
    <div class="row footerWrapper">
        <div class="col-12 col-lg-6 footerDetails">
            <div class="row footerChange">
                <div class="col-lg-4 footerCol">
                    <div class="footerLocation footerStart">
                        <img class="specialSvg lazyload" loading="lazy"
                            src="{{ asset('assets/frontend/images/footerlocation.svg') }}" alt="address" />
                        <article>
                            <p>Boğazkent</p>
                            <span>Belek · Antalya · Turkey</span>
                        </article>
                    </div>
                    <div class="footerButtons">
                        <a href="https://portnature.rezervasyonal.com/" target="_blank"
                            class="reverseButton">Reservation</a>
                        <a href="tel:+902427310707">+90 (242) 731 07 07</a>
                        @include('components.whatsapp.footerWhatsapp')
                    </div>
                </div>
                <div class="col-lg-8 footerCenter">
                    <div class="footerIcons">
                        <a href="https://www.youtube.com/user/portnaturehotel" target="_blank">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/youtubewhite.svg') }}"
                                alt="youtube" class="specialSvg lazyload">
                        </a>
                        <a href="https://www.facebook.com/portnature" target="_blank">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/facebookwhite.svg') }}"
                                alt="facebook" class="specialSvg lazyload">
                        </a>
                        <a href="https://www.facebook.com/portnature" target="_blank">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/instagramwhite.svg') }}"
                                alt="youtube" class="specialSvg lazyload">
                        </a>
                        <a href="https://vk.com/publicportnature" target="_blank">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/vkwhite.svg') }}" alt="vk"
                                class="specialSvg lazyload">
                        </a>
                        <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"
                            target="_blank">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/tripadvisorwhite.svg') }}"
                                alt="tripadvisor" class="specialSvg lazyload">
                        </a>
                    </div>
                    <img class="lazyload" loading="lazy" alt="logo"
                        src="{{ asset('assets/frontend/images/footerLogo.webp') }}" />
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 footerRight">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-3 p-0">
                    <article class="footerText">
                        <a href="{{ route('accommodation') }}" class="footerHeader">Rooms</a>
                        <a href="{{ route('family-rooms') }}" class="footerSub">Family Room</a>
                        <a href="{{ route('kingsuit-rooms') }}" class="footerSub">King Suite</a>
                        <a href="{{ route('standard-rooms') }}" class="footerSub">Standard Rooms</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3 p-0">
                    <article class="footerText">
                        <a href="{{ route('entertainment') }}" class="footerHeader">Entertainment</a>
                        <a href="{{ route('concert') }}" class="footerSub">Concerts</a>
                        <a href="{{ route('activity') }}" class="footerSub">Activities</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3 p-0">
                    <article class="footerText">
                        <a href="{{ route('kids-concepts') }}" class="footerHeader">Kids Concept</a>
                        <a href="{{ route('mini-club-alacarte') }}" class="footerSub">Mini A'la Carte</a>
                        <a href="{{ route('aquapark') }}" class="footerSub">Aquapark</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3 p-0">
                    <article class="footerText">
                        <a href="{{ route('special-offers') }}" class="footerHeader">Offers 2024</a>
                        <a href="{{ route('special-offers') }}" class="footerSub">Special Offers</a>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3 col-md-3 p-0">
                    <article class="footerText">
                        <a href="{{ route('food-drink') }}" class="footerHeader">Food & Drinks</a>
                        <a href="{{ route('alacarte-restaurants') }}" class="footerSub">A'la Carte</a>
                        <a href="{{ route('bar-cafe') }}" class="footerSub">Bars & Cafes</a>
                        <a href="{{ route('main-restaurant') }}" class="footerSub">Main Restaurants</a>
                        <a href="{{ route('davidoff-cafe') }}" class="footerSub">Davidoff Cafe</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3 p-0">
                    <article class="footerText">
                        <a href="{{ route('meeting-congress') }}" class="footerHeader">Meeting</a>
                        <a href="{{ route('meeting-congress') }}#perge" class="footerSub">Perge</a>
                        <a href="{{ route('meeting-congress') }}#olympos" class="footerSub">Olympos</a>
                        <a href="{{ route('meeting-congress') }}#aspendos" class="footerSub">Aspendos</a>
                        <a href="{{ route('meeting-congress') }}#thermessos" class="footerSub">Thermessos</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3 p-0">
                    <article class="footerText">
                        <a href="{{ route('contacts') }}" class="footerHeader">Corporate</a>
                        <a href="{{ route('en-blog') }}" class="footerSub">Blog</a>
                        <a href="{{ route('data-policy') }}" class="footerSub">KVKK</a>
                        <a href="{{ route('contacts') }}" class="footerSub">Contacts</a>
                        <a href="{{ route('tr-politikalarimiz') }}" class="footerSub">Our Policies</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3 p-0">
                    <article class="footerText">
                        <a href="{{ route('spa') }}" class="footerHeader">Spa</a>
                        <a href="{{ route('spa') }}" class="footerSub">Spa & Wellness</a>
                        <a href="{{ route('indoor-pool') }}" class="footerSub">Indoor Pool</a>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="row aboveFooterTextLine">
        <div class="col-12 col-md-6">
            <span class="footerCompany">
                Port Nature Resort © Luxury Resort Hotel & SPA
            </span>
        </div>
        <div class="col-12 col-md-6 text-end">
            <a href="https://dgtlface.com" target="_blank" rel="noopener noreferrer"
                class="footerCompany mobileCompany">
                Powered by © <span>DGTLFACE</span>
            </a>
        </div>
    </div>
</footer>
{{-- Footer End --}}

{{-- Sticky Contact Button --}}

<div class="floating-menu">
    <a href="tel:+902427310707" class="floating-menu-open-button">
        <img class="phone-volume" src="{{ asset('assets/frontend/images/phone-volume.svg') }}" alt="Phone">
    </a>
    {{-- <input type="checkbox" href="#" class="floating-menu-open" name="floating-menu-open" id="floating-menu-open"/>
    <label class="floating-menu-open-button" for="floating-menu-open">
     <img class="phone-volume"src="{{ asset('assets/frontend/images/phone-volume.svg') }}" alt="phone-icon"/>
      <img class="close-mark"src="{{ asset('assets/frontend/images/close-icon.svg') }}" alt="Close Icon"/>
    </label>
    <a class="floating-menu-item" href="tel:+902427310707"> <img class="phone-bubble"src="{{ asset('assets/frontend/images/phone-volume.svg') }}" alt="Whatsapp Icon"/>
        <div class="floating-item-text">
            <div class="speech-bubble"> Telefon</div>
        </div>
    </a>
    <a class="floating-menu-item " href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank"> <img class="whatsapp-bubble"src="{{ asset('assets/frontend/images/whatsapp.svg') }}" alt="Whatsapp Icon"/>
        <div class="floating-item-text">
            <div class="speech-bubble"> Whatsapp</div>
        </div>
    </a> --}}
</div>
