<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OfferController as AdminOfferController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\AccommodationController;
use App\Http\Controllers\Frontend\KidsConceptController;
use App\Http\Controllers\Frontend\OfferController;
use App\Http\Controllers\Frontend\FoodDrinkController;
use App\Http\Controllers\Frontend\EntertainmentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\Deutsch\BlogController as DeutschBlogController;
use App\Http\Controllers\Frontend\SpaController;
use App\Http\Controllers\Frontend\MeetingController;
use App\Http\Controllers\Frontend\Russian\BlogController as RussianBlogController;
use App\Http\Controllers\Frontend\Turkish\BlogController as TurkishBlogController;

# ==================================================== FRONTEND ====================================================================================


# =========================== ENGLISH ===================================================================

Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('en', [HomePageController::class, 'index'])->name('homepage');
// BLOG PAGES


//BLOG PAGES END

Route::get('rooms', [AccommodationController::class, 'index'])->name('accommodation');
Route::get('standard-rooms', [AccommodationController::class, 'standard_rooms'])->name('standard-rooms');
Route::get('family-room', [AccommodationController::class, 'family_rooms'])->name('family-rooms');
Route::get('king-suite-room', [AccommodationController::class, 'kingsuit_rooms'])->name('kingsuit-rooms');
Route::get('standard-side-view-room', [AccommodationController::class, 'sideview_rooms'])->name('sideview-rooms');
Route::get('standard-sea-view-room', [AccommodationController::class, 'seaview_rooms'])->name('seaview-rooms');
Route::get('standard-land-view-room', [AccommodationController::class, 'landview_rooms'])->name('landview-rooms');

Route::get('kids-concept', [KidsConceptController::class, 'index'])->name('kids-concepts');
Route::get('aquapark', [KidsConceptController::class, 'aquapark'])->name('aquapark');
Route::get('mini-club', [KidsConceptController::class, 'mini_club'])->name('mini-club');

Route::get('mini-club-alacarte-restaurant', [KidsConceptController::class, 'mini_club_alacarte'])->name('mini-club-alacarte');

// Route::get('{$offer_slug}', [OfferController::class, 'offerDetail'])->name('offer-detail');
Route::get('special-offers', [OfferController::class, 'index'])->name('special-offers');
Route::get('antalya-hotels', [OfferController::class, 'antalyaOffers'])->name('antalya-hotels');
Route::get('belek-hotels', [OfferController::class, 'belekOffers'])->name('belek-hotels');
Route::get('turkey-hotels', [OfferController::class, 'turkeyOffers'])->name('turkey-hotels');


Route::get('food-drinks', [FoodDrinkController::class, 'index'])->name('food-drink');
Route::get('alacarte-restaurants', [FoodDrinkController::class, 'alacarte_restaurants'])->name('alacarte-restaurants');
Route::get('bars-cafes', [FoodDrinkController::class, 'bar_cafe'])->name('bar-cafe');
Route::get('davidoff-cafe', [FoodDrinkController::class, 'davidoff_cafe'])->name('davidoff-cafe');
Route::get('main-restaurant', [FoodDrinkController::class, 'main_restaurant'])->name('main-restaurant');
Route::get('far-east-alacarte-restaurant', [FoodDrinkController::class, 'fareast'])->name('fareast');
Route::get('all-day-dining-alacarte-restaurant', [FoodDrinkController::class, 'alldaydinning'])->name('alldaydinning');
Route::get('french-alacarte-restaurant', [FoodDrinkController::class, 'french'])->name('french');
Route::get('seaside-alacarte-restaurant', [FoodDrinkController::class, 'seaside'])->name('seaside');
Route::get('italian-alacarte-restaurant', [FoodDrinkController::class, 'italian'])->name('italian');
Route::get('sushi-bar-alacarte-restaurant', [FoodDrinkController::class, 'sushi_bar'])->name('sushi-bar');
Route::get('script-chivas-lounge', [FoodDrinkController::class, 'chivas_lounge'])->name('chivas-lounge');
Route::get('born9-hennessy-lounge', [FoodDrinkController::class, 'hennessy_lounge'])->name('hennessy-lounge');
Route::get('irish-pub', [FoodDrinkController::class, 'irish_pub'])->name('irish-pub');
Route::get('lobby-bar', [FoodDrinkController::class, 'lobby_bar'])->name('lobby-bar');
Route::get('flamingo-bar', [FoodDrinkController::class, 'flamingo_bar'])->name('flamingo-bar');
Route::get('kit-kat-cafe', [FoodDrinkController::class, 'kitkat_cafe'])->name('kitkat-cafe');
Route::get('nespresso-cafe', [FoodDrinkController::class, 'nespresso_cafe'])->name('nespresso-cafe');
Route::get('pastahouse', [FoodDrinkController::class, 'pastahouse'])->name('pastahouse');

