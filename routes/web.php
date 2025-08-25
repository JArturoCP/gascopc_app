<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sheet;

Route::get('index', function () {
    return view('index');
});

Route::get('mi_tienda', function () {
    return view('tienda');
});

Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('servicios', function () {
    return view('servicios');
});

Route::middleware('auth.simple')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    // Si está logueado, ve al dashboard; si no, al login
    return session()->has('usuario')
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

Route::get('/login',  [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware('auth.simple')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Aquí adentro pon cualquier otra ruta del dashboard
});

Route::get('/store/{store}', [Sheet::class, 'getByStore']);
