<?php

namespace App\Http\Controllers;

use App\Models\Celeiro;
use Illuminate\Http\Request;

class CeleiroController extends Controller
{
    public readonly Celeiro $celeiro;

    public function __construct()
    {
        $this->celeiro = new Celeiro();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $celeiros = $this->celeiro->all();
        return view('celeiros', ['celeiros' => $celeiros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('celeiro_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->celeiro->create([
            'nome' => $request->input('nome'),
        ]);

        if ($created) {
            return redirect()->route('celeiros.index')->with('message', 'Successfully created');
        }

        return redirect()->route('celeiros.index')->with('message', 'Error on create');
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
