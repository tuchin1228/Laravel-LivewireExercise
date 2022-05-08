<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $route_id = null;
    public function increment(){
        $this->count ++;
    }

    public function mount($id = null){
        $this->route_id = empty($id) ? null : $id;
    }   

    public function render()
    {
        if(!empty($this->route_id)){
            return view('livewire.counter')->layout('layouts.app');
            // return view('livewire.counter')->layout('layouts.base')->slot('counter_slot');
        }else{
            return view('livewire.counter')->layout('layouts.app');
            // return view('livewire.counter')->layout('layouts.base')->slot('counter_slot');
        }
    }
}
