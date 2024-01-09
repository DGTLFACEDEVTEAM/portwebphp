{{-- Contact --}}
<div class="homeContact blogContact">
    <div class="contact-wrapper">
    
            
                <div class="mobileContact">
                    <div class="contact-info">
                        <h6>Ücretsiz Çağrı Merkezi</h6>
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
                            @include('components.whatsapp.contactWhatsappPages')
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