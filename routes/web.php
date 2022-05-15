<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('appoinment', function () {
    return view('pages.appoinment');
});

Route::get('review', function () {
    return view('pages.review');
});

Route::get('contacts', function () {
    return view('pages.contacts');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');