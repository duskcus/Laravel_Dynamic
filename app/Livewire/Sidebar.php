<?php

namespace App\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        // Dynamically generate the navbar items
        $sidebarItems = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Users', 'url' => route('users.index')],
            ['name' => 'About', 'url' => route('about')],
            ['name' => 'Services', 'url' => route('services')],
            ['name' => 'Contact', 'url' => route('contact')],
        ];
        
        // Pass the items to the view
        return view('livewire.sidebar', compact('sidebarItems'));
    }
}
