<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'admins',
                'name' => 'Admins',
                'created_at' => '2023-01-11 14:57:59',
                'updated_at' => '2023-01-11 14:57:59',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'guest',
                'name' => 'Guest',
                'created_at' => '2023-01-11 14:58:10',
                'updated_at' => '2023-01-11 14:58:10',
            ),
        ));    
    }
}
