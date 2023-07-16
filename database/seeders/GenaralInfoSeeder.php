<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GenaralInfo;

class GenaralInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GenaralInfo::create([
            'address'=>'Houston, Tx 77099',
            'phone'=>'713-280-6838 ',
            'email'=>'info@example.com',
            'tw_link' => '',
            'tw_link' => '',
            'ig_link' => '',
            'slider_1' => 'images/slider/1.jpg',
            'slider_2' => 'images/slider/2.jpg',
            'slider_main_content' => 'Discover Black-Owned Haircare Companies',
            'slider_sub_content' => 'Discover and Support Black-Owned Haircare Companies. Join Our Biweekly Service Subscription and Make a Difference!',
            // about
            //service
            // 'service_cover' => 'images/service/cover.jpg',
            // 'service_main_img_1' => 'images/service/1.jpg',
            // 'service_main_img_2' => 'images/service/2.jpg',
            // 'service' => 'Introducing Love and Hair Company, your go-to for discovering new hair products while supporting entrepreneurs. We provide a service of biweekly shipments of diverse hair products from our partner brands. Join us in celebrating diversity and empowering entrepreneurs alike. Subscribe today and embrace the journey of self-discovery and self-love with Love and Hair Company.',
              // products
            'logo' => 'images/logo/logo.png',
        ]);
    }
}
