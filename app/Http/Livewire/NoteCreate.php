<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NoteCreate extends Component
{
    public $body;

    public function render()
    {
        return view('livewire.note-create');
    }

    public function createNote()
    {
        if (Auth::check()) {
            Auth::user()->notes()->create([
                'body' => $this->body,
            ]);
            $this->body = '';
            $this->emit('noteCreated');
        }
    }
}
