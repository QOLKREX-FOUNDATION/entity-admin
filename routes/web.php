<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\NewsController;
use App\Http\Controllers\CentersController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('home.index');

Route::resource('/centros', CentersController::class)->middleware(['auth'])->names('centers');


Route::get('/perfil', [ProfileController::class, 'index'])->middleware(['auth'])->name('profile.index');
Route::post('/perfil', [ProfileController::class, 'store'])->middleware(['auth'])->name('profile.store');
Route::resource('/usuarios', UserController::class)->middleware(['auth']);
// Route::resource('/noticias', NewsController::class)->middleware(['auth'])->names('news');

require __DIR__ . '/auth.php';
