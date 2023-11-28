@php

$translation = [
    'en' => [
        'title' => 'Contact Us Now',
        ],
    'tr' => [
        'title' => 'Şimdi Bize Ulaşın',
        ],
    'ru' => [
        'title' => 'Свяжитесь с нами сейчас',
        ],
    'de' => [
        'title' => 'Kontaktieren Sie uns jetzt',
        ],
];

@endphp


<section class="contacts-section-mobile">
    <p class="contacts-mobile-title">{!! $translation[$lang]['title'] !!}</p>
    <div class="contacts-mobile-wrapper">  
        <a href="mailto:callcenter@portnature.com.tr" class="contacts-mobile-item">
                    <img src="{{ asset('assets/frontend/images/offers/mail.svg') }}">
                    <p>info@portnature.com.tr</p>
  
    </a>
      <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank" class="contacts-mobile-item">
                    <img src="{{ asset('assets/frontend/images/offers/whatsapp.svg') }}">
                    <p>Whatsapp</p>
  
    </a>
    <a href="tel:+902427310707" class="contacts-mobile-item">
                    <img src="{{ asset('assets/frontend/images/offers/phone.svg') }}">
                    <p>+90 (242) 731 07 07</p>
  
    </a>
  </div>
  </section>