<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'img',
        'short_description',
        'description',
        'order',
        'galery',
        'seo_title',
        'seo_description',
    ];

}
