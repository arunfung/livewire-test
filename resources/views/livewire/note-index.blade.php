<div>
    <livewire:note-create />
    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id" />
        <br>
    @endforeach
    {{ $notes->links() }}
</div>
