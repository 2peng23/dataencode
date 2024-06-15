@extends('layouts.index')
@section('content')
    <div>
        @livewire('profile-form')
        @livewire('view-profile')
        @livewire('profile-search')
        @livewire('profile-info')
        @livewire('all-profile')
    </div>
@endsection

@section('scripts')
    <script src="js/create-profile.js"></script>
@endsection
