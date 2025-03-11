<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index(){
        $gender = Gender::all();
        return view('gender', compact('gender'));
    }
}
