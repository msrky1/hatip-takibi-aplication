<?php

namespace App\Http\Livewire\Project\Detail;

use Livewire\Component;
use App\Models\Country;
use App\Models\Part;
use App\Models\People;
class PartDetailComponent extends Component
{
   public $sira;
   public $country_id;
   public $part_id;
   public $name;
   public $number;
    public function mount($sira) {


        $this->$sira = $sira;
    }
   


    public function addPartUser() {

             
    $people = new People();

    $people->country_id = $this->country_id;
    $people->part_id = $this->part_id;
    $people->name = $this->name;
  
    
    $people->save();

    session()->flash('message' , 'Cüz Başarıyla Eklendi.');

    }


    public function render()
    {
        $country = Country::where('sira' , $this->sira)->first();
        $part = Part::all();
        return view('livewire.project.detail.part-detail-component' , ['country' => $country , 'part' => $part])->layout('layouts.base');
    }
}
