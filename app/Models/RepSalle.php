<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RepSalle extends Model
{
    use HasFactory;
    public $guarded = [] ;


    public function Equipe()
    {
        $equipe =  Equipe::where('id', $this->equipe_id)->first() ;

        return $equipe ;
    }
}
