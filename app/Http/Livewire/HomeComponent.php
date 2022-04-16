<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Person;
use App\Models\Complated;
use App\Models\Part;
class HomeComponent extends Component
{
    public $sira;
    public $country_id;
    public $part_id;
    public $name;
    public $number;
    
 
    public function render()
    {

       

        $person = Person::all();
        $country = Country::find(2);
        $complated = Complated::all();

           
       
       
        $persons = Country::has('persons' , '>=', 1)->get();
        
        $persons = Country::has('hatims' , '>=' , 1)->get();
      

       

        return view('livewire.home-component' , [  'persons' => $persons, 'country' => $country , 'complated' => $complated ,  'person' => $person])->layout('layouts.base');
    }
}
