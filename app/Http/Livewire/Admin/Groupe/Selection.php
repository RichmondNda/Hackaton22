<?php

namespace App\Http\Livewire\Admin\Groupe;

use App\Models\Equipe;
use App\Models\Hackaton;
use App\Models\Niveau;
use Livewire\Component;
use Livewire\WithPagination;

class Selection extends Component
{
   
    use WithPagination;

    public $niveauselect="" ;
    public $statut ;
    public $afficher = '' ;
    
    public function render()
    {
        
        $hackaton = Hackaton::latest()->first();
        
        return view('livewire.admin.groupe.selection', [
            'equipes' => Equipe::where('hackaton_id', $hackaton->id)
                                ->where('niveau_id', 'LIKE', "%{$this->niveauselect}%")
                                ->where('statut', 'LIKE', "%{$this->afficher}%")
                                ->orderBy('created_at', 'DESC')->paginate(10),

            'niveaux' => Niveau::all()
        ]);
    }

    public  function updatingStatut()
    {
        if( $this->afficher == '')
        {
            $this->afficher = true;
        }
        else
        {
            $this->afficher = '';
        }
        
    }



    public function selection(int $id)
    {
        if($id)
        {
            $equipe = Equipe::where('id', $id)->first() ;
            $equipe->update([
                'statut' => !$equipe->statut
            ]);

        }
    }
}
