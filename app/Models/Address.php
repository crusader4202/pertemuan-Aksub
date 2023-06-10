<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'oid',
    ];

    public function orang()
    {
        return $this->belongsTo(Orang::class);
    }
}
