<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;

    protected $table = 'personal_data';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'linkedin', 'website', 'phone', 'birth_date',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }
}
