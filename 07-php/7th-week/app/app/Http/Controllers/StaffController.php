<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    //
    public function register(){
        return view('Staff.create');

    }
    public function regprocess(Request $request){
        $uuid = Str::uuid()->toString();
        // dd($uuid);
        $image = $uuid.'.'.$request->image->extension();
        $request->image->move(public_path('img/staff'), $image);
        // dd("welcome");
        $staff = new staff();
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->address = $request->address;
        $staff->image = $image;
        $staff->status = "Active";
        $staff->save();
        $stafflist = staff::all();
        return view('Staff.list',compact('stafflist'));
    }
}
