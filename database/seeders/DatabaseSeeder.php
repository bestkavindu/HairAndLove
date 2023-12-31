<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            RolePermissionTableSeeder::class,
            RoleUserTableSeeder::class,
            BlogNewsSeeder::class,
            ProductSeeder::class,
            ServiceSeeder::class,
            GenaralInfoSeeder::class,
            HomeSeeder::class,
           AboutPageSeeder::class,
           BlogNewsPageSeeder::class,
           ServicePageSeeder::class,
           ContactPageSeeder::class,
           ProductPageSeeder::class,
        ]);
    }
}
