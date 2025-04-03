<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class UsesSeeder extends Seeder
{
    
    public function run(): void
    {   
        User::create([
            'name' => 'My_admin',
            'email' => 'Admin1@gmail.com',
            'password' => Hash::make('Teamo') 
        ]);
    }
}