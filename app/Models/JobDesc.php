<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDesc extends Model
{
    use HasFactory;

    protected $fillable = [
        'experience_id', 'description',
    ];

    public function experience()
    {
        return $this->belongsTo(Experience::class, 'experience_id');
    }
}
