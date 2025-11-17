<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
   protected $fillable = ['zone_name','div_name', 'latitude', 'longitude'];
}
