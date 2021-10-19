<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "featured",
        "title",
        "url",
        "imageUrl",
        "newsSite",
        "summary",
        "publishedAt",
    ];

    protected $casts = [
        'featured' => 'boolean'
    ];

    protected $dates = [
        'publishedAt'
    ];

    public function launches()
    {
        return $this->belongsToMany(Launch::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
