<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileDropdown extends Component
{
    public bool $isOpen = false;

    public function toggleProfileDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.profile-dropdown');
    }
}
