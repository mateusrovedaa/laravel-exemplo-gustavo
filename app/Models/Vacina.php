<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    protected $fillable = [
        'nome',
        'descricao'
    ];

    public function animais()
    {
        return $this->belongsToMany(Animal::class);
    }
}
