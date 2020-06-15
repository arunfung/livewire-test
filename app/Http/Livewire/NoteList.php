<?php

namespace App\Http\Livewire;

use Faker\Generator;
use Livewire\Component;

class NoteList extends Component
{
    public $name;
    public $email;
    public $message;

    public function mount($name,$email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = 'hhhhhhhhh';
    }

    public function render()
    {
        return view('livewire.note-list');
    }

    public function changName(Generator $fake)
    {
        $this->name = $fake->name;
    }
}
