<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'username' => 'admin1',
                'password' => bcrypt('12345678'),
                'email' => 'admin1@gmail.com',
                'name' => 'Admin1',
            ],
        ];

        foreach ($admins as $admin) {
            User::create($admin);
        }
    }
}
