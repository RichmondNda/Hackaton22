<?php

namespace App\Http\Livewire\Admin\Parametrage;

use App\Models\Equipe;
use App\Models\Hackaton;
use App\Models\RepSalle;
use App\Models\Salle;
use Livewire\Component;
use Livewire\WithPagination;

class Repartition extends Component
{
    use WithPagination;

    public $salle_id = '';
    public $equipe_id = '';
    public $edit_mode =false ;

    // protected $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        $hackaton = Hackaton::latest()->first() ;
        
        return view('livewire.admin.parametrage.repartition',[
            'equipes' => Equipe::where('statut',1 )
                                ->where('hackaton_id', $hackaton->id)
                                ->paginate(6)   ,

            'salles' => Salle::all(),

            'repartitions' => RepSalle::where('hackaton_id', $hackaton->id)
                                ->orderBy('created_at', 'DESC')
                                ->paginate(6)
        ]);
    }

    public function linkRepartition(int $id)
    {
        $hackaton = Hackaton::latest()->first() ;

        if($this->salle_id != '')
        {
          
            RepSalle::create([
                'equipe_id' => $id,
                'hackaton_id' => $hackaton->id,
                'salle_id' => $this->salle_id
            ]);

            $this->salle_id ='';

        }
    }

    public function deleteRepartition(int $id)
    {
        if($id)
        {
            $hackaton = Hackaton::latest()->first() ;
            $classe = RepSalle::where('equipe_id', $id)
                                ->where('hackaton_id', $hackaton->id)
                                ->first();
            $classe->delete();
            //session()->flash('warning', 'Suppression éffectué avec succès.');
        }
    }
}
