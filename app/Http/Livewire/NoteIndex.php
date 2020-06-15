<?php

namespace App\Http\Livewire;

use App\Note;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{
//    public $notes;
    use WithPagination;

    protected $listeners = [
        'noteCreated'
    ];

    public function noteCreated()
    {

    }

//    public function mount()
//    {
//        $this->notes =  Note::latest()->get();
//    }

    public function render()
    {
        return view('livewire.note-index', [
            'notes' => Note::latest()->paginate(5)
        ]);
    }
}
