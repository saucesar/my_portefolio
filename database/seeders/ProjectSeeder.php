<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        if(env('APP_ENV') == 'local') {
            \App\Models\Project::factory(10)->create();
        }
    }
}
