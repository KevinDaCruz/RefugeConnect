<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('animals.index');

Route::prefix('animaux')->name('animals.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('list');
    Route::get('/ajouter', [AnimalController::class, 'add'])->name('create');
    Route::get('/{animal}', [AnimalController::class, 'show'])->name('show');
    Route::get('/{animal}/modifier', [AnimalController::class, 'edit'])->name('edit');
    Route::get('/{animal}/supprimer', [AnimalController::class, 'delete'])->name('delete');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
