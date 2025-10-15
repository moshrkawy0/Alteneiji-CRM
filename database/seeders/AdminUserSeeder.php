<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // تأكدي من مسار نموذج المستخدم عندك
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@yourapp.com',
            'password' => Hash::make('password123'),
            // احذفنا is_admin لأنه غير موجود
        ]);
    }
}
