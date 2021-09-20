<?php

use App\Http\Controllers\TreeController;
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

Route::redirect('/', '/tree');

// tree
Route::get('/tree', [TreeController::class, 'index'])->name('index');
Route::post('/tree', [TreeController::class, 'store'])->name('store');
Route::get('/tree/create', [TreeController::class, 'create'])->name('create');
Route::put('/tree/{tree}', [TreeController::class, 'update'])->name('update');
Route::delete('/tree/{tree}', [TreeController::class, 'destroy'])->name('destroy');
Route::get('tree/{tree}/edit', [TreeController::class, 'edit'])->name('edit');
