<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramingLaguageSeeder extends Seeder
{
    public function run()
    {
        \App\Models\ProgramingLaguage::create(['name' => 'PHP', 'icon_path' => 'icons/languagens/php.png']);
        \App\Models\ProgramingLaguage::create(['name' => 'Python', 'icon_path' => 'icons/languagens/python.png']);
        \App\Models\ProgramingLaguage::create(['name' => 'Java', 'icon_path' => 'icons/languagens/java.png']);
        \App\Models\ProgramingLaguage::create(['name' => 'JavaScript', 'icon_path' => 'icons/languagens/javascript.png']);
    }
}
