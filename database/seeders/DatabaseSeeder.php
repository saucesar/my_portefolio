<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProgramingLanguageSeeder::class,
            FrameworkSeeder::class,
            ProjectSeeder::class,
            TecnologySeeder::class,
        ]);
    }
}
