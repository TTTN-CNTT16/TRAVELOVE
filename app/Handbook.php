<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handbook extends Model
{
    /**
     * @var string
     */
    protected $table = 'handbooks';

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
