<?php

namespace Database\Factories;

use App\Models\NationalCode;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<NationalCode>
 */
class NationalCodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>User::factory(),
            'code' => $this->faker->unique()->randomNumber(9),
        ];
    }
}
