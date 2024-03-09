<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

// The Kernel class extends the ConsoleKernel class provided by Laravel,
// which is the base class for all console kernel classes.
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     * This method is used to schedule recurring tasks (commands) for the application.
     */
    protected function schedule(Schedule $schedule): void
    {
        // An example of scheduling a command to run every hour is commented out.
        // Uncomment this line to schedule the 'inspire' command to run every hour.
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     * This method is used to register all console commands that the application provides.
     */
    protected function commands(): void
    {
        // Load all command classes located in the 'Commands' directory
        $this->load(__DIR__.'/Commands');

        // Include console routes from the 'routes/console.php' file
        require base_path('routes/console.php');
    }
}

