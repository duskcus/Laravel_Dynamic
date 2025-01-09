<?php

namespace App\Livewire\Website;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        // Dynamically generate the navbar items
        $footerItems = [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Users', 'url' => route('users.index')],
            ['name' => 'About', 'url' => route('about')],
            ['name' => 'Services', 'url' => route('services')],
            ['name' => 'Contact', 'url' => route('contact')],
        ];
        
        // Pass the items to the view
        return view('livewire.website.footer', compact('footerItems'));
    }
}
