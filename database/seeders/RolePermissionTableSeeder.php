<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role_permission')->delete();
        
        \DB::table('role_permission')->insert(array (

            //roles
            0 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'create roles',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            1 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'edit roles',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            2 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'view roles',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            3 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'delete roles',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),

            //users
            4 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'delete users',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            5 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'view users',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            6 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'edit users',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            7 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'create users',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),

            //principle
            8 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'view principle',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            9 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'create principle',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            10 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'edit principle',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            11 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'delete principle',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),

            //procument
            12 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'view procurement',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            13 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'create procurement',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            14 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'edit procurement',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            15 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'delete procurement',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            //team
            16 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'view team',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            17 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'create team',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            18 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'edit team',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            19 => 
            array (
                'role_id' => 1,
                'permission_slug' => 'delete team',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
        ));
    }
}
