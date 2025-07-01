<?php

namespace Database\Seeders;

use App\Models\FileNumber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FileNumber::factory()->count(10)->create();
    }
}
