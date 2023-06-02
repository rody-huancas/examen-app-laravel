<?php

use App\Http\Controllers\PropiedadController;
use Illuminate\Support\Facades\Route;

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


Route::get('/propiedad', [PropiedadController::class, 'index'])->name('inicio');
Route::get('/propiedad/create', [PropiedadController::class, 'create'])->name('crear');
Route::post('/propiedad/store', [PropiedadController::class, 'store'])->name('propiedad.store');
Route::get('/propiedad/edit/{id}', [PropiedadController::class, 'edit'])->name('propiedad.edit');
Route::put('/propiedad/update/{propiedad}', [PropiedadController::class, 'update'])->name('propiedad.update');
Route::delete('/propiedad/destroy/{id}', [PropiedadController::class, 'destroy'])->name('propiedad.destroy');
