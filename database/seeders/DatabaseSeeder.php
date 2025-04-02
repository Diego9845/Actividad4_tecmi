<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SuperHero;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this -> call([
            GenderSeeder::class,
            UniverseSeeder::class,
            UserSeeder::class
        ]);

      /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
*/
        SuperHero::factory(10)->create();
    }
}
