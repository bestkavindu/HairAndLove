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
            'slider_main_content' => 'discover your perfect haircare routine',
            'slider_sub_content' => 'Support, Nourish and Love your hair affordably with our biweekly subscription service. Sign up now to stay informed about our first rollout of quality products from our partnered businesses.',
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
