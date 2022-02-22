<?php

use App\http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("Index",[
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view("About", [
        "title" => "About",
        "nama" => "Habib Rafi'i",
        "email" => "habibraii0312@gmail.com",
        "gambar" => "habib.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view("Gallery", [
        "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);
{
    return view("Contacts", [
        "title" => "Contacts"
    ]);
};


Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
