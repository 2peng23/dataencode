@extends('layouts.index')
@section('content')
    <div>
        <x-create-profile />
        <livewire:profile-search />
        <livewire:all-profile />
    </div>
@endsection

@section('scripts')
    <script src="js/create-profile.js"></script>
    <script>
        $(document).ready(function() {
            Livewire.dispatch('initSearch');
        })
    </script>
@endsection
