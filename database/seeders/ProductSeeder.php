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
            'title'=>'Education For African Children',
            'image'=>'images/product/1.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odit eveniet et adipisci recusandae temporibus rerum distinctio sequi eum, provident, omnis nemo dolore doloremque nisi quidem? Saepe modi quidem rem?'
        ]);
        Product::create([
            'title'=>'Education For African Children',
            'image'=>'images/product/2.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odit eveniet et adipisci recusandae temporibus rerum distinctio sequi eum, provident, omnis nemo dolore doloremque nisi quidem? Saepe modi quidem rem?'
        ]);
    }
}
