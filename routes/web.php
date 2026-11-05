<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EpreuveController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/epreuve', [EpreuveController::class, 'index'])
    ->name('epreuves.index');

Route::get('/epreuve/create', [EpreuveController::class, 'create'])
    ->name('epreuves.create');

Route::post('/epreuve', [EpreuveController::class, 'store'])
    ->name('epreuves.store');

Route::resource('matieres', MatiereController::class);
