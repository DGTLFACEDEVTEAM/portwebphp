@php
    $allLang = ['tr', 'en', 'ru', 'de'];
    $title = '';
    $description = '';
    $text = '';

    $translations = [
        'en' => [
            'title' => 'KVKK İşten Ayrılan Çalışan için Aydınlatma Metni',
            'description' =>
                '6698 sayılı Kişisel Verilerin Korunması Kanunu\'na (“Kanun”) göre ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (“Bundan sonra ‘PORT NATURE’ olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10\'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.',
            'text' =>
                'AS ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (PORTNATURE), WE RECORD OUR CONTACTS IN OUR CALL CENTER. In this process, some of your personal data will be processed in order to measure service quality and carry out the customer relationship management process. You can access the disclosure text we have prepared in order to fulfill the disclosure obligation and be transparent in accordance with KVKK Article 10 No. 6698, at www.xxxx.xxx.',
        ],
        'ru' => [
            'title' => 'KVKK İşten Ayrılan Çalışan için Aydınlatma Metni',
            'description' =>
                '6698 sayılı Kişisel Verilerin Korunması Kanunu\'na (“Kanun”) göre ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (“Bundan sonra ‘PORT NATURE’ olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10\'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.',
            'text' =>
                'AS ARAS İNŞAAT TİCARET TURİZM ANONIM ŞİRKETİ (PORTNATURE) (АРАС ИНШААТ ТИДЖАРЕТ ТУРИЗМ АНОНИМ ШИРКЕТИ «ПОРТ ПРИРОДА»), МЫ ЗАПИСЫВАЕМ НАШИ КОНТАКТЫ В НАШЕМ КОЛЛ-ЦЕНТРЕ. В ходе этого процесса некоторые ваши персональные данные будут обработаны для оценки качества обслуживания и осуществления процесса управления взаимоотношениями с клиентами. Вы можете получить доступ к тексту раскрытия информации, который мы подготовили для выполнения обязательства по раскрытию информации и обеспечения прозрачности в соответствии со статьей 10 КВКК № 6698, на сайте www.xxxx.xxx.',
        ],
        'de' => [
            'title' => 'KVKK İşten Ayrılan Çalışan için Aydınlatma Metni',
            'description' =>
                '6698 sayılı Kişisel Verilerin Korunması Kanunu\'na (“Kanun”) göre ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (“Bundan sonra ‘PORT NATURE’ olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10\'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.',
            'text' =>
                'ALS ARAS İNŞAAT TİCARET TURİZM ANONIM ŞİRKETİ (PORTNATURE) ERFASSEN WIR UNSERE KONTAKTE IN UNSEREM CALL CENTER. Dabei werden einige Ihrer personenbezogenen Daten verarbeitet, um die Servicequalität zu messen und den Kundenbeziehungsmanagementprozess durchzuführen. Den von uns zur Erfüllung der Offenlegungspflicht und Transparenz gemäß KVKK § 10 Nr. 6698 erstellten Offenlegungstext können Sie unter www.xxxx.xxx abrufen.',
        ],
        'tr' => [
            'title' => 'KVKK İşten Ayrılan Çalışan için Aydınlatma Metni',
            'description' =>
                '6698 sayılı Kişisel Verilerin Korunması Kanunu\'na (“Kanun”) göre ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (“Bundan sonra ‘PORT NATURE’ olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10\'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.',
            'text' =>
                'ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (PORTNATURE) OLARAK ÇAĞRI MERKEZİMİZDEKİ GÖRÜŞMELERİMİZİ KAYIT ALTINA ALMAKTAYIZ. Bu süreçte birtakım kişisel verilerinizi hizmet kalitesini ölçümlemek ve müşteri ilişkileri yönetimi sürecini yürütmek amacıyla işlenecektir. 6698 Sayılı KVKK m.10 uyarınca aydınlatma yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine www.xxxx.xxx linkinden erişebilirsiniz.',
        ],
    ];

@endphp

@extends('layouts.main', ['lang' => $lang])

@section('title', $title)
@section('description', $description)

@section('content')

    <div class="d-flex  justify-content-center align-items-start" style="margin-top:100px;min-height: calc(100vh - 515px);">

        <div class="container mt-5 px-5">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="langtr-tab" data-bs-toggle="tab" data-bs-target="#langtr" type="button" role="tab" aria-controls="langtr" aria-selected="true">TR</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="langen-tab" data-bs-toggle="tab" data-bs-target="#langen" type="button" role="tab" aria-controls="langen" aria-selected="false">EN</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="langde-tab" data-bs-toggle="tab" data-bs-target="#langde" type="button" role="tab" aria-controls="langde" aria-selected="false">DE</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="langru-tab" data-bs-toggle="tab" data-bs-target="#langru" type="button" role="tab" aria-controls="langru" aria-selected="false">RU</button>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="langtr" role="tabpanel" aria-labelledby="langtr-tab">
                    <p>
                        {{ $translations['tr']['text'] }}
                    </p>
                </div>
                <div class="tab-pane fade" id="langen" role="tabpanel" aria-labelledby="langen-tab">
                    <p>
                        {{ $translations['en']['text'] }}
                    </p>
                </div>
                <div class="tab-pane fade" id="langde" role="tabpanel" aria-labelledby="langde-tab">
                    <p>
                        {{ $translations['de']['text'] }}
                    </p>
                </div>
                <div class="tab-pane fade" id="langru" role="tabpanel" aria-labelledby="langru-tab">
                    <p>
                        {{ $translations['ru']['text'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascript-imports')
@endsection
@section('css-imports')

@endsection
