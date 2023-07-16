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
            'main_about' => 'At Hair and Love, we are committed to supporting black-owned businesses in the haircare industry. Our biweekly subscription service allows our members to experience a wide range of sample-sized products from these businesses. By collaborating with black-owned brands, we aim to foster their growth and provide our customers with exceptional haircare options. Join us on this empowering journey and discover the power of black-owned haircare.',
        ]);

    }
}
