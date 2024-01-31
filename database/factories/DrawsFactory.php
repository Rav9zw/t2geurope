<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DrawsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'lotteries_id' => fake()->randomNumber(2, false),
            'draw_date' => fake()->dateTimeThisMonth(),
            'won_number' => fake()->randomNumber(2, false),
        ];
    }
}
