<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'department_models';
    protected $fillable = [
        'name',
        'phone',
        'email', 
        'gender', 
        'address'
    ];
}
