<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies_type extends Model
{
    protected $fillable = [
        'name',
        'description',
        'phone',
        'created_at'
    ];
}
