<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportsReference extends Model
{
  protected $fillable = [
    'report','view'
  ];
}
