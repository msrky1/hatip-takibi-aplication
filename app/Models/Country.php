<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Complated;

class Country extends Model
{
    use HasFactory;
    
    protected $table = "countries";

    

    public function getPerson() {

        return $this->hasMany(Person::class , 'country_id');
    }

    public function getComplated() {

        return $this->hasMany(Complated::class , 'country_id');
    }

   

}
