<?php

namespace Database\Seeders;

use App\Models\RegistrationNumber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RegistrationNumber::factory()->count(10)->create();
    }
}
