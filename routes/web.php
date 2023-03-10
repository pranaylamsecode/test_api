<?php

use App\Http\Controllers\TestController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/show', [TestController::class, 'index'])->name('product.index');
Route::post('/product/store', [TestController::class, 'store'])->name('product.store');
Route::get('/product/store/page', [TestController::class, 'show'])->name('product.show');


Route::get('/test', [TestController::class, 'test'])->name('test');