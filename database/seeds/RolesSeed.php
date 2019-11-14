<?php

use Illuminate\Database\Seeder;

class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
            'name' => 'ADMIN',
            'area' => 'Todo',
            'description' => 'acceso Total'
        ]);
        
        App\Role::create([
            'name' => 'User',
            'area' => 'medio',
            'description' => 'acceso medio'
        ]);
    }
}
