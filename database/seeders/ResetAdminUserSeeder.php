<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetAdminUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->where('email', '!=', 'admin@yourapp.com')->delete();

        $adminData = [
            'name' => 'Admin',
            'email' => 'admin@yourapp.com',
            'password' => Hash::make('12345678'),
        ];

        if (Schema::hasColumn('users', 'is_admin')) {
            $adminData['is_admin'] = 1;
        }

        User::updateOrCreate(
            ['email' => 'admin@yourapp.com'],
            $adminData
        );

        $this->command->info('Admin user created/reset successfully.');
    }
}

