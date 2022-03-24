<?php

namespace App\Http\Livewire\Admin\Restauration;

use Livewire\Component;

class Qrcode extends Component
{
    public $qrcodeValue = '' ; 
    
    public function render()
    {
        return view('livewire.admin.restauration.qrcode');
    }
}
