@php
    $translation = [
        'en' => [
            'h2' => 'Free contact call center',
            'span' => 'Or online booking',
            'fillFields' => 'Please fill out all required fields.',
            'sendMsg' => 'Send Message',
            'allQuestions' => 'All your questions, opinions, suggestions',
            'accept' => 'I accept the',
            'terms' => 'Terms and Conditions',
            'terms2' => '',
            'modalTitle' => 'Terms & Conditions',
            'modalP' => 'Consent Text',
            'modalText' => 'İletişim formu aracılığıyla işlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması m.10 gereği Aydınlatma Yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="/iletisim-politikasi">"buradan"</a> ulaşabilirsiniz',
            'modalText2' => '',
            'modalText3' => '',
            'close' => 'Close',
        ],
        'ru' => [
            'h2' => 'Позвонить бесплатно<br> в колл-центр',
            'span' => 'Или бронировать онлайн',
            'fillFields' => 'Пожалуйста, заполните все обязательные поля.',
            'sendMsg' => 'Отправить сообщение',
            'allQuestions' => 'Все ваши вопросы, отзывы, предложения',
            'accept' => 'Я принимаю',
            'terms' => 'Условия и положения',
            'terms2' => '',
            'modalTitle' => 'Условия и положения',
            'modalP' => 'Текст согласия',
            'modalText' => 'İletişim formu aracılığıyla işlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması m.10 gereği Aydınlatma Yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="/iletisim-politikasi">"buradan"</a> ulaşabilirsiniz',
            'modalText2' => '',
            'modalText3' => '',
            'close' => 'закрыть',
        ],

        'tr' => [
            'h2' => 'Ücretsiz Çağrı Merkezi Hizmeti',
            'span' => 'Ya da online rezervasyon yapın',
            'fillFields' => 'Lütfen tüm gerekli alanları doldurunuz.',
            'sendMsg' => 'Mesaj Gönder',
            'allQuestions' => 'Tüm sorularınız, fikirleriniz ve önerileriniz',
            'accept' => 'Kişisel verilerimin işlenmesine',
            'terms' => '"açık rıza metni" kapsamında onay veriyorum.',
            'terms2' => 'Kişisel verileriniz PORT NATURE tarafından iletişim faaliyetlerinin yürütülmesi amacıyla işlenecektir. Kişisel verilerinizin işlenmesi ile ilgili ayrıntılı bilgiye <a href="/iletisim-politikasi">Aydınlatma Metninden</a>  erişebilirsiniz.',
            'modalTitle' => 'Şartlar & Koşullar',
            'modalP' => 'Açık Rıza Metni',
            'modalText' => 'İletişim formu aracılığıyla işlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması m.10 gereği Aydınlatma Yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="/iletisim-politikasi">"buradan"</a> ulaşabilirsiniz',
            'modalText2' => '',
            'modalText3' => '',
            'close' => 'Kapat',
        ],
        'de' => [
            'h2' => 'Kostenloses Kontakt-Callcenter',
            'span' => 'Oder Online-Buchung',
            'fillFields' => 'Bitte füllen Sie alle erforderlichen Felder aus.',
            'sendMsg' => 'Nachricht senden',
            'allQuestions' => 'Alle Ihre Fragen, Meinungen, Vorschläge',
            'accept' => 'Ich akzeptiere die',
            'terms' => 'Geschäftsbedingungen',
            'terms2' => '',
            'modalTitle' => 'Geschäftsbedingungen',
            'modalP' => 'Einwilligungstext',
            'modalText' => 'İletişim formu aracılığıyla işlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması m.10 gereği Aydınlatma Yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="/iletisim-politikasi">"buradan"</a> ulaşabilirsiniz',
            'modalText2' => '',
            'modalText3' => '',
            'close' => 'schließen',
        ],
    ];

@endphp

