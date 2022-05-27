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

Route::get('ticket', function () {
    return view('pages.ticket');
})->name('ticket');



Auth::routes();

Route::middleware(['auth'])->group(function() {

Route::post('/appoinment/index', [App\Http\Controllers\TicketController::class, 'index'])->name('appoinment_form');
Route::get('/appoinment/data', [App\Http\Controllers\TicketController::class, 'appData'])->name('appoinment_data');
Route::get('/appoinment/data/{id}/', [App\Http\Controllers\TicketController::class, 'detailMessages'])->name('appoinment_data_detail');
Route::get('/appoinment/data/{id}/update', [App\Http\Controllers\TicketController::class, 'updateMessages'])->name('appoinment_data_update');
Route::post('/appoinment/data/{id}/addupdate', [App\Http\Controllers\TicketController::class, 'addUpdateMessages'])->name('appoinment_add_update');
});
Route::get('/appoinment/data/{id}/delete', [App\Http\Controllers\TicketController::class, 'deleteMessages'])->name('appoinment_add_delete');

Route::get('/free/all/{id}', [App\Http\Controllers\FreeController::class, 'showMessages'])->name('free_data_one');
Route::get('/free/all/{id}/delete', [App\Http\Controllers\FreeController::class, 'deleteMessages'])->name('free_delete');
Route::get('/free/all', [App\Http\Controllers\FreeController::class, 'allData'])->name('free_data');
Route::get('/free', [App\Http\Controllers\FreeController::class, 'free'])->name('free_form');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index',])->name('home');

/*Route::middleware(['auth'])->group(function() {
    без авторизации ничего не сделать
});*/

