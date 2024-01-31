<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LotteriesFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'ticket_price' => fake()->randomFloat(2, 1, 100),
            'prize' => fake()->randomDigitNotZero(),
        ];
    }
}
