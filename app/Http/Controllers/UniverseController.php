<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index', compact('universes'));
    }

    public function create()
    {
        return view('universes.create');
    }

    public function store(Request $request)
    {
        Universe::create([
            'name' => $request->name
        ]);

        return to_route('universes.index');
    }

    public function show(string $id)
    {
        $universe = Universe::find($id);
        return view('universes.show', compact('universe'));
    }

    public function edit(string $id)
    {
        $universe = Universe::find($id);
        return view('universes.edit', compact('universe'));
    }

    public function update(Request $request, string $id)
    {
        $universe = Universe::find($id);
        $universe->update([
            'name' => $request->name
        ]);

        return to_route('universes.index');
    }

    public function destroy(string $id)
    {
        $universe = Universe::find($id);
        $universe->delete();

        return to_route('universes.index');
    }
}

