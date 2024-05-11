<?php

namespace App\Livewire;

use Livewire\Component;



class Home extends Component
{

    public $workouts = [
        [
            'title' => 'Bench Press',
            'description' => 'This is the first workout',
            'image' => 'https://via.placeholder.com/150',
            'weight' => 245,
            'sets' => 5,
            'reps' => 5,
        ],
        [
            'title' => 'Squats',
            'description' => 'This is the second workout',
            'image' => 'https://via.placeholder.com/150',
            'weight' => 245,
            'sets' => 5,
            'reps' => 5,
        ],
        [
            'title' => 'Deadlifts',
            'description' => 'This is the third workout',
            'image' => 'https://via.placeholder.com/150',
            'weight' => 245,
            'sets' => 5,
            'reps' => 5,
        ],
    ];

    public function render()
    {
        return view('livewire.home');
    }
}
