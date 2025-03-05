<?php

namespace App\Livewire;

use App\Models\Greeting;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Greeter extends Component
{
    #[Validate('required|min:2')]
    public $name = '';
    public $greetings = [];
    public $greeting = '';
    public $greetingMessage = '';

    public function changeGreeting() {
        $this->reset('greetingMessage');

        $this->validate();
        $this->greetingMessage = "{$this->greeting}, {$this->name}!";
    }

    // public function rules()
    // {
    //     return [
    //         'name' => 'required|min:6'
    //     ];
    // }

    public function mount()
    {
        $this->greetings = Greeting::all();
    }

    // public function updated($key, $value)
    // {
    //     if($key == 'name') {
    //         $this->name = strtolower($value);
    //     }
    // }

    public function updatedName($value)
    {
        $this->name = strtolower($value);
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
