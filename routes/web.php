<?php

use App\Http\Controllers\CalenderController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('components.dashboard');
})->name('dashboard.index')->middleware('auth');

Route::resource('club', ClubController::class)->middleware('auth');
Route::get('/categories/{category}/posts', [ClubController::class, 'getClubsByCategory'])->name('categories.posts')->middleware('auth');


//event
Route::resource('events', EventController::class)->middleware('auth');

//Notification
Route::resource('notification', \App\Http\Controllers\NotificationController::class)->middleware('auth');


Route::get('calendars', [CalenderController::class, 'calender'])->name('events.calender')->middleware('auth');

Route::resource('calender', CalenderController::class)->middleware('auth');



Route::get('/profile', function () {
    return view('components.profile');
})->name('profile.index')->middleware('auth');


Route::get('logout',[UserController::class,'logout'])->name('logout')->middleware('auth');


Route::post('login',LoginController::class)->name('login.store');

    //reset-password
    Route::get('reset-email',[ResetPasswordController::class,'emailIndex'])->name('reset-email');
    Route::post('reset-email',[ResetPasswordController::class,'sendResetLinkEmail'])->name('reset-link-email');
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('reset-password');
    Route::post('/password/reset/', [ResetPasswordController::class, 'reset'])->name('password.reset');

