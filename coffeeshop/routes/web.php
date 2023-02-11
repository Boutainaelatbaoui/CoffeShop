<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoffeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/coffee', [HomeController::class, 'adminHome'])->name('dashboard');
    Route::resource('coffee', CoffeeController::class);
});

Route::group(['middleware' => ['prevent-back-history']],function(){
	Auth::routes();
	Route::get('/home', [HomeController::class, 'index']);
});

