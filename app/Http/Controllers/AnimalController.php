<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $animals = Animal::all();
        return view('pages.index',compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $newAnimal = new Animal($data);
        $newAnimal->id = $data['id'];
        $newAnimal->nome = $data['name'];
        $newAnimal->specie = $data['specie'];
        $newAnimal->habitat = $data['habitat'];
        $newAnimal->longevità = $data['longevità'];
        $newAnimal->rischio_estinzione = $data['rischio_estinzione'];
        $newAnimal->alimentazione = $data['alimentazione'];
        $newAnimal->regione = $data['regione'];

        $newAnimal->save();

        return redirect()->route('pages.show',$newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //

        return view('pages.show',compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
        return view('pages.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
        $data = $request->validate([
            'nome'=> 'required|unique:animal|max:255|min:3',
        ]);

        $animal->id = $data['id'];
        $animal->nome = $data['name'];
        $animal->specie = $data['specie'];
        $animal->habitat = $data['habitat'];
        $animal->longevità = $data['longevità'];
        $animal->rischio_estinzione = $data['rischio_estinzione'];
        $animal->alimentazione = $data['alimentazione'];
        $animal->regione = $data['regione'];

        $animal->update();

        return redirect()->route('pages.show',$animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()-> route('pages.index');
    }
}
