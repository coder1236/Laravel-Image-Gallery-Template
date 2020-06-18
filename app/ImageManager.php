<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageManager extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'email', 'title', 'realimage_path','optimage_path', 'realimage_url','optimage_url','scores','is_inappropriated', 'uploader'
    ];
}

