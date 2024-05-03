@extends('layouts.main', ['lang' => 'tr'])

@section('title', 'Mutfak Ziyaretçisi için Aydınlatma Metni - Port Nature Luxury Resort Hotel Spa')
@section('description', 'KVKK Port Nature Luxury Resort Hotel Spa. Denize sıfır en iyi 10 aile dostu Antalya oteli. Tek tıkla her şey dahil tatil rezervasyonu yapın.')

@section('content')

    @php
        $allLang = ['tr', 'en', 'ru', 'de'];
        $title = '';
        $description = '';
        $text = '';

    @endphp
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

                    <div style="word-wrap: break-word">
                        <div class="WordSection1">
                            <p class="MsoTitleCxSpFirst" style="text-align: justify">
                                <b><span lang="TR" style="font-size: 18pt; color: #002060">Kişisel Verilerin Korunması</span></b>
                            </p>

                            <p class="MsoTitleCxSpLast" style="text-align: justify">
                                <span lang="TR" style="font-size: 24pt; color: #002060">Mutfak Ziyaretçisi için <b>Aydınlatma Metni</b></span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify"><span lang="TR">&nbsp;</span></p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">6698 sayılı Kişisel Verilerin Korunması Kanunu'na (“Kanun”) göre </span><a
                                    name="_Hlk140101835"><b><span lang="TR"
                                            style="
									font-size: 10.5pt;
									line-height: 107%;
									font-family: 'Times New Roman', serif;
									color: #002060;
									background: white;
								  ">ARAS
                                            İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ</span></b></a><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060"> </span><span
                                    lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">(“Bundan sonra ‘</span><b><span lang="TR"
                                        style="
								  font-size: 10.5pt;
								  line-height: 107%;
								  font-family: 'Times New Roman', serif;
								  color: #002060;
								  background: white;
								">PORT
                                        NATURE</span></b><b><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">’</span></b><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">
                                    olarak anılacaktır.”) sizinle ilgili kişisel verileri işlemesi sebebiyle veri sorumlusu olarak tanımlanmaktadır.
                                    Kanunun &quot;Aydınlatma Yükümlülüğü&quot; başlıklı 10'ncu maddesine göre veri sorumluları, kişisel verilerini
                                    işledikleri gerçek kişileri bazı konularda bilgilendirmekle yükümlüdür.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">Bu metin hem mevzuata uyum sağlanması hem de şeffaf ve hesap verebilir olabilmek amacıyla
                                </span><b><span lang="TR"
                                        style="
								  font-size: 10.5pt;
								  line-height: 107%;
								  font-family: 'Times New Roman', serif;
								  color: #002060;
								  background: white;
								">PORT
                                        NATURE</span></b><b><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060"> </span></b><span lang="TR"
                                    style="font-family: 'Times', serif; color: #002060">tarafından hazırlanmıştır.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times', serif; color: #002060">İlgili Kişi: </span></b><span lang="TR"
                                    style="font-family: 'Times', serif; color: #002060">Otelimiz mutfağını ziyareti nedeniyle takım kişisel verilerini işlediğimiz siz, kanun tarafından ilgili kişi olarak
                                    tanımlanmaktasınız.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times', serif; color: #002060">Veri Sorumlusu:</span></b><span lang="TR"
                                    style="font-family: 'Times', serif; color: #002060">
                                    Sizinle ilgili kişisel veriler konusunda kişisel verilerin işleme amaçlarını ve vasıtalarını belirleyen, veri kayıt
                                    sisteminin kurulmasından ve yönetilmesinden sorumlu olan <b>[</b></span><b><span lang="TR"
                                        style="
								  font-size: 10.5pt;
								  line-height: 107%;
								  font-family: 'Times New Roman', serif;
								  color: #002060;
								  background: white;
								">PORT
                                        NATURE</span></b><b><span lang="TR" style="font-family: 'Times', serif; color: #002060">]</span></b><b><i><span lang="TR"
                                            style="font-family: 'Times', serif; color: #002060"> </span></i></b><span lang="TR" style="font-family: 'Times', serif; color: #002060">veri
                                    sorumlusudur.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times', serif; color: #002060">Süreçlere Göre İşlenen Kişisel Verileriniz, İşlenme Amaçları ve Hukuki Sebepleri</span></b>
                            </p>

                            <table class="MsoTable15Grid4Accent5" border="1" cellspacing="0" cellpadding="0" width="633" style="width: 474.65pt; border-collapse: collapse; border: none">
                                <tr>
                                    <td width="201"
                                        style="
								  width: 151pt;
								  border: solid #5b9bd5 1pt;
								  border-right: none;
								  background: #5b9bd5;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <b><span lang="TR" style="font-family: 'Times', serif; color: white">İşlenen Kişisel Verileriniz</span></b>
                                        </p>
                                    </td>
                                    <td width="271"
                                        style="
								  width: 203.15pt;
								  border-top: solid #5b9bd5 1pt;
								  border-left: none;
								  border-bottom: solid #5b9bd5 1pt;
								  border-right: none;
								  background: #5b9bd5;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" align="center" style="margin-bottom: 0in; text-align: center; line-height: normal">
                                            <b><span lang="TR" style="font-family: 'Times', serif; color: white">İşlenme Amaçları</span></b>
                                        </p>
                                    </td>
                                    <td width="161"
                                        style="
								  width: 120.5pt;
								  border: solid #5b9bd5 1pt;
								  border-left: none;
								  background: #5b9bd5;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" align="center" style="margin-bottom: 0in; text-align: center; line-height: normal">
                                            <b><span lang="TR" style="font-family: 'Times', serif; color: white">Hukuki Sebepleri</span></b>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="201" valign="top"
                                        style="
								  width: 151pt;
								  border: solid #9cc2e5 1pt;
								  border-top: none;
								  background: #deeaf6;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoListParagraphCxSpFirst" style="margin-bottom: 0in; text-indent: -0.25in; line-height: normal">
                                            <span lang="TR" style="font-family: Symbol; color: #002060">·<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang="TR" style="font-family: 'Times', serif; color: #002060">Kimlik <i>(Ad, Soyad),</i></span>
                                        </p>
                                        <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoListParagraphCxSpLast" style="margin-bottom: 0in; text-indent: -0.25in; line-height: normal">
                                            <span lang="TR" style="font-family: Symbol; color: #002060">·<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang="TR" style="font-family: 'Times', serif; color: #002060">Hukuki İşlem <i>(İmza, İmza Tarihi),</i></span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoListParagraph" style="margin-bottom: 0in; text-indent: -0.25in; line-height: normal">
                                            <span lang="TR" style="font-family: Symbol; color: #002060">·<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang="TR" style="font-family: 'Times', serif; color: #002060">Ziyaretçi İşlem
                                                <i>(Arıza veya Bakımı Yapılan Ekipman, Giriş-Çıkış Saati, Ekipmanın Bulunduğu Kısım) </i>verileriniz.</span>
                                        </p>
                                    </td>
                                    <td width="271" valign="top"
                                        style="
								  width: 203.15pt;
								  border-top: none;
								  border-left: none;
								  border-bottom: solid #9cc2e5 1pt;
								  border-right: solid #9cc2e5 1pt;
								  background: #deeaf6;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">Fiziksel Mekan Güvenliğinin Temini <i>(Ziyaretçi bilgilerinizin oluşturulması)
                                                </i>Amaçlarıyla</span>
                                        </p>
                                    </td>
                                    <td width="161" valign="top"
                                        style="
								  width: 120.5pt;
								  border-top: none;
								  border-left: none;
								  border-bottom: solid #9cc2e5 1pt;
								  border-right: solid #9cc2e5 1pt;
								  background: #deeaf6;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">KVKK Md. 5/2(f): </span><span lang="TR"
                                                style="font-family: 'Times New Roman', serif; color: #1f3864">İlgili kişinin temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri sorumlusunun meşru
                                                menfaatleri için
                                                veri işlenmesinin zorunlu olması</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <i><span lang="TR" style="font-family: 'Times', serif; color: #002060">(Fiziksel mekan güvenliği için ziyaretçi kayıt bilgilerinin elde edilmesinde veri
                                                    sorumlusu olarak meşru
                                                    menfaatimiz bulunmaktadır.)</span></i>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <i><span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height: 99.2pt">
                                    <td width="201" valign="top" style="width: 151pt; border: solid #9cc2e5 1pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt; height: 99.2pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoListParagraphCxSpFirst" style="margin-bottom: 0in; text-indent: -0.25in; line-height: normal">
                                            <span lang="TR" style="font-family: Symbol; color: #002060">·<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang="TR" style="font-family: 'Times', serif; color: #002060">Kimlik <i>(Ad, Soyad),</i></span>
                                        </p>
                                        <p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoListParagraphCxSpLast" style="margin-bottom: 0in; text-indent: -0.25in; line-height: normal">
                                            <span lang="TR" style="font-family: Symbol; color: #002060">·<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang="TR" style="font-family: 'Times', serif; color: #002060">Hukuki İşlem <i>(İmza, İmza Tarihi),</i></span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoListParagraph" style="margin-bottom: 0in; text-indent: -0.25in; line-height: normal">
                                            <span lang="TR" style="font-family: Symbol; color: #002060">·<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang="TR" style="font-family: 'Times', serif; color: #002060">Ziyaretçi İşlem
                                                <i>(Arıza veya Bakımı Yapılan Ekipman, Giriş-Çıkış Saati, Ekipmanın Bulunduğu Kısım) </i>verileriniz.</span>
                                        </p>
                                    </td>
                                    <td width="271" valign="top"
                                        style="
								  width: 203.15pt;
								  border-top: none;
								  border-left: none;
								  border-bottom: solid #9cc2e5 1pt;
								  border-right: solid #9cc2e5 1pt;
								  padding: 0in 5.4pt 0in 5.4pt;
								  height: 99.2pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">Saklama ve Arşiv Faaliyetlerinin Yürütülmesi <i>(Ziyaretçi kayıtlarının saklanması)
                                                    Amaçlarıyla</i></span>
                                        </p>
                                    </td>
                                    <td width="161" valign="top"
                                        style="
								  width: 120.5pt;
								  border-top: none;
								  border-left: none;
								  border-bottom: solid #9cc2e5 1pt;
								  border-right: solid #9cc2e5 1pt;
								  padding: 0in 5.4pt 0in 5.4pt;
								  height: 99.2pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">KVKK Md. 5/2(f): </span><span lang="TR"
                                                style="font-family: 'Times New Roman', serif; color: #1f3864">İlgili kişinin temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri sorumlusunun meşru
                                                menfaatleri için
                                                veri işlenmesinin zorunlu olması</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <i><span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <i><span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <i><span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                        <p class="MsoNormal" style="margin-bottom: 0in; line-height: normal">
                                            <i><span lang="TR" style="font-family: 'Times', serif; color: #002060">(Fiziksel mekan güvenliği için ziyaretçi kayıt bilgilerinin saklanmasında veri
                                                    sorumlusu olarak meşru
                                                    menfaatimiz bulunmaktadır.)</span></i>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">Tarafımızca işlenmektedir.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times', serif; color: #002060">Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></b>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">Kişisel verileriniz KVKK Md.28/1 çerçevesinde talep edilmesi halinde aydınlatma yükümlülüğü
                                    olmadan ve açık rızanız
                                    aranmadan ilgili makamlara aktarılabilir.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">Bunun dışında öngörülemeyen durumlarda da kişisel verileriniz kanunlarda açıkça belirtilmiş
                                    durumlarda talep
                                    edilmesi halinde kanunlarda belirtilen kamu kurumlarına (Bakanlıklar gibi idari makamlara) kanunda öngörülen amaç ve
                                    sınırlamalar dahilinde aktarılabilir.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">Aydınlatma yükümlülüğü olmayan ve açık rızanızı gerektirmeyen yasal yükümlülüklerimizin dışında;
                                    kişisel
                                    verilerinizin aktarımı yapılmamaktadır.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times', serif; color: #002060">Kişisel Verilerin Elde Edilme Yöntemleri</span></b>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">Kişisel verileriniz ziyaretçi kayıt formunun hazırlanması yoluyla otomatik olmayan yöntemlerle
                                    oluşturulmaktadır.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times', serif; color: #002060">Kişisel Verilerinizle İlgili Haklarınız</span></b>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">İlgili kişiler, kişisel verilerine ilişkin haklarını öncelikle veri sorumlusuna iletmek
                                    zorundadırlar.
                                </span>
                            </p>

                            <table class="MsoTable15List7ColorfulAccent5" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse">
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-bottom: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top"
                                        style="
								  width: 435.55pt;
								  border: none;
								  border-bottom: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">Kanun uyarınca kişisel verilerinizle ilgili olarak:</span></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">a) Kişisel veri işlenip işlenmediğini öğrenme,</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">b) Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">c) Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp
                                                kullanılmadığını öğrenme,</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">ç) Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri
                                                bilme,</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height: 26.3pt">
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								  height: 26.3pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt; height: 26.3pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">d) Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların
                                                düzeltilmesini isteme,</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">e) İşlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel verilerinizin
                                                silinmesini veya yok
                                                edilmesini isteme,</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">f) (d) ve (e) bentleri uyarınca yapılan işlemlerin, kişisel verilerinizin aktarıldığı
                                                üçüncü kişilere
                                                bildirilmesini isteme,</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">g) İşlenen verilerinizin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi
                                                suretiyle aleyhinize bir
                                                sonucun ortaya çıkmasına itiraz etme,</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="23" valign="top"
                                        style="
								  width: 17.55pt;
								  border: none;
								  border-right: solid #5b9bd5 1pt;
								  background: white;
								  padding: 0in 5.4pt 0in 5.4pt;
								">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <i><span lang="TR" style="font-size: 13pt; font-family: 'Times', serif; color: #002060">&nbsp;</span></i>
                                        </p>
                                    </td>
                                    <td width="581" valign="top" style="width: 435.55pt; padding: 0in 5.4pt 0in 5.4pt">
                                        <p class="MsoNormal" style="margin-bottom: 0in; text-align: justify; line-height: normal">
                                            <span lang="TR" style="font-family: 'Times', serif; color: #002060">ğ) Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğramanız
                                                hâlinde zararın giderilmesini
                                                talep etme haklarını kullanabilirsiniz.</span>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times', serif; color: #002060">&nbsp;</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">&nbsp;</span></b>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">&nbsp;</span></b>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">&nbsp;</span></b>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <a name="_Hlk140098103"><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">Başvurunuzu: </span></a>
                            </p>

                            <p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -0.25in">
                                <span lang="TR" style="font-family: Wingdings; color: #002060">§<span style="font: 7pt 'Times New Roman'">&nbsp; </span></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">Fener Mah. 1962.Sk. Aras Sitesi C Blok 2CB Muratpaşa/ ANTALYA adresine yazılı olarak;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -0.25in">
                                <span lang="TR" style="font-family: Wingdings; color: #002060">§<span style="font: 7pt 'Times New Roman'">&nbsp; </span></span><span lang="TR"><a
                                        href="mailto:aras.insaat@hs.kep.tr"><span style="font-family: 'Times New Roman', serif">aras.insaat@hs.kep.tr</span></a></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">
                                    kep adresine güvenli elektronik imza veya mobil imza ile;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -0.25in">
                                <span lang="TR" style="font-family: Wingdings; color: #002060">§<span style="font: 7pt 'Times New Roman'">&nbsp; </span></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">Elektronik posta adresinizin sistemimizde kayıtlı olması halinde aynı e-posta adresini kullanarak
                                </span><span lang="TR"><a href="mailto:kvkk@portnature.com.tr"><span style="font-family: 'Times New Roman', serif">kvkk@portnature.com.tr</span></a></span><span
                                    lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">
                                    adresimize e-posta göndererek yapabilirsiniz.</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">&nbsp;</span>
                            </p>

                            <p class="MsoListParagraphCxSpLast" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">&nbsp;</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">Başvurunuzda;</span>
                            </p>

                            <p class="MsoListParagraphCxSpFirst" style="text-align: justify; text-indent: -0.25in">
                                <span lang="TR" style="font-family: Wingdings; color: #002060">§<span style="font: 7pt 'Times New Roman'">&nbsp; </span></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">Adınızın, soyadınızın ve başvuru yazılı ise imzanızın,</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -0.25in">
                                <span lang="TR" style="font-family: Wingdings; color: #002060">§<span style="font: 7pt 'Times New Roman'">&nbsp; </span></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">Türkiye Cumhuriyeti vatandaşları için T.C. kimlik numaranızın, yabancı iseniz uyruğunuzun, pasaport
                                    numaranızın veya
                                    varsa kimlik numaranızın,</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -0.25in">
                                <span lang="TR" style="font-family: Wingdings; color: #002060">§<span style="font: 7pt 'Times New Roman'">&nbsp; </span></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">Tebligata esas yerleşim yeri veya iş yeri adresinizin,</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="text-align: justify; text-indent: -0.25in">
                                <span lang="TR" style="font-family: Wingdings; color: #002060">§<span style="font: 7pt 'Times New Roman'">&nbsp; </span></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">Varsa bildirime esas elektronik posta adresi, telefon ve faks numaranızın,</span>
                            </p>

                            <p class="MsoListParagraphCxSpLast" style="text-align: justify; text-indent: -0.25in">
                                <span lang="TR" style="font-family: Wingdings; color: #002060">§<span style="font: 7pt 'Times New Roman'">&nbsp; </span></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">Talep konunuzun, </span>
                            </p>

                            <p class="MsoNormal" style="margin-left: 0.25in; text-align: justify">
                                <span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">bulunması zorunlu olup varsa konuya ilişkin bilgi ve belgelerin de başvuruya eklenmesi
                                    gerekmektedir.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">PORT NATURE,</span></b><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">
                                    kimliğinizi doğrulama hakkını saklı tutar.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">Başvuru sırasında uyulması gereken usul kuralları ve daha detaylı bilgiye Kişisel
                                    Verileri Koruma Kurumu'nun
                                    &quot;</span><span lang="TR"><a href="http://www.resmigazete.gov.tr/eskiler/2018/03/20180310-6.htm"><span style="font-family: 'Times New Roman', serif">Veri
                                            Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğ</span></a></span><span lang="TR"
                                    style="font-family: 'Times New Roman', serif; color: #002060">&quot; inden ulaşabilirsiniz.</span>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <b><i><span lang="TR" style="font-family: 'Times New Roman', serif; color: #002060">&nbsp;</span></i></b>
                            </p>

                            <p class="MsoNormal" style="text-align: justify">
                                <span lang="TR" style="font-family: 'Liberation Serif', serif">&nbsp;</span>
                            </p>

                            <span lang="TR" style="font-size: 11pt; line-height: 107%; font-family: 'Calibri', sans-serif"><br clear="all" style="page-break-before: always" />
                            </span>

                            <p class="MsoNormal"><span lang="TR">&nbsp;</span></p>

                            <span lang="TR" style="font-size: 11pt; line-height: 107%; font-family: 'Calibri', sans-serif"><br clear="all" style="page-break-before: always" />
                            </span>

                            <p class="MsoNormal"><span lang="TR">&nbsp;</span></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="langen" role="tabpanel" aria-labelledby="langen-tab">

                    <div style='word-wrap:break-word'>

                        <div class=WordSection1>

                            <p class=MsoTitleCxSpFirst style='text-align:justify'><b><span lang=TR style='font-size:18.0pt;color:#002060'>Protection of Personal Data</span></b></p>

                            <p class=MsoTitleCxSpLast style='text-align:justify'><span lang=TR style='font-size:24.0pt;color:#002060'>Information Text for the Kitchen Visitor</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'>
                                <span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>According to the Personal Data
                                    Protection Law No. 6698 (&quot;Law&quot;), ARAS İNŞAAT TİCARET TURİZM ANONİM
                                    ŞİRKETİ (&quot;Hereinafter referred to as 'PORT NATURE'&quot;) is defined as
                                    the data controller due to processing personal data about you. According to
                                    Article 10 of the Law titled &quot;Obligation to Inform&quot;, data controllers
                                    are obliged to inform the real persons whose personal data they process on certain
                                    issues.</span>
                            </p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>This text has been prepared by PORT NATURE in
                                    order to comply with the legislation and to be transparent and accountable.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Relevant Person: </span></b><span lang=TR
                                    style='font-family:"Times",serif;color:#002060'>You, whose personal
                                    data we process due to your visit to our hotel kitchen, are defined as the
                                    relevant person by law.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Data Controller: [PORT NATURE] </span></b><span lang=TR
                                    style='font-family:"Times",serif;color:#002060'>is the data controller
                                    who determines the purposes and means of processing personal data regarding
                                    personal data about you and is responsible for establishing and managing the
                                    data recording system.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Your Personal Data Processed
                                        According to Processes, Purposes of Processing and Legal Reasons</span></b></p>

                            <table class=MsoTable15Grid4Accent5 border=1 cellspacing=0 cellpadding=0 width=633 style='width:474.65pt;border-collapse:collapse;border:none'>
                                <tr>
                                    <td width=201 style='width:151.0pt;border:solid #5B9BD5 1.0pt;border-right:
	  none;background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span lang=TR style='font-family:"Times",serif;color:white'>Your Processed Personal
                                                    Data</span></b></p>
                                    </td>
                                    <td width=271
                                        style='width:203.15pt;border-top:solid #5B9BD5 1.0pt;
	  border-left:none;border-bottom:solid #5B9BD5 1.0pt;border-right:none;
	  background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
	  line-height:normal'><b><span lang=TR
                                                    style='font-family:"Times",serif;
	  color:white'>Purposes of Processing</span></b></p>
                                    </td>
                                    <td width=161 style='width:120.5pt;border:solid #5B9BD5 1.0pt;border-left:
	  none;background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
	  line-height:normal'><b><span lang=TR
                                                    style='font-family:"Times",serif;
	  color:white'>Legal Reasons</span></b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=201 valign=top style='width:151.0pt;border:solid #9CC2E5 1.0pt;
	  border-top:none;background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;text-indent:-.25in;
	  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Identity
                                                (Name, Surname),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
	  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span>
                                        </p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;text-indent:
	  -.25in;line-height:normal'><span lang=TR
                                                style='font-family:Symbol;
	  color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Legal
                                                Transaction (Signature, Signature Date),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
	  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span>
                                        </p>
                                        <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;text-indent:-.25in;
	  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Your
                                                Visitor Transaction (Equipment in Malfunction or Maintained, Entry-Exit Time,
                                                Area Where the Equipment is Located) data.</span></p>
                                    </td>
                                    <td width=271 valign=top
                                        style='width:203.15pt;border-top:none;border-left:
	  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
	  background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>For the
                                                Purposes of Ensuring Physical Space Security (Creating Your Visitor
                                                Information)</span></p>
                                    </td>
                                    <td width=161 valign=top
                                        style='width:120.5pt;border-top:none;border-left:
	  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
	  background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>KVKK Article 5/2(f):
                                                It is mandatory to process data for the legitimate interests of the data
                                                controller, provided that it does not harm the fundamental rights and
                                                freedoms of the relevant person</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>(As the data
                                                    controller, we have a legitimate interest in obtaining visitor registration
                                                    information for physical location security.)</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                </tr>
                                <tr style='height:99.2pt'>
                                    <td width=201 valign=top style='width:151.0pt;border:solid #9CC2E5 1.0pt;
	  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;text-indent:-.25in;
	  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Identity
                                                (Name, Surname),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
	  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span>
                                        </p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;text-indent:
	  -.25in;line-height:normal'><span lang=TR
                                                style='font-family:Symbol;
	  color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Legal
                                                Transaction (Signature, Signature Date),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
	  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span>
                                        </p>
                                        <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;text-indent:-.25in;
	  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Your
                                                Visitor Transaction (Equipment in Malfunction or Maintained, Entry-Exit Time,
                                                Area Where the Equipment is Located) data.</span></p>
                                    </td>
                                    <td width=271 valign=top
                                        style='width:203.15pt;border-top:none;border-left:
	  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
	  padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span>
                                        </p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>For the
                                                Purposes of Carrying out Storage and Archive Activities (Storing Visitor
                                                Records)</span></p>
                                    </td>
                                    <td width=161 valign=top
                                        style='width:120.5pt;border-top:none;border-left:
	  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
	  padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>KVKK Article 5/2(f):
                                                It is mandatory to process data for the legitimate interests of the data
                                                controller, provided that it does not harm the fundamental rights and freedoms
                                                of the relevant person</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>(As the data
                                                    controller, we have a legitimate interest in storing visitor registration
                                                    information for physical location security.)</span></i></p>
                                    </td>
                                </tr>
                            </table>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>processed by us.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>To Whom and For What Purposes
                                        Personal Data Can Be Transferred</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>Your personal data may be transferred to the
                                    relevant authorities upon request within the framework of KVKK Article 28/1,
                                    without any obligation to inform and without your explicit consent.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>Apart from this, in unforeseen cases, your
                                    personal data may be transferred to public institutions (administrative
                                    authorities such as Ministries) specified in the law, if requested, in cases
                                    clearly stated in the law, within the purposes and limitations stipulated in
                                    the law.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>Your personal data is not transferred except for
                                    our legal obligations, which are not obliged to provide information and do not
                                    require your explicit consent.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Methods of Obtaining Personal
                                        Data</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>Your personal data is created by non-automatic
                                    methods through the preparation of the visitor registration form.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Your Rights Regarding Your
                                        Personal Data</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>Relevant persons must first convey their rights
                                    regarding their personal data to the data controller. </span></p>

                            <table class=MsoTable15List7ColorfulAccent5 border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse'>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-bottom:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;border:none;border-bottom:
	  solid #5B9BD5 1.0pt;background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>Regarding your personal data in accordance with the law:</span></i></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>a) Learning whether personal data
                                                is processed or not,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>b) Requesting information if your
                                                personal data has been processed,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>c) Learning the purpose of
                                                processing your personal data and whether they are used for their intended
                                                purpose,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>ç) Knowing the third parties to
                                                whom your personal data is transferred at home or abroad,</span></p>
                                    </td>
                                </tr>
                                <tr style='height:26.3pt'>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt;height:26.3pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt;
	  height:26.3pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>d) Request correction of your
                                                personal data if it is incomplete or incorrectly processed,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>e) Requesting the deletion or
                                                destruction of your personal data in case the reasons requiring processing
                                                are eliminated,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>f) To request that the
                                                transactions carried out in accordance with paragraphs (d) and (e) be
                                                notified to third parties to whom your personal data has been transferred,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>g) Object to the emergence of a
                                                result against you by analyzing your processed data exclusively through
                                                automatic systems,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='color:#2E74B5'>ğ) If you suffer damage due to
                                                unlawful processing of personal data, you can exercise your right to request
                                                compensation for the damage</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
	  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
	  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
	  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><a name="_Hlk140098103"><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Your
                                        application: </span></a></p>

                            <p class=MsoListParagraphCxSpFirst style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
	color:#002060'>In writing to the address: Fener Mah 1962 Sk Aras Sitesi C Blok
                                    2CB Muratpaşa/ ANTALYA;</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
	color:#002060'>Via secure electronic signature or mobile signature to
                                    aras.insaat@hs.kep.tr kep address;</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
	color:#002060'>If your e-mail address is registered in our system, you can do
                                    so by sending an e-mail to kvkk@portnature.com.tr using the same e-mail address.</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoListParagraphCxSpLast style='text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times New Roman",serif;color:#002060'>In your application;</span></p>

                            <p class=MsoListParagraphCxSpFirst style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
	color:#002060'>Your name, surname and signature if the application is written,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
	color:#002060'>For citizens of the Republic of Turkey, your TR ID number, if
                                    you are a foreigner, your nationality, passport number or identification
                                    number, if any,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
	color:#002060'>Your residence or workplace address subject to notification,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
	color:#002060'>Your notification e-mail address, telephone and fax number, if
                                    any,</span></p>

                            <p class=MsoListParagraphCxSpLast style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
	color:#002060'>Your request subject, </span></p>

                            <p class=MsoNormal style='margin-left:.25in;text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>It is mandatory to
                                    include information and documents regarding the subject, if any, which must be
                                    added to the application.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>PORT NATURE </span></b><span lang=TR
                                    style='font-family:"Times New Roman",serif;color:#002060'>reserves the
                                    right to verify your identity.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Times New Roman",serif;color:#002060'>You can find the procedural rules to be
                                    followed during the application and more detailed information in the
                                    &quot;Communiqué on the Procedures and Principles of Application to the Data
                                    Controller&quot; of the Personal Data Protection Authority.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><i><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></i></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
	"Liberation Serif",serif'>&nbsp;</span></p>

                            <span lang=TR style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif'><br clear=all style='page-break-before:always'>
                            </span>

                            <p class=MsoNormal><span lang=TR>&nbsp;</span></p>

                            <span lang=TR style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif'><br clear=all style='page-break-before:always'>
                            </span>

                            <p class=MsoNormal><span lang=TR>&nbsp;</span></p>

                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="langde" role="tabpanel" aria-labelledby="langde-tab">

                    <div style='word-wrap:break-word'>

                        <div class=WordSection1>

                            <p class=MsoTitleCxSpFirst style='text-align:justify'><b><span lang=TR style='font-size:18.0pt;color:#002060'>Schutz personenbezogener Daten</span></b></p>

                            <p class=MsoTitleCxSpLast style='text-align:justify'><span lang=TR style='font-size:24.0pt;color:#002060'>Informationstext für den Küchenbesucher</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times New Roman",serif;color:#002060'>Gemäß dem Gesetz zum Schutz
                                    personenbezogener Daten Nr. 6698 („Gesetz“) ist ARAS İNŞAAT TİCARET TURİZM
                                    ANONİM ŞİRKETİ („im Folgenden „PORT NATURE“) als Datenverantwortlicher für die
                                    Verarbeitung personenbezogener Daten über Sie definiert. Gemäß Artikel 10 des
                                    Gesetzes mit der Überschrift „Informationspflicht“ sind Datenverantwortliche
                                    verpflichtet, die tatsächlichen Personen, deren personenbezogene Daten sie
                                    verarbeiten, über bestimmte Themen zu informieren.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times New Roman",serif;color:#002060'>Dieser Text wurde von PORT NATURE
                                    erstellt, um den gesetzlichen Bestimmungen zu entsprechen und transparent und
                                    rechenschaftspflichtig zu sein.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Relevante Person</span></b><span lang=TR
                                    style='font-family:"Times New Roman",serif;color:#002060'>: Als
                                    relevante Person im Sinne des Gesetzes gelten Sie, deren personenbezogene Daten
                                    wir aufgrund Ihres Besuchs in unserer Hotelküche verarbeiten.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Datenverantwortlicher:
                                        [PORT NATURE]</span></b><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'> ist der Datenverantwortliche, der die Zwecke und Mittel der
                                    Verarbeitung personenbezogener Daten über Sie bestimmt und für die Einrichtung
                                    und Verwaltung des Datenaufzeichnungssystems verantwortlich ist</span><span lang=TR style='font-family:"Times",serif;color:#002060'>.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Ihre verarbeiteten
                                        personenbezogenen Daten, Zwecke der Verarbeitung und rechtliche Gründe</span></b></p>

                            <table class=MsoTable15Grid4Accent5 border=1 cellspacing=0 cellpadding=0 width=633 style='width:474.65pt;border-collapse:collapse;border:none'>
                                <tr>
                                    <td width=201 style='width:151.0pt;border:solid #5B9BD5 1.0pt;border-right:
						  none;background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span lang=TR style='font-family:"Times",serif;color:white'>Ihre verarbeiteten
                                                    personenbezogenen Daten</span></b></p>
                                    </td>
                                    <td width=271
                                        style='width:203.15pt;border-top:solid #5B9BD5 1.0pt;
						  border-left:none;border-bottom:solid #5B9BD5 1.0pt;border-right:none;
						  background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
						  line-height:normal'><b><span lang=TR
                                                    style='font-family:"Times",serif;
						  color:white'>Zwecke der Verarbeitung</span></b></p>
                                    </td>
                                    <td width=161 style='width:120.5pt;border:solid #5B9BD5 1.0pt;border-left:
						  none;background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
						  line-height:normal'><b><span lang=TR
                                                    style='font-family:"Times",serif;
						  color:white'>Rechtliche Gründe</span></b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=201 valign=top style='width:151.0pt;border:solid #9CC2E5 1.0pt;
						  border-top:none;background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;text-indent:-.25in;
						  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Identität
                                                (Name, Nachname),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;text-indent:
						  -.25in;line-height:normal'><span lang=TR
                                                style='font-family:Symbol;
						  color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Rechtsgeschäft
                                                (Unterschrift, Unterschriftsdatum),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;text-indent:-.25in;
						  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Ihre
                                                Besuchertransaktionsdaten (Ausrüstung defekt oder gewartet,
                                                Eintritts-/Austrittszeit, Bereich, in dem sich die Ausrüstung befindet).</span></p>
                                    </td>
                                    <td width=271 valign=top
                                        style='width:203.15pt;border-top:none;border-left:
						  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
						  background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>Zum
                                                Zwecke der Gewährleistung der physischen Raumsicherheit (Erstellung Ihrer
                                                Besucherinformationen)</span></p>
                                    </td>
                                    <td width=161 valign=top
                                        style='width:120.5pt;border-top:none;border-left:
						  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
						  background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>KVKK
                                                Artikel 5/2(f): Gemäß der Klausel, dass die Datenverarbeitung für die
                                                berechtigten Interessen des Datenverantwortlichen zwingend erforderlich ist,
                                                sofern sie die Grundrechte und Grundfreiheiten der betroffenen Person nicht
                                                beeinträchtigt</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>(Als
                                                    Datenverantwortlicher haben wir ein berechtigtes Interesse daran,
                                                    Besucherregistrierungsinformationen zur physischen Standortsicherung zu
                                                    erhalten.)</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                </tr>
                                <tr style='height:99.2pt'>
                                    <td width=201 valign=top style='width:151.0pt;border:solid #9CC2E5 1.0pt;
						  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;text-indent:-.25in;
						  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Identität
                                                (Name, Nachname),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;text-indent:
						  -.25in;line-height:normal'><span lang=TR
                                                style='font-family:Symbol;
						  color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Rechtsgeschäft
                                                (Unterschrift, Unterschriftsdatum),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;text-indent:-.25in;
						  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Ihre
                                                Besuchertransaktionsdaten (Ausrüstung defekt oder gewartet, Eintritts-/Austrittszeit,
                                                Bereich, in dem sich die Ausrüstung befindet).</span></p>
                                    </td>
                                    <td width=271 valign=top
                                        style='width:203.15pt;border-top:none;border-left:
						  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
						  padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>Zum
                                                Zweck der Durchführung von Aufbewahrungs- und Archivierungstätigkeiten
                                                (Aufbewahrung von Besucherdatensätzen)</span></p>
                                    </td>
                                    <td width=161 valign=top
                                        style='width:120.5pt;border-top:none;border-left:
						  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
						  padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>KVKK
                                                Artikel 5/2(f): Gemäß der Klausel, dass die Datenverarbeitung für die
                                                berechtigten Interessen des Datenverantwortlichen zwingend erforderlich ist,
                                                sofern sie die Grundrechte und Grundfreiheiten der betroffenen Person nicht
                                                beeinträchtigt</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>(Als
                                                    Datenverantwortlicher haben wir ein berechtigtes Interesse daran,
                                                    Besucherregistrierungsinformationen zur physischen Standortsicherung zu
                                                    speichern.)</span></i></p>
                                    </td>
                                </tr>
                            </table>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>von uns verarbeitet.</span></p>

                            <p class=MsoNormal style='text-align:justify;line-height:normal'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>An wen und zu welchen
                                        Zwecken personenbezogene Daten übermittelt werden können</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Eine Übermittlung Ihrer personenbezogenen Daten an
                                    die zuständigen Behörden kann im Rahmen des KVKK § 28 Abs. 1 auf Anfrage ohne
                                    Informationspflicht und ohne Ihre ausdrückliche Einwilligung erfolgen</span><span lang=TR style='font-family:"Times",serif;color:#002060'>.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Darüber hinaus können Ihre personenbezogenen Daten
                                    in unvorhergesehenen Fällen auf Anfrage und in den im Gesetz klar festgelegten
                                    Fällen und im Rahmen der gesetzlich festgelegten Zwecke und Grenzen an
                                    gesetzlich bestimmte öffentliche Einrichtungen (Verwaltungsbehörden wie
                                    Ministerien) übermittelt werden.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Eine Übermittlung Ihrer personenbezogenen Daten
                                    erfolgt grundsätzlich nicht, außer im Rahmen unserer gesetzlichen Pflichten,
                                    die keine Auskunftspflicht beinhalten und auch nicht Ihrer ausdrücklichen
                                    Einwilligung bedürfen.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Methoden zur Erhebung
                                        personenbezogener Daten</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Bei der Erstellung des Besucher-Anmeldeformulars
                                    werden Ihre personenbezogenen Daten nicht automatisch erfasst.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Ihre Rechte in Bezug auf Ihre
                                        personenbezogenen Daten</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Betroffene Personen müssen ihre Rechte bezüglich
                                    ihrer personenbezogenen Daten zunächst dem Verantwortlichen mitteilen. </span></p>

                            <table class=MsoTable15List7ColorfulAccent5 border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse'>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-bottom:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;border:none;border-bottom:
						  solid #5B9BD5 1.0pt;background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>Bezüglich Ihrer personenbezogenen Daten gemäß den gesetzlichen
                                                    Bestimmungen:</span></i></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>a) erfahren, ob personenbezogene
                                                Daten verarbeitet werden oder nicht,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>b) Auskunftsverlangen, wenn Ihre
                                                personenbezogenen Daten verarbeitet werden,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>c) Erfahren Sie, zu welchem
                                                Zweck
                                                Ihre personenbezogenen Daten verarbeitet werden und ob sie für den
                                                vorgesehenen Zweck verwendet werden.</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>ç) Kenntnis der Dritten, an die
                                                Ihre personenbezogenen Daten im In- oder Ausland übermittelt werden,</span></p>
                                    </td>
                                </tr>
                                <tr style='height:26.3pt'>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt;height:26.3pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt;
						  height:26.3pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>d) die Berichtigung Ihrer
                                                personenbezogenen Daten zu verlangen, wenn diese unvollständig sind oder
                                                falsch verarbeitet werden,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>e) die Löschung oder Vernichtung
                                                Ihrer personenbezogenen Daten zu verlangen, falls die Gründe, die eine
                                                Verarbeitung erfordern, entfallen,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>f) zu verlangen, dass die gemäß
                                                den Absätzen (d) und (e) durchgeführten Transaktionen den Dritten mitgeteilt
                                                werden, an die Ihre personenbezogenen Daten übermittelt wurden,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>g) der Entstehung eines gegen
                                                Sie
                                                gerichteten Ergebnisses durch die Analyse Ihrer verarbeiteten Daten
                                                ausschließlich durch automatische Systeme zu widersprechen,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>ğ) Wenn Ihnen durch eine
                                                rechtswidrige Verarbeitung personenbezogener Daten ein Schaden entsteht,
                                                können Sie von Ihrem Recht Gebrauch machen, Ersatz des Schadens zu verlangen</span></p>
                                    </td>
                                </tr>
                            </table>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Antragsmethode an den
                                        Datenverantwortlichen</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><a name="_Hlk140098103"><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Ihre
                                        Bewerbung: </span></a></p>

                            <p class=MsoListParagraphCxSpFirst style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Schriftlich an die Adresse: Fener Mah 1962 Sk Aras Sitesi C Blok
                                    2CB Muratpaşa/ ANTALYA;</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Per sicherer elektronischer Unterschrift oder mobiler
                                    Unterschrift an aras.insaat@hs.kep.tr kep Adresse;</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Wenn Ihre E-Mail-Adresse in unserem System registriert ist,
                                    können Sie dies tun, indem Sie eine E-Mail an kvkk@portnature.com.tr mit
                                    derselben E-Mail-Adresse senden.</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoListParagraphCxSpLast style='text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times New Roman",serif;color:#002060'>In Ihrer Bewerbung;</span></p>

                            <p class=MsoListParagraphCxSpFirst style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Ihren Vor- und Nachnamen sowie Ihre Unterschrift, wenn die
                                    Bewerbung schriftlich erfolgt,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Für Bürger der Republik Türkei Ihre TR-ID-Nummer, wenn Sie
                                    Ausländer sind, Ihre Staatsangehörigkeit, Ausweisnummer oder
                                    Identifikationsnummer, falls vorhanden,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Ihre meldepflichtige Wohn- oder Arbeitsplatzadresse,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Ihre Benachrichtigungs-E-Mail-Adresse, Telefon- und Faxnummer,
                                    falls vorhanden,</span></p>

                            <p class=MsoListParagraphCxSpLast style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Ihr Anfragebetreff, </span></p>

                            <p class=MsoNormal style='margin-left:.25in;text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Es ist zwingend
                                    erforderlich, ggf. Informationen und Unterlagen zum Thema beizufügen, die der
                                    Bewerbung beizufügen sind.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>PORT NATURE </span></b><span lang=TR
                                    style='font-family:"Times New Roman",serif;color:#002060'>behält sich
                                    das Recht vor, Ihre Identität zu überprüfen.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times New Roman",serif;color:#002060'>Die bei der Antragstellung zu
                                    beachtenden Verfahrensregeln und nähere Informationen finden Sie im „Mitteilung
                                    über die Verfahren und Grundsätze der Antragstellung an den Datenverantwortlichen“
                                    der Datenschutzbehörde.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><i><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></i></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Liberation Serif",serif'>&nbsp;</span></p>

                            <span lang=TR style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif'><br clear=all style='page-break-before:always'>
                            </span>

                            <p class=MsoNormal><span lang=TR>&nbsp;</span></p>

                            <span lang=TR style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif'><br clear=all style='page-break-before:always'>
                            </span>

                            <p class=MsoNormal><span lang=TR>&nbsp;</span></p>

                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="langru" role="tabpanel" aria-labelledby="langru-tab">

                    <body lang=EN-US link="#0563C1" vlink="#954F72" style='word-wrap:break-word'>

                        <div class=WordSection1>

                            <p class=MsoTitleCxSpFirst style='text-align:justify'><b><span lang=TR style='font-size:18.0pt;color:#002060'>Защита персональных данных</span></b></p>

                            <p class=MsoTitleCxSpLast style='text-align:justify'><b><span lang=TR style='font-size:18.0pt;color:#002060'>Информационный текст для посетителя
                                        кухни</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times New Roman",serif;color:#002060'>В соответствии с Законом о защите
                                    персональных данных № 6698 («Закон»), ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ
                                    («далее «PORT NATURE») (АРАС ИНШААТ ТИДЖАРЕТ ТУРИЗМ АНОНИМ ШИРКЕТИ «ПОРТ
                                    ПРИРОДА») определяется как контролер данных в связи с обработкой ваших
                                    персональных данных. Согласно статье 10 Закона «Обязательство информировать»,
                                    контролеры данных обязаны информировать реальных лиц, чьи персональные данные они
                                    обрабатывают, по определенным вопросам.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Этот текст был подготовлен PORT NATURE-</span><span
                                    lang=TR style='font-family:"Times New Roman",serif;color:#002060'> ПОРТ ПРИРОДА</span><span lang=TR style='font-family:"Times",serif;color:#002060'> в целях
                                    соблюдения
                                    законодательства и обеспечения прозрачности и подотчетности.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Соответствующее лицо: </span></b><span lang=TR
                                    style='font-family:"Times",serif;color:#002060'>вы, чьи персональные
                                    данные мы обрабатываем в связи с вашим посещением кухни нашего отеля, по закону
                                    определены как соответствующее лицо.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Контроллер данных: [PORT NATURE-</span></b><span lang=TR
                                    style='font-family:"Times New Roman",serif;color:#002060'> ПОРТ ПРИРОДА</span><b><span lang=TR style='font-family:"Times",serif;color:#002060'>] — </span></b><span
                                    lang=TR style='font-family:"Times",serif;color:#002060'>это контроллер данных,
                                    который определяет цели и средства обработки персональных данных, касающихся
                                    ваших персональных данных, и несет ответственность за создание и управление
                                    системой регистрации данных.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Обрабатываемые вами
                                        персональные данные, цели обработки и юридические причины</span></b></p>

                            <table class=MsoTable15Grid4Accent5 border=1 cellspacing=0 cellpadding=0 width=633 style='width:474.65pt;border-collapse:collapse;border:none'>
                                <tr>
                                    <td width=201 style='width:151.0pt;border:solid #5B9BD5 1.0pt;border-right:
						  none;background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span lang=TR style='font-family:"Times",serif;color:white'>Ваши обработанные
                                                    персональные данные</span></b></p>
                                    </td>
                                    <td width=271
                                        style='width:203.15pt;border-top:solid #5B9BD5 1.0pt;
						  border-left:none;border-bottom:solid #5B9BD5 1.0pt;border-right:none;
						  background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
						  line-height:normal'><b><span lang=TR
                                                    style='font-family:"Times",serif;
						  color:white'>Цели обработки</span></b></p>
                                    </td>
                                    <td width=161 style='width:120.5pt;border:solid #5B9BD5 1.0pt;border-left:
						  none;background:#5B9BD5;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
						  line-height:normal'><b><span lang=TR
                                                    style='font-family:"Times",serif;
						  color:white'>Юридические причины</span></b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=201 valign=top style='width:151.0pt;border:solid #9CC2E5 1.0pt;
						  border-top:none;background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;text-indent:-.25in;
						  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Личность
                                                (Имя, Фамилия),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;text-indent:
						  -.25in;line-height:normal'><span lang=TR
                                                style='font-family:Symbol;
						  color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Юридическая
                                                сделка (подпись, дата подписи),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;text-indent:-.25in;
						  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Данные
                                                о транзакциях вашего посетителя (оборудование неисправно или обслуживается,
                                                время входа-выхода, место, где находится оборудование).</span></p>
                                    </td>
                                    <td width=271 valign=top
                                        style='width:203.15pt;border-top:none;border-left:
						  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
						  background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>В
                                                целях
                                                обеспечения безопасности физического пространства (создание информации о
                                                посетителе)</span></p>
                                    </td>
                                    <td width=161 valign=top
                                        style='width:120.5pt;border-top:none;border-left:
						  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
						  background:#DEEAF6;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Статья
                                                5/2(f) КВКК: В соответствии с положением о том, что обработка данных является
                                                обязательной для законных интересов контролера данных, при условии, что она
                                                не наносит ущерба основным правам и свободам соответствующего лица</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>(Как контролер
                                                    данных, мы имеем законный интерес в получении регистрационной информации о
                                                    посетителях для обеспечения безопасности физического местоположения.)</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                </tr>
                                <tr style='height:99.2pt'>
                                    <td width=201 valign=top style='width:151.0pt;border:solid #9CC2E5 1.0pt;
						  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;text-indent:-.25in;
						  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Личность
                                                (Имя, Фамилия),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;text-indent:
						  -.25in;line-height:normal'><span lang=TR
                                                style='font-family:Symbol;
						  color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Юридическая
                                                сделка (подпись, дата подписи),</span></p>
                                        <p class=MsoListParagraphCxSpMiddle style='margin-bottom:0in;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;text-indent:-.25in;
						  line-height:normal'><span lang=TR
                                                style='font-family:Symbol;color:#002060'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span></span><span lang=TR style='font-family:"Times",serif;color:#002060'>Данные
                                                о транзакциях вашего посетителя (оборудование неисправно или обслуживается,
                                                время входа-выхода, место, где находится оборудование).</span></p>
                                    </td>
                                    <td width=271 valign=top
                                        style='width:203.15pt;border-top:none;border-left:
						  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
						  padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>В
                                                целях
                                                осуществления хранительно-архивной деятельности (хранения записей посещений)</span></p>
                                    </td>
                                    <td width=161 valign=top
                                        style='width:120.5pt;border-top:none;border-left:
						  none;border-bottom:solid #9CC2E5 1.0pt;border-right:solid #9CC2E5 1.0pt;
						  padding:0in 5.4pt 0in 5.4pt;height:99.2pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Статья
                                                5/2(f) КВКК: В соответствии с положением о том, что обработка данных является
                                                обязательной для законных интересов контролера данных, при условии, что она
                                                не наносит ущерба основным правам и свободам соответствующего лица</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>&nbsp;</span></i></p>
                                        <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><i><span lang=TR style='font-family:"Times",serif;color:#002060'>(Как контролер
                                                    данных, мы имеем законный интерес в хранении регистрационной информации
                                                    посетителей для обеспечения безопасности физического местоположения.)</span></i></p>
                                    </td>
                                </tr>
                            </table>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>обработано нами.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Кому и для каких целей могут
                                        быть переданы персональные данные</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Ваши персональные данные могут быть переданы
                                    соответствующим
                                    органам по запросу в рамках статьи 28/1 КВКК без каких-либо обязательств по
                                    информированию и без вашего явного согласия.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Помимо этого, в непредвиденных случаях ваши
                                    персональные данные могут быть переданы государственным учреждениям (административным
                                    органам, таким как министерства), указанным в законе, по запросу, в случаях,
                                    четко указанных в законе, в пределах целей и ограничений, предусмотренных
                                    законом.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Ваши персональные данные не передаются, за
                                    исключением наших юридических обязательств, которые не обязаны предоставлять
                                    информацию и не требуют вашего явного согласия.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Способы получения персональных
                                        данных</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Ваши персональные данные создаются
                                    неавтоматическими методами путем подготовки формы регистрации посетителя.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times",serif;color:#002060'>Ваши права в отношении ваших
                                        личных данных</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>Соответствующие лица должны сначала сообщить о
                                    своих правах в отношении своих персональных данных контролеру данных. </span></p>

                            <table class=MsoTable15List7ColorfulAccent5 border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse'>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-bottom:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;border:none;border-bottom:
						  solid #5B9BD5 1.0pt;background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>Относительно ваших персональных данных в соответствии с
                                                    законодательством:</span></i></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>а) узнать, обрабатываются ли
                                                персональные
                                                данные или нет,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>b) Запрос информации, если ваши
                                                персональные данные были обработаны,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>c) Узнать цель обработки ваших
                                                персональных данных и используются ли они по назначению,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>ç) Зная третьих лиц, которым
                                                передаются ваши персональные данные дома или за рубежом,</span></p>
                                    </td>
                                </tr>
                                <tr style='height:26.3pt'>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt;height:26.3pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt;
						  height:26.3pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>d) Запросить исправление ваших
                                                личных данных, если они неполны или неправильно обработаны,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>e) Требовать удаления или
                                                уничтожения ваших персональных данных в случае устранения причин, требующих
                                                обработки,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>f) Требовать уведомления третьих
                                                лиц, которым были переданы ваши персональные данные, о транзакциях,
                                                осуществленных в соответствии с пунктами (d) и (e),</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>g) Возражать против
                                                возникновения
                                                результата против вас путем анализа ваших обработанных данных исключительно с
                                                помощью автоматических систем,</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR style='color:#2E74B5'>ğ) Если вы понесли ущерб в
                                                результате незаконной обработки персональных данных, вы можете
                                                воспользоваться своим правом потребовать возмещения ущерба.</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=23 valign=top style='width:17.55pt;border:none;border-right:solid #5B9BD5 1.0pt;
						  background:white;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><i><span lang=TR
                                                    style='font-size:13.0pt;font-family:"Times",serif;
						  color:#002060'>&nbsp;</span></i></p>
                                    </td>
                                    <td width=581 valign=top style='width:435.55pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
						  normal'><span lang=TR
                                                style='font-family:"Times",serif;color:#002060'>&nbsp;</span></p>
                                    </td>
                                </tr>
                            </table>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Метод применения к
                                        контроллеру данных</span></b></p>

                            <p class=MsoNormal style='text-align:justify'><a name="_Hlk140098103"><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>Ваше
                                        приложение: </span></a></p>

                            <p class=MsoListParagraphCxSpFirst style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>В письменной форме по адресу: Fener Mah 1962 Sk Aras Sitesi C
                                    Blok 2CB Muratpaşa/ ANTALYA (Фенер Мах 1962 Ск Арас Ситеси C Блок 2CB
                                    Муратпаша/ АНТАЛЬЯ);</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>С помощью защищенной электронной подписи или мобильной подписи
                                    на адрес aras.insaat@hs.kep.tr;</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Если ваш адрес электронной почты зарегистрирован в нашей
                                    системе, вы можете сделать это, отправив электронное письмо на адрес
                                    КВКК@portnature.com.tr, используя тот же адрес электронной почты..</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoListParagraphCxSpLast style='text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times New Roman",serif;color:#002060'>В вашем приложении;</span></p>

                            <p class=MsoListParagraphCxSpFirst style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Ваше имя, фамилия и подпись, если написано заявление,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Для граждан Турецкой Республики, ваш идентификационный номер TR,
                                    если вы иностранец, ваше гражданство, номер паспорта или идентификационный
                                    номер, если таковой имеется,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Ваш адрес проживания или работы, подлежащий уведомлению,</span></p>

                            <p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Ваш адрес электронной почты для уведомления, номер телефона и
                                    факса, если таковой имеется,</span></p>

                            <p class=MsoListParagraphCxSpLast style='text-align:justify;text-indent:-.25in'><span lang=TR style='font-family:Wingdings;color:#002060'>§<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp;
                                    </span></span><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>Тема вашего запроса, </span></p>

                            <p class=MsoNormal style='margin-left:.25in;text-align:justify'><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>К заявлению
                                    необходимо приложить информацию и документы по теме, если таковые имеются.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>PORT NATURE-</span></b><span lang=TR>
                                </span><b><span lang=TR style='font-family:"Times New Roman",serif;
						color:#002060'>ПОРТ ПРИРОДА оставляет за собой право подтвердить вашу личность</span></b><span
                                    lang=TR style='font-family:"Times New Roman",serif;color:#002060'>.</span></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Times New Roman",serif;color:#002060'>С процессуальными правилами, которые
                                    необходимо соблюдать при подаче заявления, и более подробной информацией можно
                                    ознакомиться в «Сообщении о порядке и принципах подачи заявления Контролеру
                                    данных» Управления по защите персональных данных.</span></p>

                            <p class=MsoNormal style='text-align:justify'><b><i><span lang=TR style='font-family:"Times New Roman",serif;color:#002060'>&nbsp;</span></i></b></p>

                            <p class=MsoNormal style='text-align:justify'><span lang=TR style='font-family:
						"Liberation Serif",serif'>&nbsp;</span></p>

                            <span lang=TR style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif'><br clear=all style='page-break-before:always'>
                            </span>

                            <p class=MsoNormal><span lang=TR>&nbsp;</span></p>

                            <span lang=TR style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif'><br clear=all style='page-break-before:always'>
                            </span>

                            <p class=MsoNormal><span lang=TR>&nbsp;</span></p>

                        </div>

                    </body>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript-imports')
@endsection

@section('css-imports')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/data-policy.css') }}" />
@endsection
