<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;
    protected $table='stadiums';
    protected $fillable = [
        'id',
        'name',
        'price',
        'city_id',
        'currency',
        'address',
        'distance',
        'is_favorite',
        'image_url',
    ];
    protected $casts = [
        'is_favorite' => 'boolean',
    ];

}
