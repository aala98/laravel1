<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use SoftDeletes, HasFactory;


    public $table = 'services';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employer::class);
    }

    public function Reservation()
    {
        return $this->belongsToMany(Reservation::class);
    }
}
