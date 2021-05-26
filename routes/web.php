<?php

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
    return view('index');
})->name('home');

Route::get( 'contact', function () {
    return view('contact');
})->name('contact-us');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get( 'company', function () {
    return view('company');
})->name('company');

Route::get('founitures', function () {
    return view('founitures');
})->name('founitures');
