<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class Footer extends Component
{
    public $sections;
    public $footer1;
    public $footer2;

    public function mount($sections, $footer1, $footer2)
    {
        $cacheKey = 'footer_content_' . md5(serialize([$sections, $footer1, $footer2]));
        
        $cachedData = Cache::remember($cacheKey, 3600, function () use ($sections, $footer1, $footer2) {
            return [
                'sections' => collect($sections)->toArray(),
                'footer1' => $footer1,
                'footer2' => $footer2
            ];
        });
        
        $this->sections = $cachedData['sections'];
        $this->footer1 = $cachedData['footer1'];
        $this->footer2 = $cachedData['footer2'];
    }

    public function render()
    {
        return view('livewire.footer');
    }
}