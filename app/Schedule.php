<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

 protected $fillable = [
    'user_id', 'day','hospital','address','contact_number','schedule'
 ];

 protected $appends = ['to','from','day_name'];


 public function getScheduleAttribute($value)
 {
   return json_decode($value,true);
 }

 public function getFromAttribute()
 {
   return $this->schedule['from'];
 }
 public function getToAttribute()
 {
   return $this->schedule['to'];
 }

 public function getDayNameAttribute()
 {
   $array = ['Monday','Tuesday', 'Wednesday','Thursday','Friday','Saturday','Sunday'];

   return $array[$this->day];
 }


}
