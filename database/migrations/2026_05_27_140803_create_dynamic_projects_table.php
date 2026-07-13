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
        Schema::create('dynamic_projects', function (Blueprint $table) {
        $table->id();
        $table->string('project_id')->unique();
        $table->string('location');
        $table->string('heading');
        $table->text('description_1')->nullable();
        $table->text('description_2')->nullable();
        $table->string('page_type'); 
        $table->string('image_folder');
        $table->string('image_prefix');
        $table->integer('autoplay_speed')->default(6000);
        $table->text('images'); 
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_projects');
    }
};
