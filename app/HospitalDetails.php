<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalDetails extends Model
{
  protected $fillable = [
    'user_id','hospital_name','ambulance','facilities','location','services'
  ];
}
