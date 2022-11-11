<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpe extends Model
{
    use HasFactory;

    protected $fillable = [
        'zone',
        'serial_number',
        'tarikh',
        'remarks',
        'gambar',
        'customer'
    ];
}
