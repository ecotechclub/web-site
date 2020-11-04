<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', UserController::class);
	Route::get('user', [UserController::class,'index'])->name('user.index');
	Route::get('profile', [ProfileController::class,'edit'])->name('profile.edit');
	Route::post('profile',[ProfileController::class,'update'])->name('profile.update');
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::post('profile/password',[ProfileController::class,'password'])->name('profile.password');
});
