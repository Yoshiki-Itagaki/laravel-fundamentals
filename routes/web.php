<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;

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

//Single Action Controllers
Route::get('home', HomeController::class);

//Basic Controllers
Route::get('about', [AboutController::class,'index']);

Route::get('contact', [ContactController::class,'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');


//Resource Controllers
Route::resource('blog', BlogController::class);

// CSRF TOKEN
Route::post('/login', [LoginController::class,'handleLogin'])->name('login.submit');


Route::fallback(function () {
    return "Route Not Exist";
});
