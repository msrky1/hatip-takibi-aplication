<?php

namespace App\Http\Livewire\Project\Detail;

use Livewire\Component;
use App\Models\Country;
use App\Models\Part;
use App\Models\People;
use App\Models\Person;

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
    $people->country_name = $this->country_name	;
    
    
    $people->save();

    session()->flash('message' , 'Cüz Başarıyla Eklendi.');

    }

    public function deletePerson($id)

    {
        
        $person = Person::find($id);    
        $person->delete();
        session()->flash('message' , 'Person  Başarıyla Slindi!');
    
    
        

    }
 
    public function render()
    {
        $country = Country::where('sira' , $this->sira)->first();
        $part = Part::with('getPerson')->get();
     
        $people = Person::all();
         
        $delete = [];
      
        foreach($people as $p) {
              

            foreach($part as $pa) {

                if ($country->id == $p->country_id){

                if($p->part_id == $pa->id ) {


                     
                      array_push($delete, $pa->id);
                      
                }

                }
              
            }

          
        }
        
    
        

    
    
        $partDetail = Part::with('getPerson')->first();
        return view('livewire.project.detail.part-detail-component' , ['country' => $country ,  'parts' => $part , 'delete' => $delete, 'person' => $people , 'partDetail' => $partDetail])->layout('layouts.base');
    }
}
