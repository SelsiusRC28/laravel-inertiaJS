<?php

use App\Http\Controllers\NoteController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


// Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');

// Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');

// Route::get('/notes/edit/{note}', [NoteController::class, 'edit'])->name('notes.edit');

// Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');

// Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');

// Route::get('notes/create', [NoteController::class, 'create'])->name('notes.create');

Route::resource('notes', NoteController::class);