Route::get('entertainment', [EntertainmentController::class, 'index'])->name('entertainment');
Route::get('activities', [EntertainmentController::class, 'activity'])->name('activity');
Route::get('concerts', [EntertainmentController::class, 'concert'])->name('concert');
Route::get('beach', [EntertainmentController::class, 'beach'])->name('en-beach');

Route::get('contacts', [ContactController::class, 'index'])->name('contacts');
Route::post('contacts', [ContactController::class, 'submit'])->name('contacts-submit');
Route::get('cookie-policy', [ContactController::class, 'data_policy'])->name('data-policy');
Route::get('registercard', [ContactController::class, 'register_card'])->name('en-register-card');

Route::get('spa-center', [SpaController::class, 'index'])->name('spa');
Route::get('indoor-pool', [SpaController::class, 'indoor_pool'])->name('indoor-pool');

Route::get('meeting-congress', [MeetingController::class, 'index'])->name('meeting-congress');



# ======================================= RUSSIAN ====================================================================

Route::get('ru', [App\Http\Controllers\Frontend\Russian\HomePageController::class, 'index'])->name('ru-homepage');

Route::get('blog-stranica', [App\Http\Controllers\Frontend\Russian\BlogController::class, 'index'])->name('ru-blog');

Route::get('nomera', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'index'])->name('ru-accommodation');
Route::get('semeyniy-nomer', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'family_rooms'])->name('ru-family-rooms');
Route::get('nomer-king-suite', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'kingsuit_rooms'])->name('ru-kingsuit-rooms');
Route::get('nomera-standart', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'standard_rooms'])->name('ru-standard-rooms');
Route::get('nomer-standard-vid-na-more', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'seaview_rooms'])->name('ru-seaview-rooms');
Route::get('nomer-standart-s-bokovim-vidom', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'sideview_rooms'])->name('ru-sideview-rooms');
Route::get('nomer-standard-vid-na-okrestnosti', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'landview_rooms'])->name('ru-landview-rooms');

Route::get('detskiy-koncept', [App\Http\Controllers\Frontend\Russian\KidsConceptController::class, 'index'])->name('ru-kids-concepts');
Route::get('akvapark', [App\Http\Controllers\Frontend\Russian\KidsConceptController::class, 'aquapark'])->name('ru-aquapark');
Route::get('club-mini', [App\Http\Controllers\Frontend\Russian\KidsConceptController::class, 'mini_club'])->name('ru-mini-club');

Route::get('alacarte-restoran-mini-club', [App\Http\Controllers\Frontend\Russian\KidsConceptController::class, 'mini_club_alacarte'])->name('ru-mini-club-alacarte');

Route::get('specialniye-predlojeniya', [App\Http\Controllers\Frontend\Russian\OfferController::class, 'index'])->name('ru-special-offers');
Route::get('oteli-v-antalii', [App\Http\Controllers\Frontend\Russian\OfferController::class, 'antalyaOffers'])->name('ru-antalya-hotels');
Route::get('oteli-belek', [App\Http\Controllers\Frontend\Russian\OfferController::class, 'belekOffers'])->name('ru-belek-hotels');
Route::get('oteli-turcii', [App\Http\Controllers\Frontend\Russian\OfferController::class, 'turkeyOffers'])->name('ru-turkey-hotels');

