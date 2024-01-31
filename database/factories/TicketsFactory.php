<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketsFactory extends Factory
{

    public function definition(): array
    {
        return [
            'draws_id' => fake()->randomNumber(2, false),
            'bought_date' => fake()->dateTimeThisMonth(),
            'number' => fake()->randomNumber(2, false),
        ];
    }
}
