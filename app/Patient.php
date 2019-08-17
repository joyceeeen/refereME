<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  protected $fillable = [
      'firstname','middlename','lastname','birthday','heart_disease','stroke','pwd','gender','email_address','contact_number'
  ];
  protected $appends = ['name'];

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