Route::get('eda-napitki', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'index'])->name('ru-food-drink');
Route::get('restorani-alacarte', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'alacarte_restaurants'])->name('ru-alacarte-restaurants');
Route::get('bari-kafe', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'bar_cafe'])->name('ru-bar-cafe');
Route::get('kafe-davidoff', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'davidoff_cafe'])->name('ru-davidoff-cafe');
Route::get('glavniy-restoran', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'main_restaurant'])->name('ru-main-restaurant');
Route::get('alacarte-restoran-dalnevostochniy', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'fareast'])->name('ru-fareast');
Route::get('alacarte-restoran-all-day-dining', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'alldaydinning'])->name('ru-alldaydinning');
Route::get('alacarte-restoran-francuzskiy', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'french'])->name('ru-french');
Route::get('alacarte-restoran-seaside', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'seaside'])->name('ru-seaside');
Route::get('alacarte-restoran-italyannskiy', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'italian'])->name('ru-italian');
Route::get('alacarte-restoran-sushi-bar', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'sushi_bar'])->name('ru-sushi-bar');
Route::get('script-chivas-launge', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'chivas_lounge'])->name('ru-chivas-lounge');
Route::get('born9-hennessy-launge', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'hennessy_lounge'])->name('ru-hennessy-lounge');
Route::get('pub-irish', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'irish_pub'])->name('ru-irish-pub');
Route::get('lobbybar', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'lobby_bar'])->name('ru-lobby-bar');
Route::get('flamingobar', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'flamingo_bar'])->name('ru-flamingo-bar');
Route::get('kafe-kit-kat', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'kitkat_cafe'])->name('ru-kitkat-cafe');
Route::get('kafe-nespresso', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'nespresso_cafe'])->name('ru-nespresso-cafe');
Route::get('pasta-house', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'pastahouse'])->name('ru-pastahouse');

Route::get('razvlecheniya', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'index'])->name('ru-entertainment');
Route::get('meropriyatiya', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'activity'])->name('ru-activity');
Route::get('concerti', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'concert'])->name('ru-concert');
Route::get('concertsbuilding', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'concertsbuilding'])->name('ru-concertsbuilding');
Route::get('plyazh', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'beach'])->name('ru-beach');

Route::get('kontakti', [App\Http\Controllers\Frontend\Russian\ContactController::class, 'index'])->name('ru-contacts');
Route::post('kontakti', [App\Http\Controllers\Frontend\Russian\ContactController::class, 'submit'])->name('ru-contacts-submit');
Route::get('politika-cookie', [App\Http\Controllers\Frontend\Russian\ContactController::class, 'data_policy'])->name('ru-data-policy');

Route::get('spa-centr', [App\Http\Controllers\Frontend\Russian\SpaController::class, 'index'])->name('ru-spa');
Route::get('kritiy-basseyn', [App\Http\Controllers\Frontend\Russian\SpaController::class, 'indoor_pool'])->name('ru-indoor-pool');

Route::get('vstrechi-kongress', [App\Http\Controllers\Frontend\Russian\MeetingController::class, 'index'])->name('ru-meeting-congress');



# ======================================= TURKISH ====================================================================

Route::get('tr', [App\Http\Controllers\Frontend\Turkish\HomePageController::class, 'index'])->name('tr-homepage');

Route::get('blog-sayfasi', [App\Http\Controllers\Frontend\Turkish\BlogController::class, 'index'])->name('tr-blog');



Route::get('konaklama', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'index'])->name('tr-accommodation');
Route::get('aile-odasi', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'family_rooms'])->name('tr-family-rooms');
Route::get('king-suite-oda', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'kingsuit_rooms'])->name('tr-kingsuit-rooms');
Route::get('standart-odalar', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'standard_rooms'])->name('tr-standard-rooms');
Route::get('standart-deniz-manzarali-oda', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'seaview_rooms'])->name('tr-seaview-rooms');
Route::get('standart-yandan-manzarali-oda', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'sideview_rooms'])->name('tr-sideview-rooms');
Route::get('standart-kara-manzarali-oda', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'landview_rooms'])->name('tr-landview-rooms');

