<?php

namespace App\Http\Livewire;

use App\Note;
use Livewire\Component;

class NoteIndex extends Component
{
    public $notes;

    protected $listeners = [
        'noteCreated'
    ];

    public function noteCreated()
    {
        $this->notes =  Note::latest()->get();
    }

    public function mount()
    {
        $this->notes =  Note::latest()->get();
    }

    public function render()
    {
        return view('livewire.note-index');
    }
}
