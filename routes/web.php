<?php

use App\Http\Controllers\ShivController;
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

Route::get('/form', function () {
    return view('form');
});

// Route::post('store',[ShivController::class,'store'])->name('store')->middleware('auth');
// Route::get('table',[ShivController::class,'index'])->name('table')->middleware('auth');

// Route::get('edit/{id}',[ShivController::class,'edit'])->name('edit')->middleware('auth');
// Route::post('update/{id}',[ShivController::class,'update'])->name('update')->middleware('auth');
// Route::get('delete/{id}',[ShivController::class,'delete'])->name('delete')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::post('store',[ShivController::class,'store'])->name('store');
    Route::get('table',[ShivController::class,'index'])->name('table');

    Route::get('edit/{id}',[ShivController::class,'edit'])->name('edit');
    Route::post('update/{id}',[ShivController::class,'update'])->name('update');
    Route::get('delete/{id}',[ShivController::class,'delete'])->name('delete');

});



