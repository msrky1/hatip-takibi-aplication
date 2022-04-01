<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

class SearchComponent extends Component
{
    public function render()
    {
        return view('livewire.project.search-component')->layout('layouts.base');
    }
}
