<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Child extends Component
{
    public function render()
    {
        return view('livewire.child')->layout('layouts.app');
        
        // return view('livewire.child')->layout('layouts.app')->slot('child_slot');
    }
}
