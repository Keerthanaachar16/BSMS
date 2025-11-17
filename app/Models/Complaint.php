<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table='complaints';
    protected $fillable = [
    'user_id', 'latitude', 'longitude', 'ward', 'remarks', 'image',   'complaint_status'
];

// public function officials()
//     {
//         return $this->hasMany(Officials::class, 'ward', 'ward');
//     }

public function officials()
{
    return $this->hasMany(Officials::class, 'ward', 'ward');
    return $this->belongsToMany(Officials::class, 'complaint_official', 'complaint_id', 'official_id');
}
public function raiser()
{
    return $this->belongsTo(User::class, 'raised_by');
}

public function getComplaintCodeAttribute()
{
    return 'C' . $this->id;
}
}

