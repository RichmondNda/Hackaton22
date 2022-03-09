<?php

namespace App\Http\Livewire\Admin\Parametrage;

use App\Models\Hackaton as ModelsHackaton;
use Livewire\Component;
use Livewire\WithPagination;


class Hackaton extends Component
{
    use WithPagination;

    public $pco_1;
    public $pco_2 = "";
    public $annee;



    public function render()
    {
        return view('livewire.admin.parametrage.hackaton', [
            'hackatons' => ModelsHackaton::orderBy('created_at', 'DESC')
                                    ->paginate(4)
        ]);
    }


    public function resetInput()
    {
       
        $this->pco_1 = "";
        $this->pco_2 = "";
        $this->annee = "";
        
    }

    public function createHackaton()
    {
        $this->validate([
            'pco_1' => 'required',
            'annee' => 'required|min:4'
        ]);

        ModelsHackaton::create([
            'pco_1' => $this->pco_1,
            'pco_2' => $this->pco_2,
            'annee' => $this->annee
        ]);

        $this->resetInput();
    }


}
