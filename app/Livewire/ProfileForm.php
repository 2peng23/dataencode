<?php

namespace App\Livewire;

use App\Services\ProfileService;
use Livewire\Component;

class ProfileForm extends Component
{
    public $searchQuery;
    public $birthYear;
    public $perPage; // Set default per page
    public $first_name, $middle_name, $last_name, $suffix, $birthdate, $birthplace, $registry_no, $page, $book, $mother_name, $father_name, $is_married;
    protected $rules = [
        'first_name' => 'required|min:2',
        'middle_name' => 'nullable|min:2',
        'last_name' => 'required|min:2',
        'suffix' => 'nullable|max:10',
        'birthdate' => 'required|date',
        'birthplace' => 'required|min:2',
        'registry_no' => 'required|numeric',
        'page' => 'nullable',
        'book' => 'nullable',
        'mother_name' => 'required|min:2',
        'father_name' => 'required|min:2',
        'is_married' => 'required   ',
    ];
    public $errors = [];
    public $showModal = true;

    public function submitForm()
    {
        $formData = [
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'suffix' => $this->suffix,
            'birthdate' => $this->birthdate,
            'birthplace' => $this->birthplace,
            'registry_no' => $this->registry_no,
            'page' => $this->page,
            'book' => $this->book,
            'mother_name' => $this->mother_name,
            'father_name' => $this->father_name,
            'is_married' => $this->is_married,
        ];

        // $validatedData = $this->validate();
        $res =  (new ProfileService())->saveProfile($formData, $this->rules);
        if (isset($res['error'])) {
            $this->errors = $res['error'];
        } else {
            session()->flash('success', 'Profile created!');
            $this->dispatch('refreshData');
            $this->reset();
            $this->dispatch('closeModal');
        }
    }
    public function closeModal()
    {
        $this->dispatch('refreshData', $this->searchQuery, $this->birthYear, $this->perPage, $this->page);
    }


    public function render()
    {
        return view('livewire.profile-form');
    }
}
