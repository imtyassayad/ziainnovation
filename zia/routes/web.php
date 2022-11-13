<?php

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
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
    Route::get('projects-by-service/{id}','projectfilter')->name('projects-by-service');
    Route::get('/contact','contact')->name('contact');
    Route::post('/sendcontact','contactMail')->name('contact.mail');
});


//protedc routes
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::controller(SettingController::class)->group(function () { });
    Route::resource('services', ServiceController::class);
    Route::resource('products', ProductController::class);

    Route::resource('projects', ProjectController::class);
});

// Route::get('create',function(){

//     User::create([
//         'name' => 'Admin',
//         'email' => 'admin@ziainnovation.com',
//         'password' => Hash::make('Is@21048507#')
//     ]);
//     return back();
// });
