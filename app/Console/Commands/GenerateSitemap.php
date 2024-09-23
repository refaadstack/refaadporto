<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Portfolio;
use App\Models\Blog;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate {--force : Force update the sitemap}';
    protected $description = 'Generate new sitemap.xml';

    public function handle()
    {
        $this->info('Checking sitemap...');

        $sitemapPath = public_path('sitemap.xml');
        $forceUpdate = $this->option('force');

        if (!$forceUpdate && file_exists($sitemapPath) && $this->isSitemapUpToDate()) {
            $this->info('Sitemap is up to date. No changes needed.');
            return;
        }

        $this->info('Generating new sitemap...');

        // Buat instance sitemap baru
        $sitemap = Sitemap::create();

        // Tambahkan URL statis
        $sitemap->add(Url::create('/'))
                ->add(Url::create('/#about'))
                ->add(Url::create('/portfolios'))
                ->add(Url::create('/blog'))
                ->add(Url::create('/#contact'));

        // Tambahkan URL dinamis dari Portfolios
        Portfolio::all()->each(function (Portfolio $portfolio) use ($sitemap) {
            $sitemap->add(
                Url::create("/portfolios/{$portfolio->slug}")
                    ->setLastModificationDate($portfolio->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        });

        // Tambahkan URL dinamis dari Blog
        Blog::all()->each(function (Blog $blog) use ($sitemap) {
            $sitemap->add(
                Url::create("/blog/{$blog->slug}")
                    ->setLastModificationDate($blog->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.7)
            );
        });

        // Simpan sitemap ke file
        $sitemap->writeToFile($sitemapPath);

        $this->info('Sitemap generated successfully.');
    }

    private function isSitemapUpToDate()
    {
        $sitemapLastModified = filemtime(public_path('sitemap.xml'));
        $latestContentUpdate = max([
            $this->getLatestModelUpdate(Portfolio::class),
            $this->getLatestModelUpdate(Blog::class)
        ]);

        return $sitemapLastModified >= $latestContentUpdate;
    }

    private function getLatestModelUpdate($model)
    {
        return $model::max('updated_at')->timestamp ?? 0;
    }
}