<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
// use App\Http\Controllers\ShivController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/form', function () {
//     return view('form');
// });
// Route::get('/blog.form', function () {
//     return view('blog.form');
// });
// Route::post('store',[ShivController::class,'store'])->name('store')->middleware('auth');
// Route::get('table',[ShivController::class,'index'])->name('table')->middleware('auth');

// Route::get('edit/{id}',[ShivController::class,'edit'])->name('edit')->middleware('auth');
// Route::post('update/{id}',[ShivController::class,'update'])->name('update')->middleware('auth');
// Route::get('delete/{id}',[ShivController::class,'delete'])->name('delete')->middleware('auth');

Route::middleware(['auth'])->group(function () {
//     Route::post('store',[ShivController::class,'store'])->name('store');
//     Route::get('table',[ShivController::class,'index'])->name('table');
//     Route::get('blog',[ShivController::class,'index'])->name('blog.index');
//    // Route::get('edit/{id}',[ShivController::class,'edit'])->name('edit');
//     Route::post('update/{id}',[ShivController::class,'update'])->name('update');
//     Route::get('delete/{id}',[ShivController::class,'delete'])->name('delete');
//     Route::get('create',[ShivController::class,'create'])->name('create');


    //Blog
    Route::get('create',[BlogController::class,'create'])->name('create');

    Route::post('stored',[BlogController::class,'stored'])->name('stored');
    Route::get('blog/table',[BlogController::class,'table'])->name('blog.table');
    Route::get('blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
    Route::get('blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');

    // Category routes
    Route::get('/categories/create', function () {
        return view('categories.create');
    });
    Route::post('store',[CategoryController::class,'store'])->name('store');
    Route::get('table',[CategoryController::class,'index'])->name('table');
    Route::post('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update');
    Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
    Route::get('delete/{id}',[CategoryController::class,'delete'])->name('delete');
    // Front route
    Route::get('/',[FrontController::class,'index'])->name('welcome');
    Route::get('post/{id}',[FrontController::class,'show'])->name('post.show');
});



