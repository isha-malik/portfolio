<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\EmployerFactory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' =>Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50,000 USD', '$90,000 USD', '$150,000 USD']),
            'location' =>fake()->randomElement(['Remote','Onsite', 'Hybrid']),
            'schedule' =>fake()->randomElement(['Full Time','Part Time']),
            'url' =>fake()->url,
            'featured' =>false,
        ];
    }
}
