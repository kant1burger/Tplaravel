<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
    return view('index', [
    //'randomProducts' => Product::
    'products'=> Product::latest()->limit(4)->get(),
    ]);
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);

//Route::get('/', [ProductController::class, 'latest']);

Route::get('/categories/{category}', [CategoryController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);