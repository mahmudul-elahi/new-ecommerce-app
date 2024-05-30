<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'first_name' => 'Mahmudul',
            'last_name' => 'Elahi',
            'email' => 'admin@admin.com',
            'password' => Password::hash('test1234')
        ]);

        $this->call(LaratrustSeeder::class);

        $this->call(CategorySeeder::class);
    }
}
