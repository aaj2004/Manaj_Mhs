<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/Mahasiswa', [MahasiswaController::class, 'tampil'])->name('Mahasiswa.tampil');
Route::get('/Mahasiswa/tambah', [MahasiswaController::class, 'tambah'])->name('Mahasiswa.tambah');
Route::post('/Mahasiswa/submit', [MahasiswaController::class, 'submit'])->name('Mahasiswa.submit');
Route::get('/Mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('Mahasiswa.edit');
Route::post('/Mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('Mahasiswa.update');
Route::post('/Mahasiswa/delete/{id}', [MahasiswaController::class, 'delete'])->name('Mahasiswa.delete');