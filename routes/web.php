<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BasicuserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\TipeController;
use Whoops\Run;

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
})->middleware('guest')->name('welcome');


Route::middleware('auth', 'verified')->group(function () {
    Route::middleware('admin')->group(function() {
        Route::resource('user', UserController::class);
        Route::resource('basicuser', BasicuserController::class);
        Route::resource('barang', BarangController::class);
        Route::resource('tipe', TipeController::class);
        Route::resource('merk', MerkController::class);
        Route::get('/pdf',[BarangController::class, 'pdf'])->name('barang.pdf');
        Route::get('/excel',[BarangController::class, 'excel'])->name('barang.excel');
    });

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile','index')->name('profile.index');
        Route::get('/profile/edit','edit')->name('profile.edit');
        Route::post('/profile/update','update')->name('profile.update');
    });
    Route::controller(ChangePasswordController::class)->group(function () {
        Route::get('/changepassword','index')->name('changepassword.index');
        Route::post('/changepassword/update','update')->name('changepassword.update');
    });

    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'create')->name('home.create');
        Route::post('/home/store', 'store')->name('home.store');
    });
});

require __DIR__.'/auth.php';
