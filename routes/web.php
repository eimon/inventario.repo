<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', [ComputadoraController::class, 'show'])->middleware(['auth'])->name('dashboard');

Route::get('/create', function () {
    return view('computadoras.create');
})->middleware(['auth'])->name('create');

Route::get('/store', [ComputadoraController::class, 'store']);

require __DIR__.'/auth.php';