<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $validationRules = [
        'id'=> 'required|unique:animals|integer|max:255|min:1',
        'nome'=> 'required|unique:animals|max:255|min:3',
        'specie'=> 'required|unique:animals|max:255|min:3',
        'habitat'=> 'required|unique:animals|max:255|min:3',
        'longevità'=> 'required|integer|min:1|max: 750',
        'rischio_estinzione'=> 'required|boolean',
        'alimentazione'=> 'required|unique:animals|max:255|min:3',
        'regione'=> 'required',
    ];

    private $validationMessages =  [
        'rischio_estinzione' =>'Inserisci 1 se l!animale è a rischio estinzione, inserisci 0 se non lo è'
    ];
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
        $data = $request->validate($this->validationRules,$this->validationMessages);

        $newAnimal = new Animal($data);
        $newAnimal->id = $data['id'];
        $newAnimal->nome = $data['nome'];
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

        $data = $request->all();
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
