<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index(){
        $gender = Gender::all();
        return view('gender',compact('gender'));
        return view('gender.index',compact('gender'));
    }

    public function create(){
        return view ('gender.create');
    }

    public function store(Request $request){
        Gender::create([
          'name' => $request->gender  
        ]);

        return to_route('gender.index');
    }

    public function show (string $id){
        $gender = Gender::find($id);
        return view('gender.show', compact('gender'));
    }

    public function edit (string $id){
        $gender = Gender::find($id);

        return view ('gender.edit',compact('gender'));
    }

    public function update (Request $request,string $id){
        $gender = Gender::find($id);
        $gender -> update([
            'name' => $request->gender,
        ]);
        return to_route('gender.show', $gender->id);
    }

    public function destroy (Gender $gender){
        $gender->delete();
        return redirect()->route('gender.index')->with('success', 'Genero eliminado correctamente.');
    }
}