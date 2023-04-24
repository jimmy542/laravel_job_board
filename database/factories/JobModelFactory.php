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
        $startLatitude = 40.7128; // starting latitude
        $startLongitude = -74.0060; // starting longitude
        $distanceMinKm = 10; // minimum distance in kilometers
        $distanceMaxKm = 30; // maximum distance in kilometers

        // Generate random latitude and longitude within the specified distance range
        $distanceKm = $faker->numberBetween($distanceMinKm, $distanceMaxKm);
        $angle = $faker->randomFloat(2, 0, 2 * M_PI);
        $latitude = $startLatitude + ($distanceKm / 6371) * (180 / M_PI) * sin($angle);
        $longitude = $startLongitude + ($distanceKm / 6371) * (180 / M_PI) * cos($angle);
        return [
            
        'job_name'=>fake()->jobTitle(),
        'company'=>$faker->company(),
        'area'=>$faker->buildingNumber() . ' ' . $faker->streetName(),
        'post_code'=>$faker->postcode(),
        'city'=>$faker->city(),
        'detail'=>$faker->sentence(),
        'skills'=>fake()->paragraph(),
        'salary'=>fake()->numberBetween(10000,70000),
        'lat'=>$latitude,
        'long'=>$longitude,
        'user_id'=>fake()->numberBetween(1,2000),
        ];
    }
}
