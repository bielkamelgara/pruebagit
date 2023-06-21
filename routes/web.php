<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\MediafileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SubscriptionController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pays',PayController::class);

Route::resource('calendars',CalendarController::class);

Route::resource('exercises',ExerciseController::class);

Route::resource('mediafiles',MediafileController::class);

Route::resource('tests',TestController::class);

Route::resource('activities',ActivityController::class);

Route::resource('subscriptions',SubscriptionController::class);
