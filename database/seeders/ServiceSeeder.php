<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Services::create([
            'title'=>'Child Education',
            'icon'=>'<i class="fa-solid fa-sack-dollar"></i>',
            'desc' => 'Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.'
        ]);
        Services::create([
            'title'=>'Child Education',
            'icon'=>'<i class="fa-solid fa-sack-dollar"></i>',
            'desc' => 'Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.'
        ]);
    }
}
