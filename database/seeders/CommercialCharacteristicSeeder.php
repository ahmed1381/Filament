<?php

namespace Database\Seeders;

use App\Models\CommercialCharacteristic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommercialCharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CommercialCharacteristic::factory()->count(10)->create();
    }
}
