<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contract;
use App\Models\Area;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->firstName(),
            'last_name'=> fake()->lastName(),
            'document'=> fake()->randomNumber(8),
            'birth_date'=> fake()->date(),
            'age'=> fake()->numberBetween(18, 65),
            'phone'=> fake()->phoneNumber(),
            'address'=> fake()->address(),
            'job'=> fake()->jobTitle(),
            'area_id'=> Area::all()->random()->id,
            'contract_id'=> Contract::all()->random()->id,
        ];
    }
}
