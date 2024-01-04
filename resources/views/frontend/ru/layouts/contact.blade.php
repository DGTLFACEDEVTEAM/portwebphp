{{-- Contact --}}
<div class="homeContact blogContact">
    <div class="contact-wrapper">
    
            
                <div class="mobileContact">
                    <div class="contact-info">
                        <h6>Позвонить бесплатно<br> в колл-центр</h6>
                        <span>Или бронировать онлайн</span>
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
                            Пожалуйста, заполните все обязательные поля.
                        </div>
                        <h6>Отправить сообщение</h6>
                        <span>Все ваши вопросы, отзывы, предложения</span>
                        <form method="POST" action="{{ route('ru-contacts-submit') }}" id="contactForm2" name="contactForm" class="contactForm" novalidate="novalidate">
                            @csrf
                         
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Имя / Фамилия">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="contact-form-item">
                                    <div class="form-group">
                                        
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="4" placeholder="Сообщение"></textarea>
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
                                        <input type="submit" disabled value="Отправить" class="btn btn-primary submit">
                                        <div class="submitting"></div>
                                    </div>
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