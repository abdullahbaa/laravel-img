<?php

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/products',[ProductController::class,'index'])->name('products.index');

// Route::get('/products/create',[ProductController::class,'create']) ->name('products.create');

// Route::post('/products',[ProductController::class,'store'])->name('products.store');

// Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');

// Route::put('/products/{product}',[ProductController::class,'update'])->nam('products.update');
// Route::delete('/products/{product}',[ProductController::class,'destroy'])->nam('products.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::Controller(ProductController::class,)->group(function(){

    Route::get('/products','index')->name('products.index');

    Route::get('/products/create','create') ->name('products.create');
    
    Route::post('/products','store')->name('products.store');
    
    Route::get('/products/{product}/edit','edit')->name('products.edit');
    
    Route::put('/products/{product}','update')->nam('products.update');
    Route::delete('/products/{product}','destroy')->name('products.destroy');

});


// Route::get('/products/list',[ProductController::class,'list']) ->name('products.list'); 