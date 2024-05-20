<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Visualizzazione dell'elenco dei prodotti
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show'); // Visualizzazione dei dettagli di un singolo prodotto
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Creazione di un nuovo prodotto (form)
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Salvataggio del nuovo prodotto
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Modifica di un prodotto esistente (form)
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update'); // Aggiornamento del prodotto esistente
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Eliminazione di un prodotto
