<?php

namespace App\Http\Livewire\Admin\Restauration;

use App\Models\Salle;
use Livewire\Component;
use App\Models\Collation;
use App\Models\Commande as ModelsCommande;
use Illuminate\Support\Facades\DB;

class Commande extends Component
{
    public function render()
    {
        return view('livewire.admin.restauration.commande',[
            'salles' => Salle::paginate(6),
            'collations' => Collation::all()
        ]);
    }

    public function deleteAllCommande()
    {
        ModelsCommande::truncate();

        request()->session()->flash('success', 'Suppression effectuée');
    }
}
