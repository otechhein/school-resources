<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contactForm(Request $request){
        dd($request->input('email'));
    }
}
