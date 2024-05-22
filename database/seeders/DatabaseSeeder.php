<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(LaratrustSeeder::class);

        Gender::factory()->create([
            'name' => 'Male'
        ]);
        Gender::factory()->create([
            'name' => 'Female'
        ]);
        Gender::factory()->create([
            'name' => 'Other'
        ]);
    }
}
