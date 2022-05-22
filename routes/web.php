<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout');
})->name('/');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('appoinment', function () {
    return view('pages.appoinment');
})->name('appoinment');

Route::get('reviews', function () {
    return view('pages.review');
})->name('reviews');

Route::get('contacts', function () {
    return view('pages.contacts');
})->name('contacts');

Route::get('home', function () {
    return view('pages.home');
})->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*Route::middleware(['auth'])->group(function() {
без авторизации ничего не сделать
});*/

Route::get('/free', [App\Http\Controllers\FreeController::class, 'free'])->name('free_form');