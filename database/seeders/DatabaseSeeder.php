<?php

namespace Database\Seeders; // This namespace is used to organize and manage classes related to database seeding

// use Illuminate\Database\Console\Seeds\WithoutModelEvents; This directive is used to disable model events during seeding
use Illuminate\Database\Seeder; // This is the base class for all seeders in Laravel

class DatabaseSeeder extends Seeder // This class extends Laravel's base seeder class to create custom seeders
{
    /**
     * Seed the application's database.
     *
     * This method is called when the `db:seed` Artisan command is executed
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create(); This line creates 10 users using Laravel's model factory

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]); This line creates a single user with the specified name and email using Laravel's model factory
    }
}

