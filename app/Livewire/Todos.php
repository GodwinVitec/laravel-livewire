<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [
        'Go to the market',
        'Buy some groceries',
        'Prepare dinner',
        'Go to the gym',
    ];

    public function add()
    {
        if(empty($this->todo)) {
            return;
        }

        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
