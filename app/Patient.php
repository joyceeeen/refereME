<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Patient extends Model
{
  use Notifiable;


  protected $fillable = [
      'firstname','middlename','lastname','birthday','heart_disease','stroke','pwd','gender','email_address','contact_number'
  ];
  protected $appends = ['name'];

  public function routeNotificationForMail($notification)
   {
       return $this->email_address;
   }
   
  public function getNameAttribute()
  {
    return ucwords($this->firstname.' '.$this->lastname);
  }

  public function getGenderAttribute($value)
  {
    return $value == 0 ? "Male" : "Female";
  }

  public function getHeartDiseaseAttribute($value)
  {
    return $value == 0 ? "No" : "Yes";
  }

  public function getStrokeAttribute($value)
  {
    return $value == 0 ? "No" : "Yes";
  }
  public function getPwdAttribute($value)
  {
    return $value == 0 ? "No" : "Yes";
  }
}
