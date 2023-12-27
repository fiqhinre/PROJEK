<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kategorihewanController;
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

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/create', function () {
    return view('kategorihewan.create');
});

Route::get('/index', function () {
    return view('kategorihewan.index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/kategorihewan',kategorihewanController::class);
Route::get('/kategorihewan', [kategorihewanController::class, 'index'])->name('kategorihewan.index');
Route::get('/kategorihewan/create', [kategorihewanController::class, 'create'])->name('kategorihewan.create');
Route::post('/kategorihewan', [kategorihewanController::class, 'store'])->name('kategorihewan.store');
Route::get('/kategorihewan/{id}/edit', [ProductController::class, 'edit'])->name('kategorihewan.edit');
Route::put('/kategorihewan/{id}', [ProductController::class, 'update'])->name('kategorihewan.update');
Route::delete('/kategorihewan/{id}', [ProductController::class, 'destroy'])->name('kategorihewan.destroy');