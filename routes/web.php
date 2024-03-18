<?php

use App\Http\Controllers\RedditController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return redirect()->route('login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');

    })->name('dashboard');

    /*-------------------------------- RUTAS PARA CONSUMO DE API REDDIT ------------------------------*/
        Route::get('/reddit', [RedditController::class, 'index'])->name('reddit');
        Route::get('/api/reddit/{category}', [RedditController::class, 'getPosts']);
    /*------------------------------------------------------------------------*/
});
