<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\DB;
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


Route::get('/welcome', function () {
    return view('welcome', [
        'name' => 'Maung Maung'
    ]);
});

Route::get('/welcome/{name}', function ($name) {
    return view('welcome', [
        'name' => $name
    ]);
});

Route::get('/phpcode', function () {
    return view('phpcode');
});

Route::get('/loop', [HomeController::class, 'index']);

Route::get('/post', function(){
    return view('post');
});


Route::get('/main', function(){
    return view('main');
});

Route::get('/greeting', function(){
    return view('greeting');
});

Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/create', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact', [ContactFormController::class, 'contactForm']);