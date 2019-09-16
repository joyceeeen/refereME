<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Referrals extends Model
{
  protected $fillable = [
    'referrer_id','doctor_id','patient_id','disease_id','report','is_accepted'
  ];

  protected $appends = ['status'];

  public function patient(){
    return $this->hasOne('App\Patient','id','patient_id');
  }

  public function referredTo(){
    return $this->hasOne('App\User','id','doctor_id')->withTrashed();
  }

  public function referredBy(){
    return $this->hasOne('App\User','id','referrer_id')->withTrashed();
  }

  public function getCreatedAtAttribute($value)
  {
    return Carbon::parse($value)->format('Y-m-d h:s A');
  }
  public function disease(){
    return $this->hasOne('App\Diseases','id','disease_id');
  }

  public function getStatusAttribute()
  {
    return $this->is_accepted == 1 ? "Accepted" : ($this->is_accepted == 2 ? "Declined" : "Pending" );
  }

  public function attachments(){
    return $this->hasMany('App\Attachments','referrals_id','id');
  }

  public function reports(){
    return $this->hasMany('App\Attachments','referrals_id','id');
  }

  public function tests(){
    return $this->hasMany('App\ReferralReports','referrals_id','id');
  }
}
