<?php

namespace App\Http\Livewire\Admin\Restauration;

use App\Models\Collation;
use App\Models\Repa;
use Livewire\Component;
use Livewire\WithPagination;

class Repas extends Component
{
    use WithPagination;

    public $libelle_repas = '' ;
    public $libelle_col ='' ;

    public function render()
    {
        return view('livewire.admin.restauration.repas', [
            'repas' => Repa::orderBy('created_at', 'DESC')->paginate(6),
            'collations' => Collation::orderBy('created_at', 'DESC')->paginate(6)
        ]);
    }

    public function resetInput()
    {
        $this->libelle_col = "";
        $this->libelle_repas = "";
    
    }

    public function createRepas()
    {

        $this->validate([
            'libelle_repas' => 'required|min:4'
        ]);

        Repa::create([
            'libelle' => $this->libelle_repas
        ]);

        $this->resetInput();
    }

    public function createCollation()
    {
        $this->validate([
            'libelle_col' => 'required|min:4'
        ]);

        Collation::create([
            'libelle' => $this->libelle_col
        ]);

        $this->resetInput();
    }

    public function deleteRepas(int $id)
    {
        if($id)
       {
           
           $rep = Repa::find($id);
           $rep->delete();
           //session()->flash('warning', 'Suppression éffectué avec succès.');
       }
        
    }

    public function deleteCollation(int $id)
    {
        if($id)
       {
           
           $col = Collation::find($id);
           $col->delete();
           //session()->flash('warning', 'Suppression éffectué avec succès.');
       }
        
    }
}

