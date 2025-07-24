<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => UserRole::Admin->value,
        ]);
        $content_admin = User::create([
            'name' => 'content_admin',
            'email' => 'content_admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => UserRole::Content->value,
        ]);

    }
}