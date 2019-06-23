<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  
 protected $fillable = [
    'user_id', 'day','hospital','address','contact_number','schedule'
 ];
}
