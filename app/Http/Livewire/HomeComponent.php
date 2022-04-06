<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Person;
use App\Models\Complated;
class HomeComponent extends Component
{
    public function render()
    {

        $country = Country::all();
        $person = Person::all();
        $complated = Complated::all();
        return view('livewire.home-component' , ['country' => $country , 'complated' => $complated ,  'person' => $person])->layout('layouts.base');
    }
}
