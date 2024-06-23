@php
    $allLang = ['tr', 'en', 'ru', 'de'];
    $title = 'Politikalarimiz';
    $description = 'Politikalarimiz';
    $text = '';

@endphp

@extends('layouts.main', ['lang' => $lang])

@section('title', $title)
@section('description', $description)

@section('content')

    <div class="d-flex  overflow-scroll justify-content-center align-items-start" style="margin-top:100px;min-height: calc(100vh - 515px);">

        <div class="container mt-5 px-5">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="langtr-tab" data-bs-toggle="tab" data-bs-target="#langtr" type="button" role="tab" aria-controls="langtr" aria-selected="true">Sürdürülebilirlik
                        Politikası</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="langen-tab" data-bs-toggle="tab" data-bs-target="#langen" type="button" role="tab" aria-controls="langen" aria-selected="false">Entegre Yönetim
                        Sistemi Politikası</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="langde-tab" data-bs-toggle="tab" data-bs-target="#langde" type="button" role="tab" aria-controls="langde" aria-selected="false">Sürdürülebilir Turizm
                        Politikası</button>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="langtr" role="tabpanel" aria-labelledby="langtr-tab">
                    <div>
                        <h1>SÜRDÜRÜLEBİLİRLİK POLİTİKASI</h1>
                        <p>Yoksul ve kırılgan durumda olanlara dayanıklılık kazandırmak ve iklimle ilgili aşırı olaylara ve diğer ekonomik sosyal ve çevresel şoklara ve afetzedelere sosyal yardımda
                            bulunmak istihdam fırsat eşitliği sağlamak ve kırılganlıklarını azaltmak</p>
                        <p>Güçlü kurum kültürü ile ülkemizin farklı şehirlerinden Dünyanın birçok ülkesine kadar çalışanlarımıza istihdam ve staj imkânı sağlamak</p>
                        <p>Uzman ekiplerimiz ile Güvenli Gıda sağlamak için satın almadan başlayarak sofraya kadar giden süreçte gıda hijyen kontrollerimizi sağlıyor ve israfı azaltmak için çalışıyoruz.
                        </p>
                        <p>Çalışanlarımızın ve paydaşlarımızın beslenme ihtiyaçlarını önemsiyor ve Beslenme uzmanları tarafından hazırlanmış dengeli menüler ve güvenli gıdalar sunuyoruz.</p>
                        <p>Ekosistemlerin korunmasına yardımcı olan iklim değişikliği aşırı hava koşulları kuraklık sel ve diğer afetlere uyum kapasitesini güçlendiren ve arazi ve toprak kalitesini
                            aşamalı biçimde iyileştiren bitkileri tercih ediyor ve ağaçlandırmaya önem veriyoruz.</p>
                        <p>Endemik yerel ve soyu tükenmekte olan flora ve faunamızı koruyor habitatlarında sağlıklı gelişmeleri için bakım ve gözetimlerini gerçekleştiriyoruz.</p>
                        <p>Hizmetlerimiz süresince iş güvenliğini ve kaliteyi ön plana koyarak güvenilirliği sağlarız.</p>
                        <p>Çalışanlarımızın motivasyon ve mental esenliğini sağlamak için profesyonel uzmanlar tarafından eğitimler düzenliyoruz.</p>
                        <p>Sürdürülebilir bir temelde elde edilebilir ve ulaşılabilir temel tıbbi ekipmanlar setine sahip sağlık birimimiz ile misafirlerimiz çalışanlarımız için sürekli ve yerel halk için
                            acil durumlarda sağlık desteği sağlıyoruz.</p>
                        <p>En önemli paydaşımız çalışanlarımızın sağlık ve güvenliklerini sağlamanın yanı sıra kaliteli mesleki ve teknik eğitim alma süreçlerini destekliyor ve gelişimlerine yatırım
                            yapıyoruz.</p>
                        <p>Misafirlerimiz ile birlikte ekoloji flora-fauna hakkında Çevre eğitim etkinlikleri düzenliyoruz.</p>
                        <p>Kadınların yönetimin her seviyesinde tam ve etkili katılımı ile liderlik için eşit fırsatlara sahip olmasını sağlıyoruz.</p>
                        <p>Ülkemizde herkes fikir inanç özgürlüğüne sahip olup kimseye dil din ırk cinsiyet sosyal sınıf yaş ve birlik üyeliği gibi konularda ayrımcılık yapmıyoruz. İnsan haklarının
                            korunması temel kuralımızdır ve paydaşlarımızdan da aynı hassasiyeti bekleriz.</p>
                        <p>Herkes için güvenilir içme suyu sağlıyor ve adil erişimi destekleyerek yerel toplumu önemsiyoruz.</p>
                        <p>Suyun verimli kullanımı için; bahçe sulama saatlerimizi düzenliyor donanımlarımızı teknolojik gelişmeler doğrultusunda iyileştiriyor ve düzenli tesisat bakımlarımızı
                            gerçekleştiriyoruz.</p>
                        <p>Atıksularımız doğrudan atıksu kanalizasyon bağlantı sistemine iletilmekte olup atıksu kirlilik yükünü azaltmak adına yardımcı bakteriler ile yağların parçalanmasını sağlıyoruz.
                        </p>
                        <p>Temiz enerji için; enerji tedarikçilerimizi yenilenebilir enerji oranlarına göre seçiyoruz.</p>
                        <p>Hibrit sistemlerde dahil olmak üzere teknolojik gelişmeleri yakından takip ediyor ve sistemlerimizi güncelliyoruz.</p>
                        <p>Tüm erkek ve kadın çalışanlarımız için eşit işe eşit ücret sağlıyoruz.</p>
                        <p>Üst Yönetim</p>
                        <p>SÜRDÜRÜLEBİLİRLİK POLİTİKASI</p>
                        <p>Ayak izimizi küçültme hedefimiz doğrultusunda emisyonlarımızı izliyor ve hedefimiz için çalışmalar yapıyoruz.</p>
                        <p>Çevrede bulunan toplu ulaşım yöntemleri ve bisiklet hakkında misafirlerimizi bilgilendiriyoruz.</p>
                        <p>Gıda israfını önlemek için talep ihtiyaç doğrultusunda üretim yapıyoruz.</p>
                        <p>İnsan sağlığına ve çevreye olan zararlı etkilerini en aza indirebilmek için bu atıkların havaya suya ve toprağa salınımını engellemek için doğru muhafaza ve lisanslı tesislere
                            gönderim sağlıyoruz.</p>
                        <p>İklim değişikliğiyle ilgili tehlikeler ile doğal afetlere karşı dayanıklılık ve uyum kapasitesini güçlendirmek için çevresel tatbikatlar düzenliyoruz.</p>
                        <p>Yerel bölgeden seçiyoruz. Sürdürülebilir turizm için daha az enerji su atık üreten çevre dostu satın alma yapıyoruz.</p>
                        <p>Biyolojik çeşitliliği koruyoruz.</p>
                        <p>Caretta Carettalarımız sahilimize yumurta bıraktığında koruma altına alıyor ve güvenliğini sağlayarak gelişim süreçlerini takip ediyoruz.</p>
                        <p>Orman yönetimi için eko-etiketli kâğıt ürünleri kullanıyoruz.</p>
                        <p>Emniyetli çevre sağlamak için çalışıyoruz.</p>
                        <p>Geleceğimizdir. Onların özgür ve güven içinde hiçbir sömürüye maruz kalmadan büyümelerini önemsiyoruz. Çocuklara yönelik taciz istismar ile mücadele için personellerimize
                            farkındalık eğitimleri düzenliyor Yerel makamlar ve Sivil Toplum Kuruluşları ile birlikte çalışıyoruz.</p>
                        <p>Milletlerin Çocuk Hakları Sözleşmesi ve UNICEF prensipleri bizim için yol göstericidir.</p>
                        <p>Her türlü davranış çocuk haklarının ihlalidir ve tarafımızdan kınanmakta ve engellenmektedir.</p>
                        <p>Teknoloji ve yeniliğe erişim için organizasyon fuar vb. etkili ortaklık fırsatlarını değerlendiriyoruz.</p>
                        <p>Yurtdışında da tanıtım faaliyetlerimiz ile ülkemizi ve destinasyonumuzu temsil ediyor ve eko turizmi destekliyoruz.</p>
                        <p>Üst Yönetim</p>
                    </div>

                </div>
                <div class="tab-pane fade" id="langen" role="tabpanel" aria-labelledby="langen-tab">
                    <div>
                        <h1>ENERJİ YÖNETİM SİSTEMİ POLİTİKASI</h1>
                        <h2>KALİTE MİSAFİR MEMNUNİYETİ GIDA ÇEVRE İŞ SAĞLIĞI GÜVENLİĞİ VE ENERJİ POLİTİKAMIZ:</h2>
                        <p>PORT NATURE LUXURY RESORT HOTEL & SPA olarak;</p>
                        <p>Turizm ve Otelcilik Sektöründe kalitemizi misafir memnuniyetine verdiğimiz önemle ortaya koyabileceğimize inanıyoruz. Misafirlerimizin memnuniyetlerini düzenli olarak izliyor
                            sunduğumuz hizmeti misafir istekleri şikayetleri ve önerileri doğrultusunda ve Kalite Misafir Memnuniyeti Gıda Çevre İş Sağlığı Güvenliği ve Enerji Yönetim Sistemi şartlarına
                            uygun olarak etkin bir şekilde yerine getiriyoruz.</p>
                        <p>Tesisimizde yürütülen her hizmetin çalışanlarımızın ve misafirlerimizin güvenliğini ve sağlığını gözetir nitelikte olmasına özen gösteriyor bu anlayışımızın etkin kılınmasını
                            sağlamak için Kalite Misafir Memnuniyeti Gıda Çevre İş Sağlığı Güvenliği ve Enerji Yönetim Sistemine ilişkin oluşturduğumuz hedefler doğrultusunda çalışmayı çalışan
                            temsilcilerimizle birlikte iş sağlığı ve güvenliğini tehdit edecek nitelikte oluşabilecek riskleri belirleyerek azaltmayı ilke ediniyoruz.</p>
                        <p>Tesisimizde sunulan her gıdanın tedariğinden son tüketimi dahil tüm aşamalarında misafir ve personelimizin güvenliği ve sağlığı için iç ve dış iletişim kanallarını kullanıp
                            gerekli yasal mevzuat düzenleyici gereklilikler ve misafir şartlarını konusunda yetkin personellerimizle yerine getirerek güvenli gıdalar sunmayı taahhüt ediyoruz.</p>
                        <p>Tesisimizde doğayı korumak ve faaliyetlerimiz sırasında çevreye verdiğimiz etkileri önlemek için Çevresel Yasal Mevzuatı ve Misafir Şartlarını yerine getiriyoruz. Yasal mevzuata
                            bağlı olarak faaliyetlerimiz sırasında açığa çıkan her türlü atığı ayrıştırıp bertarafına katkıda bulunmayı faaliyetlerimizi gerçekleştirirken enerji ve doğal kaynakları
                            verimli kullanmayı çevreye olan duyarlılığımızın artması amacıyla paydaşlarımızla birlikte yol alarak farkındalığımızı hep birlikte artırmayı taahhüt ediyoruz.</p>
                        <p>Bu politikaların yerine getirilmesinde personelimizin önemli görev taşıdığını biliyor onların eğitim ve gelişimine önem veriyoruz. Eğitimli yetkin özgüvenli saygılı ve devamlı
                            bir insan kaynağının misafirlerin tesisimizi tercih etmesinde önemli bir rol oynayacağı bilinci içinde misafirlerimizin ve Yönetim Sistemlerimizin sürekliliğini sağlamayı ve
                            sahip olduğumuz tüm Yönetim Sistemlerini gözden geçirerek sürekli geliştirmeyi ilke ediniyoruz.</p>
                        <p>Yayın Tarihi: 15.07.2023</p>
                        <p>GENEL MÜDÜR</p>
                        <h2>PORT NATURE HOTEL olarak ;</h2>
                        <p>Üst yönetimimiz; Enerji Yönetim Sisteminin etkinliği ve enerji performansının sürekli iyileştirilmesi açısından liderlik ve bağlılığını sürekli gösterir. Bu konu ile ilgili
                            sorumluluk alır ve sorumluluk atar. Enerji politikasının ve hedeflerinin oluşturulmasını güvence altına alarak bunların kuruluşun içeriği ve stratejik yönü ile uyumlu olmasını
                            sağlar. Bu taahhüdünü aşağıdaki konuları yaparak kanıtlar;</p>
                        <ul>
                            <li>Enerji Yönetim Sisteminin kapsamı ve sınırlarını oluşturur</li>
                            <li>Enerji Politikasının amaç ve hedeflerin belirlenmesi ve stratejik yön ile uyumlu olmasını sağlar</li>
                            <li>Enerji Yönetim Sistemi gereklilikleri ile kuruluş proseslerine entegre olmasını sağlar</li>
                            <li>Etkin enerji yönetiminin önemini ve Enerji Yönetim Sistemi gerekliliklerine uymayı bildirir personelle belirli zaman aralıklarında toplantılar düzenler</li>
                            <li>EYS’nin amaçlanan çıktıları vermesini sağlar.</li>
                            <li>Enerji Yönetim Sistemi etkinliğine ve enerji performansının iyileştirilmesine katkıda bulunacak kişileri yönlendirir ve destekler.</li>
                            <li>Liderliklerini kendi sorumluluk alanlarına uyguladıklarını göstermek için diğer ilgili yönetim rollerini destekler</li>
                            <li>Enerji Yönetim Sistemini etkileyecek değişiklikleri ve Enerji Yönetim Sistemi kapsamı ve sınırları içerisindeki enerji performansını belirlemek ve ele almak için süreçlerin
                                kurulmasını ve uygulanmasını sağlar</li>
                            <li>Uyulması gereken yasal şartlar (standart vb.) ve müşteri şartlarına uygun hizmet verilmesinin önemini ve gereğini vurgular gerekli olan kaynakları hazır bulundurur.</li>
                            <li>Üst yönetim; kuruluşta enerji yönetim sisteminin gereği gibi uygulanacağını enerji performansının geliştirileceğini ve etkinliğinin sürekli olarak iyileştirilmesi için
                                gerekli çalışmaları yapacağını taahhüt eder.</li>
                        </ul>
                        <p>GENEL MÜDÜR</p>
                    </div>

                </div>
                <div class="tab-pane fade" id="langde" role="tabpanel" aria-labelledby="langde-tab">
                    <div>
                        <h1>PORT NATURE LUXURY RESORT HOTEL & SPA SÜRDÜRÜLEBİLİR TURİZM POLİTİKASI</h1>
                        <p>PORT NATURE LUXURY RESORT HOTEL & SPA olarak gerçekleştirdiğimiz tüm faaliyetlerimizde çevreye olabilecek etkileri öngörmeyi ve ilgili önlemleri almayı</p>
                        <p>Misafirlerimize verdiğimiz tüm hizmetlerimizde çevre etkisini azaltacak yenilikler sağlamayı çevre dengesi ve biyolojik çeşitliliği korumayı</p>
                        <p>Doğal kaynakların doğru ve etkin kullanımını sağlamak adına azaltıcı tedbirler alıp teknolojik gelişmeleri takip ederek sürekli gelişimi sağlamayı</p>
                        <p>Sürdürülebilir Turizm bilincinin arttırılması ve bireysel sorumluluk kazandırma adına gerekli eğitim çalışmalarını yapmayı</p>
                        <p>Tüm bu faaliyetlerimizi gerçekleştirirken ilgili yasal zorunluluklar ve diğer uluslararası gereklilikleri esas alarak bulunduğumuz bölgelerde iletişim ve iş birliği içinde
                            bulunarak bölge için ortak faydalar sağlamayı taahhüt ediyoruz.</p>
                        <p>Yönetim Kurulu Başkanı olarak ben çevresel duyarlılığı sağlamak adına Port Nature Luxury Resort Hotel & Spa’nın Turizm sektöründe lider konuma gelebilmesi için bu
                            sürdürülebilirlik politikasını desteklerken çalışanlarımızı politikamızı anlamaya anlatmaya ve uygulamaya davet ediyorum.</p>
                        <p>Yönetim Kurulu Başkanı</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
@section('javascript-imports')
@endsection
@section('css-imports')

@endsection
