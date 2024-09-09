<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserIsLogin;
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
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/login', function () {
     return view('User.login'); })->name('login');
// Route::redirect('/','/user');
Route::resource('user', UserController::class);
Route::get('logout',[UserController::class,'logout'])->name('logout')->middleware([EnsureUserIsLogin::class]);
// Notice Route
Route::resource('notice',NoticeController::class)->middleware([EnsureUserIsLogin::class]);
// Events Routes
Route::resource('Event',EventsController::class)->middleware([EnsureUserIsLogin::class]);

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/depart',[HomeController::class,'department'])->name('depart');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/doctor',[HomeController::class,'doctor'])->name('doctor');
Route::get('/newsEvent',[HomeController::class,'newsEvent'])->name('event');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');











