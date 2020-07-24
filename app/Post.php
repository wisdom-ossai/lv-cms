<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'content', 'img_url', 'published_at'];

    public function removeImage() {
        Storage::delete($this->img_url);
    }
}

