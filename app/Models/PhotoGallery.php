<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;

    // protected $table = 'photo_galleries';

    protected $fillable = [
        'portfolio_id', 'blog_id', 'url', 'description',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

}
