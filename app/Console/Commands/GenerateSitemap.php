<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use App\Models\Portfolio;
use App\Models\Blog;
use Illuminate\Support\Facades\Log;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap';

    public function handle()
    {
        $sitemap = SitemapGenerator::create(config('app.url'))->getSitemap();

        // Add static pages
        $this->addUrl($sitemap, '/', 1.0);
        $this->addUrl($sitemap, '/portfolios', 0.8);
        $this->addUrl($sitemap, '/blog', 0.8);
        $this->addUrl($sitemap, '/#about', 0.5);
        $this->addUrl($sitemap, '/#contact', 0.5);
        $this->addUrl($sitemap, '/cv', 0.7);

        // Add dynamic portfolio pages
        Portfolio::all()->each(function (Portfolio $portfolio) use ($sitemap) {
            $this->addUrl($sitemap, "/portfolios/{$portfolio->slug}", 0.8, $portfolio->updated_at);
        });

        // Add dynamic blog pages
        Blog::all()->each(function (Blog $blog) use ($sitemap) {
            $this->addUrl($sitemap, "/blog/{$blog->slug}", 0.7, $blog->updated_at);
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));
        Log::channel('cronjob')->info('Cronjob sitemap berjalan pada: ' . now());

        $this->info('Sitemap generated successfully at: ' . public_path('sitemap.xml'));
    }

    private function addUrl($sitemap, $url, $priority, $lastmod = null)
    {
        $sitemapUrl = Url::create($url)->setPriority($priority);
        if ($lastmod) {
            $sitemapUrl->setLastModificationDate($lastmod);
        }
        $sitemap->add($sitemapUrl);
    }
}