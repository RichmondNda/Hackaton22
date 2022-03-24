<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repa extends Model
{
    use HasFactory;
    public $guarded = [] ;

    public function restauration()
    {
    	return $this->hasMany(Restauration::class);
    }

}
