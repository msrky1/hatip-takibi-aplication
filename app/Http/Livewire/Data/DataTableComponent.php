<?php

namespace App\Http\Livewire\Data;

use Livewire\Component;

class DataTableComponent extends Component
{
    public function render()
    {
        return view('livewire.data.data-table-component')->layout('layouts.table');
    }
}
