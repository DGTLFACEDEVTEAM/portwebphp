@php
$translation = [
    'en' => [
        'flight-mobile-title' => 'Book a plane ticket right away',
        'flight-mobile-addendum' => 'On our website, linking to other websites or referring to other websites does not hold the site owner responsible for the content of the linked or referred websites, and the site owner cannot be held liable for any damage or loss arising from the content of other websites. All links to other websites are provided on our website for the convenience of our website users. This arrangement does not imply that Port Nature Hotels or its affiliates are in any way associated with or related to those other websites or their owners.',
        'btn-collapsed' => 'More Airlines',
        'btn-open' => 'Less Airlines',
        'transfer-road-title' => 'Spend time on the road in comfort',
        'transfer-btn' => 'Book Transfer',
        'flypgs' => 'https://www.flypgs.com',
        'skyscanner' => 'https://www.skyscanner.com.tr/?currency=TRY&locale=en-GB&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd',
        'corendon' => 'https://www.corendonairlines.com/en',
        'aviasales' => 'https://www.aviasales.ru/?params=IST1&currency=usd',
        'turkish' => 'https://www.turkishairlines.com/en-int/flights/booking/',
        ],
    'tr' => [
        'flight-mobile-title' => 'Hemen uçak bileti ayırtın',
        'flight-mobile-addendum' => 'Web sitemizde diğer web sitelerine bağlantı verilmesi veya diğer web sitelerine atıfta bulunulması, bağlantı verilen veya atıfta bulunulan web sitelerinin içeriğinden site sahibini sorumlu tutmaz ve site sahibi, diğer web sitelerinin içeriğinden kaynaklanan herhangi bir hasar veya kayıptan sorumlu tutulamaz. Diğer web sitelerine yapılan tüm bağlantılar, web sitemizin kullanıcılarının kolaylığı için web sitemizde sağlanmaktadır. Bu düzenleme, Port Nature Hotels veya bağlı kuruluşlarının, diğer web siteleri veya bunların sahipleri ile herhangi bir şekilde ilişkili veya ilişkili olduğu anlamına gelmez.',
        'btn-collapsed' => 'Daha Fazla',
        'btn-open' => 'Daha Az',
        'transfer-road-title' => 'Yolda rahatça vakit geçirin',
        'transfer-btn' => 'Transferi Rezervasyonu',
        'flypgs' => 'https://www.flypgs.com',
        'skyscanner' => 'https://www.skyscanner.com.tr/?currency=TRY&locale=tr-TR&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd',
        'corendon' => 'https://www.corendonairlines.com/tr',
        'aviasales' => 'https://www.aviasales.ru/?params=IST1&currency=usd',
        'turkish' => 'https://www.turkishairlines.com/tr-int/ucak-bileti/rezervasyon/',
        ],
    'ru' => [
        'flight-mobile-title' => 'Забронируйте билет на самолет прямо сейчас',
        'flight-mobile-addendum' => 'Ссылки, которые ссылаются из нашего веб-сайта на другие веб-сайты, не возлагают на владельца сайта ответственности за содержимое веб-сайтов, на которые даны ссылки, и владелец сайта не может нести ответственность за любой ущерб или убытки, возникшие из-за содержимого других веб-сайтов. Все ссылки на другие веб-сайты предоставлены на нашем веб-сайте для удобства пользователей нашего веб-сайта. Это соглашение не подразумевает, что Port Nature Hotels или ее филиалы каким-либо образом связаны с этими другими веб-сайтами или их владельцами.',
        'btn-collapsed' => 'Больше авиакомпаний',
        'btn-open' => 'Меньше авиакомпаний',
        'transfer-road-title' => 'Проведите время на дороге с комфортом',
        'transfer-btn' => 'Забронировать трансфер',
        'flypgs' => 'https://www.flypgs.com',
        'skyscanner' => 'https://www.skyscanner.com.tr/?currency=TRY&locale=ru-RU&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd',
        'corendon' => 'https://www.corendonairlines.com/ru',
        'aviasales' => 'https://www.aviasales.ru/?params=IST1&currency=usd',
        'turkish' => 'https://www.turkishairlines.com/ru-int/',
    ],
    'de' => [
        'flight-mobile-title' => 'Buchen Sie jetzt ein Flugticket',
        'flight-mobile-addendum' => 'Das Verlinken oder Verweisen auf andere Websites auf unserer Website macht den Website-Inhaber nicht für den Inhalt der verlinkten oder verlinkten Websites verantwortlich, und der Website-Inhaber kann nicht für Schäden oder Verluste haftbar gemacht werden, die durch den Inhalt anderer Websites entstehen. Alle Links zu anderen Websites werden auf unserer Website für die Benutzerfreundlichkeit unserer Website bereitgestellt. Diese Vereinbarung impliziert nicht, dass Port Nature Hotels oder seine verbundenen Unternehmen in irgendeiner Weise mit diesen anderen Websites oder ihren Eigentümern verbunden oder verbunden sind.',
        'btn-collapsed' => 'Mehr Fluggesellschaften',
        'btn-open' => 'Weniger Fluggesellschaften',
        'transfer-road-title' => 'Verbringen Sie die Zeit auf der Straße in Komfort',
        'transfer-btn' => 'Transfer buchen',
        'flypgs' => 'https://www.flypgs.com/',
        'skyscanner' => 'https://www.skyscanner.com.tr/?currency=TRY&locale=de-DE&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd',
        'corendon' => 'https://www.corendonairlines.com/de',
        'aviasales' => 'https://www.aviasales.ru/?params=IST1&currency=usd',
        'turkish' => 'https://www.turkishairlines.com/de-int/fluge/buchung/',
    ],
];
@endphp

