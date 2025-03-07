<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Search extends Component
{
    #[Validate('required')]
    public $search = '';
    public $results = [];

    public function clearSearch()
    {
        $this->reset('search');
    }
    public function updatedSearch($value)
    {
        $this->reset('results');
        $this->validate();

        $this->results = Article::where('title', 'like', "%{$value}%")->get();
    }
    public function render()
    {
        return view('livewire.search');
    }
}
