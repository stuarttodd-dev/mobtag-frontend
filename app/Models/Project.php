<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
        'url',
        'footer_menu',
        'featured_1',
        'featured_2',
        'active',
        'technologies',
        'created_at',
        'updated_at',
    ];
}
