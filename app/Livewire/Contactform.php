<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\contact;

class Contactform extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:20',
        'message' => 'required|string|max:500',
    ];

    public function submit()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone_number,
            'message' => $this->message,
        ]);

        session()->flash('message', 'Your message has been sent successfully.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contactform');
    }
}
