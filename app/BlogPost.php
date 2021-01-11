<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = ['title', 'body', 'id', 'user_id'];

    function author() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
