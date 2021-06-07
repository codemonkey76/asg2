<?php

namespace App\Http\Livewire;

use App\Traits\InteractsWithRoute;
use Livewire\Component;

class Sidebar extends Component
{
    use InteractsWithRoute;

    public function render()
    {
        return view('livewire.sidebar');
    }
}
