<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::create(['name' => 'Saú Cesar', 'email' => 'sau.cesarlima2013@gmail.com', 'password' => bcrypt('secret'), 'type' => 'admin']);
    }
}
