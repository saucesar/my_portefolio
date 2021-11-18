<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Project::factory(10)->create();
    }
}
