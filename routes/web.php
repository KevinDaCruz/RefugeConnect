<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('animals.index');
Route::get('/animals/add', [AnimalController::class, 'add'])->name('animals.add');
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
Route::get('/animals/{animal}/delete', [AnimalController::class, 'delete'])->name('animals.delete');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
