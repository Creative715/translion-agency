<?php

use App\Http\Controllers\EnpageController;
use App\Http\Controllers\DepageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UapageController;
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


Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('en', [MainController::class, 'en'])->name('en');
Route::get('de', [MainController::class, 'de'])->name('de');
Route::get('ua/{slug}.html', [UapageController::class, 'more'])->name('uapage');
Route::get('en/{slug}.html', [EnpageController::class, 'more'])->name('enpage');
Route::get('de/{slug}.html', [DepageController::class, 'more'])->name('depage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
