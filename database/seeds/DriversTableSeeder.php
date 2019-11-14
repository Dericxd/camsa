<?php

use App\Vehicle;
use Illuminate\Database\Seeder;
use App\Driver;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // crear registro de conductores
        for ($i = 1; $i <=80; $i++)
        {
            Driver::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'ci' => $faker->randomNumber(8),
                'phone' => $faker->phoneNumber,
                'img' => 'http://lorempixel.com/640/480/people',
                'state' => $faker->randomElement(['disponible','ocupado']),
            ]);
        }

    }
}
