<?php

namespace App\Livewire;

use Livewire\Component;

class ProfileSearch extends Component
{
    public $searchQuery;
    public $birthYear;
    public $perPage; // Set default per page


    protected $listeners = [
        'initSearch' => 'search'
    ];

    protected $queryString = [
        'searchQuery' => ['except' => ''],
        'birthYear' => ['except' => ''],
        'perPage' => ['except' => ''],
    ];

    public function search()
    {
        $this->dispatch('search', $this->searchQuery, $this->birthYear, $this->perPage);
    }
    public function mount($searchQuery = null, $birthYear = null, $perPage = null)
    {
        if (!$searchQuery) {
            $this->searchQuery = $searchQuery;
        }
        if (!$birthYear) {
            $this->birthYear = $birthYear;
        }
        if (!$perPage) {
            $this->perPage = $perPage;
        }
    }
    public function render()
    {
        return view('livewire.profile-search');
    }
}
