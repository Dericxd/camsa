<?php

use Illuminate\Database\Seeder;
use App\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <=40; $i++)
        {
            Vehicle::create([
                'name' => $faker->name,
                'brand' => $faker->jobTitle,
                'model' => $faker->numberBetween(100,900),
                'img' => 'http://lorempixel.com/640/480/transport',
                'type' => $faker->title,
                'plate' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
                'state' => $faker->randomElement(['disponible','ocupado']),
                'status' => $faker->randomElement(['disponible','ocupado','reparacion']),
            ]);
        }
    }
}
