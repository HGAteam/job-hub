<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'shop_template',
        'meta_tag_title',
        'meta_tag_description',
        'meta_tag_keywords',
        'automation'
    ];

    // Relations

}
