<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    use Uuid;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = ['provider'];
}
