<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            if (!Schema::hasColumn('sessions', 'ip_address')) {
                $table->string('ip_address')->nullable();
            }

            if (!Schema::hasColumn('sessions', 'user_agent')) {
                $table->text('user_agent')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            if (Schema::hasColumn('sessions', 'ip_address')) {
                $table->dropColumn('ip_address');
            }

            if (Schema::hasColumn('sessions', 'user_agent')) {
                $table->dropColumn('user_agent');
            }
        });
    }
};
