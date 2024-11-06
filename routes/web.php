<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IMCController; // Adicionar o controller do IMC
use App\Http\Controllers\PsychologistController; // Adicionar o controller do psicólogo
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
});

Route::get('/cont', function () {
    return view('cont');
})->name('cont');

Route::get('/imc', function () {
    return view('imc');
})->name('imc');

Route::get('/psico', function () {
    return view('psico');
})->name('psico');

// Rota POST para calcular o IMC
Route::post('/imc', [IMCController::class, 'store'])->name('imc.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard', 'cont', 'imc', 'psico');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
