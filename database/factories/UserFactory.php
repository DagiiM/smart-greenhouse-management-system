<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'firstname' => $this->faker->firstname,
            'lastname' => $this->faker->lastname,
            'mobile' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'bio' => $this->faker->paragraph(1),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'cover_image' => $this->faker->randomElement(['cu1.jpeg','cu2.jpeg','cu3.jpeg','cu4.jpeg']),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'country' => $this->faker->country,
            'picture' => $this->faker->randomElement(['profile/default_male_image.jpg','profile/default_female_image.jpeg']),
            'postal_code' => $this->faker->address,
            'verified'=>$verified=$this->faker->randomElement([User::VERIFIED_USER,User::UNVERIFIED_USER]),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
