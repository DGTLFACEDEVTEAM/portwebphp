{{-- Bottom Fixed Book Now --}}

<a class="fixedBookNow" href="https://portnature.rezervasyonal.com/" target="_blank">
    Забронировать сейчас
</a>
{{-- Footer --}}
<footer>
    <div class="row footerWrapper">
        <div class="col-12 col-lg-6 footerDetails">
            <div class="row footerChange">
                <div class="col-lg-4 footerCol">
                    <div class="footerLocation footerStart">
                        <img class="specialSvg lazyload" data-src="{{ asset('assets/frontend/images/footerlocation.svg') }}" alt="address"/>
                        <article>
                            <p>Boğazkent</p>
                            <span>Belek · Antalya · Turkey</span>
                        </article>
                    </div>
                    <div class="footerButtons">
                        <a href="https://portnature.rezervasyonal.com/" target="_blank" class="reverseButton">Бронирование</a>
                        <a href="tel:+902427310707">+90 (242) 731 07 07</a>
                        @include('components.whatsapp.footerWhatsapp')
                    </div>
                </div>
                <div class="col-lg-8 footerCenter">
                    <div class="footerIcons">
                        <a href="https://www.youtube.com/user/portnaturehotel" target="_blank">
                            <img data-src="{{ asset('assets/frontend/images/youtubewhite.svg') }}" alt="youtube" class="specialSvg lazyload">
                        </a>
                        <a href="https://www.facebook.com/portnature" target="_blank">
                            <img data-src="{{ asset('assets/frontend/images/facebookwhite.svg') }}" alt="facebook" class="specialSvg lazyload">
                        </a>
                        <a href="https://www.facebook.com/portnature" target="_blank">
                            <img data-src="{{ asset('assets/frontend/images/instagramwhite.svg') }}" alt="youtube" class="specialSvg lazyload">
                        </a>
                        <a href="https://vk.com/publicportnature" target="_blank">
                            <img data-src="{{ asset('assets/frontend/images/vkwhite.svg') }}" alt="vk" class="specialSvg lazyload">
                        </a>
                        <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html" target="_blank">
                            <img data-src="{{ asset('assets/frontend/images/tripadvisorwhite.svg') }}" alt="tripadvisor" class="specialSvg lazyload">
                        </a>
                    </div>
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/footerLogo.webp') }}"/>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 footerRight">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('ru-accommodation') }}" class="footerHeader">Номера</a>
                        <a href="{{ route('ru-family-rooms') }}" class="footerSub">Семейный</a>
                        <a href="{{ route('ru-kingsuit-rooms') }}" class="footerSub">King Suite</a>
                        <a href="{{ route('ru-standard-rooms') }}" class="footerSub">Стандарт</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('ru-entertainment') }}" class="footerHeader">Развлечения</a>
                        <a href="{{ route('ru-concert') }}" class="footerSub">Концерты</a>
                        <a href="{{ route('ru-activity') }}" class="footerSub">Мероприятия</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('ru-kids-concepts') }}" class="footerHeader">Детский концепт</a>
                        <a href="{{ route('ru-mini-club-alacarte') }}" class="footerSub">Мини A'la Carte</a>
                        <a href="{{ route('ru-aquapark') }}" class="footerSub">Аквапарк</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('ru-special-offers') }}" class="footerHeader">2024 Акции</a>
                        <a href="{{ route('ru-special-offers') }}" class="footerSub">Спец. Предложения</a>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('ru-food-drink') }}" class="footerHeader">Еда & Напитки</a>
                        <a href="{{ route('ru-alacarte-restaurants') }}" class="footerSub">A'la Carte</a>
                        <a href="{{ route('ru-bar-cafe') }}" class="footerSub">Бары & Кафе</a>
                        <a href="{{ route('ru-main-restaurant') }}" class="footerSub">Главный ресторан</a>
                        <a href="{{ route('ru-davidoff-cafe') }}" class="footerSub">Кафе Davidoff</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('ru-meeting-congress') }}" class="footerHeader">Встречи & Конгресс</a>
                        <a href="{{ route('ru-meeting-congress') }}#perge" class="footerSub">Perge</a>
                        <a href="{{ route('ru-meeting-congress') }}#olympos" class="footerSub">Olympos</a>
                        <a href="{{ route('ru-meeting-congress') }}#aspendos" class="footerSub">Aspendos</a>
                        <a href="{{ route('ru-meeting-congress') }}#thermessos" class="footerSub">Thermessos</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('ru-contacts') }}" class="footerHeader">Коммерческий</a>
                        <a href="{{ route('ru-blog') }}" class="footerSub">Блог</a>
                        <a href="{{ route('ru-data-policy') }}" class="footerSub">Политика данных</a>
                        <a href="{{ route('ru-contacts') }}" class="footerSub">Контакты</a>
                        <a href="{{ route('tr-politikalarimiz') }}" class="footerSub">Наша Политика</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('ru-spa') }}" class="footerHeader">Спа</a>
                        <a href="{{ route('ru-spa') }}" class="footerSub">Спа & Велнес</a>
                        <a href="{{ route('ru-indoor-pool') }}" class="footerSub">Крытый бассейн</a>
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
            <a href="https://dgtlface.com" target="_blank" rel="noopener noreferrer" class="footerCompany mobileCompany">
                Powered by © <span >DGTLFACE</span>
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