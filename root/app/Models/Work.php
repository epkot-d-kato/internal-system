<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'work_start_time',
        'work_end_time',
        'break_time',
        'work_content',
        'comment',
    ];
}

