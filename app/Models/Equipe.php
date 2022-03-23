<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function currentSalle()
    {

        $hackaton = Hackaton::latest()->first() ;

        $salle = DB::table('rep_salles')
                    ->join('salles', 'salles.id', '=', 'rep_salles.salle_id')
                    ->where('equipe_id', $this->id)
                    ->where('hackaton_id', $hackaton->id)
                    ->select('*')
                    ->first();

        
        return $salle; 
    }
}
