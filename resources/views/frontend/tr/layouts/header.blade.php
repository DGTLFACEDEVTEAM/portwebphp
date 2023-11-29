{{-- Header --}}
<header>
    <nav class="navbar navbar-expand-sm" id="navbar">
        <div class="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-icon" href="{{ route('tr-homepage') }}"><img src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="logo"/> </a>
                <div class="menubar ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('tr-accommodation') }}"
                           aria-expanded="false">Konaklama</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-family-rooms') }}">Aile Odaları</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-kingsuit-rooms') }}">King Süit</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-standard-rooms') }}">Standart Odalar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('tr-kids-concepts') }}"
                           aria-expanded="false">Çocuk Konsepti</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-mini-club') }}">Mini Club</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-aquapark') }}">Su Parkı</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('tr-special-offers') }}" aria-expanded="false">2024 Fırsatları</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('tr-food-drink') }}"
                           aria-expanded="false">Yeme & İçme</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-alacarte-restaurants') }}">A'La Carte</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-bar-cafe') }}">Barlar & Kafeler</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-main-restaurant') }}">Ana Restoran</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-davidoff-cafe') }}">Davidoff Kafe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('tr-entertainment') }}"
                           aria-expanded="false">Eğlenceler</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-concert') }}">Konserler</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-activity') }}">Aktiviteler</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-beach') }}">Plaj</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('tr-contacts') }}" aria-expanded="false">İletişim</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('tr-spa') }}"
                           aria-expanded="false">SPA</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-spa') }}">Spa Merkezi</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-indoor-pool') }}">Kapalı Havuz</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('tr-meeting-congress') }}"
                           aria-expanded="false">Toplantı & Kongre</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-meeting-congress') }}#thermessos">Thermessos</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-meeting-congress') }}#aspendos">Aspendos</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-meeting-congress') }}#perge">Perge</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-meeting-congress') }}#olympos">Olympos</a></li>
                        </ul>
                    </li>
                    
                    {{-- Language parts --}}
                    @yield('header-lang')


                    <li class="nav-item">
                        <a class="nav-link bookNowBtn" href="https://portnature.rezervasyonal.com/" target="_blank">Rezervasyon Yap</a>
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
                    <img class="headerSvg" src="{{ asset('assets/frontend/images/hamburger.svg') }}" alt="Open Mobile Menu"/>
                </span>
                <a class="roomlink" href="{{ route('homepage') }}">
                    <img loading="lazy" class="mobile-header-logo" src="{{ asset('assets/frontend/images/logo-port-small.svg') }}"
                        alt="mobileLogo" />
                </a>
            </div>
            <div class="menuRight">
                <div class="whatsappLogo">
                    <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank" target="_blank">
                        <img class="headerSvg" src="{{ asset('assets/frontend/images/whatsappwhite.svg') }}" alt="whatsappLogo"/>
                    </a>
                </div>
                <div class="mobilePhoneLogo">
                    <a href="tel:+902427310707">
                        <img class="headerSvg" src="{{ asset('assets/frontend/images/telephonewhite.svg') }}" alt="telIcon"/>
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
                    <img class="offcanvasClose" src="{{ asset('assets/frontend/images/offcanvasclose.svg') }}" alt="closebutton"/>
                </span>
                    <a class="roomlink" href="{{ route('tr-homepage') }}">
                        <img class="offcanvasLogo lazyload" data-src="{{ asset('assets/frontend/images/logoMobileHeader.svg') }}" alt="mobileLogo"/>
                    </a>
                </div>
                <div class="menuRight">
                    <div class="whatsappLogo">
                        <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank" target="_blank">
                            <img class="headerSvg" src="{{ asset('assets/frontend/images/whatsappgray.svg') }}" alt="wpgray"/>
                        </a>
                    </div>
                    <div class="mobilePhoneLogo">
                        <a href="tel:+902427310707" target="_blank">
                            <img class="headerSvg" src="{{ asset('assets/frontend/images/phoneGray.svg') }}" alt="phonegray"/>
                        </a>
                    </div>
                    
                    {{-- Language parts --}}
                    @yield('header-lang')


                </div>

            </div>
            <div class="offcanvas-menu-section">
                <div class="accordion" id="accordionMobileMenu">
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('tr-accommodation') }}" data-bs-target="#accomdation" type="button"
                           aria-expanded="false" aria-controls="accomdation">
                            Konaklama
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="accomdation">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('tr-family-rooms') }}">Aile Odaları</a>
                                <a class="subLink" href="{{ route('tr-kingsuit-rooms') }}">King Süit</a>
                                <a class="subLink" href="{{ route('tr-standard-rooms') }}">Standart Odalar</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('tr-kids-concepts') }}" data-bs-target="#kidsconcept" type="button"
                           aria-expanded="false" aria-controls="kidsconcept">
                            Çocuk Konsepti
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="kidsconcept">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('tr-mini-club') }}">Mini Club</a>
                                <a class="subLink" href="{{ route('tr-aquapark') }}">Su Parkı</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop ">
                        <a class="mainLink " href="{{ route('tr-special-offers') }}">
                            2024 Fırsatları
                        </a>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('tr-food-drink') }}" data-bs-target="#foodDrink" type="button"
                           aria-expanded="false" aria-controls="foodDrink">
                            Yeme & İçme
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="foodDrink">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('tr-alacarte-restaurants') }}">A'La Carte</a>
                                <a class="subLink" href="{{ route('tr-bar-cafe') }}">Barlar & Kafeler</a>
                                <a class="subLink" href="{{ route('tr-main-restaurant') }}">Ana Restoran</a>
                                <a class="subLink" href="{{ route('tr-davidoff-cafe') }}">Davidoff Kafe</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('tr-entertainment') }}" data-bs-target="#entertainment" type="button"
                           aria-expanded="false" aria-controls="entertainment">
                            Eğlenceler
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="entertainment">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('tr-concert') }}">Konserler</a>
                                <a class="subLink" href="{{ route('tr-activity') }}">Aktiviteler</a>
                                <a class="subLink" href="{{ route('tr-beach') }}">Plaj</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop ">
                        <a class="mainLink " href="{{ route('tr-contacts') }}">
                            İletişim
                        </a>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('tr-spa') }}" data-bs-target="#spa" type="button" aria-expanded="false"
                           aria-controls="spa">
                            SPA
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="spa">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('tr-spa') }}">Spa Merkezi</a>
                                <a class="subLink" href="{{ route('tr-indoor-pool') }}">Kapalı Havuz</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('tr-meeting-congress') }}" data-bs-target="#meetingCongress" type="button"
                           aria-expanded="false" aria-controls="meetingCongress">
                            Toplantı & Kongre
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="meetingCongress">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('tr-meeting-congress') }}#thermessos">Thermessos</a>
                                <a class="subLink" href="{{ route('tr-meeting-congress') }}#aspendos">Aspendos</a>
                                <a class="subLink" href="{{ route('tr-meeting-congress') }}#perge">Perge</a>
                                <a class="subLink" href="{{ route('tr-meeting-congress') }}#olympos">Olympos</a>
                            </div>
                        </div>
                    </div>
                </article>
                </div><div class="mobileSocialIcon">
                    <a href="https://www.youtube.com/user/portnaturehotel" target="_blank">
                        <span>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/youtubegray.svg') }}" alt="youtubegray"/>
                        </span>
                    </a>
                    <a href="https://www.facebook.com/portnature" target="_blank">
                        <span>
                           <img class="lazyload" data-src="{{ asset('assets/frontend/images/facebookgray.svg') }}" alt="facebook"/>
                        </span>
                    </a>
                    <a href="https://www.facebook.com/portnature" target="_blank">
                        <span>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/instagramgray.svg') }}" alt="instagram"/>
                        </span>
                    </a>
                    <a href="https://vk.com/publicportnature" target="_blank">
                        <span>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/vkgray.svg') }}" alt="vk"/>
                        </span>
                    </a>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html" target="_blank">
                        <span>
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/tripadvisorgray.svg') }}" alt="tripadvisor"/>
                        </span>
                    </a>

            </div>
        </div>
    </div>
</header>
{{-- Header End --}}