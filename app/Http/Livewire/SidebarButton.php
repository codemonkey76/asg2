<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SidebarButton extends Component
{
    public function toggleSidebar()
    {
        info('toggling sidebar');
        $this->emit('toggleSidebar');
    }
    public function render()
    {
        return view('livewire.sidebar-button');
    }
}
