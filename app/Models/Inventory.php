<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'brand',
        'serial_number',
        'tarikh_dapat',
        'tarikh_installation',
        'remarks',
        'qrcode'
    ];
}
