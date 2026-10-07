<?php

use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name("user.create");
Route::post('/user', [UserController::class, 'store'])->name("user.store");

Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name("matakuliah.create");
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name("matakuliah.store");

Route::get('/mata-kuliah/{id}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/mata-kuliah/{id}/edit', [MataKuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/mata-kuliah/{id}/edit', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');