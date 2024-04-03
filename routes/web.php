<?php

use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WorkRate;
use App\Http\Controllers\SanchezCourseController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

Route::get('/welcome-test', function () {//this is the uri
    return view('welcome');//this is the folder and page
});

Route::get('/', function () {
    return view('home');
});

Route::get('/product_create', function () {
    return view('product_create');
});

Route::resource('sanchez_course', SanchezCourseController::class);

Route::get('/purchase-test', [PurchaseController::class, 'index']);

Route::post('/calculate', [PurchaseController::class, 'calculate'])->name("purchase.calculate");

Route::get('/workrate', [WorkRate::class, 'viewworkrate']);

Route::post('/workrate-calculate', [WorkRate::class, 'calcworkrate'])->name("workrate.calculate");

Route::resource('/products', ProductController::class);

Route::resource('/categories', CategoryController::class);

Route::resource('/suppliers', SupplierController::class);




