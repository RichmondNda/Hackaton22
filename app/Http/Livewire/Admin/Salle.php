<?php

namespace App\Http\Livewire\Admin;

use App\Models\Salle as ModelsSalle;
use Livewire\Component;

use Livewire\WithPagination;


class Salle extends Component
{

    use WithPagination;

    public $libelle = '';
    public $edit_mode = false ;
    public $nb_equipe =0;
    public $salle_id = '' ;

    public function render()
    {
        return view('livewire.admin.salle',[
            'salles' => ModelsSalle::orderBy('created_at', 'DESC')->paginate(6)
        ]);
    }

    public function resetInput()
    {
        $this->libelle = "";
        $this->nb_equipe = 0;
    }

    public function createsalle()
    {
        $this->validate([
            'libelle' => 'required|min:4',
            'nb_equipe' => 'required'
        ]);

        ModelsSalle::create([
            'libelle' => $this->libelle,
            'nb_equipe' => $this->nb_equipe
        ]);

        $this->resetInput();
    }

    public function editsalle(int $id)
    {
        $salle = ModelsSalle::find($id);


        $this->libelle = $salle->libelle ;
        $this->nb_equipe = $salle->nb_equipe ;
        $this->salle_id = $id ;
        $this->edit_mode = true ;
    }

    public function updatesalle(int $id)
    {
        $salle = ModelsSalle::find($id);

        
        $this->validate([
            'libelle' => 'required|min:4',
            'nb_equipe' => 'required'
        ]);
       
        $salle->update([
            'libelle' => $this->libelle,
            'nb_equipe' => $this->nb_equipe
        ]);
      
        
        $this->resetInput();
        $this->edit_mode = false ;
        // $this->emitTo('admin.salle', 'refreshComponent');
    }

    public function deletesalle(int $id)
    {
        if($id)
        {
            
            $classe = ModelsSalle::find($id);
            $classe->delete();
            //session()->flash('warning', 'Suppression éffectué avec succès.');
        }
        
    }
}
