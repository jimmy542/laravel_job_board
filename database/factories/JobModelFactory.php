<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

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
        $faker = Faker::create('en_GB');
        return [
            
        'job_name'=>fake()->jobTitle(),
        'company'=>$faker->company(),
        'area'=>$faker->boolean(50) ? $faker->buildingNumber() . ' ' . $faker->streetName() : null,
        'post_code'=>$faker->postcode(),
        'city'=>$faker->city(),
        'detail'=>$faker->sentence(),
        'skills'=>fake()->paragraph(),
        'salary'=>fake()->numberBetween(10000,60000),
        'user_id'=>fake()->numberBetween(1,2000),
        ];
    }
}
