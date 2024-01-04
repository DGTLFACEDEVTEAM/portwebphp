@php
    $allLang = ['tr', 'en', 'ru', 'de'];
    $baseRoute = '-data-chat';
    $title = '';
    $description = '';
    switch ($lang) {
        case 'en':
            $title = 'Data Protection Policy Chat Disclosure Text | Data Security and Privacy';
            $description = 'Learn about our data protection and privacy policies under KVKK in our chats for secure and informed communication.';
            break;
        case 'ru':
            $title = 'Текст Разъяснения Чата По Политике Защиты Данных | Защита Информации и Конфиденциальность';
            $description = 'Ознакомьтесь с нашими правилами конфиденциальности и защиты данных в рамках KVKK для безопасного общения в чате.';
            break;
        case 'de':
            $title = 'Datenschutz-Richtlinie Chat Aufklärungstext | Daten Schutz und Privatsphäre';
            $description = 'Informieren Sie sich über unsere Datenschutz- und Privatsphärerichtlinien im Rahmen von KVKK für sichere und geschützte Chats.';
            break;
        default:
            $title = 'KVKK Sohbet Bilgilendirme Metni | Veri Koruma ve Gizlilik';
            $description = 'KVKK kapsamında sohbetlerinizde veri koruma ve gizlilik politikalarımız hakkında bilgilendirme metni. Güvenli sohbet için bilinmesi gerekenler.';
            break;
    }
@endphp

@extends('layouts.main', ['lang' => $lang])



@section('title', $title)
@section('description', $description)



@section('header-lang')

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route($lang . $baseRoute) }}"
            aria-expanded="false">{{ strtoupper($lang) }}</a>
        <ul class="dropdown-menu dropdownmobile language">
            @foreach ($allLang as $language)
                @if ($language == $lang)
                    @continue
                @endif
                <li>
                    <a class="dropdown-item" href="{{ route($language . $baseRoute) }}">
                        {{ strtoupper($language) }}
                    </a>
                </li>
            @endforeach
        </ul>

    </li>

@endsection

