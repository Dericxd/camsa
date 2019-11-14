<?php

use App\Driver;
use App\OfficeGuide;
use App\Product;
use App\Vehicle;
use Illuminate\Database\Seeder;


class GuidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 80; $i++)
        {
            OfficeGuide::create([
                'number' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
                'date' => $faker->date('Y-m-d',$max='now'),
                'businessName'  => $faker->company,
                'rif' => $faker->asciify('J ********'),
                'contactPhone'  => $faker->phoneNumber,
                'driverId'  => Driver::all()->unique()->random()->id,
                'driverCi'  => $faker->asciify('J ********'),
                'carName'  => Vehicle::all()->unique()->random()->id,
                'typeCar'  => $c = $faker->word,
                'direction' => $faker->address,
                'productId'  => Product::all()->random()->id,
                'quantityProduct'  => $faker->numberBetween(10,50),
                'descriptionProduct'  => $faker->paragraph(2,false),
                'presentationProduct'  => $faker->paragraph(2,false),
                'totalProduct'  => $faker->numberBetween(50,100),
                'sealNumber'  => $faker->regexify('[A-Z0-9]+[A-Z0-9.-]+[A-Z]{2,4}'),
                'observations' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
                'authorized' => $faker->name,
                'responsable' => $faker->name,

            ]);
        }
    }
}
