<?php

namespace App\Http\Controllers\Frontend\Russian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    public function index() {

        return view('frontend.ru.entertainment.entertainment');
    }
    public function activity() {

        return view('frontend.ru.entertainment.activity');
    }
    public function concert() {

        return view('frontend.ru.entertainment.concert');
    }
    public function concertsbuilding() {

        return view('frontend.ru.entertainment.concertsbuilding');
    }
    public function beach()
    {

        return view('frontend.ru.entertainment.beach');
    }
}
