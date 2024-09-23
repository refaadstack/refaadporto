<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

Artisan::command('sitemap:generate', function () {
    // Logika untuk generate sitemap
    Log::channel('cronjob')->info('Cronjob sitemap berjalan pada: ' . now());
    $this->info('Sitemap has been generated.');
})->purpose('Generate the sitemap')->everyMinute();