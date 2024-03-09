<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * This method is responsible for creating the 'failed_jobs' table in the database.
     * The table will have 6 columns: 'id', 'uuid', 'connection', 'queue', 'payload', 'exception', and 'failed_at'.
     * The 'id' column is the primary key and will auto-increment.
     * The 'uuid' column is a unique string that identifies each failed job.
     * The 'connection' and 'queue' columns store the connection and queue information for the failed job.
     * The 'payload' column stores the serialized data of the failed job.
     * The 'exception' column stores the exception that was thrown when the job failed.
     * The 'failed_at' column stores the timestamp of when the job failed.
     */
    public function up(): void
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id(); // primary key, auto-increments
            $table->string('uuid')->unique(); // unique string identifier
            $table->text('connection'); // connection information
            $table->text('queue'); // queue information
            $table->longText('payload'); // serialized data of the failed job
            $table->longText('exception'); // exception that was thrown
            $table->timestamp('failed_at')->useCurrent(); // timestamp of when the job failed
        });
    }

    /**
     * Reverse the migrations.
     * 
     * This method is responsible for dropping the 'failed_jobs' table from the database.
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_jobs'); // drop the 'failed_jobs' table if it exists
    }
};