Route::get('cocuk-konsepti', [App\Http\Controllers\Frontend\Turkish\KidsConceptController::class, 'index'])->name('tr-kids-concepts');
Route::get('su-parki', [App\Http\Controllers\Frontend\Turkish\KidsConceptController::class, 'aquapark'])->name('tr-aquapark');
Route::get('mini-klup', [App\Http\Controllers\Frontend\Turkish\KidsConceptController::class, 'mini_club'])->name('tr-mini-club');
Route::get('mini-club-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\KidsConceptController::class, 'mini_club_alacarte'])->name('tr-mini-club-alacarte');

Route::get('ozel-teklifler', [App\Http\Controllers\Frontend\Turkish\OfferController::class, 'index'])->name('tr-special-offers');
Route::get('antalya-otelleri', [App\Http\Controllers\Frontend\Turkish\OfferController::class, 'antalyaOffers'])->name('tr-antalya-hotels');
Route::get('belek-otelleri', [App\Http\Controllers\Frontend\Turkish\OfferController::class, 'belekOffers'])->name('tr-belek-hotels');
Route::get('turkiye-otelleri', [App\Http\Controllers\Frontend\Turkish\OfferController::class, 'turkeyOffers'])->name('tr-turkey-hotels');

Route::get('yeme-icme', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'index'])->name('tr-food-drink');
Route::get('alacarte-restoranlar', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'alacarte_restaurants'])->name('tr-alacarte-restaurants');
Route::get('barlar-kafeler', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'bar_cafe'])->name('tr-bar-cafe');
Route::get('davidoff-kafe', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'davidoff_cafe'])->name('tr-davidoff-cafe');
Route::get('ana-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'main_restaurant'])->name('tr-main-restaurant');
Route::get('uzak-dogu-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'fareast'])->name('tr-fareast');
Route::get('all-day-dining-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'alldaydinning'])->name('tr-alldaydinning');
Route::get('fransiz-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'french'])->name('tr-french');
Route::get('seaside-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'seaside'])->name('tr-seaside');
Route::get('italyan-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'italian'])->name('tr-italian');
Route::get('sushi-bar-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'sushi_bar'])->name('tr-sushi-bar');
Route::get('script-launge-chivas', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'chivas_lounge'])->name('tr-chivas-lounge');
Route::get('born9-launge-hennessy', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'hennessy_lounge'])->name('tr-hennessy-lounge');
Route::get('irishpub', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'irish_pub'])->name('tr-irish-pub');
Route::get('bar-lobby', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'lobby_bar'])->name('tr-lobby-bar');
Route::get('bar-flamingo', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'flamingo_bar'])->name('tr-flamingo-bar');
Route::get('kit-kat-kafe', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'kitkat_cafe'])->name('tr-kitkat-cafe');
Route::get('nespresso-kafe', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'nespresso_cafe'])->name('tr-nespresso-cafe');
Route::get('housepasta', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'pastahouse'])->name('tr-pastahouse');

Route::get('eglenceler', [App\Http\Controllers\Frontend\Turkish\EntertainmentController::class, 'index'])->name('tr-entertainment');
Route::get('aktiviteler', [App\Http\Controllers\Frontend\Turkish\EntertainmentController::class, 'activity'])->name('tr-activity');
Route::get('konserler', [App\Http\Controllers\Frontend\Turkish\EntertainmentController::class, 'concert'])->name('tr-concert');
Route::get('plaj', [App\Http\Controllers\Frontend\Turkish\EntertainmentController::class, 'beach'])->name('tr-beach');

