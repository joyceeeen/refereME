<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  protected $fillable = [
      'firstname','middlename','lastname','birthday','gender','email_address','contact_number'
  ];
      protected $appends = ['name'];

  public function getNameAttribute()
  {
    return ucwords($this->firstname.' '.$this->lastname);
  }

}
