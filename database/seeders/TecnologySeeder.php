<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    public function run()
    {
        \App\Models\Tecnology::create(['name' => 'PHP', 'link' => 'https://www.php.net/'])->icon()->create(['path' => 'languagens/php.png']);
        \App\Models\Tecnology::create(['name' => 'Python', 'link' => 'https://www.python.org/'])->icon()->create(['path' => 'languagens/python.png']);
        \App\Models\Tecnology::create(['name' => 'Java', 'link' => 'https://www.java.com/pt-BR/'])->icon()->create(['path' => 'languagens/java.png']);
        \App\Models\Tecnology::create(['name' => 'JavaScript', 'link' => 'https://www.javascript.com/'])->icon()->create(['path' => 'languagens/javascript.png']);
        \App\Models\Tecnology::create(['name' => 'Django', 'link' => 'https://www.djangoproject.com/'])->icon()->create(['path' => 'frameworks/django.png']);
        \App\Models\Tecnology::create(['name' => 'Laravel', 'link' => 'https://laravel.com/'])->icon()->create(['path' => 'frameworks/laravel.png']);
        
        \App\Models\TecnologyProject::factory(50)->create();
    }
}
