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

        // Define the cities with their corresponding latitude and longitude
        $cities = [
            'Leeds' => ['lat' => 53.8008, 'long' => -1.5491],
            'Manchester' => ['lat' => 53.4839, 'long' => -2.2446],
            'Sheffield' => ['lat' => 53.3811, 'long' => -1.4701],
            'Wakefield' => ['lat' => 53.6833, 'long' => -1.4977],
            'York' => ['lat' => 53.9590, 'long' => -1.0815],
        ];

        // Randomly select a city from the list
        $city = $faker->randomElement(array_keys($cities));

        // Get the latitude and longitude for the selected city
        $latitude = $cities[$city]['lat'];
        $longitude = $cities[$city]['long'];

        return [
            'job_name' => $faker->jobTitle(),
            'company' => $faker->company(),
            'area' => $faker->buildingNumber() . ' ' . $faker->streetName(),
            'post_code' => $faker->postcode(),
            'city' => $city,
            'detail' => $faker->sentence(),
            'skills' => $faker->paragraph(),
            'salary' => $faker->numberBetween(10000, 70000),
            'lat' => $latitude,
            'long' => $longitude,
            'user_id' => $faker->numberBetween(1, 2000),
        ];
    }
}
