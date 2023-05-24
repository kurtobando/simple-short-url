<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortURL extends Model
{
    protected $table = 'short_url';

    protected $fillable = [
        'url',
        'url_short',
    ];
}
