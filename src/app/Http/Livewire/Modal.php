<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $showModal = false;
    public $contact;

    public function mount($contact)
    {
        $this->contact = $contact;
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}