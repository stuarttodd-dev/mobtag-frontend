<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'image',
        'slug',
        'title',
        'sub_title',
        'content',
        'featured',
        'active',
    ];
}
