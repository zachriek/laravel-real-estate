<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    protected $hidden = [];
    protected $fillable = [
        'image',
        'name',
        'slug',
        'location',
        'bed',
        'bath',
        'size',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
