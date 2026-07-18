<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quick_project_checks', function (Blueprint $table) {
            $table->text('browser')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('quick_project_checks', function (Blueprint $table) {
            $table->string('browser', 255)->nullable()->change();
        });
    }
};
