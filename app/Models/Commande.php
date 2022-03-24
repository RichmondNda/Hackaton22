<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    public $guarded = [] ;


    public function collation()
    {
    	return $this->belongsTo(Collation::class);
    }
}