@section('content')

    <div style="margin-top: 200px" class="px-4">
        <h1 class="w-100 text-center fw-bold fs-1  w-100 mb-4">
            Kişisel Verilerin Korunması
        </h1>

        <p class="text-center fw-semibold">
            <span>Sohbet Robotu Aracılığıyla İletişime Geçen Web Sitesi Ziyaretçisi için <b>Aydınlatma Metni</b></span>
        </p>


        <p>
            <span>&nbsp;</span>
        </p>

        <p>
            <span>6698 sayılı Kişisel Verilerin Korunması Kanunu'na (“Kanun”) göre </span><a><b><span>ARAS İNŞAAT TİCARET
                        TURİZM ANONİM ŞİRKETİ</span></b></a><span> </span><span>(“Bundan sonra ‘</span><b><span>PORT
                    NATURE</span></b><b><span>’</span></b><span>
                olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak
                tanımlanmaktadır.
                Kanunun &quot;Aydınlatma Yükümlülüğü&quot; başlıklı 10'ncu maddesine göre veri sorumluları, kişisel
                verilerini
                işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.</span>
        </p>

        <p>
            <span>Bu metin hem mevzuata uyum sağlanması hem de şeffaf ve hesap verebilir olabilmek amacıyla
            </span><b><span>PORT NATURE</span></b><b><span> </span></b><span>tarafından hazırlanmıştır.</span>
        </p>

        <p>
            <b><span>Tanımlar</span></b>
        </p>

        <p>
            <span>6698 sayılı Kişisel Verilerin Korunması Kanunu'na göre:</span>
        </p>

        <p>
            <b><span>Kişisel veri</span></b><span>, kimliği belirli veya belirlenebilir gerçek kişiye ilişkin her türlü
                bilgiyi;</span>
        </p>

        <p>
            <b><span>Kişisel verilerin işlenmesi</span></b><span>, kişisel verilerin tamamen veya kısmen otomatik olan ya da
                herhangi bir veri kayıt sisteminin parçası olmak kaydıyla
                otomatik olmayan yollarla elde edilmesi, kaydedilmesi, depolanması, muhafaza edilmesi, değiştirilmesi,
                yeniden
                düzenlenmesi, açıklanması, aktarılması, devralınması, elde edilebilir hâle getirilmesi, sınıflandırılması ya
                da
                kullanılmasının engellenmesi gibi veriler üzerinde gerçekleştirilen her türlü işlemi;</span>
        </p>

        <p>
            <b><span>İlgili kişi</span></b><span>, kişisel verisi işlenen gerçek kişiyi;</span>
        </p>

        <p>
            <b><span>Veri sorumlusu</span></b><span>, kişisel verilerin işleme amaçlarını ve vasıtalarını belirleyen, veri
                kayıt sisteminin kurulmasından ve
                yönetilmesinden sorumlu olan gerçek veya tüzel kişiyi</span>
        </p>

        <p>
            <b><span>Aydınlatma yükümlülüğü</span></b><span>, kişisel verilerin elde edilmesi sırasında veri sorumlusu veya
                yetkilendirdiği kişinin, ilgili kişilere; veri
                sorumlusunun kimliği, kişisel verilerin hangi amaçla işleneceği, işlenen kişisel verilerin kimlere ve hangi
                amaçla
                aktarılabileceği, kişisel veri toplamanın yöntemi ve hukuki sebebi ve Kanun'un 11'inci maddesinde sayılan
                diğer hakları
                konusunda bilgi verme yükümlülüğünü;</span>
        </p>

        <p>
            <span>ifade eder.</span>
        </p>

        <p>
            <b><span>İlgili Kişi: </span></b><span>[</span><i><span>https://portnature.com.tr/</span></i><span>]
            </span><span>Web sitemizdeki sohbet robotu aracılığıyla bizimle iletişime geçmeniz nedeniyle bazı kişisel
                verilerini işlediğimiz
                siz, Kanun tarafından ilgili kişi olarak tanımlanmaktasınız.</span>
        </p>

        <p>
            <b><span>Veri Sorumlusu:</span></b><span>
                Sizinle ilgili kişisel veriler konusunda kişisel verilerin işleme amaçlarını ve vasıtalarını belirleyen,
                veri kayıt
                sisteminin kurulmasından ve yönetilmesinden sorumlu olan </span><b><span>PORT NATURE</span></b><b><span>
                </span></b><span>veri sorumlusudur.</span>
        </p>

        <p>
            <b><i><span>Sohbet Robotu Aracılığı ile İletişime Geçmeniz Durumunuzda</span></i></b><i><span>;</span></i>
        </p>

        <table border="1" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <p>
                        <b><span>İşlenen Kişisel Verileriniz</span></b>
                    </p>
                </td>
                <td>
                    <p align="center">
                        <b><span>İşlenme Amaçları</span></b>
                    </p>
                </td>
                <td>
                    <p align="center">
                        <b><span>Hukuki Sebepleri</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <span>·</span><span>Kimlik <i>(Ad,
                                Soyad),</i></span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>·</span><span>Ziyaretçi İşlem
                            <i>(Görüşme İçeriği),</i></span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>·</span><span>İşlem Güvenliği
                            <i>(İşlem Tarihi, İşlem Saati),</i></span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>·</span><span>İletişim
                            <i>(E-posta)</i> verileriniz.</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>İletişim Faaliyetlerinin Yürütülmesi ve Saklama ve Arşiv Faaliyetlerinin Yürütülmesi
                            <i>(Sohbet Robotunda Görüşmenin Yapılması) </i>Amaçlarıyla</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>KVKK Md. 5/2(f): İlgili kişinin temel hak ve özgürlüklerine zarar vermemek kaydıyla,
                            veri</span>
                    </p>
                    <p>
                        <span>sorumlusunun meşru menfaatleri için veri işlenmesinin zorunlu olması istinaden</span>
                    </p>
                    <p>
                        <span><br />
                            <br />
                            <br />
                        </span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <i><span>(Hizmetimiz kalitesini ölçümlemek amacıyla görüşmeleri kayıt altına almada veri sorumlusu
                                olarak meşru
                                menfaatimiz bulunmaktadır.)</span></i>
                    </p>
                </td>
            </tr>
            <tr>
                <td>

                    <p>
                        <span>·</span><span>Kimlik <i>(Ad,
                                Soyad),</i></span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>·</span><span>Ziyaretçi İşlem
                            <i>(Görüşme İçeriği),</i></span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>·</span><span>İşlem Güvenliği
                            <i>(İşlem Tarihi, İşlem Saati),</i></span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>·</span><span>İletişim
                            <i>(E-posta)</i> verileriniz.</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                    <p>
                        <span>Saklama ve Arşiv Faaliyetlerinin Yürütülmesi <i>(Sohbet Robotunda Görüşmenin Saklanması)
                            </i>Amaçlarıyla</span>
                    </p>
                </td>
                <td>
                    <p>
                        <span>KVKK Md. 5/2(f): İlgili kişinin temel hak ve özgürlüklerine zarar vermemek kaydıyla,
                            veri</span>
                    </p>
                    <p>
                        <span>sorumlusunun meşru menfaatleri için veri işlenmesinin zorunlu olması istinaden</span>
                    </p>
                    <p>
                        <span><br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                        </span>
                    </p>
                    <p>
                        <i><span>(İletişim bilgilerinizi makul sürelerle saklamada veri sorumlusu olarak meşru menfaatimiz
                                bulunmaktadır.)</span></i>
                    </p>
                    <p>
                        <span>&nbsp;</span>
                    </p>
                </td>
            </tr>
        </table>

        <p>
            <span>&nbsp;</span>
        </p>

        <p>
            <span>Tarafımızca işlenmektedir.</span>
        </p>

        <p>
            <b><span>Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></b>
        </p>

        <p>
            <span>Kişisel verileriniz KVKK Md.28/1 çerçevesinde talep edilmesi halinde aydınlatma yükümlülüğü olmadan ve
                açık rızanız
                aranmadan ilgili makamlara aktarılabilir.</span>
        </p>

        <p>
            <span>Bunun dışında öngörülemeyen durumlarda da kişisel verileriniz kanunlarda açıkça belirtilmiş durumlarda
                talep edilmesi
                halinde kanunlarda belirtilen kamu kurumlarına (Bakanlıklar gibi idari makamlara) kanunda öngörülen amaç ve
                sınırlamalar dahilinde aktarılabilir.</span>
        </p>

        <p>
            <span>Aydınlatma yükümlülüğü olmayan ve açık rızanızı gerektirmeyen yasal yükümlülüklerimizin dışında; kişisel
                verilerinizin
                aktarımı yapılmamaktadır.</span>
        </p>

        <p>
            <span>Aydınlatma yükümlülüğü olmayan ve açık rızanızı gerektirmeyen yasal yükümlülüklerimizin dışında m.8’daki
                şartlar
                çerçevesinde veri merkezi yurtiçinde bulunan bulut</span><span> hizmeti</span><span> firmasına
            </span><span>iş faaliyetlerin yürütülmesi amacıyla </span><span>aktarılabilecektir</span><span>.</span>
        </p>

        <p>
            <b><span>Kişisel Verilerin Elde Edilme Yöntemleri</span></b>
        </p>

        <p>
            <span>Kişisel verileriniz Sohbet Robotu </span><span>aracılığıyla bizimle iletişime geçmeniz</span><span>
                yoluyla otomatik yöntemlerle elde edilmektedir.</span>
        </p>

        <p>
            <span>&nbsp;</span>
        </p>

        <p>
            <b><span>Kişisel Verilerinizle İlgili Haklarınız</span></b>
        </p>

        <p>
            <span>İlgili kişiler, kişisel verilerine ilişkin haklarını öncelikle veri sorumlusuna iletmek zorundadırlar.
            </span>
        </p>

        <table border="1" cellspacing="0" cellpadding="0">
            <tr>

                <td>
                    <p>
                        <span>Kanun uyarınca kişisel verilerinizle ilgili olarak:</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>a) Kişisel veri işlenip işlenmediğini öğrenme,</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>b) Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>c) Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını
                            öğrenme,</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>ç) Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri
                            bilme,</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>d) Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini
                            isteme,</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>e) İşlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel verilerinizin
                            silinmesini veya yok
                            edilmesini isteme,</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>f) (d) ve (e) bentleri uyarınca yapılan işlemlerin, kişisel verilerinizin aktarıldığı üçüncü
                            kişilere
                            bildirilmesini isteme,</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>g) İşlenen verilerinizin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle
                            aleyhinize bir
                            sonucun ortaya çıkmasına itiraz etme,</span>
                    </p>
                </td>
            </tr>
            <tr>

                <td>
                    <p>
                        <span>ğ) Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğramanız hâlinde zararın
                            giderilmesini
                            talep etme haklarını kullanabilirsiniz.</span>
                    </p>
                </td>
            </tr>
        </table>

        <p>
            <span>&nbsp;</span>
        </p>

        <p>
            <a><span>Başvurunuzu: </span></a>
        </p>

        <ul>
            <li>
                Fener Mah. 1962.Sk. Aras Sitesi C Blok 2CB Muratpaşa/ ANTALYA adresine
                yazılı olarak;
            </li>
            <li>
                <a href="mailto:aras.insaat@hs.kep.tr">aras.insaat@hs.kep.tr</a>kep adresine
                güvenli elektronik imza veya mobil imza ile;
            </li>
            <li>
                Elektronik posta adresinizin sistemimizde kayıtlı olması halinde aynı
                e-posta adresini kullanarak <a href="mailto:kvkk@portnature.com.tr"><span>kvkk@portnature.com.tr</span></a>
                adresimize
                e-posta göndererek yapabilirsiniz.
            </li>
        </ul>






        <p>
            <span>Başvurunuzda;</span>
        </p>

        <ul>
            <li>
                Adınızın, soyadınızın ve başvuru yazılı ise imzanızın,
            </li>
            <li>
                Türkiye Cumhuriyeti vatandaşları için T.C. kimlik numaranızın, yabancı
                iseniz uyruğunuzun, pasaport numaranızın veya
                varsa kimlik numaranızın,
            </li>
            <li>
                Tebligata esas yerleşim yeri veya iş yeri adresinizin,
            </li>
            <li>
                Varsa bildirime esas elektronik posta adresi, telefon ve faks
                numaranızın,
            </li>
            <li>
                Talep konunuzun,
            </li>
        </ul>

        <p>bulunması zorunlu olup varsa konuya ilişkin bilgi ve belgelerin de başvuruya eklenmesi
            gerekmektedir.</p>

        <p>
            <b><span>PORT NATURE,</span></b><span> kimliğinizi doğrulama hakkını saklı tutar.</span>
        </p>

        <p>
            <span>Başvuru sırasında uyulması gereken usul kuralları ve daha detaylı bilgiye Kişisel Verileri Koruma
                Kurumu'nun
                &quot;</span><span><a href="http://www.resmigazete.gov.tr/eskiler/2018/03/20180310-6.htm"><span>Veri
                        Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğ</span></a></span><span>&quot; inden
                ulaşabilirsiniz.</span>
        </p>

        <p>
            <span>&nbsp;</span>
        </p>

        <p><span>&nbsp;</span></p>
    </div>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* add border to table inside */

        table,
        th,
        td {
            border: 1px solid black;
        }

        td p {
            padding-left: 5px;
        }
    </style>


@endsection
@section('javascript-imports')
@endsection
@section('css-imports')

@endsection
