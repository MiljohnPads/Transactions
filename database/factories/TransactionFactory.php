<?php

namespace Database\Factories;


use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_id' => fake()->randomElement(Account::pluck('id')),
            'initial_deposit' => fake()->randomFloat(2, 0, 10000.00),
            'type' => fake()->randomElement(['deposit', 'withdraw']),
            'datetime' =>fake()->date(),
            'source' => fake()->word(), // You might want to adjust this based on your data structure
        ];
    }
}
