<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalDetails extends Model
{
  protected $fillable = [
    'user_id','hospital_name','ambulance','facilities','location','services'
  ];

  protected $appends = ['ambulance_text','facilities_text','services_text'];

  public function getAmbulanceTextAttribute()
  {
    return str_replace("<br />","\r\n",$this->ambulance);
  }

  public function getFacilitiesTextAttribute()
  {
    return str_replace("<br />","\r\n",$this->facilities);
  }

  public function getServicesTextAttribute()
  {
    return str_replace("<br />","\r\n",$this->services);
  }

}
