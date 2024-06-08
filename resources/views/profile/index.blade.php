@extends('layouts.index')
@section('content')
    <x-create-profile />
    @livewire('all-profile')
@endsection

@section('scripts')
    <script src="js/create-profile.js"></script>
    @push('scripts')
        <script>
            Livewire.on('load', () => { // Listen for 'load' event
                window.livewire.emit('fetchData'); // Emit 'fetchData' to component
            });
        </script>
    @endpush
@endsection
