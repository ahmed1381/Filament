<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Old_roll_numberer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
        ]);
        $this->call([
            CustomerSeeder::class,
        ]);
        $this->call([
            FileNumberSeeder::class,
        ]);
        $this->call([
            CommercialCharacteristicSeeder::class,
        ]);
        $this->call([
            RegistrationNumberSeeder::class,
        ]);
        $this->call([
            LegalEntitySeeder::class,
        ]);
        $this->call([
            ContactNumbersSeeder::class,
        ]);
    }
}
