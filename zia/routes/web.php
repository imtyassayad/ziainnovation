<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


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
Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/services',[FrontController::class,'service'])->name('services');
Route::get('/service/{id}',[FrontController::class,'serviceShow'])->name('service.view');
Route::get('/porducts',[FrontController::class,'product'])->name('products');
Route::get('/product/{id}',[FrontController::class,'productShow'])->name('product.view');
Route::get('/projects',[FrontController::class,'project'])->name('projects');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');

