<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complated;
use Barryvdh\DomPDF\Facade\Pdf;

class HatimAlController extends Controller
{
    //

    public function hatimAl(Request $request) {

        $hatim = new Complated();

        $hatim->name = $request->name;
        $hatim->email = $request->email;
        $hatim->country_id = $request->country_id;
        $hatim->save();

        $name = $hatim->name;
        $pdf  = PDF::loadView('pdf' , compact('name'));
       
        return $pdf->stream('Katılımızdan Dolayı Teşekkür Ederiz.pdf');

        return redirect()->back()->with('getHatimMessage' , 'Hatim Alındı Allah Kabul Etsin');
    }
}
