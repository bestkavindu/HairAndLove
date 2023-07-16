<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServicePage;

class ServicePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicePage::create([
            'service_cover' => 'images/service/cover.jpg',
            'service_main_img_1' => 'images/service/1.jpg',
            'service_main_img_2' => 'images/service/2.jpg',
            'desc' => 'Introducing Love and Hair Company, your go-to for discovering new hair products while supporting entrepreneurs. We provide a service of biweekly shipments of diverse hair products from our partner brands. Join us in celebrating diversity and empowering entrepreneurs alike. Subscribe today and embrace the journey of self-discovery and self-love with Love and Hair Company.',


           ]);
    }
}
