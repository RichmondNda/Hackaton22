<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    public $guarded = [] ;

    public function participants()
    {
    	return $this->hasMany(Participant::class);
    }



    public function niveau()
    {
    	return $this->belongsTo(Niveau::class);
    }
}
