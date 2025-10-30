<?php

declare(strict_types=1);

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function (): void {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Schedule external product import to run daily at 2:00 AM
Schedule::command('products:import-external')
    ->dailyAt('02:00')
    ->withoutOverlapping()
    ->runInBackground();
