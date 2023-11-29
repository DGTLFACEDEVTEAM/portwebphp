@php
$translation = [
    'en' => [
        'h2-title' => 'BOOKING OPPORTUNITIES',
        'opportunity-title-1' => 'Upcoming Concerts at the Hotel 💓💥',
        'opportunity-text' => 'Experience world-class music in the comfort of Port Nature Luxury Resort Hotel with our exclusive concert series featuring top performers from around the globe.',
        'opportunity-title-2' => 'Visit The Best Locations In Antalya 🥰 💤 🏖 ',
        'opportunity-text-2' => 'Antalya has a must-visit destination with unique nature for those seeking to immerse themselves in this beautiful city\'s rich history and culture.',
        'opportunity-title-3' => 'Experience Ultimate Relaxation 🥰 💎',
        'opportunity-text-3' => 'Unwind and rejuvenate your mind, body, and soul with our luxurious spa treatments, designed to relax and refresh you from head to toe.',
    ],
    'de' => [
        'h2-title' => 'BUCHUNGS',
        'opportunity-title-1' => 'Kommende Konzerte im Hotel 💓💥',
        'opportunity-text' => 'Erleben Sie Weltklassemusik im Komfort des Port Nature Luxury Resort Hotels mit unserer exklusiven Konzertreihe mit Top-Performern aus der ganzen Welt.',
        'opportunity-title-2' => 'Besuchen Sie die besten Orte in Antalya 🥰 💤 🏖 ',
        'opportunity-text-2' => 'Antalya hat ein Muss-Besuchsziel mit einzigartiger Natur für diejenigen, die sich in die reiche Geschichte und Kultur dieser schönen Stadt vertiefen möchten.',
        'opportunity-title-3' => 'Erleben Sie ultimative Entspannung 🥰 💎',
        'opportunity-text-3' => 'Entspannen und erfrischen Sie Körper und Seele mit unseren luxuriösen Spa-Behandlungen, die darauf ausgelegt sind, Sie von Kopf bis Fuß zu entspannen und zu erfrischen.',
    ],
    'ru' => [
        'h2-title' => 'ВОЗМОЖНОСТИ БРОНИРОВАНИЯ',
        'opportunity-title-1' => 'Предстоящие концерты в отеле 💓💥',
        'opportunity-text' => 'Почувствуйте мировую музыку в комфорте отеля Port Nature Luxury Resort с нашей эксклюзивной серией концертов с лучшими исполнителями со всего мира.',
        'opportunity-title-2' => 'Посетите лучшие места в Анталии 🥰 💤 🏖 ',
        'opportunity-text-2' => 'Анталия имеет место, которое следует посетить, с уникальной природой для тех, кто хочет погрузиться в богатую историю и культуру этого прекрасного города.',
        'opportunity-title-3' => 'Ощутите истинный релакс 🥰 💎',
        'opportunity-text-3' => 'Расслабьте и омолодите свой разум, тело и душу с нашими роскошными спа-процедурами, разработанными для расслабления и освежения от головы до пят.',
    ],
    'tr' => [
        'h2-title' => 'REZERVASYON FIRSATLARI',
        'opportunity-title-1' => 'Otelde Yaklaşan Konserler 💓💥',
        'opportunity-text' => 'Dünyanın dört bir yanından üst düzey sanatçıların yer aldığı özel konser serimizle Port Nature Luxury Resort Hotel\'in konforunda dünya standartlarında müziğin tadını çıkarın.',
        'opportunity-title-2' => 'Antalya nın En İyi Yerlerini Ziyaret Edin 🥰 💤 🏖 ',
        'opportunity-text-2' => 'Antalya, bu güzel şehrin zengin tarihine ve kültürüne kendini kaptırmak isteyenler için eşsiz doğaya sahip mutlaka görülmesi gereken bir destinasyona sahiptir.',
        'opportunity-title-3' => 'Nihai Rahatlamayı Deneyimleyin 🥰 💎',
        'opportunity-text-3' => 'Baştan aşağı rahatlamak ve yenilenmek için tasarlanan lüks spa uygulamalarımızla zihninizi, bedeninizi ve ruhunuzu rahatlatın ve yenileyin.',
    ]
];
@endphp

<div class="opportunity-wrapper second-booking-opportunities">
    <p class="h2-title">{!! $translation[$lang]['h2-title'] !!}</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('concert') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-one.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['opportunity-title-1'] !!}</p>
                        <p>{!! $translation[$lang]['opportunity-text'] !!}</p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.planetware.com/tourist-attractions-/antalya-tr-ant-at.html"
                    class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['opportunity-title-2'] !!}</p>
                        <p>{!! $translation[$lang]['opportunity-text-2'] !!}</p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">{!! $translation[$lang]['opportunity-title-3'] !!}</p>
                        <p>{!! $translation[$lang]['opportunity-text-3'] !!}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>