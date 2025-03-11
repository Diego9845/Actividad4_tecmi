<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::create([
            'name' => 'Female',
            
        ]);
        Gender::create([
            'name' => 'Male',
            
        ]);
        Gender::create([
            'name' => 'Others',
            
        ]);
    }
}
