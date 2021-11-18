<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramingLanguageSeeder extends Seeder
{
    public function run()
    {
        \App\Models\ProgramingLanguage::create(['name' => 'PHP', 'icon_path' => 'icons/languagens/php.png']);
        \App\Models\ProgramingLanguage::create(['name' => 'Python', 'icon_path' => 'icons/languagens/python.png']);
        \App\Models\ProgramingLanguage::create(['name' => 'Java', 'icon_path' => 'icons/languagens/java.png']);
        \App\Models\ProgramingLanguage::create(['name' => 'JavaScript', 'icon_path' => 'icons/languagens/javascript.png']);
    }
}
