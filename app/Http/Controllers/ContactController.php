<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Contact
    public function index()
    {
        $title = trans('Contact');
        return view('theme-pages.contact', compact('title'));
    }

    // public function store(ContactFormRequest $message)
    public function store(Request $request)
    {
        $maintenance = Setting::find(8)->value;

        $msg = array(
            'contact'=> $request->name ,
            'subject'=> $request->subject ,
            'email'=> $request->email,
            'message' => $request->message
         );

        // Mail::to(['no-reply@lacompaniadigital.com'])->send(new ContactoMail($msg));
        Mail::to(['adrgabtu@gmail.com'])->send(new ContactoMail($msg));

        return redirect()->back()->with('success',trans('En breve se comunicarán con usted. Muchas Gracias.'));
    }
}
