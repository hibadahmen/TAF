<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__.'/auth.php';
