<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'picture',
    ];

    public function address()
    {
        return $this->hasOne(Address::class, "oid"); // you can change the foreign key name based on the column name
    }

    public function cars()
    {
        return $this->hasMany(Car::class, "user_id");
    }
}
