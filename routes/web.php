<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::view('quienes_somos', 'quienes_somos.index')->name('quienes_somos');
Route::view('contacto', 'contacto.index')->name('contacto');
Route::view('politica-cookies', 'politica.cookies')->name('politica-cookies');
Route::view('politica-privacidad', 'politica.privacidad')->name('politica-privacidad');