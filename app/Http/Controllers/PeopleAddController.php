<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PeopleAddController extends Controller
{
    public function addPerson(Request $request){
          
        
      
        $present = $request->get('part_id');
        
      
        if($request->has('part_id')){
            $request->validate([
                'part_id' => 'required|max:10', 
               
            ]);
            foreach($present as $pres) {

                $person = new Person (); 
                $person->part_id = $pres;
                $person->country_id = $request->country_id;
                $person->country_name = $request->country_name;
               
                $person->name = $request->name;
                $person->email = $request->email;
                 $person->save();
        
              
        
                }
               
                return redirect()->back()->with('message' , 'Cüz Başarıyla Eklendi');
        }else{
            
            return redirect()->back()->with('getMessage' , 'Cüz Seçmediniz');
        }
     

      
      
     
     
    }
}
