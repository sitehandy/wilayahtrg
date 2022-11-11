<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Core extends Model
{
    use HasFactory;

    protected $fillable = [
        'cableid',
        'core',
        'epeid'
    ];

    public function node()
    {
        return $this->belongsTo(Tmnode::class, 'cableid', 'cableid');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'epeid', 'epeid');
    }
}
