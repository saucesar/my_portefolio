<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrameworkSeeder extends Seeder
{
    public function run()
    {
        \App\Models\ProgramingLanguage::find(1)->frameworks()->create([
            'name' => 'Laravel',
            'icon_path' => 'icons/frameworks/laravel.png',
            'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
        ]);
        
        \App\Models\ProgramingLanguage::find(2)->frameworks()->create([
            'name' => 'Django',
            'icon_path' => 'icons/frameworks/django.png',
            'description' => 'Django is a high-level Python web framework that encourages rapid development and clean, pragmatic design.',
        ]);
    }
}
