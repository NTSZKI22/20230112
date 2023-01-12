<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'active'
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
