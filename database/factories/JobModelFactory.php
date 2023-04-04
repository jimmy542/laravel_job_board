<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobModel>
 */
class JobModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
        'job_name'=>fake()->city(),
        'company'=>fake()->name(),
        'area'=>fake()->city(),
        'post_code'=>fake()->postcode(),
        'city'=>fake()->city(),
        'detail'=>fake()->paragraph(),
        'skills'=>fake()->paragraph(),
        'salary'=>fake()->numberBetween(20000,40000),
        'user_id'=>fake()->numberBetween(1,2000),
        ];
    }
}
