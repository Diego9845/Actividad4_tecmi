<?php

use App\Http\Controllers\GenderControllerid;
use App\Http\Controllers\SuperHeroControllerid;
use illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseControllerid;

Route::get('/', function() {
    return view('welcome');
}
);

Route::get('/universe', [UniverseControllerid::class, 'index']);
Route::get('/universe/{name}', [UniverseControllerid::class, 'index']);
Route::get('/gender', [GenderControllerid::class, 'index']);
Route::get('/superhero', [SuperHeroControllerid::class, 'index']);