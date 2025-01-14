<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $sections;
    public $footer1;
    public $footer2;

    public function mount($sections, $footer1, $footer2)
    {
        $this->sections = $sections;
        $this->footer1 = $footer1;  // Assign the footer1 state
        $this->footer2 = $footer2;  // Assign the footer2 state
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
