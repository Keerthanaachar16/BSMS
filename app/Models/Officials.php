<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Officials extends  Authenticatable
{
  
     protected $table = 'officials'; 
    protected $fillable = [
        'name', 'phone', 'zone', 'division', 'ward', 'email', 'password','assigned_complaint_id'
    ];

     public function complaint()
    {
        return $this->belongsTo(Complaint::class, 'assigned_complaint_id');
    }
    public function complaints()
{
    return $this->belongsToMany(Complaint::class, 'complaint_official', 'official_id', 'complaint_id');
}




    
}
