<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keys extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'key',
        'program_name'
    ];
}
