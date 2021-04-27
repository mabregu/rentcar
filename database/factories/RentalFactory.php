<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Rental;
use App\Models\RentalStatus;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rental_status_id' => RentalStatus::all()->random()->id,
            'vehicle_id' => Vehicle::all()->random()->id,
            'customer_id' => Customer::all()->random()->id,
            'from' => $this->faker->dateTime(),
            'to' => $this->faker->dateTime(),
        ];
    }
}
