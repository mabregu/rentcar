<?php

namespace Database\Factories;

use App\Models\ModelVehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelVehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModelVehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'daily_hire_rate' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
