@extends('layouts.main', ['lang' => 'de'])

@section('title', 'Kontakte - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Kontakte Port Nature Luxury Resort Hotel Spa. Ultra all inclusive Fünf Sterne Hotel in Kadriye Antalya. Kontakt für Reservierungen und beste Angebote.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-contacts') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('contacts') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-contacts') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-contacts') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')
{{-- Contact --}}
<div class="homeContact">
    <div class="contact-wrapper">
            <div class="mobileContact">
                    <div class="contact-info">
                        <h6>Kostenloses Kontakt-Callcenter</h6>
                        <span>Oder Online-Buchung</span>
                        <div>
                            <div class="contactIcon">
                                <img class="lazyload" data-src="{{ asset('assets/frontend/images/phoneblue.svg') }}"  alt="phone">
                                <a href="tel:+902427310707">+90 (242) 731 07 07</a>
                            </div>

                            <div class="contactIcon">
                                <img class="lazyload" data-src="{{ asset('assets/frontend/images/mailblue.svg') }}"  alt="phone">
                                <a href="mailto:callcenter@portnature.com.tr">callcenter@portnature.com.tr</a>
                            </div>
                            @include('components.whatsapp.contactWhatsapp')
                        </div>
                    </div>
                    <div class="contactImage">
                        <img class="lazyload" data-src="{{ asset('assets/frontend/images/blog/callcenter.webp') }}" alt="contactImg"/>
                    </div>
                <div class="contact-form-wrapper">
                    <div class="contact-wrap">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div id="alert" class="alert alert-danger d-none" role="alert">
                            Bitte füllen Sie alle erforderlichen Felder aus.
                        </div>
                        <h6>Nachricht senden</h6>
                        <span>Alle Ihre Fragen, Meinungen, Vorschläge</span>
                        <form method="POST" action="{{ route('de-contacts-submit') }}" id="contactForm2" name="contactForm" class="contactForm" novalidate="novalidate">
                            @csrf
                         
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name2" placeholder="Vorname / Nachname">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email2" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message2" cols="30" rows="4" placeholder="Nachricht"></textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        <input type="checkbox" name="terms" class="form-check-input acceptTermsCheckbox"
                                            id="acceptTermsCheckbox" required>
                                        <label class="form-check-label" for="acceptTermsCheckbox">I accept the
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Terms and
                                                Conditions</a>
                                        </label>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog vh-100 d-flex align-items-center justify-content-center">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Terms & Cond</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body d-flex flex-column justify-content-center text-center">
                                                        <p class="text-uppercase" style="font-weight: bold">Açık Rıza Metni</p>
                                                        <p class="text-start"> İletişim formu aracılığıyla işlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması m.10 gereği Aydınlatma Yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="/iletisim-politikasi">"buradan"</a> ulaşabilirsiniz
                                                        </p>
        
        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        <input type="submit" disabled value="Schicken" class="btn btn-primary submit">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<script>
    if (typeof pageHasContactForm === 'undefined') {
        var pageHasContactForm = true;
    }
</script>
{{-- Contact End --}}
<div class="googleMaps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.095299710265!2d31.162194723180235!3d36.83365017231129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c390042dbff2dd%3A0x9a5d907541f1db72!2sPort%20Nature%20Luxury%20Resort%20Hotel%20%26%20Spa!5e0!3m2!1str!2str!4v1678301942056!5m2!1str!2str" width="1920" height="600" style="border:0;" allowfullscreen=""  referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection

@section('javascript-imports')
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/contacts.css') }}"/>

@endsection