Route::get('iletisim', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'index'])->name('tr-contacts');
//Aydinlatma metinleri 
Route::get('callcenter-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'cca_policy'])->name('tr-cca-policy');
Route::get('calisan-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'ca_policy'])->name('tr-ca-policy');
Route::get('calisan-adayi-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'caa_policy'])->name('tr-caa-policy');
Route::get('misafir-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'ma_policy'])->name('tr-ma-policy');
Route::get('mutfak-ziyaretci-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'mza_policy'])->name('tr-mza-policy');
Route::get('urun-hizmet-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'uha_policy'])->name('tr-uha-policy');
Route::get('guvenlik-kamera-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'gka_policy'])->name('tr-gka-policy');
Route::get('calisan-sosyal-medya-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'csma_policy'])->name('tr-csma-policy');
Route::get('misafir-sosyal-medya-aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'msma_policy'])->name('tr-msma-policy');

Route::post('iletisim', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'submit'])->name('tr-contacts-submit');
Route::get('cerez-politikasi', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'data_policy'])->name('tr-data-policy');


Route::get('spa-merkezi', [App\Http\Controllers\Frontend\Turkish\SpaController::class, 'index'])->name('tr-spa');
Route::get('kapali-havuz', [App\Http\Controllers\Frontend\Turkish\SpaController::class, 'indoor_pool'])->name('tr-indoor-pool');

Route::get('toplanti-kongre', [App\Http\Controllers\Frontend\Turkish\MeetingController::class, 'index'])->name('tr-meeting-congress');



# ======================================= DEUTSCH ====================================================================

Route::get('de', [App\Http\Controllers\Frontend\Deutsch\HomePageController::class, 'index'])->name('de-homepage');

Route::get('blog-seite', [App\Http\Controllers\Frontend\Deutsch\BlogController::class, 'index'])->name('de-blog');

Route::get('zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'index'])->name('de-accommodation');
Route::get('familienzimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'family_rooms'])->name('de-family-rooms');
Route::get('king-suite-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'kingsuit_rooms'])->name('de-kingsuit-rooms');
Route::get('standard-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'standard_rooms'])->name('de-standard-rooms');
Route::get('standard-meerblick-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'seaview_rooms'])->name('de-seaview-rooms');
Route::get('standard-seitlichemblick-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'sideview_rooms'])->name('de-sideview-rooms');
Route::get('standard-landblick-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'landview_rooms'])->name('de-landview-rooms');

Route::get('kinderkonzept', [App\Http\Controllers\Frontend\Deutsch\KidsConceptController::class, 'index'])->name('de-kids-concepts');
Route::get('aqua-park', [App\Http\Controllers\Frontend\Deutsch\KidsConceptController::class, 'aquapark'])->name('de-aquapark');
Route::get('miniclub', [App\Http\Controllers\Frontend\Deutsch\KidsConceptController::class, 'mini_club'])->name('de-mini-club');
Route::get('alacarte-restaurant-mini-club', [App\Http\Controllers\Frontend\Deutsch\KidsConceptController::class, 'mini_club_alacarte'])->name('de-mini-club-alacarte');

Route::get('angebote', [App\Http\Controllers\Frontend\Deutsch\OfferController::class, 'index'])->name('de-special-offers');
Route::get('antalya-hotel', [App\Http\Controllers\Frontend\Deutsch\OfferController::class, 'antalyaOffers'])->name('de-antalya-hotels');
Route::get('hotel-belek', [App\Http\Controllers\Frontend\Deutsch\OfferController::class, 'belekOffers'])->name('de-belek-hotels');
Route::get('hotel-turkei', [App\Http\Controllers\Frontend\Deutsch\OfferController::class, 'turkeyOffers'])->name('de-turkey-hotels');

Route::get('speisen-getranke', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'index'])->name('de-food-drink');
Route::get('restaurants-alacarte', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'alacarte_restaurants'])->name('de-alacarte-restaurants');
Route::get('cafes-bars', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'bar_cafe'])->name('de-bar-cafe');
Route::get('kafedavidoff', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'davidoff_cafe'])->name('de-davidoff-cafe');
Route::get('hauptrestaurant', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'main_restaurant'])->name('de-main-restaurant');
Route::get('alacarte-restaurant-far-east', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'fareast'])->name('de-fareast');
Route::get('alacarte-restaurant-all-day-dining', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'alldaydinning'])->name('de-alldaydinning');
Route::get('alacarte-restaurant-french', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'french'])->name('de-french');
Route::get('alacarte-restaurant-seaside', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'seaside'])->name('de-seaside');
Route::get('alacarte-restaurant-italian', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'italian'])->name('de-italian');
Route::get('alacarte-restaurant-sushi-bar', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'sushi_bar'])->name('de-sushi-bar');
Route::get('lounge-chivas-script', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'chivas_lounge'])->name('de-chivas-lounge');
Route::get('lounge-born9-hennessy', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'hennessy_lounge'])->name('de-hennessy-lounge');
Route::get('pubirish', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'irish_pub'])->name('de-irish-pub');
Route::get('barlobby', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'lobby_bar'])->name('de-lobby-bar');
Route::get('barflamingo', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'flamingo_bar'])->name('de-flamingo-bar');
Route::get('cafe-kit-kat', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'kitkat_cafe'])->name('de-kitkat-cafe');
Route::get('cafe-nespresso', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'nespresso_cafe'])->name('de-nespresso-cafe');
Route::get('house-pasta', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'pastahouse'])->name('de-pastahouse');

