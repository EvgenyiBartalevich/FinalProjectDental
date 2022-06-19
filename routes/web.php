<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout');
})->name('/');

Route::get('appoinment', function () {
    return view('pages.appoinment');
})->name('appoinment');

Route::get('reviews', function () {
    return view('pages.review');
})->name('reviews');

Route::get('contacts', function () {
    return view('pages.contacts');
})->name('contacts');

Route::middleware(['auth'])->group(function() {
Route::get('ticket', function () {
    return view('pages.ticket');
})->name('ticket');

Route::get('allticket', function () {
    return view('pages.allticket');
})->name('allticket');

Route::get('allshow', function () {
    return view('pages.allshow');
})->name('allshow');
});

Route::get('newticket', function () {
    return view('pages.newticket');
})->name('newticket');

Route::get('newticketdoc', function () {
    return view('pages.newticketdoc');
})->name('newticketdoc');

Route::get('stepdatatime', function () {
    return view('pages.stepdatatime');
})->name('step_data_time');

Route::get('listuser', function () {
    return view('pages.listuser');
})->name('list_user');

Route::middleware(['auth'])->group(function() {
});

Auth::routes();

Route::get('/newticket/showt/data', [App\Http\Controllers\OrderController::class,
 'addDepartmant'])->name('add_departmant_data');

Route::get('/review/show', [App\Http\Controllers\ReviewController::class,
 'showReview'])->name('reviews');

Route::post('/review/data', [App\Http\Controllers\ReviewController::class,
 'addReview'])->name('review_data');

Route::get('/about', [App\Http\Controllers\AboutController::class,
 'addAbout'])->name('add_about');

Route::get('/newticket/showddoctor', [App\Http\Controllers\ShowController::class,
 'showdDoctorData'])->name('newticket_showd_doctor');

Route::get('/newticket/showodoctor', [App\Http\Controllers\ShowController::class,
 'showoDoctorData'])->name('newticket_showo_doctor');

Route::get('/newticket/showxdoctor', [App\Http\Controllers\ShowController::class,
 'showxDoctorData'])->name('newticket_showx_doctor');

Route::get('/newticket/showtdoctor', [App\Http\Controllers\ShowController::class,
 'showtDoctorData'])->name('newticket_showt_doctor');

Route::get('/newticket/showt', [App\Http\Controllers\ShowController::class,
 'show_t_Data'])->name('newticket_showt');

Route::get('/newticket/showx', [App\Http\Controllers\ShowController::class,
 'show_x_Data'])->name('newticket_showx');

Route::get('/newticket/showo', [App\Http\Controllers\ShowController::class,
 'show_o_Data'])->name('newticket_showo');

Route::get('/newticket/showd', [App\Http\Controllers\ShowController::class,
 'show_d_Data'])->name('newticket_showd');

Route::middleware(['auth'])->group(function() {

Route::post('/appoinment/index', [App\Http\Controllers\TicketController::class,
 'index'])->name('appoinment_form');
});
Route::get('/appoinment/data', [App\Http\Controllers\TicketController::class,
 'appData'])->name('appoinment_data');

Route::get('/appoinment/data/{id}/', [App\Http\Controllers\TicketController::class,
 'detailMessages'])->name('appoinment_data_detail');

Route::get('/appoinment/data/{id}/update', [App\Http\Controllers\TicketController::class,
 'updateMessages'])->name('appoinment_data_update');

Route::post('/appoinment/data/{id}/addupdate', [App\Http\Controllers\TicketController::class, 'addUpdateMessages'])->name('appoinment_add_update');

Route::get('/appoinment/data/{id}/delete', [App\Http\Controllers\TicketController::class,
 'deleteMessages'])->name('appoinment_add_delete');

Route::middleware(['auth'])->group(function() {

Route::get('/free/all/{id}', [App\Http\Controllers\FreeController::class,
 'showMessages'])->name('free_data_one');

Route::get('/free/all/{id}/delete', [App\Http\Controllers\FreeController::class,
 'deleteMessages'])->name('free_delete');

Route::get('/free/all', [App\Http\Controllers\FreeController::class,
 'allData'])->name('free_data');

Route::get('/free', [App\Http\Controllers\FreeController::class, 'free'])->name('free_form');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index',])->name('home');

/*Route::middleware(['auth'])->group(function() {
    без авторизации ничего не сделать
});*/



