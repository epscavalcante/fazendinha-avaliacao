<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $casts = [
        'featured' => 'boolean'
    ];

    protected $dates = [
        'publishedAt'
    ];

    public function lauches()
    {
        return $this->belongsToMany(Lauch::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
