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
        Schema::create('account_tbl', function (Blueprint $table) {
            $table->id();

            // Personal Information
            $table->string('full_name', 100);
            $table->string('email', 150)->unique();
            $table->string('phone_number', 20)->nullable();

            // Authentication
            $table->string('password'); // Supports Laravel hashed passwords

            // User Preferences
            $table->boolean('is_agree_terms_conditions')->default(false);
            $table->boolean('save_session')->default(false);

            // Account Status
            $table->boolean('status')->default(true);
            $table->boolean('is_verified')->default(false);

            // Email Verification
            $table->timestamp('email_verified_at')->nullable();

            // Remember Me Token
            $table->rememberToken();

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_tbl');
    }
};
