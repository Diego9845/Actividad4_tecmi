<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return response()->json($genders);
    }

    public function show($name)
    {
        $gender = Gender::where('name', $name)->with('superheroes')->get();
        return response()->json($gender);
    }
}
