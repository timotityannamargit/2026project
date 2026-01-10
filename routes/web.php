<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\CarController;
Route::get('/', function () {
    return view('welcome');
});
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