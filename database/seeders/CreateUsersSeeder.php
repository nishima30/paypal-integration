<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = [
            [
                'user_fname' => 'admin',
                'email' => 'companyuiux@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('Admin@123467'),
            ],

        ];

        foreach ($student as $key => $value) {
            Student::create($value);
        }
    }
}
