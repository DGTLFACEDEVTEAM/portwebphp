<!-- Header -->
<header>
    <nav class="navbar navbar-expand-sm" id="navbar">
        <div class="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-icon" href="{{ route('de-homepage') }}"><img
                        src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="logo" /> </a>
                <div class="menubar ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('de-accommodation') }}"
                            aria-expanded="false">ZIMMER</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item"
                                    href="{{ route('de-family-rooms') }}">Familienzimmer</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-kingsuit-rooms') }}">King Suite</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-standard-rooms') }}">Standardzimmer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('de-kids-concepts') }}"
                            aria-expanded="false">KINDERKONZEPT</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-mini-club') }}">Mini Club</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('de-aquapark') }}">Aquapark</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('de-special-offers') }}" aria-expanded="false">ANGEBOTE
                            2024</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('de-food-drink') }}"
                            aria-expanded="false">SPEISEN & GETRÄNKE</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-alacarte-restaurants') }}">A'La
                                    Carte</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-bar-cafe') }}">Bars & Cafés</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-main-restaurant') }}">Hauptrestaurant</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('de-davidoff-cafe') }}">Davidoff Kafe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('de-entertainment') }}"
                            aria-expanded="false">UNTERHALTUNG</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-concert') }}">Konzerte</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-activity') }}">Aktivitäten</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-beach') }}">Strand</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('de-contacts') }}" aria-expanded="false">KONTAKTE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('de-spa') }}" aria-expanded="false">SPA</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-spa') }}">SPA</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-indoor-pool') }}">Innenpool</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('de-meeting-congress') }}"
                            aria-expanded="false">TAGUNG & KONGRESS</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item"
                                    href="{{ route('de-meeting-congress') }}#thermessos">Thermessos</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('de-meeting-congress') }}#aspendos">Aspendos</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-meeting-congress') }}#perge">Perge</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-meeting-congress') }}#olympos">Olympos</a>
                            </li>
                        </ul>
                    </li>

                    {{-- Language parts --}}
                    @yield('header-lang')

                    <li class="nav-item">
                        <a class="nav-link bookNowBtn" href="https://portnature.rezervasyonal.com/"
                            target="_blank">Jetzt buchen</a>
                    </li>
                </div>

            </div>
        </div>
    </nav>
    <div class="hamburgerMenu" id="navbar3">
        <div class="mobileHeader">
            <div class="menuLeft">
                <span id="offcanvasOpenBtn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                    aria-controls="offcanvasTop">
                    <img loading="lazy" style="width: 20px!important;height: 20px!important;" class="headerSvg"
                        src="{{ asset('assets/frontend/images/hamburger.svg') }}" alt="Open Mobile Menu" />
                </span>
                <a class="roomlink" href="{{ route('homepage') }}">
                    <img loading="lazy" class="mobile-header-logo"
                        src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="mobileLogo" />
                </a>
            </div>
            <div class="menuRight">
                <div class="whatsappLogo">
                    <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank">
                        <img class="headerSvg" src="{{ asset('assets/frontend/images/whatsappwhite.svg') }}"
                            alt="whatsappLogo" />
                    </a>
                </div>
                <div class="mobilePhoneLogo">
                    <a href="tel:+902427310707">
                        <img class="headerSvg" src="{{ asset('assets/frontend/images/telephonewhite.svg') }}"
                            alt="telIcon" />
                    </a>
                </div>

                {{-- Language parts --}}
                @yield('header-lang')

            </div>
        </div>

        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-top-section">
                <div class="menuLeft">
                    <span data-bs-dismiss="offcanvas" aria-label="Close" id="offcanvasCloseBtn">
                        <img style="height: 20px!important;width: 20px!important" class="offcanvasClose"
                            src="{{ asset('assets/frontend/images/offcanvasclose.svg') }}" alt="closebutton" />
                    </span>
                    <a class="roomlink" href="{{ route('de-homepage') }}">
                        <img class="offcanvasLogo lazyload"
                            data-src="{{ asset('assets/frontend/images/logoMobileHeader.svg') }}" alt="mobileLogo" />
                    </a>
                </div>
                <div class="menuRight">
                    <div class="whatsappLogo">
                        <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data="
                            target="_blank">
                            <img class="headerSvg" src="{{ asset('assets/frontend/images/whatsappgray.svg') }}"
                                alt="wpgray" />
                        </a>
                    </div>
                    <div class="mobilePhoneLogo">
                        <a href="tel:+902427310707">
                            <img class="headerSvg" src="{{ asset('assets/frontend/images/phoneGray.svg') }}"
                                alt="phonegray" />
                        </a>
                    </div>

                    {{-- Language parts --}}
                    @yield('header-lang')

                </div>

            </div>
            <div class="offcanvas-menu-section">
                <div class="accordion" id="accordionMobileMenu">
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse"
                            data-link="{{ route('de-accommodation') }}" data-bs-target="#accomdation" type="button"
                            aria-expanded="false" aria-controls="accomdation">
                            ZIMMER
                            <img class="arrow" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse"
                            id="accomdation">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('de-family-rooms') }}">Familienzimmer</a>
                                <a class="subLink" href="{{ route('de-kingsuit-rooms') }}">King Suite Room</a>
                                <a class="subLink" href="{{ route('de-standard-rooms') }}">Standardzimmer</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse"
                            data-link="{{ route('de-kids-concepts') }}" data-bs-target="#kidsconcept" type="button"
                            aria-expanded="false" aria-controls="kidsconcept">
                            KİNDERKONZEPT
                            <img class="arrow" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse"
                            id="kidsconcept">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('de-mini-club') }}">Mini Club</a>
                                <a class="subLink" href="{{ route('de-aquapark') }}">Aquapark</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('de-special-offers') }}">
                            ANGEBOTE 2024
                        </a>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse"
                            data-link="{{ route('de-food-drink') }}" data-bs-target="#foodDrink" type="button"
                            aria-expanded="false" aria-controls="foodDrink">
                            SPEISEN & GETRÄNKE
                            <img class="arrow" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse"
                            id="foodDrink">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('de-alacarte-restaurants') }}">A'La Carte</a>
                                <a class="subLink" href="{{ route('de-bar-cafe') }}">Bars & Cafés</a>
                                <a class="subLink" href="{{ route('de-main-restaurant') }}">Hauptrestaurant</a>
                                <a class="subLink" href="{{ route('de-davidoff-cafe') }}">Davidoff Kafe</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse"
                            data-link="{{ route('de-entertainment') }}" data-bs-target="#entertainment"
                            type="button" aria-expanded="false" aria-controls="entertainment">
                            UNTERHALTUNG
                            <img class="arrow" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse"
                            id="entertainment">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('de-concert') }}">Konzerte</a>
                                <a class="subLink" href="{{ route('de-activity') }}">Aktivitäten</a>
                                <a class="subLink" href="{{ route('de-beach') }}">Strand</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop ">
                        <a class="mainLink " href="{{ route('de-contacts') }}">
                            KONTAKTE
                        </a>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse"
                            data-link="{{ route('de-spa') }}" data-bs-target="#spa" type="button"
                            aria-expanded="false" aria-controls="spa">
                            SPA
                            <img class="arrow" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse"
                            id="spa">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('de-spa') }}">SPA</a>
                                <a class="subLink" href="{{ route('de-indoor-pool') }}">Innenpool</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse"
                            data-link="{{ route('de-meeting-congress') }}" data-bs-target="#meetingCongress"
                            type="button" aria-expanded="false" aria-controls="meetingCongress">
                            TAGUNG & KONGRESS
                            <img class="arrow" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse"
                            id="meetingCongress">
                            <div class="offcanvas-card">
                                <a class="subLink"
                                    href="{{ route('de-meeting-congress') }}#thermessos">Thermessos</a>
                                <a class="subLink" href="{{ route('de-meeting-congress') }}#aspendos">Aspendos</a>
                                <a class="subLink" href="{{ route('de-meeting-congress') }}#perge">Perge</a>
                                <a class="subLink" href="{{ route('de-meeting-congress') }}#olympos">Olympos</a>
                            </div>
                        </div>
                    </div>
                    </article>
                </div>
                <div class="mobileSocialIcon">
                    <a href="https://www.youtube.com/user/portnaturehotel" target="_blank">
                        <span>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/youtubegray.svg') }}"
                                alt="youtubegray" />
                        </span>
                    </a>
                    <a href="https://www.facebook.com/portnature" target="_blank">
                        <span>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/facebookgray.svg') }}"
                                alt="facebook" />
                        </span>
                    </a>
                    <a href="https://www.facebook.com/portnature" target="_blank">
                        <span>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/instagramgray.svg') }}"
                                alt="instagram" />
                        </span>
                    </a>
                    <a href="https://vk.com/publicportnature" target="_blank">
                        <span>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/vkgray.svg') }}"
                                alt="vk" />
                        </span>
                    </a>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"
                        target="_blank">
                        <span>
                            <img class="lazyload"
                                data-src="{{ asset('assets/frontend/images/tripadvisorgray.svg') }}"
                                alt="tripadvisor" />
                        </span>
                    </a>

                </div>
            </div>
        </div>
</header>
<!-- Header End -->
