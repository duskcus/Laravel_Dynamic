<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class Navbar extends Component
{
    public $navbarItems = [];

    public function mount($navbarItems = [])
    {
        $cacheKey = 'navbar_items_' . md5(serialize($navbarItems));
        
        $this->navbarItems = Cache::remember($cacheKey, 3600, function () use ($navbarItems) {
            return collect($navbarItems)->map(function ($item) {
                return is_string($item) ? [
                    'name' => ucfirst($item),
                    'url' => '/' . strtolower($item)
                ] : $item;
            })->toArray();
        });
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}