<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // نحذف كل المستخدمين إلا Admin القديم (لو موجود)
        DB::table('users')->where('email', '!=', 'admin@yourapp.com')->delete();

        // بيانات الادمن
        $adminData = [
            'name' => 'Admin',
            'email' => 'admin@yourapp.com',
            'password' => Hash::make('12345678'), // غير الباسوورد هنا لو حبيت
        ];

        // لو العمود is_admin موجود ضيفه
        if (Schema::hasColumn('users', 'is_admin')) {
            $adminData['is_admin'] = 1;
        }

        // إنشاء الادمن
        User::updateOrCreate(
            ['email' => 'admin@yourapp.com'],
            $adminData
        );

        $this->command->info('Admin user created/reset successfully.');
    }
}
