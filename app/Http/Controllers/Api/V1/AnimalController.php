<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Animal::latest()->paginate();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'        => 'required|string|max:150',
            'nascimento'  => 'required|date',
            'peso_kg'     => 'nullable|numeric|min:0',
        ]);

        $animal = Animal::create($data);

        return response()->json($animal, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return $animal;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $animal->update($request->validate([
            'nome'        => 'sometimes|string|max:150',
            'nascimento'  => 'sometimes|date',
            'peso_kg'     => 'sometimes|numeric|min:0',
        ]));

        return response()->json($animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return response()->json(null, 204);
    }
}
