<?php

namespace App\Http\Controllers;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index(){
        $universes = Universe::all();
        return response()->json($universes);
    }

    public function show($name){
        $universe = Universe::where('name', $name) -> with('superheroes') -> get();
        return response()-> json($universe);
    }
}
