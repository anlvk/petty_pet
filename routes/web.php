<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;

use App\Models\Appointment;

Route::get('/main', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('main');
});

Route::get('locale/{locale}', function ($locale) {
    if(in_array($locale, array_values(config('app.available_locales')))) {
        Session::put('locale', $locale);
    }

    return redirect()->back();
});

Route::get('city/{city}', function ($city) {
    if(in_array($city, array_keys(config('app.available_cities')))) {
        Session::put('city', $city);
    }

    return redirect()->back();
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::post('/bathroomAction', [CalculatorController::class, 'bathroomAction']);
Route::post('/roomAction', [CalculatorController::class, 'roomAction']);

Route::get('/bathroom', function () {
    return view('calculations.bathroom');
});

Route::get('/room', function () {
    return view('calculations.room');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/users/index', [UserController::class, 'index']);

Route::get('/users/posts', [UserController::class, 'posts']);

Route::get('/appointment', [AppointmentController::class, 'show']);

Route::get('/appointment/create', [AppointmentController::class, 'create']);

Route::get('/users/{user}', [UserController::class, 'show']);

Route::post('/users/setDoctor', [UserController::class, 'setDoctor']);
