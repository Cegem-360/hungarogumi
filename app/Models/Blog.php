<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'author',
        'categories',
        'tags',
        'yoast_head',
        'meta',
        'featured_media',
        'comment_status',
        'ping_status',
        'sticky',
        'template',
        'format',
        'status',
        'date',
        'date_gmt',
        'guid',
        'modified',
        'modified_gmt',
        'slug',
        'status',
        'type',
        'link',
        'title',
        'content',
        'excerpt',
    ];

}
