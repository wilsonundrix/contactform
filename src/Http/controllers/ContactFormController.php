<?php

namespace Ndunya\contactform\Http\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ndunya\contactform\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());
        return redirect(route('contact'))->with([
            'message' => 'Thank You your Email has been sent successfully'
        ]);
    }
}
