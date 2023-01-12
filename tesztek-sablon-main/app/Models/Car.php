<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $hidden = [
        'merchant_id',
        'model_id'
    ];

    protected $fillable = [
        'fuel',
        'engine',
        'merchant_id',
        'model_id',
        'active'
    ];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
}
