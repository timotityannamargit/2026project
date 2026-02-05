<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\CarController;
Route::get('/', function () {
    return view('pages.home');
})->name("home");
// Cars
Route::resource('cars', CarController::class);

// Appointments
Route::resource('appointments', AppointmentController::class);

// Services
Route::resource('services', ServiceController::class);

// Repairs
Route::resource('repairs', RepairController::class);
Route::middleware(['auth'])->group(function () {

    Route::resource('cars', CarController::class);
    Route::resource('appointments', AppointmentController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('repairs', RepairController::class);

});

Route::get('/helloworld', function (){
    return view('helloWorld');
});

Route::get('/bejelentkezes', function(){
    return view('bejelentkezes');
});

Route::post('/contact', function (Request $request) {
    Storage::append('contact_log.txt', json_encode($request->all()));
    return redirect()
        ->route('contact')
        ->with('success', true);
})->name('contact.submit');

Route::get('/szolgaltatasok', function(){
    return view('pages.szolgaltatasok');
})->name("szolgaltatasok");