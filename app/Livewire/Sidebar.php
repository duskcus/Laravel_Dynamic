<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class Sidebar extends Component
{
    public $sections = [];

    public function mount($sections = [])
    {
        $cacheKey = 'sidebar_sections_' . md5(serialize($sections));
        
        $this->sections = Cache::remember($cacheKey, 3600, function () use ($sections) {
            return collect($sections)->toArray();
        });
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}