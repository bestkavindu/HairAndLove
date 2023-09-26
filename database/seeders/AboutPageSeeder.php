<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutPage;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutPage::create([
            'about_cover' => 'images/about/cover.jpg',
            'about_main_img_1' => 'images/about/1.jpg',
            'about_main_img_2' => 'images/about/2.jpg',
            'main_about' => '“"At Love and Hair Company, we are on a mission to deliver quality products that help you discover your perfect haircare routine at an affordable price.” ',
        ]);

    }
}
