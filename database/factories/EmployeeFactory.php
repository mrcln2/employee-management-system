<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    // database/factories/EmployeeFactory.php

    public function definition(): array
    {
        return [
            'employee_id' => 'EMP-' . fake()->unique()->numberBetween(1000, 9999), // Unique employee ID
            'name'        => fake()->name(),
            'email'       => fake()->unique()->safeEmail(),
            'position'    => fake()->jobTitle(),
            'salary'      => fake()->randomFloat(2, 15000, 70000),
        ];
    }
}
