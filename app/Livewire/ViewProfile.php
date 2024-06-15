<?php

namespace App\Livewire;

use App\Services\ProfileService;
use Livewire\Component;

class ViewProfile extends Component
{
    public $first_name,
        $middle_name,
        $last_name,
        $suffix,
        $birthdate,
        $birthplace,
        $registry_no,
        $page,
        $book,
        $mother_name,
        $father_name,
        $is_married;

    public $searchQuery;
    public $birthYear;
    public $perPage; // Set default per page
    public $data = [];
    protected $listeners = [
        'viewProfile' => 'viewProfile'
    ];
    public function viewProfile($id)
    {
        $this->data =  (new ProfileService())->viewProfile($id);
        $this->first_name = $this->data->first_name;
        $this->middle_name = $this->data->middle_name;
        $this->last_name = $this->data->last_name;
        $this->suffix = $this->data->suffix;
        $this->birthdate = $this->data->birthdate;
        $this->birthplace = $this->data->birthplace;
        $this->registry_no = $this->data->registry_no;
        $this->page = $this->data->page;
        $this->book = $this->data->book;
        $this->mother_name = $this->data->mother_name;
        $this->father_name = $this->data->father_name;
        $this->is_married = $this->data->is_married;
    }
    public function closeModal()
    {
        $this->dispatch('refreshData', $this->searchQuery, $this->birthYear, $this->perPage);
    }
    public function updateProfile()
    {
    }
    public function render()
    {
        return view('livewire.view-profile');
    }
}
