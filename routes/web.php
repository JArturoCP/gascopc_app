<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
