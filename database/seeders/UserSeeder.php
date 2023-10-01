<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\User::factory(100)->create();
        DB::table('users')->insert([
            'name' => 'AKHMAD DEFRIANI',
            'email' => 'akhmaddefriani17@gmail.com',
            'email_verified_at' => now(),
            
            'password' => Hash::make('password'),
            'roles' => 'mahasiswa',
            
        ]);    
    }
}
