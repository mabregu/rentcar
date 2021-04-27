<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModelVehicleResource;
use App\Models\ModelVehicle;

class ModelVehicleController extends Controller
{
    public function index()
    {
        return ModelVehicleResource::collection(ModelVehicle::all());
    }
}
