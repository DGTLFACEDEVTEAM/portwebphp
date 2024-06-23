{{-- Bottom Fixed Book Now --}}
<a class="fixedBookNow" href="https://portnature.rezervasyonal.com/" target="_blank">
    Rezervasyon Yapın
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
                            <p>Boğazkent Mevkii</p>
                            <span>Belek · Antalya · Turkey</span>
                        </article>
                    </div>
                    <div class="footerButtons">
                        <a href="https://portnature.rezervasyonal.com/" target="_blank" id="footerReservation" class="reverseButton">Rezervasyon</a>
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
                        <a href="{{ route('tr-accommodation') }}" class="footerHeader">KONAKLAMA</a>
                        <a href="{{ route('tr-family-rooms') }}" class="footerSub">Aile Odaları</a>
                        <a href="{{ route('tr-kingsuit-rooms') }}" class="footerSub">King Süit</a>
                        <a href="{{ route('tr-standard-rooms') }}" class="footerSub">Standart Odalar</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('tr-entertainment') }}" class="footerHeader">EĞLENCE</a>
                        <a href="{{ route('tr-concert') }}" class="footerSub">Konserler</a>
                        <a href="{{ route('tr-activity') }}" class="footerSub">Aktiviteler</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('tr-kids-concepts') }}" class="footerHeader">ÇOCUK KONSEPTİ</a>
                        <a href="{{ route('tr-mini-club-alacarte') }}" class="footerSub">Mini A'la Carte</a>
                        <a href="{{ route('tr-aquapark') }}" class="footerSub">Su Parkı</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('tr-special-offers') }}" class="footerHeader">2024 Fırsatlar</a>
                        <a href="{{ route('tr-special-offers') }}" class="footerSub">Özel Teklifler</a>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('tr-food-drink') }}" class="footerHeader">YEME & İÇME</a>
                        <a href="{{ route('tr-alacarte-restaurants') }}" class="footerSub">A'la Carte</a>
                        <a href="{{ route('tr-bar-cafe') }}" class="footerSub">Barlar & Kafeler</a>
                        <a href="{{ route('tr-main-restaurant') }}" class="footerSub">Ana Restoran</a>
                        <a href="{{ route('tr-davidoff-cafe') }}" class="footerSub">Davidoff Kafe</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('tr-meeting-congress') }}" class="footerHeader">TOPLANTI & KONGRE</a>
                        <a href="{{ route('tr-meeting-congress') }}#perge" class="footerSub">Perge</a>
                        <a href="{{ route('tr-meeting-congress') }}#olympos" class="footerSub">Olympos</a>
                        <a href="{{ route('tr-meeting-congress') }}#aspendos" class="footerSub">Aspendos</a>
                        <a href="{{ route('tr-meeting-congress') }}#thermessos" class="footerSub">Thermessos</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="#" class="footerHeader">KURUMSAL</a>
                        <a href="{{ route('tr-blog') }}" class="footerSub">Blog</a>
                        <a href="{{ route('tr-data-policy') }}" class="footerSub">KVKK</a>
                        <a href="{{ route('tr-contacts') }}" class="footerSub">İletişim</a>
                        <a href="{{ route('tr-politikalarimiz') }}" class="footerSub">Politikalarimiz</a>
                    </article>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <article class="footerText">
                        <a href="{{ route('tr-spa') }}" class="footerHeader">SPA</a>
                        <a href="{{ route('tr-spa') }}" class="footerSub">Spa Merkezi</a>
                        <a href="{{ route('tr-indoor-pool') }}" class="footerSub">Kapalı Havuz</a>
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