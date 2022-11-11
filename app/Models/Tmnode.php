<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmnode extends Model
{
    use HasFactory;

    protected $fillable = [
        'tmnode',
        'cableid'
    ];

    public function cores()
    {
        return $this->hasMany(Core::class, 'cableid', 'cableid');
    }

    // Mic saya problem. Kejap nak setting
}
