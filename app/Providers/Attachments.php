<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
  protected $fillable = [
      'referrals_id','path','filename'
  ];

}
