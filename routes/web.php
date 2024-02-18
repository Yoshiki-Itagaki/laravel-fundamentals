<?php

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

Route::get('home', function () {
    $blogs = [
        [
            'title' => 'Title one',
            'body'=> 'this is a body text one',
            'status' => 1
        ],
        [
            'title' => 'Title two',
            'body'=> 'this is a body text two',
            'status' => 0
        ],
        [
            'title' => 'Title three',
            'body'=> 'this is a body text three',
            'status' => 0
        ],
        [
            'title' => 'Title four',
            'body'=> 'this is a body text four',
            'status' => 1
        ]
    ];
    return view('home', compact('blogs'));
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::fallback(function () {
    return "Route Not Exist";
});
