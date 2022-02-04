<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibroController::class, 'index'])->name('libros');
//Links CRUD AUTORES
Route::get('/autores', [AutorController::class, 'index'])->name('autores');
Route::get('/createauth', [AutorController::class, 'store'])->name('createauth');
Route::get('/deleteauth', [AutorController::class, 'destroy'])->name('deleteauth');
//Links CRUD GENEROS
Route::get('/generos', [GeneroController::class, 'index'])->name('generos');
Route::get('/creategener', [GeneroController::class, 'store'])->name('creategener');
Route::get('/deletegener', [GeneroController::class, 'destroy'])->name('deletegener');



Route::get('/libros/crud', [LibroController::class, 'libroAdd'])->name('libroscrud');
Route::post('/libros/crud', [LibroController::class, 'store'])->name('libroscrud');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

