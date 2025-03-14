<?php

use App\Http\Controllers\UniverseController;
use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\SuperHeroController;


Route::get('/', function () {
    echo 'Hello guys! this is my first laravel aplicatioon.';
    //echo '<pre>';
    //print_r(Universe::all());



    dump(Universe::all());
    
    //SELECT * FROM universes
    //return view('welcome');
});

Route::get('/gender',[GenderController::class, 'index']);

//Route::get('/universes',[UniverseController::class, 'index']);
//Route::get('/create-universes',[UniverseController::class, 'index']);

Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperHeroController::class);