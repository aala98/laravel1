<?php

namespace App\Models;

use App\Models\User;
use App\Models\Service;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $dates = [
        'start_time',
        'created_at',
        'updated_at',
        'deleted_at',
        'finish_time',
    ];
    protected $fillable = [
        'price',
        'comments',
        'user_id',
        'start_time',
        'created_at',
        'updated_at',
        'deleted_at',
        'employee_id',
        'finish_time',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employee_id');
    }
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
