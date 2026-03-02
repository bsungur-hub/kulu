<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'property_type', 'area_size', 'unit_size', 'budget', 'name', 'email', 'phone', 'message'
    ];
}
