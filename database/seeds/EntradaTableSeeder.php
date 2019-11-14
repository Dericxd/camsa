<?php

use App\DispatchIn;
use App\DispatchOut;
use App\Product;
use Illuminate\Database\Seeder;

class EntradaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 90; $i++)
        {

            DispatchIn::create([
                'productId' => Product::all()->random()->id,
                'description' => $faker->paragraph(2),
                'quantity' => $faker->numberBetween(10,50),
                'presentationProduct' => $faker->randomElement(['Bultos','Cajas','Paquetes']),
                'total' => $faker->numberBetween(50,100),
                'code' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
                'dateOut' => $faker->date('Y-m-d',$max='now'),
                'dateIn' => $faker->date('Y-m-d',$max='now'),
                'responsible' => $faker->name,
                'observation' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            ]);
        }
    }
}
