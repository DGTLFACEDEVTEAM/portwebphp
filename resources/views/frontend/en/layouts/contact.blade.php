{{-- Contact --}}
<div class="homeContact blogContact">
    <div class="contact-wrapper">
        <div class="mobileContact">
            <div class="contact-info">
                <h2>Free contact call center</h2>
                <span>Or online booking</span>
                <div>
                    <div class="contactIcon">
                        <img loading="lazy" src="{{ asset('assets/frontend/images/phoneblue.svg') }}" alt="phone">
                        <a href="tel:+902427310707">+90 (242) 731 07 07</a>
                    </div>
                    <div class="contactIcon">
                        <img loading="lazy" src="{{ asset('assets/frontend/images/mailblue.svg') }}" alt="phone">
                        <a href="mailto:callcenter@portnature.com.tr">callcenter@portnature.com.tr</a>
                    </div>
                    @include('components.whatsapp.contactWhatsappPages')
                </div>
            </div>
            <div class="contactImage">
                <img loading="lazy" src="{{ asset('assets/frontend/images/blog/callcenter.webp') }}" alt="contactImg" />

            </div>
            <div class="contact-form-wrapper">
                <div class="contact-wrap">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div id="alert" class="alert alert-danger d-none" role="alert">
                        Please fill out all required fields.
                    </div>
                    <h2>Send Message</h2>
                    <span>All your questions, opinions, suggestions</span>
                    <form method="POST" action="{{ route('contacts-submit') }}" id="contactForm2" name="contactForm"
                        class="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="contact-form-item">
                            <div class="form-group">

                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Name / Surname" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="contact-form-item">
                            <div class="form-group">

                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="contact-form-item">
                            <div class="form-group">

                                <textarea name="message" class="form-control @error('message') is-invalid @enderror" cols="30" rows="4"
                                    placeholder="Message"></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="contact-form-item">
                            <div class="form-group">

                                <label class="form-check-label user-select-none cursor-pointer">
                                    <input type="checkbox" name="terms" class="form-check-input acceptTermsCheckbox"
                                        required>
                                    I accept the
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        style="color: #212429!important">Terms and
                                        Conditions</a>

                                </label>
                                <div class="modal fade" tabindex="-1" aria-labelledby="Termsandcond"
                                    aria-hidden="true">
                                    <div class="modal-dialog vh-100 d-flex align-items-center justify-content-center">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title fs-5">Terms & Cond</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div
                                                class="modal-body d-flex flex-column justify-content-center text-center">
                                                <p class="text-uppercase" style="font-weight: bold">Açık Rıza Metni</p>
                                                <p class="text-start"> 6698 sayılı Kişisel Verilerin Korunması Kanunu'na
                                                    göre sizinle
                                                    ilgili bazı kişisel verilerin, veri sorumlusu olan ARAS İNŞAAT
                                                    TİCARET TURİZM ANONİM ŞİRKETİ (‘PORT NATURE’ olarak anılacaktır.)
                                                    tarafından işlenebilmesi için açık rızanız gerekmektedir.
                                                    <br>
                                                    <br>
                                                    Bu kapsamda İletişim faaliyetlerinin yürütülmesi ve sorunuzun bize
                                                    iletilmesi amacıyla Kimlik (Ad, Soyad), İletişim (e-Mail), İşlem
                                                    Güvenliği (İşlem Tarihi), Ziyaretçi İşlem (Mesaj Konusu), Hukuki
                                                    İşlem (Saat, Tarih) kişisel verileriniz KVKK Md.5/1’de öngörülen
                                                    açık rızanıza istinaden işlenecektir.
                                                    <br>
                                                    <br>
                                                    Yukarıda amaçları belirtilen kişisel verilerimin belirtilen amaçlar
                                                    çerçevesinde işlenmesini kabul ve beyan ediyorum.
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
                                <input type="submit" disabled value="Send" class="btn btn-primary submit">
                                <div class="submitting"></div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>

    </div>

</div>

<script>
    if (typeof pageHasContactForm === 'undefined') {
        var pageHasContactForm = true;
    }
</script>
