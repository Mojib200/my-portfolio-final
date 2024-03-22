<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\CastomerController;
use App\Http\Controllers\homescontroller;
use App\Http\Controllers\protfoliocontroller;
use App\Http\Controllers\servicecontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\HomeController;
use App\Models\User;
use illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [frontendcontroller::class, 'index'])->name('index');
Route::get('/frontendmaster.product_details,{id}', [frontendcontroller::class, 'product_details'])->name('frontendmaster.product_details');
Route::resource('about', aboutcontroller::class);
Route::resource('contact', contactcontroller::class);
Route::resource('protfolio',protfoliocontroller::class);
Route::resource('homes', homescontroller::class);
 Route::resource('service', servicecontroller::class);
 Route::resource('castomer', CastomerController::class);
