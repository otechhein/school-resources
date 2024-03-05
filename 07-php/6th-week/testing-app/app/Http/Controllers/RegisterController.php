<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function regform(){
        return view('staff.create');
    }
    public function regfromprocess(Request $request){
        
        $validatedData = $request->validate(
            [
                'name' =>'required | string | max:255 | min:10',
                'email' => 'required | email |max:255',
                'password' => 'required |min:6 | max: 15'
            ]
        );
        // // dd($request->name);
        // return redirect()->back()->with('success', 'Form Submitted successfully!');

    }
}
