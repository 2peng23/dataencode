<?php

namespace App\Livewire;

use App\Services\ProfileService;
use Livewire\Component;

class ProfileInfo extends Component
{
    protected $listeners = [
        'infoProfile' => 'infoProfile'
    ];
    public $data = [];
    public function infoProfile($id)
    {
        $this->data =  (new ProfileService())->viewProfile($id);
        // dd($this->data);
    }
    public function closeModal()
    {
        $this->dispatch('refreshData');
    }
    public function render()
    {
        return view('livewire.profile-info');
    }
}
