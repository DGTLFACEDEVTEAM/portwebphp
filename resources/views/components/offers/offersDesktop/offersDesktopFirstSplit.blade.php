@php
$translation = [
    'en' => [
        'h1' => 'SPECIAL OFFERS',
        'p'  => 'Introducing our special hotel offers! Enjoy luxurious <a href="https://www.portnature.com.tr/rooms">accommodations</a>, stunning views, and exceptional service. With unbeatable prices and exclusive amenities, there is no better place to stay. Make an <a href="https://portnature.rezervasyonal.com/?_gl=1*1t14gzh*_ga*NzI2Nzc2MjAuMTY4MjQ5NTU2Ng..*_ga_6EYM72GR61*MTY4MjY3MDQyNS43LjEuMTY4MjY3MDQ0MS4wLjAuMA..">online booking now</a> and turn your dream vacation into a reality. We offer a variety of packages to suit your every need. Our hotel has everything you need for a comfortable and memorable stay. Do not miss out, reserve your room today! Additionally, the <a href="https://www.portnature.com.tr/en"> Port Nature Luxury Resort Hotels</a> <a href="tel:+902427310707">call center</a> is offering special deals exclusively for you. Contact the <a href="tel:+902427310707">call center</a> now to take advantage of these exclusive offers.',
    ],
    'de' => [
        'h1' => 'ANGEBOTE',
        'p' => 'Wir präsentieren unsere speziellen Hotelangebote! Genießen Sie luxuriöse <a href="https://www.portnature.com.tr/rooms">Unterkünfte</a>, atemberaubende Aussichten und außergewöhnlichen Service. Mit unschlagbaren Preisen und exklusiven Annehmlichkeiten gibt es keinen besseren Ort für Ihren Aufenthalt. Machen Sie jetzt eine <a href="https://portnature.rezervasyonal.com/?_gl=1*1t14gzh*_ga*NzI2Nzc2MjAuMTY4MjQ5NTU2Ng..*_ga_6EYM72GR61*MTY4MjY3MDQyNS43LjEuMTY4MjY3MDQ0MS4wLjAuMA..">Online-Buchung</a> und verwandeln Sie Ihren Traumurlaub in Realität. Wir bieten eine Vielzahl von Paketen, die Ihren Bedürfnissen entsprechen. Unser Hotel bietet alles, was Sie für einen komfortablen und unvergesslichen Aufenthalt benötigen. Verpassen Sie nicht, reservieren Sie Ihr Zimmer heute! Zusätzlich bietet das <a href="https://www.portnature.com.tr/en">Port Nature Luxury Resort Hotel.',
    ],
    'ru' => [
        'h1' => 'СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ',
        'p' => 'Представляем наши специальные предложения отеля! Наслаждайтесь роскошными <a href="https://www.portnature.com.tr/nomera">размещениями</a>, потрясающими видами и исключительным сервисом. С непобедимыми ценами и эксклюзивными удобствами, нет лучшего места для проживания. Сделайте <a href="https://portnature.rezervasyonal.com/?_gl=1*1t14gzh*_ga*NzI2Nzc2MjAuMTY4MjQ5NTU2Ng..*_ga_6EYM72GR61*MTY4MjY3MDQyNS43LjEuMTY4MjY3MDQ0MS4wLjAuMA..">онлайн-бронирование сейчас</a> и превратите свой мечтаемый отпуск в реальность. Мы предлагаем разнообразные пакеты на любой вкус. Наш отель предлагает все необходимое для комфортного и запоминающегося пребывания. Не упустите свой шанс, забронируйте свой номер сегодня! Кроме того, <a href="https://www.portnature.com.tr/ru">Port Nature Luxury Resort Hotels</a> <a href="tel:+902427310707">колл-центр</a> предлагает специальные предложения исключительно для вас. Свяжитесь с <a href="tel:+902427310707">колл-центром</a> сейчас, чтобы воспользоваться этими эксклюзивными предложениями.',

    ],
    'tr' => [
        'h1' => 'ÖZEL TEKLİFLER',
        'p' => 'Otelimizin sunduğu özel tekliflere göz atın! Lüks <a href="https://www.portnature.com.tr/konaklama">konaklama</a> imkanlarının, muhteşem manzaraların ve olağanüstü hizmetin keyfini çıkarın. Rakipsiz fiyatlar ve özel olanaklarla, kalacak daha iyi bir yer yok. Şimdi <a target="_blank" href="https://portnature.rezervasyonal.com/?_gl=1*1t14gzh*_ga*NzI2Nzc2MjAuMTY4MjQ5NTU2Ng..*_ga_6EYM72GR61*MTY4MjY3MDQyNS43LjEuMTY4MjY3MDQ0MS4wLjAuMA..">online rezervasyon yapın</a> ve hayalinizdeki tatili gerçeğe dönüştürün. Her ihtiyacınıza uygun farklı paketler sunuyoruz. Otelimiz, konforlu ve unutulmaz bir konaklama için ihtiyacınız olan her şeye sahiptir. Bugün odanızı ayırtın ve fırsatı kaçırmayın! Ayrıca <a target="_blank" href="https://www.portnature.com.tr/tr">Port Nature Luxury Resort Hotel</a> <a href="tel:+902427310707">çağrı merkezi</a> size özel fırsatlar sunuyor. Bu ayrıcalıklı fırsatlardan yararlanmak için hemen <a href="tel:+902427310707">çağrı merkezi</a> ile iletişime geçin.',
    ],
    ];
@endphp

<div class="offers-first-split">
    <div class="first-split-clouds colorful-image-wrapper">
    </div>
    <div class="split-text">
        <h1>{!! $translation[$lang]['h1'] !!}</h1>
        <p>{!! $translation[$lang]['p'] !!}</p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/en">
        <img src="{{ asset('assets/frontend/images/offers/seo/en/antalya/antalya-hotels-port-nature-premium-resort-hotel.webp') }}" />
    </a>
</div>