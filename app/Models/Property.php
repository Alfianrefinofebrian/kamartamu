<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- tambahin ini
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}