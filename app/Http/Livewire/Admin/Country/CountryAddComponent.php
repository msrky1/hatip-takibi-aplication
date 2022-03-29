<?php

namespace App\Http\Livewire\Admin\Country;

use Livewire\Component;
use App\Models\Country;

class CountryAddComponent extends Component
{

    public $name;
    public $sira;


    public function addCountry() {


        $country = new Country();

        $country->name = $this->name;
        $country->sira = $this->sira;
        $country->save();

        session()->flash('message' , 'Ekleme Başarılı');
    }
    
    public function render()
    {
         


        $country = Country::all();


        return view('livewire.admin.country.country-add-component' , ['country' => $country ])->layout('layouts.test');
    }
}
