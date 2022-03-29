<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
class HomeComponent extends Component
{
    public function render()
    {

        $country = Country::all();
        return view('livewire.home-component' , ['country' => $country])->layout('layouts.base');
    }
}
