<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return response()->json($superheroes);
    }

    public function show($name)
    {
        $superhero = Superhero::where('name', $name)->with('universe', 'gender')->get();
        return response()->json($superhero);
    }
}
