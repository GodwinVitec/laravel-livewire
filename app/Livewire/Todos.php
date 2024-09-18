<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todos extends Component
{
    public $todo = '';

    public $todos = [];

    public function mount()
    {
        $this->todos = [
            'Go to the market',
            'Buy some groceries',
            'Prepare dinner',
            'Go to the gym',
        ];
    }

    /*public function updated($property, $value)
    {
        $this->todo = strtoupper($value);
    }*/

    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

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
