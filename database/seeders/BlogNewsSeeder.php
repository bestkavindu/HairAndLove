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
            'title'=>'Education For African Children',
            'main_img'=>'images/blogandnews/1.jpg',
            'cover_img'=>'images/blogandnews/2.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odit eveniet et adipisci recusandae temporibus rerum distinctio sequi eum, provident, omnis nemo dolore doloremque nisi quidem? Saepe modi quidem rem?'
        ]);
    }
}
