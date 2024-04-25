<?php

use Illuminate\Support\Facades\Route;
use App\http\controller\productcontroller;

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
    return view('welcome');
});

route::get('/products/create', function(){
    return view('products.create');
});
Route::post('/products',[ProductController::class,'store'])->name('products.store');