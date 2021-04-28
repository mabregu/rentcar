<?php

namespace App\Http\Controllers;

use App\Models\TypeVehicle;
use App\Http\Resources\TypeVehicleResource;

class TypeVehicleController extends Controller
{
    public function index()
    {
        return TypeVehicleResource::collection(TypeVehicle::all());
    }
}
