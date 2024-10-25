<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter;

    public function mount()
    {
        $this->counter = 0;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function increment()
    {
        $this->counter++;
    }

}
