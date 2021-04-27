<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Administrador',
            'email' => 'admin@mail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ]);

        \App\Models\User::factory(10)->create()->each(function (\App\Models\User $user) {
            \App\Models\Customer::factory(1)->create(['user_id' => $user->id]);
        });

        \App\Models\TypeVehicle::factory(1)->create(['name' => 'COCHE']);
        \App\Models\TypeVehicle::factory(1)->create(['name' => 'MOTO']);

        \App\Models\Location::factory(15)->create();

        \App\Models\Manufacturer::factory(10)->create()->each(function (\App\Models\Manufacturer $manufacturer) {
            \App\Models\ModelVehicle::factory(1)->create(['manufacturer_id' => $manufacturer->id]);
            \App\Models\Vehicle::factory(5)->create();
        });

        \App\Models\RentalStatus::factory(1)->create(['status' => 'RENTED']);
        \App\Models\RentalStatus::factory(1)->create(['status' => 'AVAILABLE']);

        \App\Models\Rental::factory(1)->create();

    }
}
