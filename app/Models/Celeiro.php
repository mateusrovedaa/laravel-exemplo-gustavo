<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Celeiro extends Model
{
    protected $fillable = ['nome'];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
