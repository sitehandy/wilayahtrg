<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'epeid',
        'reduncygroup',
        'cctno',
        'customer',
    ];

    public function core()
    {
        return $this->belongsTo(Core::class, 'epeid', 'epeid');
    }
}
