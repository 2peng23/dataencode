<?php

namespace App\Livewire;

use App\Services\ProfileService;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class AllProfile extends Component
{
    use WithPagination;
    private $allprofile;
    private $profileService;
    public $searchQuery;
    public $birthYear;
    public $perPage;
    public $page;
    protected $listeners = [
        'fetchData' => 'fetchData'
    ];

    public function __construct()
    {
        $this->profileService = new ProfileService();
    }
    // Fetch profiles in mount method
    public function mount()
    {
        $this->allprofile = $this->profileService->allProfiles($this->searchQuery, $this->birthYear, $this->perPage, $this->page);
    }
    // fetch Data
    public function fetchData()
    {
        // Re-fetch profiles with updated filters
        $this->allprofile = $this->profileService->allProfiles($this->searchQuery, $this->birthYear, $this->perPage,  $this->page);
        // dd($this->allprofile);
    }

    // Render method with pagination
    public function render()
    {
        $profiles = $this->allprofile;
        return view('livewire.all-profile', compact('profiles'));
    }
}
