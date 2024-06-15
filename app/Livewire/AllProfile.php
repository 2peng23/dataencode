<?php

namespace App\Livewire;

use App\Services\ProfileService;
use Livewire\Component;
use Livewire\WithPagination;

class AllProfile extends Component
{
    use WithPagination;

    public $searchQuery;
    public $birthYear;
    public $perPage; // Set default per page
    public $page;
    public $current_page;
    protected $profileService;
    protected $profiles;
    protected $listeners = [
        'search' => 'fetchData',
        'closeModal' => 'closeModal',
        'refreshData' => 'fetchData'
    ];

    // Inject ProfileService dependency
    public function __construct()
    {
        $this->profileService = new ProfileService();
    }
    // public function closeModal()
    // {
    //     $this->dispatch('closeModal');
    // }
    public function openModal()
    {
        $this->dispatch('openModal');
        $this->fetchData($this->searchQuery, $this->birthYear, $this->perPage, $this->page);
    }
    public function openProfileModal($id)
    {
        $this->dispatch('openProfileModal');
        $this->fetchData($this->searchQuery, $this->birthYear, $this->perPage, $this->page);
        $this->dispatch('viewProfile', $id);
    }
    public function infoProfileModal($id)
    {
        $this->dispatch('infoProfileModal');
        $this->fetchData($this->searchQuery, $this->birthYear, $this->perPage, $this->page);
        $this->dispatch('infoProfile', $id);
    }
    public function deleteProfile($id)
    {
        (new ProfileService())->deleteProfile($id);
        $this->fetchData($this->searchQuery, $this->birthYear, $this->perPage, $this->page);
    }

    // Fetch data with applied filters
    public function fetchData($searchQuery = null, $birthYear = null, $perPage = null, $page = null)
    {
        $this->searchQuery = $searchQuery;
        $this->birthYear = $birthYear;
        $this->perPage = $perPage;
        if ($page !== null) {
            $this->current_page = $page;
            $this->page = $page;
        }
        $this->profiles = $this->profileService->allProfiles($this->searchQuery, $this->birthYear, $this->perPage, $page);
        // dd($this->profiles);
        $this->resetPage(); // Reset pagination after search change
    }
    // Handle next page click and fetch data
    public function gotoPage($pageNo)
    {
        $this->fetchData($this->searchQuery, $this->birthYear, $this->perPage, $pageNo);
    }
    public function nextPage()
    {
        if ($this->current_page >= 1) {
            $nextpage = $this->current_page + 1;
        } else {
            $nextpage = 2;
        }
        $this->fetchData($this->searchQuery, $this->birthYear, $this->perPage, $nextpage);
    }
    public function previousPage($pageName = 'page')
    {
        $prev = $this->current_page - 1;
        $this->fetchData($this->searchQuery, $this->birthYear, $this->perPage, $prev);
    }
    // Render the Livewire component
    public function render()
    {
        $profiles = $this->profiles;
        return view('livewire.all-profile', compact('profiles'));
    }
}
