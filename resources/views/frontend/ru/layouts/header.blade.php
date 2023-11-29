{{-- Header RU--}}
<header>
    <nav class="navbar navbar-expand-sm" id="navbar">
        <div class="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-icon" href="{{ route('ru-homepage') }}"><img src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="logo"/> </a>
                <div class="menubar ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('ru-accommodation') }}"
                           aria-expanded="false">Номера</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-family-rooms') }}">Семейный</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-kingsuit-rooms') }}">King Suite</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-standard-rooms') }}">Стандарт</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('ru-kids-concepts') }}"
                           aria-expanded="false">Детский Концепт</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-mini-club') }}">Мини клуб </a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-aquapark') }}">Аквапарк</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('ru-special-offers') }}" aria-expanded="false">2024 Акции</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('ru-food-drink') }}"
                           aria-expanded="false">Еда & Напитки</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-alacarte-restaurants') }}">Рестораны A'La Carte</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-bar-cafe') }}">Бары & Кафе</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-main-restaurant') }}">Главный ресторан</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-davidoff-cafe') }}">Кафе Davidoff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('ru-entertainment') }}"
                           aria-expanded="false">Развлечения</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-concert') }}">Концерты</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-activity') }}">Мероприятия</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-beach') }}">Пляж</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('ru-contacts') }}" aria-expanded="false">Контакты</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('ru-spa') }}"
                           aria-expanded="false">Спа</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-spa') }}">Спа</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-indoor-pool') }}">Крытый бассейн</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('ru-meeting-congress') }}"
                           aria-expanded="false">Встречи & Конгресс</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-meeting-congress') }}#thermessos">Thermessos</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-meeting-congress') }}#aspendos">Aspendos</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-meeting-congress') }}#perge">Perge</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-meeting-congress') }}#olympos">Olympos</a></li>
                        </ul>
                    </li>

                    {{-- Language parts --}}
                    @yield('header-lang')

                    <li class="nav-item">
                        <a class="nav-link bookNowBtn" href="https://portnature.rezervasyonal.com/" target="_blank">ЗАБРОНИРОВАТЬ</a>
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
                    <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank">
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
                    <a class="roomlink" href="{{ route('ru-homepage') }}">
                        <img class="offcanvasLogo lazyload" data-src="{{ asset('assets/frontend/images/logoMobileHeader.svg') }}" alt="mobileLogo"/>
                    </a>
                </div>
                <div class="menuRight">
                    <div class="whatsappLogo">
                        <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank">
                            <img class="headerSvg" src="{{ asset('assets/frontend/images/whatsappgray.svg') }}" alt="wpgray"/>
                        </a>
                    </div>
                    <div class="mobilePhoneLogo">
                        <a href="tel:+902427310707">
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
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('ru-accommodation') }}" data-bs-target="#accomdation" type="button"
                           aria-expanded="false" aria-controls="accomdation">
                            Номера
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="accomdation">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('ru-family-rooms') }}">Семейный</a>
                                <a class="subLink" href="{{ route('ru-kingsuit-rooms') }}">King Suite</a>
                                <a class="subLink" href="{{ route('ru-standard-rooms') }}">Стандарт</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('ru-kids-concepts') }}" data-bs-target="#kidsconcept" type="button"
                           aria-expanded="false" aria-controls="kidsconcept">
                            Детский Концепт
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="kidsconcept">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('ru-mini-club') }}">Мини клуб</a>
                                <a class="subLink" href="{{ route('ru-aquapark') }}">Аквапарк</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop ">
                        <a class="mainLink " href="{{ route('ru-special-offers') }}">
                            2024 Акции
                        </a>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('ru-food-drink') }}" data-bs-target="#foodDrink" type="button"
                           aria-expanded="false" aria-controls="foodDrink">
                            Еда & Напитки
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="foodDrink">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('ru-alacarte-restaurants') }}">Рестораны A'La Carte</a>
                                <a class="subLink" href="{{ route('ru-bar-cafe') }}">Бары & Кафе</a>
                                <a class="subLink" href="{{ route('ru-main-restaurant') }}">Главный ресторан</a>
                                <a class="subLink" href="{{ route('ru-davidoff-cafe') }}">Кафе Davidoff</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('ru-entertainment') }}" data-bs-target="#entertainment" type="button"
                           aria-expanded="false" aria-controls="entertainment">
                            Развлечения
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="entertainment">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('ru-concert') }}">Концерты</a>
                                <a class="subLink" href="{{ route('ru-activity') }}">Мероприятия</a>
                                <a class="subLink" href="{{ route('ru-beach') }}">Пляж</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop ">
                        <a class="mainLink " href="{{ route('ru-contacts') }}">
                            Контакты
                        </a>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('ru-spa') }}" data-bs-target="#spa" type="button" aria-expanded="false"
                           aria-controls="spa">
                            Спа
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="spa">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('ru-spa') }}">Спа</a>
                                <a class="subLink" href="{{ route('ru-indoor-pool') }}">Крытый бассейн</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop accordion-item">
                        <button class="mainLink accordion-button" data-bs-toggle="collapse" data-link="{{ route('ru-meeting-congress') }}" data-bs-target="#meetingCongress" type="button"
                           aria-expanded="false" aria-controls="meetingCongress">
                            Встречи & Конгресс
                        <img class="arrow"  src="{{ asset('assets/frontend/images/arrowgray.svg') }}"></button>
                        <div data-bs-parent="#accordionMobileMenu" class="accordion-collapse collapse" id="meetingCongress">
                            <div class="offcanvas-card">
                                <a class="subLink" href="{{ route('ru-meeting-congress') }}#thermessos">Thermessos</a>
                                <a class="subLink" href="{{ route('ru-meeting-congress') }}#aspendos">Aspendos</a>
                                <a class="subLink" href="{{ route('ru-meeting-congress') }}#perge">Perge</a>
                                <a class="subLink" href="{{ route('ru-meeting-congress') }}#olympos">Olympos</a>
                            </div>
                        </div>
                    </div>
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
{{-- Header RU End --}}