<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

//Resource Controllers
Route::resource('blog', BlogController::class);

Route::fallback(function () {
    return "Route Not Exist";
});