Route::get('unterhaltung', [App\Http\Controllers\Frontend\Deutsch\EntertainmentController::class, 'index'])->name('de-entertainment');
Route::get('aktiviaten', [App\Http\Controllers\Frontend\Deutsch\EntertainmentController::class, 'activity'])->name('de-activity');
Route::get('konzert', [App\Http\Controllers\Frontend\Deutsch\EntertainmentController::class, 'concert'])->name('de-concert');
Route::get('strand', [App\Http\Controllers\Frontend\Deutsch\EntertainmentController::class, 'beach'])->name('de-beach');

Route::get('kontakte', [App\Http\Controllers\Frontend\Deutsch\ContactController::class, 'index'])->name('de-contacts');
Route::post('kontakte', [App\Http\Controllers\Frontend\Deutsch\ContactController::class, 'submit'])->name('de-contacts-submit');
Route::get('policy-cookie', [App\Http\Controllers\Frontend\Deutsch\ContactController::class, 'data_policy'])->name('de-data-policy');

Route::get('spa-zentrum', [App\Http\Controllers\Frontend\Deutsch\SpaController::class, 'index'])->name('de-spa');
Route::get('innenpool', [App\Http\Controllers\Frontend\Deutsch\SpaController::class, 'indoor_pool'])->name('de-indoor-pool');

Route::get('tagung-kongress', [App\Http\Controllers\Frontend\Deutsch\MeetingController::class, 'index'])->name('de-meeting-congress');

Route::get('contact-policy', [ContactController::class, 'contact_form_policy'])->name('en-contact-form-policy');
Route::get('policy-contact', [App\Http\Controllers\Frontend\Deutsch\ContactController::class, 'contact_form_policy'])->name('de-contact-form-policy');
Route::get('politika-kontakt', [App\Http\Controllers\Frontend\Russian\ContactController::class, 'contact_form_policy'])->name('ru-contact-form-policy');
Route::get('iletisim-politikasi', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'contact_form_policy'])->name('tr-contact-form-policy');

Route::get('clarification', [ContactController::class, 'clarification'])->name('en-clarification');
Route::get('klarung', [App\Http\Controllers\Frontend\Deutsch\ContactController::class, 'clarification'])->name('de-clarification');
Route::get('osvetlenie', [App\Http\Controllers\Frontend\Russian\ContactController::class, 'clarification'])->name('ru-clarification');
Route::get('aydinlatma', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'clarification'])->name('tr-clarification');