{{-- Contact --}}
<div class="homeContact blogContact">
    <div class="contact-wrapper">
        <div class="mobileContact">

            <div class="contact-info">
                <h2>{!! $translation[$lang]['h2'] !!}</h2>
                <span>{!! $translation[$lang]['span'] !!}</span>
                <div>
                    <div class="contactIcon">
                        <img loading="lazy" src="{{ asset('assets/frontend/images/phoneblue.svg') }}" alt="phone">
                        <a href="tel:+902427310707">+90 (242) 731 07 07</a>
                    </div>
                    <div class="contactIcon">
                        <img loading="lazy" src="{{ asset('assets/frontend/images/mailblue.svg') }}" alt="phone">
                        <a href="mailto:callcenter@portnature.com.tr">callcenter@portnature.com.tr</a>
                    </div>
                    {{-- <div class="contactIcon">
                        <img loading="lazy" src="{{ asset('assets/frontend/images/whatsappblue.svg') }}" alt="phone">
                        <a class="fw-semibold "
                            href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data="
                            target="_blank">Whatsapp</a>
                    </div> --}}
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
                        {!! $translation[$lang]['fillFields'] !!}
                    </div>
                    <h2>{!! $translation[$lang]['sendMsg'] !!}</h2>
                    <span>{!! $translation[$lang]['allQuestions'] !!}</span>
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
                                    <input type="checkbox" id="acceptTermsCheckbox" name="terms"
                                        class="form-check-input acceptTermsCheckbox" required>
                                    {!! $translation[$lang]['accept'] !!}
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#termModal"
                                        style="color: #212429!important">{!! $translation[$lang]['terms'] !!}</a> <br> <br>


                                </label>
                                <div class="terms2 d-none">
                                    {!! $translation[$lang]['terms2'] !!}
                                </div>
                                <div class="modal fade" id="termModal" tabindex="-1" aria-labelledby="termModal"
                                    aria-hidden="true">
                                    <div class="modal-dialog vh-100 d-flex align-items-center justify-content-center">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title fs-5">{!! $translation[$lang]['modalTitle'] !!}</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div
                                                class="modal-body d-flex flex-column justify-content-center text-center">
                                                <p class="text-uppercase" style="font-weight: bold">
                                                    {!! $translation[$lang]['modalP'] !!}</p>
                                                <p class="text-start"> {!! $translation[$lang]['modalText'] !!}
                                                    <br>
                                                    <br>
                                                    {!! $translation[$lang]['modalText2'] !!}
                                                    <br>
                                                    <br>
                                                    {!! $translation[$lang]['modalText3'] !!}
                                                </p>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">{!! $translation[$lang]['close'] !!}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade newTermModal" id="newTermModal" tabindex="-1"
                                    aria-labelledby="newTermModalLabel" aria-hidden="true">
                                    <div class="modal-dialog vh-100 d-flex align-items-center justify-content-center">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title fs-5">Aydinlatma Metni</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    data-bs-target="#newTermModal" aria-label="Close"></button>
                                            </div>
                                            <div
                                                class="modal-body d-flex flex-column justify-content-center text-center">

                                                <p>Aydinlatma content</p>
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


<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     var checkbox = document.getElementById('acceptTermsCheckbox');
    //     var terms2 = document.getElementById('terms2');
    //     var newTermModal = new bootstrap.Modal(document.getElementById('newTermModal'));

    //     terms2.style.display = 'none';

    //     checkbox.addEventListener('change', function() {
    //         if (this.checked) {
    //             // Show terms2
    //             terms2.style.display = 'block';
    //         } else {
    //             // Hide terms2
    //             terms2.style.display = 'none';
    //         }
    //     });

    //     terms2.addEventListener('click', function() {
    //         // event.stopPropagation();
    //         newTermModal.show();
    //     });
    // });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let alreadyinitmodal = false;
        // get first el match with .newTermModal
        let newTermModal = document.querySelectorAll('.newTermModal');
        // add seen atr to modal 
        newTermModal.forEach(function(item) {
            // if there is not data-find attr add
            if (!item.hasAttribute('data-find')) {
                item.setAttribute('data-find', 'true');
                // add event listener to modal

            } else {
                alreadyinitmodal = true;
            }
        })

        if (!alreadyinitmodal) {
            console.log(`sada`);
            let firstnewTermModal = document.querySelector('.newTermModal');

            var newTermModalxxx = new bootstrap.Modal(
                firstnewTermModal
            );


        }


    })
    // var newTermModalEl = document.getElementById('newTermModal');

    // newTermModalEl.addEventListener(
    //     'hidden.bs.modal',
    //     function() {
    //         var backdrops = document.getElementsByClassName('modal-backdrop');
    //         if (backdrops.length > 0) {
    //             document.body.removeChild(backdrops[0]);
    //         }
    //     });
</script>
