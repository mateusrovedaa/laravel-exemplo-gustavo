<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Vacina;
use Illuminate\Http\Request;

class AnimalVacinaController extends Controller
{
    public readonly Animal $animal;
    public readonly Vacina $vacina;

    public function __construct()
    {
        $this->animal = new Animal();
        $this->vacina = new Vacina();
    }

    /**
     * Exibe o formulário para associar vacinas a um animal.
     */
    public function create()
    {
        $animais = $this->animal->all();
        $vacinas = $this->vacina->all();

        return view('animal_vacina_create', compact('animais', 'vacinas'));
    }

    /**
     * Salva as vacinas associadas ao animal.
     */
    public function store(Request $request)
    {
        $animalId = $request->input('animal_id');
        $vacinas = $request->input('vacinas', []); // retorna array ou vazio

        $animal = $this->animal->find($animalId);

        if ($animal && is_array($vacinas)) {
            $animal->vacinas()->sync($vacinas);

            return redirect()->route('animals.index')->with('message', 'Vacinas atribuídas com sucesso!');
        }

        return redirect()->route('animals.index')->with('message', 'Erro ao associar vacinas.');
    }
}
