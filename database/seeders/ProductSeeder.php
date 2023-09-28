<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create([
            'title'=>'Review Example',
            'image'=>'images/product/1.jpg',
            'desc' => 'OMG thank you guys so much, I found the product of my dreamsss. I love the service and my results. I love my hair! I love my hair! I love my hair!!!'
        ]);
        Product::create([
            'title'=>'Review Example',
            'image'=>'images/product/2.jpg',
            'desc' => "Exciting News: Our New #1 Bestseller! We're thrilled to announce that [Product Name] has taken the crown as our new #1 bestseller!
             Thank you for making [Product Name] your top choice in haircare. We're committed to keeping your hair healthy and beautiful."
        ]);
    }
}
