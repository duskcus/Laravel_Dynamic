<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        // Dynamically generate the navbar items

        $navbarItems = [
            'home', 
            ['name' => 'Users', 'url' => route('users.index')], // Custom URL
        ];

        // Pass the items to the view
        return view('livewire.navbar', compact('navbarItems'));
    }
}