<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;


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



Auth::routes();


// public routes
Route::controller(FrontController::class)->group(function () {
    Route::get('/','index')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/services','service')->name('services');
    Route::get('/service/{id}','serviceShow')->name('service.view');
    Route::get('/products','products')->name('products');
    Route::get('/product/{id}','productShow')->name('product.view');
    Route::get('/projects','projects')->name('projects');
    Route::get('/contact','contact')->name('contact');
});


//protedc routes
Route::prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
});
