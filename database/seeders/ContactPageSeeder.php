<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactPage;

class ContactPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactPage::create([
            'contact_cover' => 'images/contact/cover.jpg',
            'desc' => 'lore',
            'contact_img' => 'images/contact/cover.jpg',
        ]);
    }
}
