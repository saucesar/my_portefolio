<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramingLaguageSeeder extends Seeder
{
    public function run()
    {
        \App\Models\ProgramingLaguage::create(['name' => 'PHP']);
        \App\Models\ProgramingLaguage::create(['name' => 'Python']);
        \App\Models\ProgramingLaguage::create(['name' => 'Java']);
        \App\Models\ProgramingLaguage::create(['name' => 'JavaScript']);
        \App\Models\ProgramingLaguage::create(['name' => 'C/C++']);
    }
}
