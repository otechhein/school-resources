<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Carbon;
use App\Models\Customer;
use Illuminate\Support\Facades\Crypt;

class CustomerController extends Controller
{
    //
    public function list(){
        // $customer = DB::table('customers')->get();
        $customer = Customer::all();
        $title = "Customer List View";
        return view('Customer.list',compact('customer','title'));

    }
    public function registration(){
        return view('Customer.create');
    }
    public function RegistrationProcess(Request $request){


        // dd($request);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->age = $request->age;
        $customer->phonenumber = $request->phone;
        $customer->gender = $request->gender;
        $customer->password = bcrypt($request->password);
        $customer->droptest = Carbon::now();
        $customer->save();



        // return view('Customer.list');
        // return redirect()->route('CustomerList');
        return redirect()->action([CustomerController::class,"list"]);

    }

    // public function create(){
    //     DB::table('customers')->insert([
    //         'name' =>'Khin Maung Win',
    //         'email' => 'khinmaung@gmail.com',
    //         'address'=> '123 Main Street',
    //         'phonenumber' => '0299393933',
    //         'age' => 35,
    //         'gender' => 'male',
    //         'password' => bcrypt(123456),
    //         'droptest' => Carbon::now()

    //     ]);


    // }
    public function edit($id){

        // $data = DB::table('customers')->find($id);
        // $name = "Kyaw Kyaw";
        $data = Customer::find($id);// auto detect id in db

        return view('Customer.create',compact('data'));

    }
    public function update(Request $request){
    //   dd($request->oldpassword);
    // dd($request['id']);
    $customer = Customer::find($request['id']);
    // dd($customer);
    $customer->name = $request->name;
    $customer->email = $request->email;
    $customer->address = $request->address;
    $customer->age = $request->age;
    $customer->gender = $request->gender;
    if($request->password != ''){
        $customer->password = bcrypt($request->password);
    }
    else{
        $customer->password = $request->oldpassword;
    }
    $customer->phonenumber = $request->phone;
    $customer->droptest = Carbon::now();
    $customer->save();

    return redirect()->action([CustomerController::class,"list"]);

    }
    public function delete($id){
// dd($id);
        Customer::destroy($id);
        return redirect()->action([CustomerController::class,"list"]);

    }

}
