<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // Use a secure password
            'role' => 'admin',
            'employee_code' => null, // Admins typically do not have an employee code
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert employee users
        DB::table('users')->insert([
            [
                'name' => 'Employee One',
                'email' => 'employee1@example.com',
                'password' => Hash::make('password123'), // Use a secure password
                'role' => 'employee',
                'employee_code' => 'E001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Employee Two',
                'email' => 'employee2@example.com',
                'password' => Hash::make('password123'), // Use a secure password
                'role' => 'employee',
                'employee_code' => 'E002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Employee Three',
                'email' => 'employee3@example.com',
                'password' => Hash::make('password123'), // Use a secure password
                'role' => 'employee',
                'employee_code' => 'E003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
