<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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
//
//Route::get('/', function () {
//    return view('frontend.index');
//});

Route::get('/dashboard', static function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Administratin routing
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index');
});

//Frontend routing
Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('Главная');
    Route::get('/contacts', 'contacts')->name('Контакты');
    Route::get('/about', 'about')->name('О нас');
});

require __DIR__ . '/auth.php';
