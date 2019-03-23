<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Model\User\post','post_tags')->paginate(8);//set up the relationship between news and newstags
    }
    public function getRouteKeyName()//set up the route by slug
    {
        return 'slug';
    }
}
