<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TecnologyFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->text(15),
            'description' => $this->faker->text(),
            'link' => $this->faker->url(),
        ];
    }
}
