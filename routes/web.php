<?php

use lluminate\Support\Facades\Route;
use App\Http\Controllers\GenderControllerid;
use App\Http\Controllers\SuperHeroControllerid;
use App\Http\Controllers\UniverseControllerid;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas para el controlador de universos
Route::get('/universe', [UniverseControllerid::class, 'index']);
Route::get('/universe/{name}', [UniverseControllerid::class, 'show']);

// Rutas para el controlador de géneros
Route::get('/gender', [GenderControllerid::class, 'index']);
Route::get('/gender/{id}', [GenderControllerid::class, 'show']);

// Rutas para el controlador de superhéroes
Route::get('/superhero', [SuperHeroControllerid::class, 'index']);
Route::get('/superhero/{id}', [SuperHeroControllerid::class, 'show']);
