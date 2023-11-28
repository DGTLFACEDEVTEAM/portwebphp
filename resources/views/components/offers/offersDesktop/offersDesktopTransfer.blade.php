@php
$translation = [
    'en' => [
        'transfer-title' => 'Click here to book a transfer',
        'transfer-mid' => 'Spend the road in comfort',
        'transfer-btn' => 'Book Transfer',
    ],
    'de' => [
        'transfer-title' => 'Klicken Sie hier, um einen Transfer zu buchen',
        'transfer-mid' => 'Verbringen Sie die reise in Komfort',
        'transfer-btn' => 'Transfer Buchen',
    ],
    'ru' => [
        'transfer-title' => 'Нажмите здесь, чтобы забронировать трансфер',
        'transfer-mid' => 'Проведите дорогу в комфорте',
        'transfer-btn' => 'Забронировать Tрансфер',
    ],
    'tr' => [
        'transfer-title' => 'Transfer için buraya tıklayın',
        'transfer-mid' => 'Konforlu bir yolculuk',
        'transfer-btn' => 'Transfer Rezervasyonu',
    ],
];
@endphp

<div class="transfer-wrapper">
    <img class="transfer-desktop" src="{{ asset('assets/frontend/images/offers/desktop-car.svg') }}">
    <img class="transfer-tablet" src="{{ asset('assets/frontend/images/offers/tablet-car.svg') }}">
    <img class="transfer-mobile" src="{{ asset('assets/frontend/images/offers/mobile-car.svg') }}">


    <div class="transfer-texts">
        <p class="transfer-title">{!! $translation[$lang]['transfer-title'] !!}</p>
        <p class="transfer-mid">{!! $translation[$lang]['transfer-mid'] !!}</p>
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService" target="_blank">{!! $translation[$lang]['transfer-btn'] !!}</a>
    </div>
</div>