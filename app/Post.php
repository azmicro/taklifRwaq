<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $primarykey="post_id";
    protected $fillable=['title', 'body'];
}
