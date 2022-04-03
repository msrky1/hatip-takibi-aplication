<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Person;


class SearchComponent extends Component
{

    public $query;
    public $persons;



    public function mount(){


        $this->query = '';
        $this->persons = [];
    }



    public function updatedQuery(){


         $this->persons = Person::where('email' , 'like' , '%' . $this->query . '%')
         
         ->get()

         ->toArray();

    }
    public function render()
    {
        return view('livewire.project.search-component' )->layout('layouts.base');
    }
}
