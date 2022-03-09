<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public $guarded = [] ;

    public function niveau()
    {
    	return $this->belongsTo(Niveau::class);
    }
}
