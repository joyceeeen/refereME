<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  protected $fillable = [
      'firstname','middlename','lastname','birthday','gender'
  ];


}
