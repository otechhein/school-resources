<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testing',[Controller::class,'testing'])->name('Test');
Route::get('/testing2/{name}', function ($name) {
    return view('testing2', ['name'=>$name]);

}); // is same linke url?id= in php

//Staff Process start
Route::get('/staffreg',[RegisterController::class, 'regform'])->name('StaffRegister');
Route::post('/staffreg/process',[RegisterController::class, 'regfromprocess'])->name('StaffRegisterProcess');
//Staff Process End
