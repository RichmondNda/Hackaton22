<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    public function participations()
    {
    	return $this->hasMany(Participant::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function currentEquipe()
    {
        $hackaton = Hackaton::latest()->first() ;
        
        $equipe = DB::table('etudiants as etu')
                    ->leftjoin('participants as part', 'part.etudiant_id', '=' , 'etu.id')
                    ->join('equipes as equ', 'equ.id','=', 'part.equipe_id')
                    ->join('niveaux', 'niveaux.id', '=', 'equ.niveau_id')
                    ->selectRaw('*')
                    ->where('etu.id', "=", $this->id)
                    ->where('part.hackaton_id', '=', $hackaton->id)
                    ->first() ;
       // dd($equipe);
        return $equipe;
    }


    public function getEquipe()
    {
        $equipe_id = $this->currentEquipe()->equipe_id ;

        $equipe = Equipe::find($equipe_id) ;
        return $equipe ;
    }

    public function is_chief()
    {
        return Participant::where('etudiant_id', $this->id)
                            ->where('hackaton_id', $hackaton = Hackaton::latest()->first()->id)
                            ->first()->chef ;
    }

    public function Commande()
    {
        $commande = Commande::where('etudiant_id', $this->id)->first();

        return $commande;
    }
}
