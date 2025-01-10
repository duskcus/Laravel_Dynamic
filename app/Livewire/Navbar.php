<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $navbarItems = [];

    public function render()
    {
        return view('livewire.navbar', ['navbarItems' => $this->navbarItems]);
    }
}