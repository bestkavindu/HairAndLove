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

            //product
            12 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'view products',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            13 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'create products',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            14 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'edit products',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            15 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'delete products',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            //homepage
            16 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'view homepage',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            17 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'create homepage',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            18 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'edit homepage',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            19 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'delete homepage',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            //blognewspage
            20 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'view blognewspage',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            21 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'create blognewspage',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            22 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'edit blognewspage',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            23 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'delete blognewspage',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
             //aboutpage
             24 =>
             array (
                 'role_id' => 1,
                 'permission_slug' => 'view aboutpage',
                 'created_at' => '2023-01-29 05:10:04',
                 'updated_at' => '2023-01-29 05:10:04',
             ),
             25 =>
             array (
                 'role_id' => 1,
                 'permission_slug' => 'create aboutpage',
                 'created_at' => '2023-01-29 05:10:04',
                 'updated_at' => '2023-01-29 05:10:04',
             ),
             26 =>
             array (
                 'role_id' => 1,
                 'permission_slug' => 'edit aboutpage',
                 'created_at' => '2023-01-29 05:10:04',
                 'updated_at' => '2023-01-29 05:10:04',
             ),
             27 =>
             array (
                 'role_id' => 1,
                 'permission_slug' => 'delete aboutpage',
                 'created_at' => '2023-01-29 05:10:04',
                 'updated_at' => '2023-01-29 05:10:04',
             ),
              //servicepage
              28 =>
              array (
                  'role_id' => 1,
                  'permission_slug' => 'view servicepage',
                  'created_at' => '2023-01-29 05:10:04',
                  'updated_at' => '2023-01-29 05:10:04',
              ),
              29 =>
              array (
                  'role_id' => 1,
                  'permission_slug' => 'create servicepage',
                  'created_at' => '2023-01-29 05:10:04',
                  'updated_at' => '2023-01-29 05:10:04',
              ),
              30 =>
              array (
                  'role_id' => 1,
                  'permission_slug' => 'edit servicepage',
                  'created_at' => '2023-01-29 05:10:04',
                  'updated_at' => '2023-01-29 05:10:04',
              ),
              31 =>
              array (
                  'role_id' => 1,
                  'permission_slug' => 'delete servicepage',
                  'created_at' => '2023-01-29 05:10:04',
                  'updated_at' => '2023-01-29 05:10:04',
              ),
              //contactpage
              32 =>
              array (
                  'role_id' => 1,
                  'permission_slug' => 'view contactpage',
                  'created_at' => '2023-01-29 05:10:04',
                  'updated_at' => '2023-01-29 05:10:04',
              ),
              33 =>
              array (
                  'role_id' => 1,
                  'permission_slug' => 'create contactpage',
                  'created_at' => '2023-01-29 05:10:04',
                  'updated_at' => '2023-01-29 05:10:04',
              ),
              34 =>
              array (
                  'role_id' => 1,
                  'permission_slug' => 'edit contactpage',
                  'created_at' => '2023-01-29 05:10:04',
                  'updated_at' => '2023-01-29 05:10:04',
              ),
              35 =>
              array (
                  'role_id' => 1,
                  'permission_slug' => 'delete contactpage',
                  'created_at' => '2023-01-29 05:10:04',
                  'updated_at' => '2023-01-29 05:10:04',
              ),
            //blognews
            36 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'view blognews',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            37 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'create blognews',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            38 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'edit blognews',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            39 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'delete blognews',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            //genaralinfo
            40 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'view genaralinfo',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            41 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'create genaralinfo',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            42 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'edit genaralinfo',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
            43 =>
            array (
                'role_id' => 1,
                'permission_slug' => 'delete genaralinfo',
                'created_at' => '2023-01-29 05:10:04',
                'updated_at' => '2023-01-29 05:10:04',
            ),
        ));
    }
}
