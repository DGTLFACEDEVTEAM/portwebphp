@php

$translation = [
    'tr' => [
        'flight-addendum' => 'Web sitemizde, başka sitelere link verilmesi veya başka sitelere referans verilmiş olması sitenin sahibinin, link verilen veya referans verilen diğer sitelerin içeriğinden sorumluluğunu doğurmayacağı gibi ve site sahibi diğer sitelerin içeriğinden kaynaklanan herhangi bir zarar veya ziyandan da sorumlu tutulamayacaktır. Diğer sitelere yapılan tüm linkler, website kullanıcılarımızın erişim kolaylığı için websitemizde yer almıştır. Bu düzenleme, Port Nature ya da bağlı şirketlerinin söz konusu diğer sitelerle ya da sahipleriyle ilişkide olduğu anlamına gelmez.',
        'flypgs' => 'https://www.flypgs.com',
        'skyscanner' => 'https://www.skyscanner.com.tr/?currency=TRY&locale=tr-TR&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd',
        'corendon' => 'https://www.corendonairlines.com/tr',
        'aviasales' => 'https://www.aviasales.ru/?params=IST1&currency=usd',
        'turkish' => 'https://www.turkishairlines.com/tr-int/ucak-bileti/rezervasyon/',
            ],
    'en' => [
        'flight-addendum' => 'On our website, linking to other sites or referring to other sites does not mean that the owner of the site will be responsible for the content of the other sites, and the site owner will not be liable for any damage or loss arising from the content of other sites. All links to other sites are for the convenience of our website users. This arrangement does not mean that Port Nature or its affiliates are in any way related to such other sites or their owners.',
        'flypgs' => 'https://www.flypgs.com',
        'skyscanner' => 'https://www.skyscanner.com.tr/?currency=TRY&locale=en-GB&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd',
        'corendon' => 'https://www.corendonairlines.com/en',
        'aviasales' => 'https://www.aviasales.ru/?params=IST1&currency=usd',
        'turkish' => 'https://www.turkishairlines.com/en-int/flights/booking/',
            ],
    'de' => [
        'flight-addendum' => 'Auf unserer Website bedeutet das Verlinken zu anderen Websites oder das Verweisen auf andere Websites nicht, dass der Eigentümer der Website für den Inhalt der anderen Websites verantwortlich ist, und der Website-Besitzer haftet nicht für Schäden oder Verluste, die aus dem Inhalt anderer Websites entstehen. Alle Links zu anderen Websites dienen der Bequemlichkeit unserer Website-Benutzer. Diese Vereinbarung bedeutet nicht, dass Port Nature oder seine Tochtergesellschaften in irgendeiner Weise mit solchen anderen Websites oder deren Eigentümern verbunden sind.',
        'flypgs' => 'https://www.flypgs.com/',
        'skyscanner' => 'https://www.skyscanner.com.tr/?currency=TRY&locale=de-DE&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd',
        'corendon' => 'https://www.corendonairlines.com/de',
        'aviasales' => 'https://www.aviasales.ru/?params=IST1&currency=usd',
        'turkish' => 'https://www.turkishairlines.com/de-int/fluge/buchung/',
    ],
    'ru' => [
        'flight-addendum' => 'На нашем сайте ссылка на другие сайты или ссылка на другие сайты не означает, что владелец сайта будет нести ответственность за содержание других сайтов, и владелец сайта не несет ответственности за любые убытки или убытки, возникающие из содержания других сайтов. Все ссылки на другие сайты предназначены для удобства пользователей нашего сайта. Это соглашение не означает, что Port Nature или его аффилированные лица каким-либо образом связаны с такими другими сайтами или их владельцами.',
        'flypgs' => 'https://www.flypgs.com',
        'skyscanner' => 'https://www.skyscanner.com.tr/?currency=TRY&locale=ru-RU&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd',
        'corendon' => 'https://www.corendonairlines.com/ru',
        'aviasales' => 'https://www.aviasales.ru/?params=IST1&currency=usd',
        'turkish' => 'https://www.turkishairlines.com/ru-int/',
    ],
];

@endphp

<div class="flight-wrapper">
    <p class="flight-addendum">
        {!! $translation[$lang]['flight-addendum'] !!}

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a target="_blank" href="{!! $translation[$lang]['flypgs'] !!}"
                        target="_blank"><img class="pegasus-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-1.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a target="_blank"
                        href="{!! $translation[$lang]['skyscanner'] !!}"
                        target="_blank"><img class="scanner-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-2.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a target="_blank" target="_blank" href="{!! $translation[$lang]['corendon'] !!}"
                        target="_blank"><img class="corendon-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-3.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a target="_blank" href="{!! $translation[$lang]['aviasales'] !!}" target="_blank"><img
                            class="avia-logo" src="{{ asset('assets/frontend/images/offers/logo-4.webp') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a target="_blank" href="{!! $translation[$lang]['turkish'] !!}"
                        target="_blank"><img class="turkish-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-5.webp') }}" /></a>
                </div>
            </div>
        </div>
    </div>
</div>