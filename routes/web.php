<?php

use App\Http\Controllers\KurirController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Models\Kurir;

Route::resource('/kurir', KurirController::class);

Route::get('/', [KurirController::class,'index']);



// Route to show the edit form
//Route::get('/kurir/{id}/edit', [KurirController::class, 'edit'])->name('kurir.edit');

// Route to update the courier
//Route::put('/kurir/{id}', [KurirController::class, 'update'])->name('kurir.update');
