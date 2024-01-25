<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProvaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/prova', function () {
//     return Inertia::render('Provas');
// })->middleware(['auth', 'verified'])->name('prova');

// Route::get('/materia', function () {
//     return Inertia::render('Materias');
// })->middleware(['auth', 'verified'])->name('materia');

// Route::post('/materia', function () {
//     return Inertia::render('Materias');
// })->middleware(['auth', 'verified'])->name('materia');

// Route::middleware(['auth', 'verified'])->group(function() {
//     Route::get('/materia', [MateriaController::class, 'index'])->name('materia.index');
//     Route::post('/materia', [MateriaController::class, 'store'])->name('materia.store');
// });

Route::controller(MateriaController::class)->group(function() {
    Route::get('/materia', 'index')->name('materia');
    Route::post('/materia', 'store')->name('materia');
    Route::post('/materia', 'destroy')->name('materia');
})->middleware(['auth', 'verified']);

Route::controller(ProvaController::class)->group(function() {
    Route::get('/prova', 'index')->name('prova');
    Route::post('/prova', 'store')->name('prova');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
