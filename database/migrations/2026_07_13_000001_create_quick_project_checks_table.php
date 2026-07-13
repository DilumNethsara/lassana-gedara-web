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
        Schema::create('quick_project_checks', function (Blueprint $table) {
            $table->id();
            $table->string('lead_id')->unique();
            $table->string('source');
            $table->string('source_note')->nullable();
            $table->string('land_status');
            $table->string('project_location');
            $table->string('land_size')->nullable();
            $table->string('service_package');
            $table->string('start_period');
            $table->string('client_name');
            $table->string('whatsapp_number');
            $table->boolean('consent_accepted')->default(false);
            $table->boolean('whatsapp_redirect_clicked')->default(false);
            $table->integer('lead_score')->default(0);
            $table->string('lead_type')->default('Low Priority');
            $table->string('lead_status')->default('New Website Lead');
            $table->string('lead_source')->default('Website Quick Project Check');
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->string('utm_content')->nullable();
            $table->string('utm_term')->nullable();
            $table->text('landing_page_url')->nullable();
            $table->text('referrer_url')->nullable();
            $table->string('device_type')->nullable();
            $table->string('browser')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quick_project_checks');
    }
};
