<?php

namespace Database\Seeders;

use App\Models\Car;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bidder;
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
        Bidder::factory(10)->create(); // 10 Random Bidders
        Car::factory(10)->create();    // 10 Random Cars
    }
}
