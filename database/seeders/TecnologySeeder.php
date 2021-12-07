<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    public function run()
    {
        \App\Models\Tecnology::create(['name' => 'PHP'])->icon()->create(['path' => 'languagens/php.png']);
        \App\Models\Tecnology::create(['name' => 'Python'])->icon()->create(['path' => 'languagens/python.png']);
        \App\Models\Tecnology::create(['name' => 'Java'])->icon()->create(['path' => 'languagens/java.png']);
        \App\Models\Tecnology::create(['name' => 'JavaScript'])->icon()->create(['path' => 'languagens/javascript.png']);
        
        \App\Models\TecnologyProject::factory(50)->create();
    }
}
