<?php
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

use App\Http\Controllers\Admin\DashboardController;

Route::group(['middleware' => 'auth'], function () {
Route::get('/',[DashboardController::class,'index'])->name('sks.index');
Route::resource('posts',\App\Http\Controllers\Admin\PostController::class);
Route::resource('events',\App\Http\Controllers\Admin\EventController::class);

});
