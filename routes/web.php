<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\swapiController;
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

Route::any('/search', [swapiController::class, 'search'])->name('search');
Route::get('/{resouce?}/{param?}', [swapiController::class, 'show'])->name('show');

