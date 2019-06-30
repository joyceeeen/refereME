<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referrals extends Model
{
  protected $fillable = [
      'user_id','patient_id','report'
  ];

}
