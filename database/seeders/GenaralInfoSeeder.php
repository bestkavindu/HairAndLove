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
            'home_about' => 'At Hair and Love, we are on a mission to empower and uplift black-owned haircare businesses. With our biweekly service subscription, you have the opportunity to not only explore an incredible range of products but also actively support these entrepreneurs. Join us today and become a part of a community that celebrates diversity, beauty, and the power of black-owned haircare companies.',
            'home_about_img_1' => 'images/home/about_1.jpg',
            'home_about_img_2' => 'images/home/about_2.jpg',
            // about
            'about_cover' => 'images/about/cover.jpg',
            'about_main_img_1' => 'images/about/1.jpg',
            'about_main_img_2' => 'images/about/2.jpg',
            'main_about' => 'At Hair and Love, we are committed to supporting black-owned businesses in the haircare industry. Our biweekly subscription service allows our members to experience a wide range of sample-sized products from these businesses. By collaborating with black-owned brands, we aim to foster their growth and provide our customers with exceptional haircare options. Join us on this empowering journey and discover the power of black-owned haircare.',
            //service
            'service_cover' => 'images/service/cover.jpg',
            'service_main_img_1' => 'images/service/1.jpg',
            'service_main_img_2' => 'images/service/2.jpg',
            'service' => 'Introducing Love and Hair Company, your go-to for discovering new hair products while supporting entrepreneurs. We provide a service of biweekly shipments of diverse hair products from our partner brands. Join us in celebrating diversity and empowering entrepreneurs alike. Subscribe today and embrace the journey of self-discovery and self-love with Love and Hair Company.',
              // products
            'products_cover' => 'images/products/1.jpg',
            'logo' => 'images/logo/logo.png',
        ]);
    }
}
