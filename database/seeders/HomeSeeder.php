<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Home::create([
            'home_about' => 'At Hair and Love, we are on a mission to empower and uplift black-owned haircare businesses. With our biweekly service subscription, you have the opportunity to not only explore an incredible range of products but also actively support these entrepreneurs. Join us today and become a part of a community that celebrates diversity, beauty, and the power of black-owned haircare companies.',
            'home_about_img_1' => 'images/home/about_1.jpg',
            'home_about_img_2' => 'images/home/about_2.jpg',
           ]);
    }
}
