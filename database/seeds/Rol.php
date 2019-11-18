<?php

use Illuminate\Database\Seeder;

class Rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
            'name' => 'Admin',
            'area' => 'All',
            'description' => 'All',
        ]);

        App\Role::create([
            'name' => 'Coordinador',
            'area' => 'Medium',
            'description' => 'Medium',
        ]);

        App\Role::create([
            'name' => 'Usuario',
            'area' => 'Low',
            'description' => 'Low',
        ]);
    }
}
