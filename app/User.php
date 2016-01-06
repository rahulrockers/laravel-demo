<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    /**
     * Get the comments for the blog post.
     */
    public function phone()
    {
        return $this->hasOne('App\Phone');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
