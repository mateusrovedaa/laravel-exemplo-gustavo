<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public readonly Animal $animal;

    public function __construct(){
        $this->animal = new Animal();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = $this->animal->all();
        return view('animals', ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animal_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->animal->create([
            'nome' => $request->input('nome'),
            'especie' => $request->input('especie'),
            'idade' => $request->input('idade'),
        ]);

        if($created){
            return redirect()->route('animals.index')->with('message', 'Successfully create');
        }

        return redirect()->route('animals.index')->with('message', 'Error create');
    }


    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
