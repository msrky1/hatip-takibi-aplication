<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Person;
class HomeComponent extends Component
{
    public function render()
    {

        $country = Country::all();
        $person = Person::all();
        return view('livewire.home-component' , ['country' => $country , 'person' => $person])->layout('layouts.base');
    }
}
