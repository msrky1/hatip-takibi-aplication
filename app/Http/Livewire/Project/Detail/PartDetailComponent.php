<?php

namespace App\Http\Livewire\Project\Detail;

use Livewire\Component;
use App\Models\Country;

class PartDetailComponent extends Component
{
   public $sira;


    public function mount($sira) {


        $this->$sira = $sira;
    }



    public function render()
    {
        $country = Country::where('sira' , $this->sira)->first();
        return view('livewire.project.detail.part-detail-component' , ['country' => $country])->layout('layouts.base');
    }
}
