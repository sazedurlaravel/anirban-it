<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\Admin\Auth\LoginController;

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

Route::get('/admin', function () {
    return view('backend.layouts.dashboard');
})->middleware('auth:admin');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginForm');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

//income routes
Route::prefix('income')->group(function(){
    Route::get('/view',[IncomeController::class, 'view'])->name('income.view');
    Route::get('/add',[IncomeController::class, 'add'])->name('income.add');
    Route::post('/store',[IncomeController::class, 'store'])->name('income.store');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
