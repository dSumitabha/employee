<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'name' => 'Employee One',
                'email' => 'employee1@example.com',
                'password' => Hash::make('password123'),
                'employee_code' => 'E001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Employee Two',
                'email' => 'employee2@example.com',
                'password' => Hash::make('password123'),
                'employee_code' => 'E002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Employee Three',
                'email' => 'employee3@example.com',
                'password' => Hash::make('password123'),
                'employee_code' => 'E003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
