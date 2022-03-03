<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $title;
    public $subtitle;

    public function mount()
    {
        
        $this->fill(['title' => 'سلام دوستان عزیزم' , 'subtitle' => 'به آموزش Livewire خوش آمدید']);
    }

    public function render()
    {
        return view('livewire.index');
    }

    
}
