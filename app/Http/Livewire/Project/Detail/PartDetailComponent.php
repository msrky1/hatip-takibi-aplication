<?php

namespace App\Http\Livewire\Project\Detail;

use Livewire\Component;
use App\Models\Country;
use App\Models\Part;
use App\Models\People;
use App\Modes\Hatim;
use App\Models\Person;
use App\Models\Complated;
use  Illuminate\Support\Facades\DB;


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

    public function deletePerson($country_id)

    {
      
    }
 
    public function render()
    {

       //  DB::table('complated')->truncate();
        $country = Country::where('sira' , $this->sira)->first();
        $part = Part::with('getPerson')->get();
        $persons = Country::has('persons' , '>=' , 1)->get();

        $people = Person::all();
         
        $delete = [];
      
        foreach($people as $p) {
              

            foreach($part as $pa) {

                if ($country->id == $p->country_id){
              
                if($p->part_id == $pa->id ) {
                       
                
                $persons = Country::find($p->country_id)->get();
             
            
                 
              
                         array_push($delete, $pa->id);

              
                            
                   

                 


                
                
           
     
                   

             //   var_dump(count($p->country_id));

                  
                 
                    
                 //   var_dump(count($delete) );

                    if(count($delete) == 30 ) {


                        $hatim = new Complated();

                        $hatim->name = 'full';
                        $hatim->email = 'full@gmail.com';
                        $hatim->country_id = $p->country_id;
                        $hatim->save();

                     }
            
                   
               
                      
                }

              
                

                }
              
            }
 
          
        }
                    
                  

       
 
      
    

        
           




    
    
        $partDetail = Part::with('getPerson')->first();
        return view('livewire.project.detail.part-detail-component' , ['country' => $country ,  'parts' => $part , 'delete' => $delete, 'person' => $people , 'partDetail' => $partDetail])->layout('layouts.base');
    }
}
