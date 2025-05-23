<?php
// database/migrations/2025_05_22_181923_add_new_admin_user.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            'name' => 'New Admin',
            'email' => 'newadmin@example.com',
            'password' => Hash::make('securepassword'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')
            ->where('email', 'newadmin@example.com')
            ->delete();
    }
};
