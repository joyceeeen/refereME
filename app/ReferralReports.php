<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralReports extends Model
{
  protected $fillable = [
    'reports_references_id','referrals_id'
  ];

  public function details(){
    return $this->hasOne('App\ReportsDetails','referral_reports_id','id');
  }

  public function reference(){
    return $this->hasOne('App\ReportsReference','id','reports_references_id');
  }

  public function referral(){
    return $this->hasOne('App\Referrals','id','referrals_id');
  }
}
