<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeatherForcastLogController;
use App\Models\WeatherForcastLog;
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
    $weather_records = WeatherForcastLog::orderBy('id', 'desc')->take(3)->with(['city','weatherCondition'])->get();
    return view('welcome', ['weather_records' => $weather_records]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/forecast/update/{id}', [WeatherForcastLogController::class, 'UpdateForecast'])->name('UpdateForecast');
Route::post('/forecast/update/{id}', [WeatherForcastLogController::class, 'UpdateForecast'])->name('update');

Route::get('/auth/edit/{id}', [UserController::class, 'EditUser'])->name('EditUser');
Route::post('/auth/edit/{id}', [UserController::class, 'EditUser'])->name('edit');


Route::get('/history', [WeatherForcastLogController::class, 'index'])->name('history');

Route::get('/users', [UserController::class, 'index'])->name('users');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/history/search', [WeatherForcastLogController::class,'search'])->name('search');
