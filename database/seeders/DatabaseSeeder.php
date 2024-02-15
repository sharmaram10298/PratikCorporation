<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@123'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'name' => 'Ram',
                'username' => 'Vendor',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('vendor@123'),
                'role' => 'vendor',
                'status' => 'active',
            ],
            [
                'name' => 'user',
                'username' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user@123'),
                'role' => 'user',
                'status' => 'active',
            ]
        ]);
    }
}
