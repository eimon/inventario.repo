<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;
use App\Models\Computadora;

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

Route::get('/edit/{id}', [ComputadoraController::class, 'edit'])->middleware(['auth'])->name('edit');

Route::get('/create', function () {
    return view('computadoras.create');
})->middleware(['auth'])->name('create');

Route::post('/store', [ComputadoraController::class, 'store'])->middleware(['auth'])->name('store');
Route::post('/update', [ComputadoraController::class, 'update'])->middleware(['auth'])->name('update');

require __DIR__.'/auth.php';
