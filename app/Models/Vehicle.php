<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rentals()
    {
        $this->hasMany(Rental::class);
    }

    public function model_vehicle()
    {
        return $this->belongsTo(ModelVehicle::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function type_vehicle()
    {
        return $this->belongsTo(TypeVehicle::class);
    }
}
