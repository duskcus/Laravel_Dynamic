<?php

namespace App\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $sections = [];

    public function render()
    {
        return view('livewire.sidebar');
    }
}
