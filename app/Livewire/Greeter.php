<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Greeter extends Component
{
    #[Validate('required|min:6')]
    public $name = '';
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
    public function render()
    {
        return view('livewire.greeter');
    }
}
