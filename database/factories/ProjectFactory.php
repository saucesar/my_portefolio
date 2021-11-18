<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'link' => $this->faker->url(),
            'github_url' => $this->faker->url(),
            'programing_language_id' => $this->faker->numberBetween(1, \App\Models\ProgramingLanguage::count()),
            'framework_id' => $this->faker->numberBetween(1, \App\Models\Framework::count()),
        ];
    }
}
