<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TecnologyProjectFactory extends Factory
{
    public function definition()
    {
        return [
            'project_id' => $this->faker->numberBetween(1, \App\Models\Project::count()),
            'tecnology_id' => $this->faker->numberBetween(1, \App\Models\Tecnology::count()),
        ];
    }
}
