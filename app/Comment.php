<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * @var string
     */
    protected $table = 'comments';

    /**
     * Get the user that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the handbook that owns the comment.
     */
    public function handbook()
    {
        return $this->belongsTo('App\Handbook');
    }
}
