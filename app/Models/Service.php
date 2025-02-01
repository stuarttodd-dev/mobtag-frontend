<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'title',
        'sub_title',
        'keywords',
        'background',
        'slug',
        'image',
        'short_desc',
        'long_desc',
        'content',
        'url',
        'footer_menu',
        'active',
        'created_at',
        'updated_at',
    ];
}
