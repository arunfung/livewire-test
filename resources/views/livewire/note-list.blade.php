<div>
    <h1>{{ $message }}</h1>
    <input wire:model.lazy="message" type="text">
    <input wire:model.debounce.500ms="message" type="text">

{{--    {{ $name }}--}}
{{--    {{ $email }}--}}
{{--    <button wire:click="changName">Chang Name</button>--}}
</div>
