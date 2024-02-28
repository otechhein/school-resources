<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contactForm(ContactFormRequest $request) {
        $data = $request->input('name');
        
        dd($data);
    }
}
