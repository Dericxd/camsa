<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Status::create([
            'name' => 'Disponible'
        ]);

        App\Status::create([
            'name' => 'Agotado'
        ]);
    }
}
