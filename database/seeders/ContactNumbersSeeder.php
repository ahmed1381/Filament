<?php

namespace Database\Seeders;

use App\Models\ContactNumbers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactNumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactNumbers::factory()->count(10)->create();
    }
}
