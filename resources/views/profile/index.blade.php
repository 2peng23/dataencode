@extends('layouts.index')
@section('content')
    <div>
        <x-create-profile/>
        <x-edit-profile/>
        @livewire('view-profile')
        @livewire('profile-search')
        @livewire('profile-info')
        @livewire('all-profile')
    </div>
@endsection

@section('scripts')
    <script src="js/create-profile.js"></script>
@endsection
