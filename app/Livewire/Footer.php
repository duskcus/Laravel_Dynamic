<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $sections = [];

    public function render()
    {
        // Pass the sections to the view
        return view('livewire.footer');
    }
}