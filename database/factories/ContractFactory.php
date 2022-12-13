<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TypeContract;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'salary' => fake()->randomFloat(2, 1000, 10000),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'type_contract_id' => TypeContract::all()->random()->id,
        ];
    }
}
