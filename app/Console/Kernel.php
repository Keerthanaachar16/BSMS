<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $complaints = Complaint::where('complaint_status', 'In progress')
                ->where('assigned_at', '<=', now()->subDay()) // older than 1 day
                ->get();

            foreach ($complaints as $complaint) {
                $official = $complaint->officials()->first();
                if ($official) {
                    Mail::to($official->email)->send(new DeadlineReminderMail($complaint));
                }
            }
        })->hourly(); // check hourly
    }
}