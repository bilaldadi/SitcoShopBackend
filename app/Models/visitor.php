<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'visit_time',
        'visit_date'
    ];
}
