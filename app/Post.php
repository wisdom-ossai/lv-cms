<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'content', 'img_url', 'published_at', 'category_id'];

    public function removeImage() {
        unlink('storage/' . $this->img_url);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}

