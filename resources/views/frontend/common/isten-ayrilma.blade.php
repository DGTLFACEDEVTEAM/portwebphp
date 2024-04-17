@php
    $allLang = ['tr', 'en', 'ru', 'de'];
    $title = '';
    $description = '';
    switch ($lang) {
        case 'en':
            $title = 'KVKK İşten Ayrılan Çalışan için Aydınlatma Metni';
            $description =
                '6698 sayılı Kişisel Verilerin Korunması Kanunu\'na (“Kanun”) göre ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (“Bundan sonra ‘PORT NATURE’ olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10\'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.';

            break;
        case 'ru':
            $title = 'KVKK İşten Ayrılan Çalışan için Aydınlatma Metni';
            $description =
                '6698 sayılı Kişisel Verilerin Korunması Kanunu\'na (“Kanun”) göre ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (“Bundan sonra ‘PORT NATURE’ olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10\'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.';

            break;
        case 'de':
            $title = 'KVKK İşten Ayrılan Çalışan için Aydınlatma Metni';
            $description =
                '6698 sayılı Kişisel Verilerin Korunması Kanunu\'na (“Kanun”) göre ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (“Bundan sonra ‘PORT NATURE’ olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10\'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.';

            break;
        default:
            $title = 'KVKK İşten Ayrılan Çalışan için Aydınlatma Metni';
            $description =
                '6698 sayılı Kişisel Verilerin Korunması Kanunu\'na (“Kanun”) göre ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ (“Bundan sonra ‘PORT NATURE’ olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10\'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.';
            break;
    }
@endphp

@extends('layouts.main', ['lang' => $lang])

@section('title', $title)
@section('description', $description)