<div class="flight-wrapper-mobile">
    <div class="flight-mobile-div">
      <div class='flight-mobile-title'>
        <p>{!! $translation[$lang]['flight-mobile-title'] !!}</p>
        <img src="{{ asset('assets/frontend/images/offers/plane.svg') }}">
      </div>
      <div class='flight-mobile-w-addendum collapse' id="flightCollapse">
      <div class="flight-items-wrapper">
        <div class="flight-item-wrapper">
           <a href="{!! $translation[$lang]['flypgs'] !!}" target="_blank">
              <img class="pegasus-logo" src="{{ asset('assets/frontend/images/offers/logo-1.webp') }}" />
            </a>
        </div>
        <div class="flight-item-wrapper">
           <a href="{!! $translation[$lang]['skyscanner'] !!}" target="_blank">
              <img class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.webp') }}" />
            </a>
        </div>
        <div class="flight-item-wrapper">
           <a href="{!! $translation[$lang]['corendon'] !!}" target="_blank">
              <img class="corendon-logo" src="{{ asset('assets/frontend/images/offers/logo-3.webp') }}" />
            </a>
        </div>
        <div class="flight-item-wrapper">
             <a href="{!! $translation[$lang]['aviasales'] !!}" target="_blank">
              <img class="avia-logo" src="{{ asset('assets/frontend/images/offers/logo-4.webp') }}" />
            </a>
        </div>
        <div class="flight-item-wrapper">
           <a href="{!! $translation[$lang]['turkish'] !!}" target="_blank">
              <img class="turkish-logo" src="{{ asset('assets/frontend/images/offers/logo-5.webp') }}" />
            </a>
        </div>
      </div>
    <p class="flight-mobile-addendum">{!! $translation[$lang]['flight-mobile-addendum'] !!}</p></div>
      <a class="flight-collapse-button collapsed"  data-bs-toggle="collapse" data-bs-target="#flightCollapse" aria-expanded="false" aria-controls="flightCollapse">
    <span class="btn-collapsed">{!! $translation[$lang]['btn-collapsed'] !!}</span>
      <span class="btn-open">{!! $translation[$lang]['btn-open'] !!}</span>
  
        </a>
        <hr class="flight-mobile-hr">
        <div class='flight-mobile-title'>
        <p>{!! $translation[$lang]['transfer-road-title'] !!}</p>
        <img src="{{ asset('assets/frontend/images/offers/car.svg') }}">
      </div>
      <a class="transfer-mobile-btn" href="https://portnature.rezervasyonal.com/" target="_blank">{!! $translation[$lang]['transfer-btn'] !!}</a>
    </div>
  </div>
