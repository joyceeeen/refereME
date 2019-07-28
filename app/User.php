<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','is_hospital','hospital_name','address','contact_number','specialization','summary' ,'email', 'avatar','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['name'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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


    //REFERED TO ME
    public function referralRequests(){
      return $this->hasMany('App\Referrals','doctor_id','id');
    }

    public function schedToday(){
      return $this->hasOne('App\Schedule','user_id','id')->where('day',Carbon::now()->format('N'));
      
    }

}
