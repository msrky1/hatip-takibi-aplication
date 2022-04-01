<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PeopleAddController extends Controller
{
    public function addPerson(Request $request){
          

        $person = new Person (); 

        $person->country_id = $request->country_id;
        $person->part_id = $request->part_id;
        $person->name = $request->name;
        $person->email = $request->email;

         $person->save();

      
         return redirect()->back()->with('message', 'Cüz Başarıyla Eklendi');;;

    }
}
