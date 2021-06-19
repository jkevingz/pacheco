<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/admin/eventos', function () {
    return view('admin.eventos');
});

/* Route::get('/admin/eventos', [EventController::class, 'index'])
    ->middleware(['auth'])->name('eventos');
 */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/events', [EventController::class, 'index'])
    ->middleware(['auth'])->name('events');

require __DIR__.'/auth.php';
