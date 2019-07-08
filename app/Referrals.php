<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referrals extends Model
{
  protected $fillable = [
    'referrer_id','doctor_id','patient_id','report','is_accepted'
  ];

  protected $appends = ['status'];

  public function patient(){
    return $this->hasOne('App\Patient','id','patient_id');
  }

  public function getStatusAttribute()
  {
    return $this->is_accepted == 1 ? "Accepted" : ($this->is_accepted == 2 ? "Declined" : "Pending" );
  }

  public function attachments(){
    return $this->hasMany('App\Attachments','referrals_id','id');
  }


}
