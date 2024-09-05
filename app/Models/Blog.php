<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_data_id', 'title', 'content',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($portfolio) {
            if (Auth::check()) {
                $portfolio->personal_data_id = Auth::id(); // Set default to the current user's ID
            }
        });
    }

    public function personalData()
    {
        return $this->belongsTo(PersonalData::class, 'personal_data_id');
    }

    public function photoGalleries()
    {
        return $this->hasMany(PhotoGallery::class, 'blog_id');
    }

}
