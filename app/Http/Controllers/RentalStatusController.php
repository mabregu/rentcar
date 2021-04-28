<?php

namespace App\Http\Controllers;

use App\Http\Resources\RentalStatusResource;
use App\Models\RentalStatus;

class RentalStatusController extends Controller
{
    public function index()
    {
        return RentalStatusResource::collection(RentalStatus::all());
    }
}
