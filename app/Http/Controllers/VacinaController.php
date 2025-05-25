<?php

namespace App\Http\Controllers;

use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
    public readonly Vacina $vacina;

    public function __construct()
    {
        $this->vacina = new Vacina();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacinas = $this->vacina->all();
        return view('vacinas', ['vacinas' => $vacinas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacina_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->vacina->create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
        ]);

        if ($created) {
            return redirect()->route('vacinas.index')->with('message', 'Successfully created');
        }

        return redirect()->route('vacinas.index')->with('message', 'Error on create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Celeiro $celeiro)
    {
        return view('celeiro_edit', ['celeiro' => $celeiro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Celeiro $celeiro)
    {
        $updated = $celeiro->update([
            'nome' => $request->input('nome'),
        ]);

        if ($updated) {
            return redirect()->route('celeiros.index')->with('message', 'Successfully updated');
        }

        return redirect()->route('celeiros.index')->with('message', 'Error on update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Celeiro $celeiro)
    {
        $deleted = $celeiro->delete();

        if ($deleted) {
            return redirect()->route('celeiros.index')->with('message', 'Successfully deleted');
        }

        return redirect()->route('celeiros.index')->with('message', 'Error on delete');
    }
}
