<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
   use SoftDeletes,  HasFactory;
   protected $dates = [
    'created_at',
    'updated_at',
    'deleted_at',
];
protected $fillable = [
    'name',
    'email',
    'phone',
    'created_at',
    'updated_at',
    'deleted_at',
];
public function appointments()
{
    return $this->hasMany(Appointment::class, 'employee_id', 'id');
}

public function services()
{
    return $this->belongsToMany(Service::class);
}
}
