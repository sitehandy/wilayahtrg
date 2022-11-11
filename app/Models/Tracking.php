<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    // Mass assignment
    protected $fillable = [
        'zone',
        'jenis_item',
        'jumlah_item',
        'item_selesai',
        'node',
        'nota',
        'status'
    ];
}
