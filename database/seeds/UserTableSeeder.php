<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
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
        for ($i = 1; $i <=50; $i++) {

            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'rolId' => '2',
                'email_verified_at' => now(),
                'password' => bcrypt('123456'), // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
