<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDonor extends Model
{
    use HasFactory;
    protected $table = 'blooddonors';

    protected $fillable = [
        'name',
        'email',
        'blood_group',
        'phone_number',
        'address',
    ];


}
