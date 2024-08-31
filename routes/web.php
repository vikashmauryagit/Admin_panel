<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\NoticeController;
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
    return view('User.login');
})->name('login');
Route::resource('user', UserController::class);


// Notice Route
Route::resource('notice',NoticeController::class);

// Events Routes

Route::resource('Event',EventsController::class);
