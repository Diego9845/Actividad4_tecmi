<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;

Route::get('/', function () {
    echo 'Hello guys! this is my first laravel aplicatioon.';
    //echo '<pre>';
    //print_r(Universe::all());



    dump(Universe::all());
    
    //SELECT * FROM universes
    //return view('welcome');
});

Route::get('/gender',[GenderController::class, 'index']);