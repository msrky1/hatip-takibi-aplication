<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Barryvdh\DomPDF\Facade\Pdf;

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
              
              
                    if(true) {

                        $name = $person->name;
                        $pdf  = PDF::loadView('pdf' , compact('name'));
                       
                       return $pdf->stream('Katılımızdan Dolayı Teşekkür Ederiz.pdf');

                    }
                
                   
                    return  redirect()->back()->with('message' , 'Başarıyla Eklendi!');

              
              

                  
             
        }else{
            
            return redirect()->back()->with('getMessage' , 'En Az Bir Tane Seçim Yapmalısınız');
        }
     

      
      
     
     
    }
    public function deletePerson() {

         

    }
}
