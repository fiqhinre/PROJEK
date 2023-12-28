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

Route::get('/index1', function () {
    return view('admin.index1');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/kategorihewan',kategorihewanController::class);
Route::get('/kategorihewan', [kategorihewanController::class, 'index'])->name('kategorihewan.index');
Route::get('/kategorihewan/create', [kategorihewanController::class, 'create'])->name('kategorihewan.create');
Route::post('/kategorihewan', [kategorihewanController::class, 'store'])->name('kategorihewan.store');
Route::get('/kategorihewan/{id}/edit', [kategorihewanController::class, 'edit'])->name('kategorihewan.edit');
Route::put('/kategorihewan/{id}', [kategorihewanController::class, 'update'])->name('kategorihewan.update');
Route::delete('/kategorihewan/{id}', [kategorihewanController::class, 'destroy'])->name('kategorihewan.destroy');




Route::get('/pendaftaran', [FormsController::class, 'pendaftaran'])->name('forms.pendaftaran');
Route::post('/store', [FormsController::class, 'store'])->name('forms.store');
Route::get('/show/{id}', [FormsController::class, 'show'])->name('forms.show');
Route::get('/edit/{id}', [FormsController::class, 'edit'])->name('forms.edit');
Route::put('/update/{id}', [FormsController::class, 'update'])->name('forms.update');
Route::delete('/destroy/{id}', [FormsController::class, 'destroy'])->name('forms.destroy');
