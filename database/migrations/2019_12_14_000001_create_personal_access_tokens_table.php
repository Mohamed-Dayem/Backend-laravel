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
        // Create a new table named 'personal_access_tokens'
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            // Add an auto-incrementing primary key column named 'id'
            $table->id();
            // Add a morphs relationship with 'tokenable' model
            $table->morphs('tokenable');
            // Add a string column named 'name'
            $table->string('name');
            // Add a unique string column named 'token' with length of 64 characters
            $table->string('token', 64)->unique();
            // Add a text column named 'abilities' that can store null values
            $table->text('abilities')->nullable();
            // Add a timestamp column named 'last_used_at' that can store null values
            $table->timestamp('last_used_at')->nullable();
            // Add a timestamp column named 'expires_at' that can store null values
            $table->timestamp('expires_at')->nullable();
            // Add timestamps columns 'created_at' and 'updated_at'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void

