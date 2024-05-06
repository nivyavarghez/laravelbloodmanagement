<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'address',
        'ownership',
        'licence_number',
        'licence_address',
        'validity',
        'telephone_number',
        'email',
        'status',
        'medical_officer',
    ];
}

