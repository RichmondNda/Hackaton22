<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salle extends Model
{
    use HasFactory;

    public $guarded = [] ;

    public function currentEquipes()
    {
        $hackaton = Hackaton::latest()->first() ;

        $equipes =  RepSalle::where('salle_id', $this->id)
                            ->where('hackaton_id','=', $hackaton->id)
                            ->get();
        
        return $equipes ;
    }

    public function canRecieve()
    {
        $hackaton = Hackaton::latest()->first() ;
        $nb_equipes =  RepSalle::where('salle_id', $this->id)
                ->where('hackaton_id','=', $hackaton->id)
                ->count();
        if($nb_equipes >= $this->nb_equipe)
        {
            return false ;
        }
        else 
        {
            return true ;
        }
    }

    public function getNbCollation(int $id)
    {
        $collation = Collation::find($id);
        $nb = Commande::where('collation_id', $collation->id)
                        ->where('salle_id',$this->id)->count() ;

        return $nb;
    }
}
