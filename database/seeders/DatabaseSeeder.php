<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin User
        $this->command->warn(PHP_EOL . 'Creating admin user...');
        
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        
        $this->command->info('Admin user created.');
        $this->command->info('Email: admin@admin.com');
        $this->command->info('Password: password');
    }
}
