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
    return view("Home",[
        "title" => "Home"
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

