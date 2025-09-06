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
    'sort',
    ];

    // Relasi ke PropertyImage
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    // default ordering by sort asc then created_at
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort', 'asc')->orderBy('created_at', 'asc');
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            // place new items at the bottom by default
            $max = static::max('sort');
            $model->sort = $max ? $max + 1 : 1;
        });
    }
}