@section('content')

    <div style="margin-top:100px;" class="px-5">
        <p class="Title" style="text-align:justify; font-size:18pt;">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Korunması</span></strong>
        </p>
        <p class="Title" style="text-align:justify; font-size:24pt">
            <span style="font-family:'Times New Roman'; color:#002060">İşten Ayrılan Çalışan için </span><strong><span style="font-family:'Times New Roman'; color:#002060">Aydınlatma Metni</span></strong>
        </p>
        <p>
            &#xa0;
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">6698 sayılı Kişisel Verilerin Korunması Kanunu'na (“Kanun”) göre </span><a id="_Hlk140101835"><strong><span
                        style="line-height:108%; font-family:'Times New Roman'; font-size:10.5pt; color:#002060; background-color:#ffffff">ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ</span></strong><span
                    style="font-family:'Times New Roman'; color:#002060"> </span></a><span style="font-family:'Times New Roman'; color:#002060">(“Bundan sonra ‘</span><strong><span
                    style="line-height:108%; font-family:'Times New Roman'; font-size:10.5pt; color:#002060; background-color:#ffffff">PORT NATURE</span></strong><strong><span
                    style="font-family:'Times New Roman'; color:#002060">’</span></strong><span style="font-family:'Times New Roman'; color:#002060"> olarak anılacaktır.”) sizinle ilgili kişisel verileri
                işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır. Kanunun "Aydınlatma Yükümlülüğü" başlıklı 10'ncu maddesine göre veri sorumluları, kişisel verilerini işledikleri gerçek kişileri
                bazı
                konularda bilgilendirmekle yükümlüdür.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Bu metin hem mevzuata uyum sağlanması hem de şeffaf ve hesap verebilir olabilmek amacıyla </span><strong><span
                    style="line-height:108%; font-family:'Times New Roman'; font-size:10.5pt; color:#002060; background-color:#ffffff">PORT NATURE</span></strong><strong><span
                    style="font-family:'Times New Roman'; color:#002060"> </span></strong><span style="font-family:'Times New Roman'; color:#002060">tarafından hazırlanmıştır.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">İlgili Kişi: </span></strong><span style="font-family:'Times New Roman'; color:#002060">Şirketimizden ayrılan çalışan olmanız
                ve
                bu nedenle birtakım kişisel verilerini işlediğimiz siz, kanun tarafından ilgili kişi olarak tanımlanmaktasınız.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Veri Sorumlusu:</span></strong><span style="font-family:'Times New Roman'; color:#002060"> Sizinle ilgili kişisel veriler
                konusunda kişisel verilerin işleme amaçlarını ve vasıtalarını belirleyen, veri kayıt sisteminin kurulmasından ve yönetilmesinden sorumlu olan </span><strong><span
                    style="font-family:'Times New Roman'; color:#002060">[</span></strong><strong><span
                    style="line-height:108%; font-family:'Times New Roman'; font-size:10.5pt; color:#002060; background-color:#ffffff">PORT NATURE</span></strong><strong><span
                    style="font-family:'Times New Roman'; color:#002060">]</span></strong><span style="font-family:'Times New Roman'; color:#002060"> veri sorumlusudur.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel veri:</span></strong><span style="font-family:'Times New Roman'; color:#002060"> Kimliği belirli veya belirlenebilir
                gerçek kişiye ilişkin her türlü bilgiyi ifade eder.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Hangi kişisel verilerinizin hangi amaçla işlendiği ve bu işlemenin Kanun’un hangi gerekçesinde dayandığı tablo şeklinde
                gösterilecektir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">İşlenen Kişisel Verileriniz, İşlenme Amaçları ve Hukuki Sebepleri</span></strong>
        </p>
        <table style="width:100%; margin-bottom:0pt; border-collapse:collapse">
            <tr>
                <td
                    style="width:133.4pt; border-top:0.75pt solid #5b9bd5; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenen Kişisel Verileriniz</span></strong>
                    </p>
                </td>
                <td style="width:162.95pt; border-top:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenme Amaçları</span></strong>
                    </p>
                </td>
                <td
                    style="width:124.6pt; border-top:0.75pt solid #5b9bd5; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">Hukuki Sebepleri</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:69.6pt">
                <td style="width:133.4pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Kimlik </span><em><span style="font-family:'Times New Roman'; ">(Ad, Ana Adı, Baba Adı, Cinsiyet, Doğum Tarihi, Doğum Yeri
                                    vd.),</span></em>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">İletişim </span><em><span style="font-family:'Times New Roman'; ">(Adres Apartman Adı, Adres İl, Adres İlçe, Adres Kapı No, Adres
                                    Mahalle / Semt</span></em><strong><em><span style="font-family:'Times New Roman'; ">),</span></em></strong>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Özlük </span><em><span style="font-family:'Times New Roman'; ">(İşe Giriş Tarihi),</span></em><span
                                style="font-family:'Times New Roman'"> </span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Sosyal Güvenlik </span><em><span style="font-family:'Times New Roman'; ">(2008 Mayıs Öncesi Çalışmış ise Bağkur Sicil No, 2008 Mayıs
                                    Öncesi Çalışmış ise Emekli Sandığı, 2008 Mayıs Öncesi Çalışmış ise Geç.20.md Sicil No, 2008 Mayıs Öncesi Çalışmış ise SSK Sicil No vd.)</span></em><span
                                style="font-family:'Times New Roman'"> verileriniz.</span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                </td>
                <td style="width:162.95pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">Çalışanlar İçin İş Akdi ve Mevzuattan Kaynaklı Yükümlülüklerin Yerine Getirilmesi, Saklama ve Arşiv Faaliyetlerinin
                            Yürütülmesi </span><em><span style="font-family:'Times New Roman'; color:#002060">(İşten Çıkış Bildirgelerinin Elde Edilmesi ve Saklanması)</span></em><span
                            style="font-family:'Times New Roman'; color:#002060"> Amaçlarıyla</span>
                    </p>
                </td>
                <td style="width:124.6pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">KVKK Md.5/2 (ç): Veri sorumlusunun hukuki yükümlülüğü bendine istinaden</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#002060">(5510 Sayılı Sosyal Sigortalar ve Genel Sağlık Sigortası Kanunu Md.86/1 gereği anılan işten ayrılış bildirgesini
                                elde
                                etmek ve saklamak veri sorumlusunun hukuki yükümlülüğüdür.) </span></em>
                    </p>
                </td>
            </tr>
            <tr style="height:69.6pt">
                <td style="width:133.4pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Kimlik </span><em><span style="font-family:'Times New Roman'; ">(Ad, Ana Adı, Baba Adı, Cinsiyet, Doğum Tarihi, Doğum Yeri
                                    vd.),</span></em>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">İletişim </span><em><span style="font-family:'Times New Roman'; ">(Adres Apartman Adı, Adres İl, Adres İlçe, Adres Kapı No, Adres
                                    Mahalle / Semt</span></em><strong><em><span style="font-family:'Times New Roman'; ">),</span></em></strong>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Özlük </span><em><span style="font-family:'Times New Roman'; ">(İşe Giriş Tarihi),</span></em><span
                                style="font-family:'Times New Roman'"> </span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Sosyal Güvenlik </span><em><span style="font-family:'Times New Roman'; ">(2008 Mayıs Öncesi Çalışmış ise Bağkur Sicil No, 2008
                                    Mayıs
                                    Öncesi Çalışmış ise Emekli Sandığı, 2008 Mayıs Öncesi Çalışmış ise Geç.20.md Sicil No, 2008 Mayıs Öncesi Çalışmış ise SSK Sicil No vd.)</span></em><span
                                style="font-family:'Times New Roman'"> verileriniz.</span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                </td>
                <td style="width:162.95pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">Yetkili Kişi, Kurum ve Kuruluşlara Bilgi Verilmesi </span><em><span
                                style="font-family:'Times New Roman'; color:#002060">(İşten Çıkış Bildirgelerinin SGK’ya aktarılması)</span></em><span
                            style="font-family:'Times New Roman'; color:#002060">
                            Amaçlarıyla</span>
                    </p>
                </td>
                <td style="width:124.6pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">KVKK Md.5/2 (ç): Veri sorumlusunun hukuki yükümlülüğü bendine istinaden</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#002060">(5510 Sayılı Kanun m.9 gereği SGK’ya anılan bildirimi yapmamız ve bu nedenle kişisel verilerinizi işlememiz veri
                                sorumlusu olarak hukuki yükümlülüğümüzdür.) </span></em>
                    </p>
                </td>
            </tr>
        </table>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Tarafımızca işlenmektedir.</span>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            <strong><span style="color:#002060">Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></strong>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            <span style="color:#002060">Kişisel verileriniz KVKK Md.28/1 çerçevesinde talep edilmesi halinde aydınlatma yükümlülüğü olmadan ve açık rızanız aranmadan ilgili makamlara
                aktarılabilir.</span>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            <span style="color:#002060">Bunun dışında öngörülemeyen durumlarda da kişisel verileriniz kanunlarda açıkça belirtilmiş durumlarda talep edilmesi halinde kanunlarda belirtilen kamu
                kurumlarına
                (Bakanlıklar gibi idari makamlara) kanunda öngörülen amaç ve sınırlamalar dahilinde aktarılabilir.</span>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            <span style="color:#002060">Aydınlatma yükümlülüğü olmayan ve açık rızanızı gerektirmeyen yasal yükümlülüklerimizin dışında; Kanun m.8’deki şartlar çerçevesinde;</span> <span
                style="color:#002060">Sosyal Güvenlik Kurumu’na 5510 Sayılı Sosyal Sigortalar Kanunu m.9 uyarınca işten çıkış bildirimi için aktarılabilecektir.</span>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            &#xa0;
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            <strong><span style="color:#002060">Kişisel Verilerin Elde Edilme Yöntemleri</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">-İşten çıkış bildirgesini SGK sisteminden elde etmemiz yoluyla yarı otomatik yöntemlerle elde edilmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><em><span style="font-family:'Times New Roman'; color:#002060">İbraname Belgesi Düzenlenmesi Suretiyle İşten Ayrılan Çalışanımız İseniz;</span></em></strong>
        </p>
        <table style="width:100%; margin-bottom:0pt; border-collapse:collapse">
            <tr>
                <td
                    style="width:133.4pt; border-top:0.75pt solid #5b9bd5; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenen Kişisel Verileriniz</span></strong>
                    </p>
                </td>
                <td style="width:162.95pt; border-top:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenme Amaçları</span></strong>
                    </p>
                </td>
                <td
                    style="width:124.6pt; border-top:0.75pt solid #5b9bd5; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">Hukuki Sebepleri</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:133.4pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Kimlik </span><em><span style="font-family:'Times New Roman'; ">(Ad, Soyad. TCKN),</span></em>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span></em>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">İletişim </span><em><span style="font-family:'Times New Roman'; ">(Telefon, Adres, Tebligat Adresi)</span></em>
                        </li>
                    </ul>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Özlük </span><em><span style="font-family:'Times New Roman'; ">(SGK Sicil No., İşe Giriş Tarihi, İşten Ayrılma Tarihi, İşten
                                    Ayrılma
                                    Nedeni İşveren Bilgileri vd.),</span></em><span style="font-family:'Times New Roman'"> </span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Hukuki İşlem </span><em><span style="font-family:'Times New Roman'; ">(İbra Beyanı, İmza ve İmza Tarihi)</span></em><span
                                style="font-family:'Times New Roman'"> verileriniz</span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                </td>
                <td style="width:162.95pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">Hukuk İşlerinin Takibi ve Yürütülmesi, Saklama ve Arşiv Faaliyetlerinin Yürütülmesi </span><em><span
                                style="font-family:'Times New Roman'; color:#002060">(İbraname İmzalanması ve Saklanması)</span></em><span style="font-family:'Times New Roman'; color:#002060">
                            Amaçlarıyla</span>
                    </p>
                </td>
                <td style="width:124.6pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">KVKK Md.5/2 (e): Bir hakkın tesisi, kullanılması ve korunması bendine istinaden</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#002060">(İbranameyi, kanunlarda geçerli şekil şartlarına göre yazılı olarak gerçekleştirmek, veri sorumlusu olarak
                                haklarımızın
                                korunmasını sağlayacaktır.) </span></em>
                    </p>
                </td>
            </tr>
        </table>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Tarafımızca ek olarak işlenmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Kişisel verileriniz KVKK Md.28/1 çerçevesinde talep edilmesi halinde aydınlatma yükümlülüğü olmadan ve açık rızanız aranmadan ilgili
                makamlara aktarılabilir.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Bunun dışında öngörülemeyen durumlarda da kişisel verileriniz kanunlarda açıkça belirtilmiş durumlarda talep edilmesi halinde
                kanunlarda
                belirtilen kamu kurumlarına (Bakanlıklar gibi idari makamlara) kanunda öngörülen amaç ve sınırlamalar dahilinde aktarılabilir.</span>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            <span style="color:#002060">Aydınlatma yükümlülüğü olmayan ve açık rızanızı gerektirmeyen yasal yükümlülüklerimizin dışında; Kanun m.8’deki şartlar çerçevesinde kişisel verilerinizin aktarımı
                yapılmamaktadır.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Elde Edilme Yöntemleri</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Kişisel verileriniz; İbranameyi imzalamanız yoluyla otomatik olmayan yöntemlerle elde edilmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><em><span style="font-family:'Times New Roman'; color:#002060">İşten Çıkış Tanımlaması Yapılan Çalışanımız İseniz;</span></em></strong>
        </p>
        <table style="width:100%; margin-bottom:0pt; border-collapse:collapse">
            <tr>
                <td
                    style="width:133.4pt; border-top:0.75pt solid #5b9bd5; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenen Kişisel Verileriniz</span></strong>
                    </p>
                </td>
                <td style="width:162.95pt; border-top:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenme Amaçları</span></strong>
                    </p>
                </td>
                <td
                    style="width:124.6pt; border-top:0.75pt solid #5b9bd5; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">Hukuki Sebepleri</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:133.4pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Özlük </span><em><span style="font-family:'Times New Roman'; ">(İşten Ayrılma Tarihi),</span></em><span
                                style="font-family:'Times New Roman'"> </span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">İşlem Güvenliği </span><em><span style="font-family:'Times New Roman'; ">(İşlem Tarihi)</span></em><span
                                style="font-family:'Times New Roman'"> verileriniz</span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                </td>
                <td style="width:162.95pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">Finans Ve Muhasebe İşlerinin Yürütülmesi, Saklama ve Arşiv Faaliyetlerinin Yürütülmesi ve İş Faaliyetlerinin Yürütülmesi
                            /
                            Denetimi </span><em><span style="font-family:'Times New Roman'; color:#002060">(İşten Çıkış Tanımlama Ekranındaki Bilgilerinizin Oluşturulması, Saklanması ve
                                Aktarılması)</span></em><span style="font-family:'Times New Roman'; color:#002060"> Amaçlarıyla</span>
                    </p>
                </td>
                <td style="width:124.6pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">KVKK Md. 5/2(f): İlgili kişinin temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri sorumlusunun meşru menfaatleri
                            için veri işlenmesinin zorunlu olması bendine istinaden</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#002060">(Muhasebe Programına Finans ve Muhasebe İşlerinin Yürütülmesini sağlamak amacıyla oluşturulmasında, Saklama ve Arşiv
                                Faaliyetlerinin Yürütülmesi amacıyla saklanmasında İş Faaliyetlerinin Yürütülmesi / Denetimini sağlamak amacıyla muhasebe programına aktarılmasında veri sorumlusu olarak
                                meşru
                                menfaatimiz bulunmaktadır.)</span></em>
                    </p>
                </td>
            </tr>
        </table>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Tarafımızca ek olarak işlenmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Kişisel verileriniz KVKK Md.28/1 çerçevesinde talep edilmesi halinde aydınlatma yükümlülüğü olmadan ve açık rızanız aranmadan ilgili
                makamlara aktarılabilir.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Bunun dışında öngörülemeyen durumlarda da kişisel verileriniz kanunlarda açıkça belirtilmiş durumlarda talep edilmesi halinde
                kanunlarda
                belirtilen kamu kurumlarına (Bakanlıklar gibi idari makamlara) kanunda öngörülen amaç ve sınırlamalar dahilinde aktarılabilir.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Aydınlatma yükümlülüğü olmayan ve açık rızanızı gerektirmeyen yasal yükümlülüklerimizin dışında; Kanun m.8’de öngörülen şartlar
                çerçevesinde anlaşmalı olunan muhasebe programına iş sağlığı ve güvenliği faaliyetlerinin yürütülmesi amacıyla aktarılabilecektir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Elde Edilme Yöntemleri</span></strong>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            <span style="color:#002060">Kişisel verilerini, muhasebe programı aracılığıyla otomatik olmayan yöntemlerle oluşturulmaktadır.</span>
        </p>
        <p style="text-align:justify">
            <strong><em><span style="font-family:'Times New Roman'; color:#002060">İşten Çıkış Tanımlaması SGK’ya Aktarılan Çalışanımız İseniz;</span></em></strong>
        </p>
        <table style="width:100%; margin-bottom:0pt; border-collapse:collapse">
            <tr>
                <td
                    style="width:133.4pt; border-top:0.75pt solid #5b9bd5; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenen Kişisel Verileriniz</span></strong>
                    </p>
                </td>
                <td style="width:162.95pt; border-top:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenme Amaçları</span></strong>
                    </p>
                </td>
                <td
                    style="width:124.6pt; border-top:0.75pt solid #5b9bd5; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">Hukuki Sebepleri</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:133.4pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Özlük </span><em><span style="font-family:'Times New Roman'; ">(İşten Ayrılma Tarihi),</span></em><span
                                style="font-family:'Times New Roman'"> </span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">İşlem Güvenliği </span><em><span style="font-family:'Times New Roman'; ">(İşlem Tarihi)</span></em><span
                                style="font-family:'Times New Roman'"> verileriniz</span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                </td>
                <td style="width:162.95pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">Yetkili Kişi, Kurum Ve Kuruluşlara Bilgi Verilmesi </span><em><span
                                style="font-family:'Times New Roman'; color:#002060">(İşten Çıkış Tanımlama Ekranındaki Bilgilerinizin Aktarılması)</span></em><span
                            style="font-family:'Times New Roman'; color:#002060"> Amaçlarıyla</span>
                    </p>
                </td>
                <td style="width:124.6pt; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">KVKK Md.5/2 (ç): Veri sorumlusunun hukuki yükümlülüğü bendine istinaden</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#002060">(5510 Sayılı Kanun m.9 gereği SGK’ya anılan bildirimi yapmamız ve bu nedenle kişisel verilerinizi işlememiz veri
                                sorumlusu olarak hukuki yükümlülüğümüzdür.)</span></em>
                    </p>
                </td>
            </tr>
        </table>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Tarafımızca ek olarak işlenmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Kişisel verileriniz KVKK Md.28/1 çerçevesinde talep edilmesi halinde aydınlatma yükümlülüğü olmadan ve açık rızanız aranmadan ilgili
                makamlara aktarılabilir.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Bunun dışında öngörülemeyen durumlarda da kişisel verileriniz kanunlarda açıkça belirtilmiş durumlarda talep edilmesi halinde
                kanunlarda
                belirtilen kamu kurumlarına (Bakanlıklar gibi idari makamlara) kanunda öngörülen amaç ve sınırlamalar dahilinde aktarılabilir.</span>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify">
            <span style="color:#002060">Aydınlatma yükümlülüğü olmayan ve açık rızanızı gerektirmeyen yasal yükümlülüklerimizin dışında; </span><span style="font-size:11pt; color:#002060">Sosyal
                Güvenlik
                Kurumu’na 5510 Sayılı Sosyal Sigortalar Kanunu m.9 uyarınca işten çıkış bildirimi için aktarılabilecektir.</span>
        </p>
        <p style="text-align:justify">
            <strong><em><span style="font-family:'Times New Roman'; color:#002060">İşten Ayrılma Sürecinde İlişik Kesme Formu Dolduran Çalışanımız iseniz;</span></em></strong>
        </p>
        <table style="width:100%; margin-bottom:0pt; border-collapse:collapse">
            <tr class="d-flex">
                <td
                    style="width:100%; border-top:0.75pt solid #5b9bd5; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenen Kişisel Verileriniz</span></strong>
                    </p>
                </td>
                <td style="width:100%; border-top:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenme Amaçları</span></strong>
                    </p>
                </td>
                <td
                    style="width:100%; border-top:0.75pt solid #5b9bd5; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">Hukuki Sebepleri</span></strong>
                    </p>
                </td>
            </tr>
            <tr class="d-flex">
                <td style="width:100%; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Kimlik</span><em><span style="font-family:'Times New Roman'; "> (Ad, Soyad),</span></em>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span></em>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Özlük </span><em><span style="font-family:'Times New Roman'; ">(Departman, Pozisyon, İşten Çıkış Tarihi, İlişiği Kesilecek
                                    Departmanlar),</span></em>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Hukuki İşlem </span><em><span style="font-family:'Times New Roman'; ">(Tarih)</span></em><span
                                style="font-family:'Times New Roman'">
                                verileriniz.</span>
                        </li>
                    </ul>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                </td>
                <td style="width:100%; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">Hukuk İşlerinin Takibi ve Yürütülmesi ve Saklama Ve Arşiv Faaliyetlerinin Yürütülmesi </span><em><span
                                style="font-family:'Times New Roman'; color:#002060">(İlişik Kesme Formundaki kişisel verilerinizin Elde Edilmesi ve Saklanması</span></em><span
                            style="font-family:'Times New Roman'; color:#002060"> Amacıyla</span>
                    </p>
                </td>
                <td style="width:100%; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">KVKK Md. 5/2(e): Bir hakkın tesisi, kullanılması ve korunması bendine istinaden</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#1f3864">(Olası bir uyuşmazlık yaşanması durumunda veri sorumlusu olarak haklarımızın korunması sağlamak amacıyla
                                dilekçenizdeki
                                kişisel verileriniz elde edilmekte ve saklanmaktadır.)</span></em>
                    </p>
                </td>
            </tr>
        </table>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Tarafımızca ek olarak işlenmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Kişisel verileriniz KVKK Md.28/1 çerçevesinde talep edilmesi halinde aydınlatma yükümlülüğü olmadan ve açık rızanız aranmadan ilgili
                makamlara aktarılabilir.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Bunun dışında öngörülemeyen durumlarda da kişisel verileriniz kanunlarda açıkça belirtilmiş durumlarda talep edilmesi halinde
                kanunlarda
                belirtilen kamu kurumlarına (Bakanlıklar gibi idari makamlara) kanunda öngörülen amaç ve sınırlamalar dahilinde aktarılabilir.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Aydınlatma yükümlülüğü olmayan ve açık rızanızı gerektirmeyen yasal yükümlülüklerimizin dışında kişisel verilerinizin aktarımı
                yapılmamaktadır.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Elde Edilme Yöntemleri</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Kişisel verileriniz; formu kağıt ortamında doldurmanız yoluyla otomatik olmayan yöntemlerle elde edilmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><em><span style="font-family:'Times New Roman'; color:#002060">İşten Ayrılma Sürecinde İlişik Kesme Formu Dolduran Çalışanımız iseniz;</span></em></strong>
        </p>
        <table style="width:100%; margin-bottom:0pt; border-collapse:collapse">
            <tr class="d-flex">
                <td
                    style="width:100%; border-top:0.75pt solid #5b9bd5; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenen Kişisel Verileriniz</span></strong>
                    </p>
                </td>
                <td style="width:100%; border-top:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">İşlenme Amaçları</span></strong>
                    </p>
                </td>
                <td
                    style="width:100%; border-top:0.75pt solid #5b9bd5; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#5b9bd5">
                    <p style="margin-bottom:0pt; text-align:center; line-height:normal">
                        <strong><span style="font-family:'Times New Roman'; color:#ffffff">Hukuki Sebepleri</span></strong>
                    </p>
                </td>
            </tr>
            <tr class="d-flex">
                <td style="width:100%; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt">
                        <li class="ListParagraph" style="margin-left:28.06pt; margin-bottom:0pt; line-height:normal; padding-left:7.94pt; font-family:serif; color:#002060">
                            <span style="font-family:'Times New Roman'">Özlük (İşten Ayrılma Tarihi) verileriniz.</span>
                        </li>
                    </ul>
                    <p class="ListParagraph" style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                </td>
                <td style="width:100%; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">Yetkili Kişi, Kurum Ve Kuruluşlara Bilgi Verilmesi (</span><em><span
                                style="font-family:'Times New Roman'; color:#002060">Emniyete İşten Ayrılma Bildirimi Yapılması) </span></em><span
                            style="font-family:'Times New Roman'; color:#002060">Amacıyla</span>
                    </p>
                </td>
                <td style="width:100%; border:0.75pt solid #9cc2e5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deeaf6">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">KVKK Md.5/2 (ç): Veri sorumlusunun hukuki yükümlülüğü bendine istinaden</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
                    </p>
                    <p style="margin-bottom:0pt; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#1f3864">(</span></em><em><span style="font-family:'Times New Roman'; color:#002060">1774 sayılı Kimlik Bildirme Kanunu
                                M.4</span></em><em><span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span></em><em><span style="font-family:'Times New Roman'; color:#002060">gereği
                                EGM’ye
                                anılan bildirimi yapmamız ve bu nedenle kişisel verilerinizi aktarmamız veri sorumlusu olarak hukuki yükümlülüğümüzdür.)</span></em>
                    </p>
                </td>
            </tr>
        </table>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Tarafımızca ek olarak işlenmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Kişisel verileriniz KVKK Md.28/1 çerçevesinde talep edilmesi halinde aydınlatma yükümlülüğü olmadan ve açık rızanız aranmadan ilgili
                makamlara aktarılabilir.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Bunun dışında öngörülemeyen durumlarda da kişisel verileriniz kanunlarda açıkça belirtilmiş durumlarda talep edilmesi halinde
                kanunlarda
                belirtilen kamu kurumlarına (Bakanlıklar gibi idari makamlara) kanunda öngörülen amaç ve sınırlamalar dahilinde aktarılabilir.</span>
        </p>
        <p class="NormalWeb" style="margin-top:0pt; margin-bottom:8pt; text-align:justify; font-size:11pt">
            <span style="color:#002060">Emniyet Genel Müdürlüğüne 1774 sayılı Kimlik Bildirme Kanunu M.4 uyarınca işten çıkış bildirimi için aktarılabilecektir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerin Elde Edilme Yöntemleri</span></strong>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Kişisel verileriniz; ilgili kişiden edinilen bilgiler doğrultusunda otomatik olmayan yöntemlerle elde edilmektedir.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p style="text-align:justify; line-height:normal">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Kişisel Verilerinizle İlgili Haklarınız</span></strong>
        </p>
        <p style="text-align:justify; line-height:normal">
            <span style="font-family:'Times New Roman'; color:#002060">İlgili kişiler, kişisel verilerine ilişkin haklarını öncelikle veri sorumlusuna iletmek zorundadırlar.</span><span
                style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <table style="margin-bottom:0pt; border:0.75pt solid #8eaadb; border-collapse:collapse">
            <tr>
                <td style="border-bottom:0.75pt solid #5b9bd5; padding-right:5.4pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-bottom:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.4pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <em><span style="font-family:'Times New Roman'; color:#002060">Kanun uyarınca kişisel verilerinizle ilgili olarak:</span></em>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top:0.75pt solid #5b9bd5; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #5b9bd5; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">a) Kişisel veri işlenip işlenmediğini öğrenme,</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top:0.75pt solid #8eaadb; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #8eaadb; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">b) Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top:0.75pt solid #8eaadb; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #8eaadb; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">c) Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top:0.75pt solid #8eaadb; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #8eaadb; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">ç) Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri bilme,</span>
                    </p>
                </td>
            </tr>
            <tr style="height:26.3pt">
                <td
                    style="border-top:0.75pt solid #8eaadb; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #8eaadb; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">d) Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme,</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top:0.75pt solid #8eaadb; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #8eaadb; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">e) İşlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel verilerinizin silinmesini veya yok edilmesini
                            isteme,</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top:0.75pt solid #8eaadb; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #8eaadb; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">f) (d) ve (e) bentleri uyarınca yapılan işlemlerin, kişisel verilerinizin aktarıldığı üçüncü kişilere bildirilmesini
                            isteme,</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top:0.75pt solid #8eaadb; border-right:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #8eaadb; border-left:0.75pt solid #5b9bd5; border-bottom:0.75pt solid #8eaadb; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">g) İşlenen verilerinizin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle aleyhinize bir sonucun
                            ortaya
                            çıkmasına itiraz etme,</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border-top:0.75pt solid #8eaadb; border-right:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#ffffff">
                    <p style="margin-bottom:0pt; line-height:normal">
                        <span style="font-family:'Times New Roman'">&#xa0;</span>
                    </p>
                </td>
                <td style="border-top:0.75pt solid #8eaadb; border-left:0.75pt solid #5b9bd5; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
                    <p style="margin-bottom:0pt; text-align:justify; line-height:normal">
                        <span style="font-family:'Times New Roman'; color:#002060">ğ) Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğramanız hâlinde zararın giderilmesini talep etme
                            haklarını kullanabilirsiniz.</span>
                    </p>
                </td>
            </tr>
        </table>
        <p style="margin-bottom:0pt; line-height:normal">
            <span style="font-family:'Times New Roman'">&#xa0;</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">Veri Sorumlusuna Başvuru Yöntemi</span></strong>
        </p>
        <p style="text-align:justify">
            <a id="_Hlk140098103"><span style="font-family:'Times New Roman'; color:#002060">Başvurunuzu: </span></a>
        </p>
        <ul style="margin:0pt; padding-left:0pt; list-style-type:square">
            <li class="ListParagraph" style="margin-left:28.03pt; margin-bottom:0pt; text-align:justify; padding-left:7.97pt; font-family:serif; color:#002060">
                <span style="font-family:'Times New Roman'">Fener Mah. 1962.Sk. Aras Sitesi C Blok 2CB Muratpaşa/ ANTALYA adresine yazılı olarak;</span>
            </li>
        </ul>
        <ul style="margin:0pt; padding-left:0pt; list-style-type:square">
            <li class="ListParagraph" style="margin-left:28.03pt; margin-bottom:0pt; text-align:justify; padding-left:7.97pt; font-family:serif; color:#002060">
                <a href="/cdn-cgi/l/email-protection#1b7a697a68357275687a7a6f5b736835707e6b356f69" style="text-decoration:none"><span class="Hyperlink" style="font-family:'Times New Roman'"><span
                            class="__cf_email__" data-cfemail="61001300124f080f120000152109124f0a04114f1513">[email&#160;protected]</span></span></a><span style="font-family:'Times New Roman'"> kep
                    adresine güvenli elektronik imza veya mobil imza ile;</span>
            </li>
            <li class="ListParagraph" style="margin-left:28.03pt; margin-bottom:0pt; text-align:justify; padding-left:7.97pt; font-family:serif; color:#002060">
                <span style="font-family:'Times New Roman'">Elektronik posta adresinizin sistemimizde kayıtlı olması halinde aynı e-posta adresini kullanarak </span><a
                    href="/cdn-cgi/l/email-protection#a2c9d4c9c9e2d2cdd0d6ccc3d6d7d0c78cc1cdcf8cd6d0" style="text-decoration:none"><span class="Hyperlink" style="font-family:'Times New Roman'"><span
                            class="__cf_email__" data-cfemail="6a011c01012a1a05181e040b1e1f180f44090507441e18">[email&#160;protected]</span></span></a><span style="font-family:'Times New Roman'">&#xa0;
                </span><span style="font-family:'Times New Roman'">adresimize e-posta göndererek yapabilirsiniz.</span>
            </li>
        </ul>
        <p class="ListParagraph" style="margin-bottom:0pt; text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p class="ListParagraph" style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Başvurunuzda;</span>
        </p>
        <ul style="margin:0pt; padding-left:0pt; list-style-type:square">
            <li class="ListParagraph" style="margin-left:28.03pt; margin-bottom:0pt; text-align:justify; padding-left:7.97pt; font-family:serif; color:#002060">
                <span style="font-family:'Times New Roman'">Adınızın, soyadınızın ve başvuru yazılı ise imzanızın,</span>
            </li>
            <li class="ListParagraph" style="margin-left:28.03pt; margin-bottom:0pt; text-align:justify; padding-left:7.97pt; font-family:serif; color:#002060">
                <span style="font-family:'Times New Roman'">Türkiye Cumhuriyeti vatandaşları için T.C. kimlik numaranızın, yabancı iseniz uyruğunuzun, pasaport numaranızın veya varsa kimlik
                    numaranızın,</span>
            </li>
            <li class="ListParagraph" style="margin-left:28.03pt; margin-bottom:0pt; text-align:justify; padding-left:7.97pt; font-family:serif; color:#002060">
                <span style="font-family:'Times New Roman'">Tebligata esas yerleşim yeri veya iş yeri adresinizin,</span>
            </li>
            <li class="ListParagraph" style="margin-left:28.03pt; margin-bottom:0pt; text-align:justify; padding-left:7.97pt; font-family:serif; color:#002060">
                <span style="font-family:'Times New Roman'">Varsa bildirime esas elektronik posta adresi, telefon ve faks numaranızın,</span>
            </li>
            <li class="ListParagraph" style="margin-left:28.03pt; text-align:justify; padding-left:7.97pt; font-family:serif; color:#002060">
                <span style="font-family:'Times New Roman'">Talep konunuzun, </span>
            </li>
        </ul>
        <p style="margin-left:18pt; text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">bulunması zorunlu olup varsa konuya ilişkin bilgi ve belgelerin de başvuruya eklenmesi gerekmektedir.</span>
        </p>
        <p style="text-align:justify">
            <strong><span style="font-family:'Times New Roman'; color:#002060">PORT NATURE,</span></strong><span style="font-family:'Times New Roman'; color:#002060"> kimliğinizi doğrulama hakkını saklı
                tutar.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">Başvuru sırasında uyulması gereken usul kuralları ve daha detaylı bilgiye Kişisel Verileri Koruma Kurumu'nun "</span><a
                href="https://www.resmigazete.gov.tr/eskiler/2018/03/20180310-6.htm" style="text-decoration:none"><span class="Hyperlink" style="font-family:'Times New Roman'">Veri Sorumlusuna Başvuru
                    Usul ve Esasları Hakkında Tebliğ</span></a><span style="font-family:'Times New Roman'; color:#002060">" inden ulaşabilirsiniz.</span>
        </p>
        <p style="text-align:justify">
            <span style="font-family:'Times New Roman'; color:#002060">&#xa0;</span>
        </p>
        <p>
            <span style="font-family:'Times New Roman'">&#xa0;</span>
        </p>
        <p>
            <span style="font-family:'Times New Roman'">&#xa0;</span>
        </p>
    </div>

@endsection
@section('javascript-imports')
@endsection
@section('css-imports')

@endsection
