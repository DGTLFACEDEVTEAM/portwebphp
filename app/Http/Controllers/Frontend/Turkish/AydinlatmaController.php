<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index() {

        return view('frontend.tr.contact.contacts');
    }
    
    public function ccam_policy() {

        return view('frontend.tr.contact.tr-ccam-policy');
    }

}
