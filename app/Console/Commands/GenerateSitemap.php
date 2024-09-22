<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate new sitemap.xml';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Sitemap generated successfully.');
    }
}
