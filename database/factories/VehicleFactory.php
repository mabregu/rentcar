<?php

namespace Database\Factories;

use App\Models\ModelVehicle;
use App\Models\TypeVehicle;
use App\Models\Vehicle;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model_vehicle_id' => ModelVehicle::all()->random()->id,
            'location_id' => Location::all()->random()->id,
            'type_vehicle_id' => TypeVehicle::all()->random()->id,
            'current_kilometers' => $this->faker->randomNumber(5),
            'engine_size' => $this->faker->randomFloat(1, 1, 3),
            'fuel_type' => $this->faker->randomElement(['GASOIL', 'GASOLINE', 'ELECTRONIC'])
        ];
    }
}
