<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $name = 'Hello Sire';

        return view('livewire.auth.navigation', compact('name'));
    }
}