# ====================================================== ADMIN ============================================================================

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    // CATEGORY
    Route::get('category-list', [CategoryController::class, 'index']);
    Route::get('category-create', [CategoryController::class, 'create']);
    Route::post('category-create', [CategoryController::class, 'store']);
    Route::get('category-edit/{category_id}', [CategoryController::class, 'edit']);
    Route::put('category-update/{category_id}', [CategoryController::class, 'update']);
    Route::get('category-delete/{category_id}', [CategoryController::class, 'destroy']);
    // POSTS
    Route::get('post-list', [PostController::class, 'index']);
    Route::get('post-create', [PostController::class, 'create']);
    Route::get('post-create-new', [PostController::class, 'createNew']);
    Route::post('post-create', [PostController::class, 'store']);
    Route::post('post-create-new', [PostController::class, 'store']);
    Route::get('post-edit/{post_id}', [PostController::class, 'edit']);
    Route::get('post-edit-new/{post_id}', [PostController::class, 'editNew']);
    Route::put('post-update/{post_id}', [PostController::class, 'update']);
    Route::get('post-delete/{post_id}', [PostController::class, 'destroy']);
    // SLIDERS
    Route::get('slider-list', [SliderController::class, 'index']);
    Route::get('slider-create', [SliderController::class, 'create']);
    Route::post('slider-create', [SliderController::class, 'store']);
    Route::get('slider-edit/{slider_id}', [SliderController::class, 'edit']);
    Route::put('slider-update/{slider_id}', [SliderController::class, 'update']);
    Route::get('slider-delete/{slider_id}', [SliderController::class, 'destroy']);
    // Image Gallery
    Route::get('dropzone', [GalleryController::class, 'index']);
    Route::post('/dropzone-store', [GalleryController::class, 'dropzoneStore'])->name('dropzone.store');
    Route::get('dropzone/fetch', [GalleryController::class, 'fetch'])->name('dropzone.fetch');
    Route::get('dropzone/delete', [GalleryController::class, 'delete'])->name('dropzone.delete');
    // OFFERS
    Route::get('offer-list', [App\Http\Controllers\Admin\OfferController::class, 'index']);
    Route::get('offer-create', [App\Http\Controllers\Admin\OfferController::class, 'create']);
    Route::post('offer-create', [App\Http\Controllers\Admin\OfferController::class, 'store']);
    Route::get('offer-edit/{offer_id}', [App\Http\Controllers\Admin\OfferController::class, 'edit']);
    Route::put('offer-update/{offer_id}', [App\Http\Controllers\Admin\OfferController::class, 'update']);
    Route::get('offer-delete/{offer_id}', [App\Http\Controllers\Admin\OfferController::class, 'destroy']);
    // USERS
    Route::get('user-list', [UserController::class, 'index']);
    Route::get('user-edit/{user_id}', [UserController::class, 'edit']);
    Route::put('user-update/{user_id}', [UserController::class, 'update']);
});


// English blog routes
Route::get('blog-page', [BlogController::class, 'index'])->name('en-blog');
Route::prefix('blog-page')->group(function () {
    Route::get('{slug}', [BlogController::class, 'blogDetail'])->name('en-blog-detail');
});


// Russian blog routes
Route::get('blog-stranica', [RussianBlogController::class, 'index'])->name('ru-blog');
Route::prefix('blog-stranica')->group(function () {
    Route::get('{slug}', [RussianBlogController::class, 'blogDetail'])->name('ru-blog-detail');
});

// Turkish blog routes
Route::get('blog-sayfasi', [TurkishBlogController::class, 'index'])->name('tr-blog');
Route::prefix('blog-sayfasi')->group(function () {
    Route::get('{slug}', [TurkishBlogController::class, 'blogDetail'])->name('tr-blog-detail');
});

// Deutsch blog routes
Route::get('blog-seite', [DeutschBlogController::class, 'index'])->name('de-blog');
Route::prefix('blog-seite')->group(function () {
    Route::get('{slug}', [DeutschBlogController::class, 'blogDetail'])->name('de-blog-detail');
});

// Aydınlatma metinleri 

Route::get('kvkk-sohbet-aydinlatma-metni', function () {
    return view('frontend.common.chat-kvkk', ['lang' => 'tr']);
})->name('tr-data-chat');

Route::get('data-protection-policy-chat-disclosure-text', function () {
    return view('frontend.common.chat-kvkk', ['lang' => 'en']);
})->name('en-data-chat');


Route::get('datenschutz-richtlinie-chat-aufklaerungstext', function () {
    return view('frontend.common.chat-kvkk', ['lang' => 'de']);
})->name('de-data-chat');

Route::get('politika-zashity-dannyh-chat-tekst-razjasneniya', function () {
    return view('frontend.common.chat-kvkk', ['lang' => 'ru']);
})->name('ru-data-chat');

Route::get('isten-ayrilan-calisan-aydinlatma-metni', function () {
    return view('frontend.common.isten-ayrilma', ['lang' => 'tr']);
})->name('tr-isten-ayrilma');

// guvelik-kamera-aydinlatma
Route::get('guvenlik-kamera-aydinlatma', function () {
    return view('frontend.common.guvenlik-kamera', ['lang' => 'tr']);
})->name('tr-guvenlik-kamera');

Route::get('politikalarimiz', function () {
    return view('frontend.common.politikalarimiz', ['lang' => 'tr']);
})->name('tr-politikalarimiz');
