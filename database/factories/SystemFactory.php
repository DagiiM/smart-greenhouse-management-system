<?php

namespace Database\Factories;

use App\Models\System;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SystemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
  protected $model = System::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'application_name' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'vision' => $this->faker->word,
            'mission' => $this->faker->word,
            'values' => $this->faker->word,
            'description' => $this->faker->paragraph(1),

        ];
    }
}
