<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'image_url',
        'capacity',
        'max_capacity',
        'weekday_price',
        'weekend_price',
        'holiday_price',
    ];
}
