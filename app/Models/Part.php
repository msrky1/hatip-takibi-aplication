<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Person;

class Part extends Model
{
    use HasFactory;
    protected $table = "parts";

    protected $guarded = [];

  
    public function getCountry() 
    {

        return $this->hasMany(Country::class , 'country_id');
    }

    public function getPerson() 
    {

        return $this->hasMany(Person::class , 'part_id'  );
    }
}

