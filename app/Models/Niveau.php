<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    public $guarded = [] ;

    public function classes()
    {
    	return $this->hasMany(Classe::class);
    }

    public function equipes()
    {
    	return $this->hasMany(Equipe::class);
    }
}
