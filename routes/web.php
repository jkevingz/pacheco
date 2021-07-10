<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Models\Article;
use App\Models\Event;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/blog', function () {
    return view('blog')
        ->with(['articles' => Article::all()]);
});

Route::get('/calendario', function () {
    return view('calendario')
        ->with([
            'days' => [__('Dom'), __('Lun'), __('Mar'), __('Mie'), __('Jue'), __('Vie'), __('Sab')],
            'events' => Event::all(),
        ]);
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/admin/eventos', function () {
    return view('admin.eventos');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/event', [EventController::class, 'index'])
    ->middleware(['auth'])->name('event.index');

Route::resource('article', ArticleController::class)
    ->except('show')
    ->middleware('auth');

Route::get('lang/{lang}', function($lang) {
    if (in_array($lang, ['es', 'en'])) {
        Session::put('applocale', $lang);
    }

    return redirect()->back();
});

require __DIR__.'/auth.php';
