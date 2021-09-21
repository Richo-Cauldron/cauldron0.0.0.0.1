<?php

namespace App\Http\Livewire\Core;

use Livewire\Component;

class SearchInput extends Component
{
    public $searchTerm;
    public $keydownMethod;

    public function getAndSendSearchTerm()
    {
        dump($this->searchTerm);
    }

    public function render()
    {
        return view('livewire.core.search-input');
    }
}
