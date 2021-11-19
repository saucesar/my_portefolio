<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    public function run()
    {
        \App\Models\Tecnology::create(['name' => 'PHP', 'icon_path' => 'icons/languagens/php.png']);
        \App\Models\Tecnology::create(['name' => 'Python', 'icon_path' => 'icons/languagens/python.png']);
        \App\Models\Tecnology::create(['name' => 'Java', 'icon_path' => 'icons/languagens/java.png']);
        \App\Models\Tecnology::create(['name' => 'JavaScript', 'icon_path' => 'icons/languagens/javascript.png']);

        \App\Models\Tecnology::create([
            'name' => 'Laravel',
            'icon_path' => 'icons/frameworks/laravel.png',
            'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
        ]);
        
        \App\Models\Tecnology::create([
            'name' => 'Django',
            'icon_path' => 'icons/frameworks/django.png',
            'description' => 'Django is a high-level Python web framework that encourages rapid development and clean, pragmatic design.',
        ]);

        \App\Models\TecnologyProject::factory(50)->create();
    }
}
