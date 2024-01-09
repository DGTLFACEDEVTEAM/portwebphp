@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'İletişim - Port Nature Luxury Resort Hotel Spa')
@section('description', 'İletişim Port Nature Luxury Resort Hotel. Kadriye Antalya ultra herşey dahil beş yıldızlı oteller. Rezervasyon ve en iyi teklifler için arayın.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-contacts') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('contacts') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-contacts') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-contacts') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

{{-- Contact --}}
<div class="homeContact">
    <div class="contact-wrapper">
    
            
                <div class="mobileContact">
                    <div class="contact-info">
                        <h6>Ücretsiz Çağrı Merkezi Hizmeti</h6>
                        <span>Ya da online rezervasyon yapın</span>
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
                            Lütfen tüm gerekli alanları doldurunuz.
                        </div>
                        <h6>Mesaj Gönder</h6>
                        <span>Tüm sorularınız, fikirleriniz ve önerileriniz</span>
                        <form method="POST" action="{{ route('tr-contacts-submit') }}" id="contactForm2" name="contactForm" class="contactForm" novalidate="novalidate">
                            @csrf
                 
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="İsim / Soyisim">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="E-Posta">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="4" placeholder="Mesaj"></textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        <label class="form-check-label" for="acceptTermsCheckbox">
                                        <input type="checkbox" name="terms" class="form-check-input acceptTermsCheckbox"
                                            id="acceptTermsCheckbox" required>
                                                Kişisel verilerimin işlenmesine
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">"açık rıza metni"</a> kapsamında onay
                                            veriyorum.
                                        </label>
                                        <br>
                                        <br>
                                        <p>Kişisel verileriniz PORT NATURE tarafından iletişim faaliyetlerinin yürütülmesi amacıyla işlenecektir. Kişisel verilerinizin işlenmesi ile ilgili ayrıntılı bilgiye <a href="/iletisim-politikasi">Aydınlatma Metninden</a> erişebilirsiniz.</p>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog vh-100 d-flex align-items-center justify-content-center">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="modal-title fs-5" id="exampleModalLabel">Açık Rıza Metni</p>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body d-flex flex-column justify-content-center text-center">
                                                        <p><strong></strong></p>

                                                        <p>6698 sayılı Kişisel Verilerin Korunması Kanunu&#39;na g&ouml;re sizinle ilgili bazı kişisel verilerin, veri sorumlusu olan <strong>ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (&lsquo;PORT NATURE&rsquo; olarak anılacaktır.) </strong>tarafından işlenebilmesi i&ccedil;in a&ccedil;ık rızanız gerekmektedir.</p>
                            
                                                        <p>&nbsp;</p>
                            
                                                        <p>Bu kapsamda İletişim faaliyetlerinin y&uuml;r&uuml;t&uuml;lmesi ve sorunuzun bize iletilmesi amacıyla <strong>Kimlik</strong> <em>(Ad, Soyad),</em> <strong>İletişim </strong><em>(e-Mail),</em><strong> İşlem G&uuml;venliği </strong><em>(İşlem Tarihi), </em><strong><em>Ziyaret&ccedil;i</em> İşlem<em> </em></strong><em>(Mesaj Konusu), </em><strong>Hukuki İşlem</strong><em> (Saat, Tarih) </em>kişisel verileriniz KVKK Md.5/1&rsquo;de &ouml;ng&ouml;r&uuml;len a&ccedil;ık rızanıza istinaden işlenecektir.</p>
                            
                                                        <p>&nbsp;</p>
                            
                                                        <p><strong>Yukarıda ama&ccedil;ları belirtilen kişisel verilerimin belirtilen ama&ccedil;lar &ccedil;er&ccedil;evesinde işlenmesini kabul ve beyan ediyorum.</strong></p>
                            
        
        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Kapat</button>
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
                                        <input type="submit" disabled value="Gönder" class="btn btn-primary submit">
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
<div class="googleMaps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.095299710265!2d31.162194723180235!3d36.83365017231129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c390042dbff2dd%3A0x9a5d907541f1db72!2sPort%20Nature%20Luxury%20Resort%20Hotel%20%26%20Spa!5e0!3m2!1str!2str!4v1678301942056!5m2!1str!2str" width="1920" height="550" style="border:0;" allowfullscreen=""  referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection

@section('javascript-imports')
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/contacts.css') }}"/>

@endsection