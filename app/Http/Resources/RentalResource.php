<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RentalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'customer' => new CustomerResource($this->customer),
            'status' => new RentalStatusResource($this->rental_status),
            'vehicle' => new VehicleResource($this->vehicle),
            'from' => Carbon::createFromFormat('Y-m-d H:i:s', $this->from)->format('d-m-Y'),
            'to' => Carbon::createFromFormat('Y-m-d H:i:s', $this->to)->format('d-m-Y')
        ];
    }
}
