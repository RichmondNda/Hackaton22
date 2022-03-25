<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hackaton extends Model
{
    use HasFactory;

    public $guarded = [] ;

    public function participants()
    {
    	return $this->hasMany(Participant::class);
    }

    public function CanRecord()
    {
        $nb_equipe_selectionnee = Equipe::where('statut', 1)->get()->count() ;
        
        if($nb_equipe_selectionnee > 0)
        {
            return false ;
        }
        else 
        {
            return true ;
        }
    }
}
