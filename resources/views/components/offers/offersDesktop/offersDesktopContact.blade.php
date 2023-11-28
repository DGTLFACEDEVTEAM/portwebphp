@php
$translation = [
    'en' => [
        'offers-contact-info' => 'Free contact call centre or online booking',
    ],
    'de' => [
        'offers-contact-info' => 'Kostenloser Kontakt zum Call Center oder Online-Buchung',
    ],
    'ru' => [
        'offers-contact-info' => 'Позвонить бесплатно в колл-центр или бронировать онлайн',
    ],
    'tr' => [
        'offers-contact-info' => 'Ücretsiz çağrı merkezi veya online rezervasyon',
    ],
    ];
@endphp

<div class="offers-contact-wrapper">
    <div class="offers-contact-div">
        <div class="luggage-image-wrapper colorful-image-wrapper"></div>

        <div class="offers-contact-info">
            <p class="offers-contact-title">{!! $translation[$lang]['offers-contact-info'] !!}</p>
            <a href="tel:+902427310707">
                <img src="{{ asset('assets/frontend/images/offers/svg/phone.svg') }}" />

                +90 (242) 731 07 07
            </a>
            <a href="mailto:info@portnature.com.tr">
                <img src="{{ asset('assets/frontend/images/offers/svg/mail.svg') }}" />
                info@portnature.com.tr
            </a>
            <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" target="_blank"
                class="offers-contact-whatsapp">
                <img src="{{ asset('assets/frontend/images/offers/svg/whatsapp.svg') }}" />
                WhatsApp
            </a>
        </div>
    </div>
</div>