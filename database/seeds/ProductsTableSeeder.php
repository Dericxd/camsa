<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 50; $i++)
        {
            Product::create([
                'name' => $faker->firstName,
                'quantity' => $faker->numberBetween(10,50),
                'unity' => $faker->numberBetween(10,30),
                'presentation' => $faker->randomElement(['Bultos','Cajas','Paquetes']),
                'status' => $faker->randomElement(['disponible','agotado']),
                'amount' => $faker->randomDigitNotNull(50,300)
            ]);
        }
    }
}
