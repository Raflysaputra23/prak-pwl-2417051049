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

Route::get("/user/{id}/edit", [UserController::class, 'edit'])->name('user.edit');
Route::put("/user/{id}/edit", [UserController::class, 'update'])->name('user.update');
Route::delete("/user/{id}/edit", [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name("matakuliah.create");
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name("matakuliah.store");

Route::get('/matakuliah/{id}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/matakuliah/{id}/update', [MataKuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/matakuliah/{id}/delete', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');