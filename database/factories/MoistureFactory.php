<?php

namespace Database\Factories;

use App\Models\Moisture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MoistureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
  protected $model = Moisture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->numberBetween($min = 0, $max = 100),
        ];
    }
}
