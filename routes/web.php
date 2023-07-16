<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogNewsController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/services',[ServicesController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/blog',[BlogNewsController::class, 'index']);
Route::get('/blog/{id}',[BlogNewsController::class, 'single'])->where('slug', '(.*)')->name('blog.single');
Route::get('/products',[ProductController::class, 'index']);
