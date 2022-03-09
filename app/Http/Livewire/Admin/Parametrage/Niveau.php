<?php

namespace App\Http\Livewire\Admin\Parametrage;

use App\Models\Classe;
use App\Models\Niveau as ModelsNiveau;
use Livewire\Component;

use Livewire\WithPagination;

class Niveau extends Component
{

    use WithPagination;

    public $libelle ;
    public $niveau_id ;
    public $edit_mode = false ;
    public $classe_id ;

    public function render()
    {
        return view('livewire.admin.parametrage.niveau',[
            'niveaux' => ModelsNiveau::all(),
            'classes' => Classe::orderBy('created_at', 'DESC')->paginate(4)
        ]);
    }

    public function resetInput()
    {
        $this->libelle = "";
    
    }

    public function createClasse()
    {
        $this->validate([
            'libelle' => 'required|min:4',
            'niveau_id' => 'required'
        ]);

        Classe::create([
            'libelle' => $this->libelle,
            'niveau_id' => $this->niveau_id
        ]);

        $this->resetInput();
    }

    public function editClasse(int $id)
    {
        $classe = Classe::find($id);


        $this->libelle = $classe->libelle ;
        $this->niveau_id = $classe->niveau->id ;
        $this->classe_id =  $classe->id ;
        $this->edit_mode = true ;
        

    }

    public function updateClasse(int $id)
    {
        $classe = Classe::find($id);

        $this->validate([
            'libelle' => 'required|min:4',
            'niveau_id' => 'required'
        ]);

        $classe->update([
            'libelle' => $this->libelle,
            'niveau_id' => $this->niveau_id
        ]);

        $this->resetInput();
        $this->edit_mode = false ;
    }

    public function deleteClasse(int $id)
    {
        if($id)
       {
           
           $classe = Classe::find($id);
           $classe->delete();
           //session()->flash('warning', 'Suppression éffectué avec succès.');
       }
        
    }




    
}
