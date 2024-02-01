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


Route::get('/welcome-test', function () {//this is the uri
    return view('welcome');//this is the folder and page
});

Route::get('/', function () {
    return view('home');
});

Route::get('/purchase-test', function () {
    return view('purchase');
});
