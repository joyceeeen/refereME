<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportsDetails extends Model
{
  protected $fillable = [
    'referral_reports_id','details'
  ];

  public function getDetailsAttribute($value){
    return json_decode($value,true);
  }

}
