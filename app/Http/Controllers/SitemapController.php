<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Portfolio;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class SitemapController extends Controller
{
    public function index()
    {
        // Buat instance sitemap baru
        $sitemap = Sitemap::create();

        // Tambahkan URL statis
        $sitemap->add(Url::create('/'))
                ->add(Url::create('/#about'))
                ->add(Url::create('/portfolios'))
                ->add(Url::create('/blog'))
                ->add(Url::create('/#contact'));

        // Tambahkan URL dinamis dari Portfolios
        $portfolios = Portfolio::all();
        foreach ($portfolios as $portfolio) {
            $sitemap->add(
                Url::create("/portfolios/{$portfolio->slug}")
                    ->setLastModificationDate($portfolio->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        }

        // Tambahkan URL dinamis dari Blog
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $sitemap->add(
                Url::create("/blog/{$blog->slug}")
                    ->setLastModificationDate($blog->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.7)
            );
        }

        // Simpan sitemap ke file
        $sitemap->writeToFile(public_path('sitemap.xml'));

        // Baca file yang baru saja disimpan
        $sitemapContent = file_get_contents(public_path('sitemap.xml'));

        // Kembalikan konten sebagai response XML
        return response($sitemapContent, 200)
            ->header('Content-Type', 'text/xml');
    }
}


