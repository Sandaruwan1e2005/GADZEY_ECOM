<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        DB::table('orders')
            ->where('currency', 'inr')
            ->update(['currency' => 'lkr']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        DB::table('orders')
            ->where('currency', 'lkr')
            ->update(['currency' => 'inr']);
    }
};