<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'nome',
        'especie',
        'idade'
    ];

    public function celeiro()
    {
        return $this->belongsTo(Celeiro::class);
    }

    public function vacinas()
    {
        return $this->belongsToMany(Vacina::class);
    }
}
