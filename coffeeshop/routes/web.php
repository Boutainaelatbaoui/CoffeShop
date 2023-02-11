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

Route::get('/', [CoffeeController::class, 'showMenu'])->name('home');
Route::get('/menu', [CoffeeController::class, 'allMenu'])->name('menu');

Auth::routes();

Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/coffee', [HomeController::class, 'adminHome'])->name('dashboard');
    Route::resource('coffee', CoffeeController::class);
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/changePassword',[HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/changePassword',[HomeController::class, 'changePasswordPost'])->name('changePasswordPost');
    Route::get('/editprofile',[HomeController::class, 'showEditProfile'])->name('editProfileGet');
    Route::post('/editprofile',[HomeController::class, 'profileUpdate'])->name('profileUpdate');
});

Route::group(['middleware' => ['prevent-back-history']],function(){
	Auth::routes();
	Route::get('/home', [HomeController::class, 'index']);
});

