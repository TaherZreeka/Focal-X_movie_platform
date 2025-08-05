<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create roles
            $admin=Role::create(['name' => 'admin']);
            $content_admin=Role::create(['name' => 'content_admin']);
            $user=Role::create(['name' => 'user']);        
    }
}
