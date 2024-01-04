<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {

        return view('frontend.tr.contact.contacts');
    }
    
    public function submit(Request $request) {
        
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];
        
        Mail::to('callcenter@portnature.com.tr')->send(new ContactForm($data));
        
        return redirect('iletisim')->with('success', 'Mesajınız tarafımıza başarıyla iletilmiştir. Teşekkürler!');
    }

    public function data_policy() {

        return view('frontend.tr.contact.data-policy');
    }
    public function cca_policy() {

        return view('frontend.tr.contact.tr-cca-policy');
    }
    public function ca_policy() {

        return view('frontend.tr.contact.tr-ca-policy');
    }
    public function caa_policy() {

        return view('frontend.tr.contact.tr-caa-policy');
    }
    public function ma_policy() {

        return view('frontend.tr.contact.tr-ma-policy');
    }
    public function mza_policy() {

        return view('frontend.tr.contact.tr-mza-policy');
    }
    public function uha_policy() {

        return view('frontend.tr.contact.tr-uha-policy');
    }
    public function gka_policy() {

        return view('frontend.tr.contact.tr-gka-policy');
    }
    public function csma_policy() {

        return view('frontend.tr.contact.tr-csma-policy');
    }

    public function contact_form_policy()
    {

        return view('frontend.tr.contact.contact-form-policy');
    }

}
