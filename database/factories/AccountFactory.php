<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement(User::pluck('id')),
            'username' => fake()->userName(),
            'type' => fake()->randomElement(['PayMaya', 'GCash','Metrobank','BDO']),
            'balance' => fake()->randomFloat(2, 0, 10000.00), // 2 is the number of decimals
        ];

    }
}
