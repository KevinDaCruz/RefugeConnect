<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('animaux.index'));

Route::prefix('animaux')->name('animaux.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/ajouter', [AnimalController::class, 'add'])->name('ajouter');
    Route::get('/{animal}', [AnimalController::class, 'show'])->name('show');
    Route::get('/{animal}/modifier', [AnimalController::class, 'edit'])->name('modifier');
    Route::get('/{animal}/supprimer', [AnimalController::class, 'delete'])->name('supprimer');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
