<?php

namespace App\Http\Controllers\Frontend\Russian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {

        return view('frontend.ru.contact.contacts');
    }

    public function contact_form_policy()
    {

        return view('frontend.ru.contact.contact-form-policy');
    }
    public function data_policy() {

        return view('frontend.ru.contact.data-policy');
    }

    public function clarification()
    {

        return view('frontend.ru.contact.clarification');
    }

    public function submit(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];

        Mail::to('callcenter@portnature.com.tr')->send(new ContactForm($data));

        return redirect('kontakti')->with('success', 'Ваше сообщение было отправлено. Спасибо!');
    }
}
