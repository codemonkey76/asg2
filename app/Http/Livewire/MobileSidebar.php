<?php

namespace App\Http\Livewire;

use App\Traits\InteractsWithRoute;
use Livewire\Component;

class MobileSidebar extends Component
{
    use InteractsWithRoute;

    public bool $isOpen = false;

    protected $listeners = ['toggleSidebar' => 'toggleSidebar'];

    public function toggleSidebar()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.mobile-sidebar');
    }
}
