<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Person extends Model
{
    use HasFactory;
    protected $table = "people" ;

    protected $guarded = [];
   
    protected $primarykey = "part_id";
     
    public function part() {


        return $this->hasMany(\App\Models\Part::class , 'id' , 'part_id');
    }
    
    public function getCountry() {


        return $this->hasMany(Country::class , 'country_id');
    }
    
 

    public function kalan() {


        return $this->hasOne(Country::class, 'id');
    }

    

}
