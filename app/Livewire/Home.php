<?php

namespace App\Livewire;

use App\Models\Exercises;
use Livewire\Component;

class Home extends Component
{

    public $exercises;

    public function mount() {
        $this->exercises = Exercises::all();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
