<?php

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

Artisan::command('sitemap:generate', function () {

    $sitemap = SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {
                if ($url->segment(1) === '') {
                    $url->setPriority(1.0);
                } elseif (in_array($url->segment(1), ['portofolios', 'blog'])) {
                    $url->setPriority(0.8);
                } else {
                    $url->setPriority(0.6);
                }

                return $url;
            })
            ->getSitemap();

        // Add static pages
        $sitemap->add(Url::create('/')->setPriority(1.0));
        $sitemap->add(Url::create('/portofolios')->setPriority(0.8));
        $sitemap->add(Url::create('/blog')->setPriority(0.8));
        $sitemap->add(Url::create('/#about')->setPriority(0.5));
        $sitemap->add(Url::create('/#contact')->setPriority(0.5));

        // Add dynamic portfolio pages
        Portfolio::all()->each(function (Portfolio $portfolio) use ($sitemap) {
            $sitemap->add(
                Url::create("/portofolios/{$portfolio->slug}")
                ->setLastModificationDate($portfolio->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.8));
        });

        // Add dynamic blog pages
        Blog::all()->each(function (Blog $blog) use ($sitemap) {
            $sitemap->add(Url::create("/blog/{$blog->slug}")
            ->setLastModificationDate($blog->updated_at)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.7));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        // Logika untuk generate sitemap
        Log::channel('cronjob')->info('Cronjob sitemap berjalan pada: ' . now());
        // $this->info('Sitemap has been generated new.');
        $this->info('Sitemap generated successfully at: ' . public_path('sitemap.xml'));
})->purpose('Generate the sitemap')->hourly();