<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'email', 'comment', 'post_id'];

    public function user()
    {
        return $this->belongsTo(Post::class);
    }
}
