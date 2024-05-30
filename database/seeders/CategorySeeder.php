<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = ['Male', 'Female', 'Others', 'Kids'];

        foreach ($genders as $gender) {
            Gender::factory()->create([
                'name' => $gender
            ]);
        }
    }
}
