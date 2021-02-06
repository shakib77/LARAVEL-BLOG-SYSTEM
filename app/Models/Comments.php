<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Posts class instance will refer to posts table in database
class Comments extends Model
{
    //comments table in database
    protected $guarded = [];
    // user who has commented

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'form_user');
    }

    // returns post of any comment
    public function post()
    {
        return $this->belongsTo('App\Models\Posts', 'on_post');
    }
}
