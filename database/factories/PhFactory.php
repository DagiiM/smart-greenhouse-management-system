<?php

namespace Database\Factories;

use App\Models\Ph;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PhFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
  protected $model = Ph::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->numberBetween($min = 0, $max = 7),
        ];
    }
}
