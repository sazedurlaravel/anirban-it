<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\InvestorController;
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

Route::get('/', function () {
    return view('frontend.layouts.master');
});
Route::get('/admin', function () {
    return view('backend.layouts.dashboard');
})->name('dashboard')->middleware('auth:admin');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginForm');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

//income routes
Route::prefix('admin')->group(function(){
    Route::get('/income/view',[IncomeController::class, 'view'])->name('income.view');
    Route::get('/income/add',[IncomeController::class, 'add'])->name('income.add');
    Route::post('/income/store',[IncomeController::class, 'store'])->name('income.store');
    //cost route
    Route::get('/cost/view',[CostController::class, 'view'])->name('cost.view');
    Route::get('/cost/add',[CostController::class, 'add'])->name('cost.add');
    Route::post('/cost/store',[CostController::class, 'store'])->name('cost.store');
     //investor route
     Route::get('/investor/view',[InvestorController::class, 'view'])->name('investor.view');
     Route::get('/investor/add',[InvestorController::class, 'add'])->name('investor.add');
     Route::post('/investor/store',[InvestorController::class, 'store'])->name('investor.store');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
