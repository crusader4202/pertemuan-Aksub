<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'user_id',
    ];

    public function orang()
    {
        return $this->belongsTo(Orang::class);
    }

    public function addresses()
    {
        return $this->belongsToMany(Address::class, "address_car");
    }
}
