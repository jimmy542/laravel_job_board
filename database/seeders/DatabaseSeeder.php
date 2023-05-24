<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'is_admin' => true,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test2 User',
            'email' => 'test2@example.com',
        ]);

        \App\Models\JobModel::factory(40)->create([
            'by_user_id'=>1
        ]);

        \App\Models\JobModel::factory(40)->create([
            'by_user_id'=>2
        ]);
        
    }
}
