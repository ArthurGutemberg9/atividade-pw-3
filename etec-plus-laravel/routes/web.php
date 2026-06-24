<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/**
 * Rota da página inicial da ETEC Zona Leste
 */
Route::get('/', [HomeController::class, 'index'])->name('home');

/**
 * Rotas para visualizar cursos técnicos
 */
Route::get('/cursos', [CourseController::class, 'index'])->name('courses.index');
Route::get('/cursos/{course}', [CourseController::class, 'show'])->name('courses.show');

/**
 * Rotas para visualizar eventos da escola
 */
Route::get('/eventos', [EventController::class, 'index'])->name('events.index');
Route::get('/eventos/{event}', [EventController::class, 'show'])->name('events.show');

/**
 * Rotas para o formulário de contato
 */
Route::get('/contato', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');

/**
 * Rotas autenticadas do dashboard
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Rotas autenticadas para gerenciar notas acadêmicas
 */
Route::middleware('auth')->group(function () {
    // Notas
    Route::get('/notas', [NoteController::class, 'index'])->name('notes.index');
    Route::get('/notas/criar', [NoteController::class, 'create'])->name('notes.create');
    Route::post('/notas', [NoteController::class, 'store'])->name('notes.store');
    Route::get('/notas/{note}/editar', [NoteController::class, 'edit'])->name('notes.edit');
    Route::put('/notas/{note}', [NoteController::class, 'update'])->name('notes.update');
    Route::delete('/notas/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Rota fallback para página 404 personalizada
 */
Route::fallback(function () {
    return view('errors.404');
});

require __DIR__.'/auth.php';
