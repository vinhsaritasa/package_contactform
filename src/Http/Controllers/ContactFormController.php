<?php

namespace vinhvo\contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use vinhvo\contactform\Models\Contact;

class ContactFormController extends Controller {

    public function index()
    {
        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        Contact::create($request->all());

        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }
}
