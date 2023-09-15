<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'month',
        'day',
        'day_of_week',
        'check_in_time',
        'check_out_time',
        'created_at',
        'update_at',
    ];
}
