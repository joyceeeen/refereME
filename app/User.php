<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','user_type','address','license_number','contact_number','specialization','summary' ,'email', 'avatar','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $appends = ['name'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public function getNameAttribute()
    {
      return ucwords($this->firstname.' '.$this->lastname);
    }

    public function schedule(){
      return $this->hasMany('App\Schedule','user_id','id');
    }
    //MY REFERRALS
    public function referrals(){
      return $this->hasMany('App\Referrals','referrer_id','id');
    }

    public function hospital(){
      return $this->hasOne('App\HospitalDetails','user_id','id');
    }

    //REFERED TO ME
    public function referralRequests(){
      return $this->hasMany('App\Referrals','doctor_id','id');
    }

    public function schedToday(){
      return $this->hasOne('App\Schedule','user_id','id')->where('day',Carbon::now()->format('N'));
    }

}
