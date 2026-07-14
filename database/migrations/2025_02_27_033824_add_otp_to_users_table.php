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
        Schema::table('lg_users', function (Blueprint $table) {
            if (!Schema::hasColumn('lg_users', 'otp')) {
                $table->string('otp')->nullable()->after('password');
            }

            if (!Schema::hasColumn('lg_users', 'otp_expires_at')) {
                $table->timestamp('otp_expires_at')->nullable()->after('otp');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lg_users', function (Blueprint $table) {
            $columns = array_filter(['otp', 'otp_expires_at'], function ($column) {
                return Schema::hasColumn('lg_users', $column);
            });

            if (!empty($columns)) {
                $table->dropColumn($columns);
            }
        });
    }
};