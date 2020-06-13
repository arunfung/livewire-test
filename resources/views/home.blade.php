@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
{{--                    @livewire('note-list')--}}
                    @php
                    $email = 123456;
                    @endphp
                    <livewire:note-list name="note" :email="$email" />

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
