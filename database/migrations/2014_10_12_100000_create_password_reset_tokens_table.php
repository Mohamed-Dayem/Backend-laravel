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
        // Create a new table to store password reset tokens
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            // Use the user's email address as the primary key
            $table->string('email')->primary();
            // Store the token itself
            $table->string('token');
            // Store the timestamp when the token was created
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void

