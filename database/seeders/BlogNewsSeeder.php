<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogNews;

class BlogNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogNews::create([
            'title'=>'Update Example',
            'main_img'=>'images/blogandnews/1.jpg',
            'cover_img'=>'images/blogandnews/2.jpg',
            'desc' => 'OMG thank you guys so much, I found the product of my dreamsss. I love the service and my results. I love my hair! I love my hair! I love my hair!!!'
        ]);
    }
}
