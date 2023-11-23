@extends('frontend.en.layouts.nonlang')

@section('title', 'Registercard - Port Nature Luxury Resort Hotel Spa')
@section('description', 'Registercard of Port Nature Luxury Resort Hotel Spa. Ultra all inclusive five star hotel in Kadriye Antalya. Contact for reservations and best offers.')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('contacts') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-contacts') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-contacts') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-contacts') }}">DE</a></li>
    </ul>
</li>
@endsection

@section('content')

    <main>
        <div class="menu">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      ENGLISH
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p style="width: 100vw; text-align: left!important;">ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ “PORT NATURE” olarak siz değerli misafirlerimizin birtakım kişisel verilerini müşteri ilişkileri yönetimi süreçlerinin yürütülmesi amacıyla işlemekteyiz. İşlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması Kanunu gereği aydınlatma yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="https://portnature.com.tr/misafir-aydinlatma">https://portnature.com.tr/misafir-aydinlatma</a> adresinden ya da aşağıdaki QR kod üzerinden ulaşabilirsiniz.</p> 
                         <img loading="lazy" src="https://portnature.com.tr/assets/frontend/images/contact/misafir-aydinlatma.svg" style="width: 200px; height:200px;" alt="Kvkk QR CODE">
                       </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    TÜRKÇE
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p style="width: 100vw; text-align: left!important;">ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ “PORT NATURE” olarak siz değerli misafirlerimizin birtakım kişisel verilerini müşteri ilişkileri yönetimi süreçlerinin yürütülmesi amacıyla işlemekteyiz. İşlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması Kanunu gereği aydınlatma yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="https://portnature.com.tr/misafir-aydinlatma">https://portnature.com.tr/misafir-aydinlatma</a> adresinden ya da aşağıdaki QR kod üzerinden ulaşabilirsiniz.</p> 
                      <img loading="lazy" src="https://portnature.com.tr/assets/frontend/images/contact/misafir-aydinlatma.svg" style="width: 200px; height:200px;" alt="Kvkk QR CODE">
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    DEUTSCH
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p style="width: 100vw; text-align: left!important;">ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ “PORT NATURE” olarak siz değerli misafirlerimizin birtakım kişisel verilerini müşteri ilişkileri yönetimi süreçlerinin yürütülmesi amacıyla işlemekteyiz. İşlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması Kanunu gereği aydınlatma yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="https://portnature.com.tr/misafir-aydinlatma">https://portnature.com.tr/misafir-aydinlatma</a> adresinden ya da aşağıdaki QR kod üzerinden ulaşabilirsiniz.</p> 
                         <img loading="lazy" src="https://portnature.com.tr/assets/frontend/images/contact/misafir-aydinlatma.svg" style="width: 200px; height:200px;" alt="Kvkk QR CODE">
                       </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                      PYCCKNN
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p style="width: 100vw; text-align: left!important;">ARAS İNŞAAT TİCARET TURİZM ANONİM ŞİRKETİ “PORT NATURE” olarak siz değerli misafirlerimizin birtakım kişisel verilerini müşteri ilişkileri yönetimi süreçlerinin yürütülmesi amacıyla işlemekteyiz. İşlenen kişisel verileriniz ile ilgili 6698 Sayılı Kişisel Verilerin Korunması Kanunu gereği aydınlatma yükümlülüğünü yerine getirmek ve şeffaf olabilmek amacıyla hazırladığımız aydınlatma metnine <a href="https://portnature.com.tr/misafir-aydinlatma">https://portnature.com.tr/misafir-aydinlatma</a> adresinden ya da aşağıdaki QR kod üzerinden ulaşabilirsiniz.</p> 
                             <img loading="lazy" src="https://portnature.com.tr/assets/frontend/images/contact/misafir-aydinlatma.svg" style="width: 200px; height:200px;" alt="Kvkk QR CODE">
                           </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </main>

@endsection

@section('javascript-imports')
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/registercard.css') }}"/>

@endsection