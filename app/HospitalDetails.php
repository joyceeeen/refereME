<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalDetails extends Model
{
  protected $fillable = [
    'user_id','hospital_name','latLng','ambulance','facilities','location','services','bedrooms'
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

  public function photos(){
    return $this->hasMany('App\HospitalPhotos','hospital_id');
  }
}
