<?php

namespace App\Http\Controllers\Frontend\Deutsch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodDrinkController extends Controller
{
    public function index() {

        return view('frontend.de.food-drink.food-drink');
    }
    public function alacarte_restaurants() {

        return view('frontend.de.food-drink.alacarte-restaurants');
    }
    public function bar_cafe() {

        return view('frontend.de.food-drink.bar-cafe');
    }
    public function davidoff_cafe() {

        return view('frontend.de.food-drink.davidoff-cafe');
    }
    public function main_restaurant() {

        return view('frontend.de.food-drink.main-restaurant');
    }
    public function fareast() {

        return view('frontend.de.food-drink.fareast');
    }
    public function alldaydinning() {

        return view('frontend.de.food-drink.alldaydinning');
    }
    public function french() {

        return view('frontend.de.food-drink.french');
    }
    public function seaside() {

        return view('frontend.de.food-drink.seaside');
    }
    public function italian() {

        return view('frontend.de.food-drink.italian');
    }
    public function sushi_bar() {

        return view('frontend.de.food-drink.sushibar');
    }
    public function chivas_lounge() {

        return view('frontend.de.food-drink.chivas');
    }
    public function hennessy_lounge() {

        return view('frontend.de.food-drink.hennesy');
    }
    public function irish_pub() {

        return view('frontend.de.food-drink.irish-pub');
    }
    public function lobby_bar() {

        return view('frontend.de.food-drink.lobby-bar');
    }
    public function flamingo_bar() {

        return view('frontend.de.food-drink.flamingo-bar');
    }
    public function kitkat_cafe() {

        return view('frontend.de.food-drink.kitkat');
    }
    public function nespresso_cafe() {

        return view('frontend.de.food-drink.nespresso');
    }
    public function pastahouse() {

        return view('frontend.de.food-drink.pastahouse');
    }
}
