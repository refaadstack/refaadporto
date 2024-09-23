<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('sitemap:generate', function () {
    // Logika untuk generate sitemap
    Log::channel('cronjob')->info('Cronjob sitemap berjalan pada: ' . now());
    $this->info('Sitemap has been generated.');
})->purpose('Generate the sitemap')->everyMinutes();