<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\EnpageController;
use App\Http\Controllers\Admin\DepageController;
use App\Http\Controllers\Admin\UapageController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\MainController;
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
Route::get('en/', [MainController::class, 'en'])->name('en');
Route::get('de/', [MainController::class, 'de'])->name('de');
Route::get('ua/{slug}.html', [App\Http\Controllers\UapageController::class, 'more'])->name('uapage');
Route::get('en/{slug}.html', [App\Http\Controllers\EnpageController::class, 'more'])->name('enpage');
Route::get('de/{slug}.html', [App\Http\Controllers\DepageController::class, 'more'])->name('depage');
Route::get('statti', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles');
Route::get('statti/{slug}/', [App\Http\Controllers\ArticleController::class, 'more'])->name('article.more');

Auth::routes();

Route::post('/upload', [UploadController::class, 'upload'])->name('upload.image');

Route::group(['prefix'=>'inside/', 'middleware'=>['auth']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('mainAdmin');
    Route::resource('uapage', UapageController::class);
    Route::resource('enpage', EnpageController::class);
    Route::resource('depage', DepageController::class);
    Route::resource('article', ArticleController::class);
});
