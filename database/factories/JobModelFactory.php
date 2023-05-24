<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

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

        // Randomly select a city from the list
        $cities = ['Leeds', 'Manchester', 'Sheffield', 'Wakefield', 'York'];
        $city = $faker->randomElement($cities);

        return [
            'job_name' => $faker->jobTitle(),
            'company' => $faker->company(),
            'area' => $faker->buildingNumber() . ' ' . $faker->streetName(),
            'post_code' => $faker->postcode(),
            'city' => $city,
            'detail' => $faker->sentence(),
            'skills' => $faker->paragraph(),
            'salary' => $faker->numberBetween(10000, 70000),
            'lat' => $faker->latitude(),
            'long' => $faker->longitude(),
            'user_id' => $faker->numberBetween(1, 2000),
        ];
    }
}
