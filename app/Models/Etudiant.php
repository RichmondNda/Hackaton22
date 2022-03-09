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
        
        $equipe = DB::table('etudiants')
                    
                    ->join('participants', 'etudiants.id', '=','participants.etudiant_id')
                    ->join('equipes', 'equipes.id','=', 'participants.equipe_id')
                    ->selectRaw('*')
                    ->where('participants.hackaton_id', '=', $hackaton->id)
                    ->first() ;

        return $equipe->statut;
    }
}
