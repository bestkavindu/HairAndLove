<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogNewsPage;

class BlogNewsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogNewsPage::create([
            'blog_cover' => 'images/blog/cover.jpg',
        ]);
    }
}
